<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PORTAFOLIO</title>
    <link rel="shortcut icon" href="https://img.icons8.com/3d-fluency/94/source-code.png" type="image/x-icon">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Flowbite CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- Dentro de master.blade.php -->
    {{-- <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script> --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script> --}}

</head>
<body class="h-screen bg-[#0a192f]">
    
    <header>
        @include('partials.navbar')
    </header>
        
    <main>
        @yield('content')
    </main>
    
    <footer class="bg-[#0d203c] py-10 text-center text-slate-400 shadow-[inset_0_8px_16px_-8px_rgba(0,0,0,0.5)] animate-fade-up duration-700"
            id="footer">
        @include('partials.footer')
    </footer >
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</body>
</html>