<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet">
</head>
<body>
    {{-- Navbar --}}
    @include('layout.navbar')

    {{-- Sidebar --}}
    @include('layout.sidebar')

    {{-- Layout --}}
    @yield('content')

    {{-- Footer --}}
    @include('layout.footer')
</body>
</html>