<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PORTAFOLIO</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Flowbite CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    {{-- @livewireStyles --}}
    {{-- @livewireScripts --}}
    {{-- <script src="https://unpkg.com/livewire-v2"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</head>
<body class="h-screen bg-black-100">

    <header>
        @include('partials.navbar')
    </header>
        
    <main>
        @yield('content')
    </main>
    
    {{-- @include('partials.footer') --}}
    {{-- @livewireStyles --}}
    <footer class="bg-gray-200 dark:bg-gray-900">
        @include('partials.footer')
    </footer >
    
    

</body>
</html>