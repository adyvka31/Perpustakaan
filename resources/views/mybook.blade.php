@extends('layout.app')

@section('title', 'Perpustakaan')

@section('content')


<div class="relative overflow-x-auto px-32 ml-8 mt-24 mb-56">
    <table class="w-full text-sm text-left rtl:text-right">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Judul
                </th>
                <th scope="col" class="px-6 py-3">
                    Penulis
                </th>
                <th scope="col" class="px-6 py-3">
                    Penerbit
                </th>
                <th scope="col" class="px-6 py-3">
                    Tahun
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $books as $book )
            <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $book->title }}
                </th>
                <td class="px-6 py-4">
                    {{ $book->author }}
                </td>
                <td class="px-6 py-4">
                    {{ $book->publisher }}
                </td>
                <td class="px-6 py-4">
                    {{ $book->date }}
                </td>
                <td class="px-6 flex">
                        <a href="{{ route('book.detail', $book) }}">
                            <button type="button" class="focus:outline-none mt-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Detail</button>
                        </a>
                        <a href="{{ route('book.edit', $book) }}">
                            <button type="button" class="focus:outline-none mt-2.5 mx-1 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</button>
                        </a>
                        <form action="{{ route('book.destroy', $book) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="focus:outline-none mt-2.5 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Delete</button>
                        </form>                        
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12 mt-18">
        @foreach ($books as $book)
        <div class="rounded-lg overflow-hidden shadow-lg">
          <a href="{{ route('book.detail', $book) }}" class="block relative h-[450px]">
            <div class="absolute inset-0">
              @if ($book->cover_image)
                <img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->title }}" class="w-full h-full object-cover border-2 border-black rounded-lg"/>
              @else
                <img src="{{ asset('path/to/default/image.jpg') }}" alt="{{ $book->title }}" class="w-full h-full object-cover border-2 border-black rounded-lg"/>
              @endif
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex flex-col justify-end p-6">
            <div class="flex items-center mb-2 text-sm text-gray-300">
                <span>{{ $book->date }}</span>
                <span class="mx-2">•</span>
                <div class="flex items-center">
                    <span>{{ $book->author }}</span>
                </div>
            </div>
            <h2 class="text-xl font-semibold mb-3 text-white">{{ $book->title }}</h2>
          </div>
          </a>
        </div>
        @endforeach
      </div>
</div>

@endsection