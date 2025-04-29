<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet">
</head>
<body>
    @include('layout.sidebar')

    <form action="{{ route('index') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="px-[500px] -ml-[340px] pt-12">
            <div class="space-y-12">
                <div class="pb-12">
                  <h2 class="text-5xl font-semibold text-gray-900 mb-4">Create Your Own Book</h2>
                  <p class="text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
            
                <div class="">
                  <div class="mt-12 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
    
                    <div class="col-span-1">
                      <label for="title" class="block text-sm/6 font-medium text-gray-900">Book Title</label>
                      <div class="mt-2">
                        <input type="text" name="title" id="title" value="{{ old('title') }}" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        @error('title')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
            
                    <div class="col-span-1">
                      <label for="author" class="block text-sm/6 font-medium text-gray-900">Author</label>
                      <div class="mt-2">
                        <input type="text" name="author" id="author" value="{{ old('author') }}" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        @error('author')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
            
                    <div class="col-span-1">
                      <label for="publisher" class="block text-sm/6 font-medium text-gray-900">Publisher</label>
                      <div class="mt-2">
                        <input id="publisher" name="publisher" type="text" value="{{ old('publisher') }}" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        @error('publisher')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
    
                    <div class="col-span-1">
                        <label for="isbn" class="block text-sm/6 font-medium text-gray-900">ISBN</label>
                        <div class="mt-2">
                          <input type="text" name="isbn" id="isbn" value="{{ old('isbn') }}" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                          @error('isbn')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                          @enderror
                        </div>
                    </div>
            
                    <div class="col-span-1">
                        <label for="date" class="block text-sm/6 font-medium text-gray-900">Date</label>
                        <div class="mt-2">
                          <input id="date" name="date" type="date" value="{{ old('date', date('Y')) }}" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                          @error('date')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                          @enderror
                        </div>
                    </div>
            
                    <div class="col-span-1">
                      <label for="quantity" class="block text-sm/6 font-medium text-gray-900">Stock</label>
                      <div class="mt-2">
                        <input type="number" name="quantity" id="quantity" value="{{ old('quantity', 1) }}" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        @error('quantity')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
            
                    <div class="col-span-3">
                        <label for="description" class="block text-sm/6 font-medium text-gray-900">Description</label>
                        <div class="mt-2">
                          <textarea name="description" id="description" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ old('description') }}</textarea>
                          @error('description')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                          @enderror
                        </div>
                    </div>

                    <div class="col-span-3">
                      <label for="cover_image" class="block text-sm/6 font-medium text-gray-900">Cover Book</label>
                      <div class="mt-2">
                        <input type="file" name="cover_image" id="cover_image" value="{{ old('cover_image', 1) }}" class="block w-full rounded-md bg-white px-6 py-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        @error('cover_image')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-span-3">
                      <label for="type" class="block text-sm/6 font-medium text-gray-900">Type of Book</label>
                      <div class="mt-2">
                        <select name="" id="">
                          <option value="">Productivity</option>
                          <option value="">Horor</option>
                          <option value="">Romance</option>
                          <option value="">Science Fiction</option>
                          <option value="">History</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="flex items-center gap-x-4 mt-6 px-4 md:px-10">
          <a href="{{ '/' }}">
            <button type="button" class="text-black hover:text-white border-2 border-gray-900 hover:bg-gray-900 font-medium rounded-lg text-sm px-8 py-2.5 me-2 mb-2 duration-200">Close</button>
          </a>
          <button type="submit" class="text-white bg-gray-900 hover:bg-gray-950 font-medium rounded-lg text-sm px-8 py-3 mb-2">Save</button>
        </div>
      </form>
</body>
</html>