@extends('layout.app')

@section('title', 'Perpustakaan')

@section('content')

<div class="overflow-hidden py-24 -ml-[380px]">
  <div style="z-index: -100; position: absolute;
  inset: 0;
  background-color: white;
  background-image:
    linear-gradient(to right, rgba(0, 0, 0, 0.08) 1px, transparent 1px),
    linear-gradient(to bottom, rgba(0, 0, 0, 0.08) 1px, transparent 1px);
  background-size: 40px 40px;
  mask-image: linear-gradient(to bottom, white, transparent, white);
  -webkit-mask-image: linear-gradient(to bottom, white, transparent, white);">
  </div>
  <div style="position: absolute;
            left: 0;
            right: 0;
            z-index: -10;
            transform: translateZ(0);
            overflow: hidden;
            filter: blur(40px);" aria-hidden="true">
    <div style="position: relative;
            left: calc(50% - 11rem);
            aspect-ratio: 1155/678;
            width: 36.125rem;
            transform: translateX(-50%) rotate(30deg);
            background: linear-gradient(to top right, #ff80b5, #9089fc);
            opacity: 0.1;
            clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%);"></div>
  </div>
  <div class="mx-auto z-10">
    <div class="mx-auto grid max-w-3xl grid-cols-1 gap-y-16 sm:gap-y-20 lg:mx-0 lg:grid-cols-2">
      <div class="pt-4">
        <div class="">
          <a href="#" class="flex items-center space-x-2 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-base font-semibold whitespace-nowrap text-black">Flowbite</span>
        </a>
          <p class="mt-8 text-6xl font-semibold tracking-wide leading-20 text-pretty text-black">Discover New Worlds in Every Page</p>
          <p class="mt-10 text-sm leading-relaxed text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</p>
          <a href="#readbook">
          <button type="button" class="mt-10 text-white bg-gray-900 hover:bg-gray-950 font-medium rounded-lg text-md px-8 py-3 me-2 mb-2">Read Book</button>
          </a>
          <a href="{{ '/mybook' }}">
          <button type="button" class="mt-8 ml-2 text-black hover:text-white border-2 border-gray-900 hover:bg-gray-900 font-medium rounded-lg text-md px-8 py-2.5 me-2 mb-2 duration-200">Your Book</button>
          </a>
        </div>
      </div>
      <img src="https://tailwindcss.com/plus-assets/img/component-images/dark-project-app-screenshot.png" alt="Product screenshot" class="max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 w-[57rem] ml-96" width="2432" height="1442">
    </div>
  </div>
</div>

