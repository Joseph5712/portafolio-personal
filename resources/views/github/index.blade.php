<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <h2 class="text-center text-3xl font-semibold text-white mb-8">Otros proyectos destacables</h2>

    <div
        id="repo-grid"
        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 justify-items-center"
    >
        @foreach ($repos as $index => $repo)
            <div class="repo-card w-full max-w-[300px] bg-[#112240] p-6 rounded-lg shadow-md hover:shadow-lg transition hidden">
                <div class="flex justify-between items-start">
                    <!-- Folder Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 7a1 1 0 011-1h4l2 2h8a1 1 0 011 1v9a1 1 0 01-1 1H4a1 1 0 01-1-1V7z"/>
                    </svg>

                    <!-- GitHub link icon -->
                    <a href="{{ $repo['html_url'] }}" target="_blank" title="Ver en GitHub"
                       class="hover:text-green-400 text-slate-400 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M14 3h7v7m0 0L10 21l-7-7 11-11z"/>
                        </svg>
                    </a>
                </div>

                <h3 class="text-white text-lg font-bold mt-4 mb-2">{{ $repo['name'] }}</h3>
                <p class="text-gray-400 text-sm mb-4">
                    {{ $repo['description'] ?? 'Sin descripción disponible.' }}
                </p>

                <div class="text-xs text-gray-500 flex flex-wrap gap-2">
                    <span>{{ $repo['language'] ?? 'N/A' }}</span>
                    <span class="flex items-center gap-1">
                        ⭐ {{ $repo['stargazers_count'] }}
                    </span>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Botón Mostrar Más / Mostrar Menos -->
    <div class="mt-10 text-center">
        <button
            id="toggleButton"
            class="px-6 py-2 border border-green-400 text-green-400 hover:bg-green-400 hover:text-[#112240] transition rounded"
        >
            Mostrar más
        </button>
    </div>
</section>
