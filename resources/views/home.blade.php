{{-- home.blade.php --}}
@extends('layouts.master')

@section('content')
        {{-- Banner de bienvenida --}}
    <section id="hero" class="min-h-screen flex flex-col justify-center items-start px-8 sm:px-24 bg-[#0a192f] text-left">
    <h2 class="text-green-400 text-sm sm:text-base font-mono mb-2 animate-fade-in delay-100">
        Hi, my name is
    </h2>

    <h1 class="text-4xl sm:text-6xl font-bold text-slate-100 leading-tight animate-fade-in delay-200">
        Joseph Mendez Manzanares.
    </h1>

    <h2 class="text-4xl sm:text-6xl font-bold text-slate-400 mb-6 animate-fade-in delay-300">
        I build things for the web.
    </h2>

    <p class="text-slate-400 max-w-xl animate-fade-in delay-500">
        Soy un desarrollador web especializado en construir experiencias digitales de alto impacto, accesibles y centradas en el usuario.
        Actualmente enfocado en desarrollo backend y frontend con tecnologías modernas.
    </p>

    <a href="#projects" class="mt-8 inline-block border border-green-400 text-green-400 px-6 py-3 rounded hover:bg-green-400 hover:text-[#0a192f] transition-colors duration-300 animate-fade-in delay-700">
        Ver proyectos
    </a>
    </section>
    <section>
        @include('about-me')
    </section>
    <section>
        @include('projects.index')
    </section>

    <section class="py-16 px-4 sm:px-12 bg-[#0a192f] text-white">
        @include('technologies.index')
    </section>

    <section>
        @include('github.index')
    </section>

    <section>
        @include('contact')
    </section>
@endsection