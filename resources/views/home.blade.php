{{-- home.blade.php --}}
@extends('layouts.master')

@section('content')
        {{-- Banner de bienvenida --}}
    <section class="text-center py-8">
        {{-- imagen de mi person --}}
        {{-- <img src="{{ asset('build/Logo.png') }}" alt="Logo" class="mx-auto w-24 h-24 rounded-full mb-4"> --}}
        <h1 class="text-3xl font-bold mb-2">Hola, soy Joseph Mendez Manzanares</h1>
        <p class="text-lg text-gray-600">Desarrollador Web | Backend & Frontend</p>
    </section>
    <section class="md:h-full flex items-center text-gray-600">
        @include('technologies.index')
    </section>

    <section>
        @include('projects.index')
    </section>

    <section>
        @include('github.index')
    </section>

    <section>
        @include('contact')
    </section>

    <footer>
        @include('partials.footer')
    </footer>
@endsection