@extends('layout.app')

@section('title', 'Perpustakaan')

@section('content')
<section class="text-gray-600 body-font overflow-hidden">
    <div class="pt-24 px-8 mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-row">
        <img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->title }}" class="w-[400px] h-[300px] object-cover object-center rounded" src="https://dummyimage.com/400x400">
        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
          <h2 class="text-sm title-font text-gray-500 tracking-widest mb-1">NOVEL</h2>
          <h1 class="text-gray-900 text-3xl title-font font-medium">{{ $book->title }}</h1>
          <p class="w-2/3 leading-relaxed mt-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, voluptatem voluptatum. At commodi obcaecati quidem amet, eveniet odio maiores? Autem tempore perspiciatis nulla laudantium. Similique ex incidunt rem, aperiam, vel laudantium totam qui perspiciatis suscipit illum tenetur dolores quia fugit.</p>
          <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
            <div class="flex items-center">
              <span class="mr-3">Stock</span>
              <div class="relative">
                <p>{{ $book->quantity }}</p>
              </div>
            </div>
          </div>
          <div class="flex">
            <a href="#readbook">
                <button type="button" class="text-white bg-gray-900 hover:bg-gray-950 font-medium rounded-lg text-md px-8 py-3 me-2 mb-2">Read Book</button>
                </a>
                <a href="{{ '/' }}">
                <button type="button" class="ml-2 text-black hover:text-white border-2 border-gray-900 hover:bg-gray-900 font-medium rounded-lg text-md px-8 py-2.5 me-2 mb-2 duration-200">Buy Book</button>
                </a>
            <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
