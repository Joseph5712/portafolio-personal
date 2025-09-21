<!-- Navbar Alpine Wrapper -->
<div x-data="{ open: false }" class="bg-[#0a192f] text-white fixed w-full z-50 shadow-md">

  <!-- Contenedor principal -->
  <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
    <!-- Logo -->
    <a href="#inicio" class="flex items-center space-x-2">
      <img src="https://img.icons8.com/3d-fluency/94/source-code.png" class="h-8" alt="Logo" />
      <span class="text-xl font-semibold">Portafolio Joseph Mendez Manzanares</span>
    </a>

    <!-- Botón hamburguesa (solo móvil) -->
    <button @click="open = true" class="md:hidden">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
           stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

    <!-- Menú horizontal (pantallas grandes) -->
    <ul class="hidden md:flex space-x-8 text-sm font-medium">
  <li>
    <a href="#inicio" class="inline-flex items-center gap-1 hover:text-green-400">
      <span class="text-green-400 font-mono text-sm">01.</span>
      <span class="font-medium">Inicio</span>
    </a>
  </li>
  <li>
    <a href="#sobremi" class="inline-flex items-center gap-1 hover:text-green-400">
      <span class="text-green-400 font-mono text-sm">02.</span>
      <span class="font-medium">Sobre Mí</span>
    </a>
  </li>
  <li>
    <a href="#technologies" class="inline-flex items-center gap-1 hover:text-green-400">
      <span class="text-green-400 font-mono text-sm">03.</span>
      <span class="font-medium">Tecnologías</span>
    </a>
  </li>
  <li>
    <a href="#github" class="inline-flex items-center gap-1 hover:text-green-400">
      <span class="text-green-400 font-mono text-sm">04.</span>
      <span class="font-medium">GitHub</span>
    </a>
  </li>
  <li>
    <a href="#contacto" class="inline-flex items-center gap-1 hover:text-green-400">
      <span class="text-green-400 font-mono text-sm">05.</span>
      <span class="font-medium">Contacto</span>
    </a>
  </li>
</ul>


  </div>

  <!-- Overlay oscuro -->
  <div x-show="open" @click="open = false"
       class="fixed inset-0 bg-black bg-opacity-50 md:hidden"
       x-transition.opacity></div>

  <!-- Menú lateral responsive -->
  <div x-show="open" x-transition
       class="fixed top-0 right-0 w-3/4 h-full bg-[#0f172a] text-white flex flex-col items-center justify-center space-y-6 p-6 md:hidden z-50">

    <!-- Botón cerrar -->
    <button @click="open = false" class="absolute top-4 right-4 text-green-400 hover:text-white">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
           stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>

    <!-- Enlaces móviles -->
    <nav class="flex flex-col items-center space-y-4 text-lg">
      <a href="#inicio" @click="open = false" class="hover:text-green-400"><span class="text-green-400">01.</span> Inicio</a>
      <a href="#sobremi" @click="open = false" class="hover:text-green-400"><span class="text-green-400">02.</span> Sobre Mí</a>
      <a href="#proyectos" @click="open = false" class="hover:text-green-400"><span class="text-green-400">03.</span> Proyectos</a>
      <a href="#tecnologias" @click="open = false" class="hover:text-green-400"><span class="text-green-400">04.</span> Tecnologías</a>
      <a href="#contacto" @click="open = false" class="hover:text-green-400"><span class="text-green-400">05.</span> Contacto</a>
    </nav>

    <!-- Botón de CV -->
    <a href="#contacto" @click="open = false"
       class="border border-green-400 text-green-400 px-4 py-2 rounded hover:bg-green-400 hover:text-black transition">
      Contacto
    </a>
  </div>
</div>
