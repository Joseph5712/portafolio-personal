<div id="about" class="max-w-6xl mx-auto px-8 sm:px-16 py-24 text-slate-300 bg-[#0a192f]">
  <div class="grid md:grid-cols-12 gap-8">
    <!-- Texto -->
    <div class="md:col-span-7">
      <div class="flex items-center space-x-3 mb-6">
        <span class="text-green-400 font-mono text-sm">01.</span>
        <h2 class="text-2xl font-bold text-slate-200">Sobre Mí</h2>
        <div class="flex-grow border-t border-slate-700"></div>
      </div>

      <p class="mb-4">
        ¡Hola! Soy Joseph y disfruto crear cosas que viven en internet.
        Mi interés por el desarrollo web comenzó en 2021 cuando empecé a crear sitios para proyectos académicos en la universidad.
      </p>

      <p class="mb-4">
        Hoy en día, me enfoco en construir productos digitales accesibles, rápidos y modernos,
        tanto en el frontend como en el backend.
      </p>

      <p class="mb-6">Aquí hay algunas tecnologías con las que he estado trabajando recientemente:</p>

      <div class="grid grid-cols-2 gap-x-8 text-sm font-mono text-green-400">
        <ul class="space-y-1 list-disc list-inside">
          <li>JavaScript (ES6+)</li>
          <li>Laravel</li>
          <li>PHP</li>
        </ul>
        <ul class="space-y-1 list-disc list-inside">
          <li>React</li>
          <li>TailwindCSS</li>
          <li>MySQL</li>
        </ul>
      </div>
    </div>

    <!-- Imagen -->
    <div class="md:col-span-5 flex justify-center">
      <div class="relative group w-[250px]">
        <div class="absolute inset-0 border-2 border-green-400 translate-x-2 translate-y-2 group-hover:translate-x-3 group-hover:translate-y-3 transition-transform duration-300 rounded" aria-hidden="true"></div>
        <img src="{{ asset('images/joseph-profile.jpg') }}" alt="Foto de Joseph" class="relative z-10 rounded shadow-lg" />
      </div>
    </div>
  </div>
</div>