<div class="ml-[100px]" id="readbook">
  <main class="mx-auto px-24 py-24">
    <div class="text-center mb-14">
      <h1 class="text-5xl font-bold text-gray-900 mb-4">Read Your Fav Book</h1>
      <p class="text-sm text-gray-600">Learn how to grow your business with our expert advice.</p>
    </div>

    <div class="mb-18 space-x-4 flex justify-center flex-wrap gap-1 fadeinup2">
      <button
        class="px-6 py-2 border-2 border-solid border-gray-900 hover:bg-gray-900 hover:text-white duration-200 text-md rounded-xl"
      >
        Productivity
      </button>
      <button
        class="px-6 py-2 border-2 border-solid border-gray-900 hover:bg-gray-900 hover:text-white duration-200 text-md rounded-xl"
      >
        Horror
      </button>
      <button
        class="px-6 py-2 border-2 border-solid border-gray-900 hover:bg-gray-900 hover:text-white duration-200 text-md rounded-xl"
      >
        Romance
      </button>
      <button
        class="px-6 py-2 border-2 border-solid border-gray-900 hover:bg-gray-900 hover:text-white duration-200 text-md rounded-xl"
      >
        Science Fiction
      </button>
      <button
        class="px-6 py-2 border-2 border-solid border-gray-900 hover:bg-gray-900 hover:text-white duration-200 text-md rounded-xl"
      >
        History
      </button>
    </div>
  
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12">
      <!-- Card 1 -->
      <div class="rounded-lg overflow-hidden shadow-lg">
        <a href="" class="block relative h-[450px]">
          <div class="absolute inset-0">
            <img src="https://i.pinimg.com/736x/20/d1/a6/20d1a65703a999cd0b39f87d7bb41c1d.jpg" alt="Workspace desk setup" class="w-full h-full object-cover border-2 border-black rounded-lg"/>
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex flex-col justify-end p-6">
            <div class="flex items-center mb-2 text-sm text-gray-300">
              <span>Oct 16, 2018</span>
              <span class="mx-2">•</span>
              <div class="flex items-center">
                <span>James Clear</span>
              </div>
            </div>
            <h2 class="text-xl font-semibold mb-3 text-white">Atomic Habits</h2>
          </div>
        </a>
      </div>
  
      <!-- Card 2 -->
      <div class="rounded-lg overflow-hidden shadow-lg">
        <a href="#" class="block relative h-[450px]">
          <div class="absolute inset-0">
            <img src="https://i.pinimg.com/736x/9c/c6/ae/9cc6ae6347ab896525cb55c872bd07c7.jpg" alt="Desk with laptop and window view" class="w-full h-full object-cover border-2 border-black rounded-lg"/>
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex flex-col justify-end p-6">
            <div class="flex items-center mb-2 text-sm text-gray-300">
              <span>Sep 8, 2020</span>
              <span class="mx-2">•</span>
              <div class="flex items-center">
                <span>Morgan Housel</span>
              </div>
            </div>
            <h2 class="text-xl font-semibold mb-3 text-white">Psychology of Money</h2>
          </div>
        </a>
      </div>
  
      <!-- Card 3 -->
      <div class="rounded-lg overflow-hidden shadow-lg">
        <a href="#" class="block relative h-[450px]">
          <div class="absolute inset-0">
            <img src="https://i.pinimg.com/736x/c1/e9/87/c1e987cdf166ec9d0fc21df8e4caa23a.jpg" alt="iMac on desk" class="w-full h-full object-cover border-2 border-black rounded-lg"/>
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex flex-col justify-end p-6">
            <div class="flex items-center mb-2 text-sm text-gray-300">
              <span>Oct 3, 2023</span>
              <span class="mx-2">•</span>
              <div class="flex items-center">
                <span>Shane Parrish</span>
              </div>
            </div>
            <h2 class="text-xl font-semibold mb-3 text-white">Clear Thinking</h2>
          </div>
        </a>
      </div>
      <!-- Card 4, 5, 6 dan seterusnya -->
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
  <a href="{{ route('book.create') }}">
    <button type="button" class="flex item-center mx-auto mt-8 text-white bg-gray-900 hover:bg-gray-950 font-medium rounded-lg text-md px-8 py-3 me-2 mb-2">Add Book</button>
    </a>
</div>

<div class="ml-[100px]">
  <div class="mx-auto px-24 py-24 pb-48">
    <div style="position: absolute;
            left: 0;
            right: 0;
            z-index: -10;
            transform: translateZ(0);
            overflow: hidden;
            padding-left: 9rem;
            padding-right: 9rem;
            filter: blur(50px);" aria-hidden="true">
    <div style="margin-left: auto;
            margin-right: auto;
            width: 72.1875rem;
            aspect-ratio: 1155/678;
            background: linear-gradient(to top right, #ff80b5, #9089fc);
            opacity: 0.1;
            clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%);"></div>
  </div>
    <div class="text-center mb-16 z-10">
      <h1 class="text-5xl font-bold text-gray-900 mb-4">Meet Our Author</h1>
      <p class="text-sm text-gray-600">Learn how to grow your business with our expert advice.</p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 -m-2 z-10">
      <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
          <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://leaders.com/wp-content/uploads/2023/02/Database-bio-profile-pic-28.png">
          <div class="flex-grow">
            <h2 class="text-gray-900 title-font font-medium">James Clear</h2>
            <p class="text-gray-500">Writer</p>
          </div>
        </div>
      </div>
      <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
          <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTihEhzeGs198o7wKp13bxKDG8ToOFTU1oddn59hr9Xp7qksOgu">
          <div class="flex-grow">
            <h2 class="text-gray-900 title-font font-medium">Morgan Housel</h2>
            <p class="text-gray-500">Columnist</p>
          </div>
        </div>
      </div>
      <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
          <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-top flex-shrink-0 rounded-full mr-4" src="https://images.squarespace-cdn.com/content/v1/549186e1e4b0100b1cc9ab52/1510830127335-02N8BTZ5TU8L63T0COI6/shane-parrish.jpg">
          <div class="flex-grow">
            <h2 class="text-gray-900 title-font font-medium">Shane Parrish</h2>
            <p class="text-gray-500">Author</p>
          </div>
        </div>
      </div>
      {{-- <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
          <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/90x90">
          <div class="flex-grow">
            <h2 class="text-gray-900 title-font font-medium">John Doe</h2>
            <p class="text-gray-500">DevOps</p>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
</div>
@endsection