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

</head>
<body class="h-screen bg-gray-100">

    <header>
        @include('partials.navbar')
    </header>
        
    <main>
        @yield('content')
    </main>
    
    {{-- @include('partials.footer') --}}
    {{-- @livewireStyles --}}
    
</body>
</html>