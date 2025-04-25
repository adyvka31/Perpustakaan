<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    // Menampilkan dashboard $ daftar buku
    public function index(Request $request) 
    {
        // Check if this is a form submission (POST request)
        if ($request->isMethod('post')) {
           // Handle the form submission (call your store logic)
            return $this->store($request);
        }
    
        // Display the page with all books
        $books = Book::all();
        return view('index', compact('books'));
    }

    public function mybook()
    {
        $books = Book::all(); // Ambil semua data buku dari database
        return view('mybook', compact('books'));
    }


    // Menampilkan form untuk membuat buku baru
    public function create()
    {
        return view('page.create');
    }

    // Menampilkan form untuk mengedit buku
    public function edit(Book $book)
    {
        return view('page.edit', compact('book'));
    }


    // Menampilkan detail buku
    public function detail(Book $book)
    {
        return view('page.detail', compact('book'));
    }

    // Menyimpan buku baru ke database
    public function store(Request $request)
    {
        // Validasi Input
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'date' => 'required|string',
            'isbn' => 'required|string|unique:books,isbn',
            'description' => 'nullable|string',
            'quantity' => 'required|integer|min:0',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
    ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Ambil data kecuali file
        $bookData = $request->except('cover_image');

        // Simpan file cover_image jika ada
        if ($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('cover_images', 'public');
           $bookData['cover_image'] = $path;
        }

        // Simpan ke database
        Book::create($bookData);

        return redirect()->route('index')->with('success', 'Buku berhasil ditambahkan');
    }  
    
    public function update(Request $request, Book $book)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'date' => 'required|string',
            'isbn' => 'required|string|unique:books,isbn,' . $book->id,
            'description' => 'nullable|string',
            'quantity' => 'required|integer|min:0',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240'
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        // Update buku
        $book->update($request->all());
        
        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil diperbarui!');
    }

    /**
     * Menghapus buku dari database
     */
    public function destroy(Book $book)
    {
        $book->delete();
        
        return redirect()->route('index')
            ->with('success', 'Buku berhasil dihapus!');
    }
    
}
