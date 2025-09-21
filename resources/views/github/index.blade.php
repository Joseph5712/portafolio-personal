<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <h2 class="text-center text-3xl font-semibold text-white mb-8">Otros proyectos destacables</h2>

    <div
        id="repo-grid"
        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-5 md:gap-6 xl:gap-8"
    >
        @foreach ($repos as $repo)
            <div class="repo-card bg-[#112240] border border-[#233554] rounded-lg p-5 shadow-md hover:shadow-lg text-white h-[300px] flex flex-col justify-between transition-all duration-300">
                <div>
                    <div class="flex justify-between items-start mb-4">
                        <!-- Folder Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7a1 1 0 011-1h4l2 2h8a1 1 0 011 1v9a1 1 0 01-1 1H4a1 1 0 01-1-1V7z" />
                        </svg>

                        <!-- GitHub link icon -->
                        <a href="{{ $repo['html_url'] }}" target="_blank">
                            <svg class="h-5 w-5 text-slate-400 hover:text-green-400" fill="none" stroke="currentColor"
                                 stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M14 3h7v7m0 0L10 21l-7-7 11-11z"/>
                            </svg>
                        </a>
                    </div>

                    <!-- Nombre del repo -->
                    <h3 class="text-lg font-semibold mb-2 line-clamp-1">{{ $repo['name'] }}</h3>

                    <!-- Descripción -->
                    <p class="text-sm text-slate-300 mb-4 line-clamp-3">
                        {{ $repo['description'] ?? 'Sin descripción disponible.' }}
                    </p>
                </div>

                <!-- Lenguaje y estrellas -->
                <div class="flex justify-between text-xs text-slate-400">
                    <span>{{ $repo['language'] ?? 'N/A' }}</span>
                    <span class="text-yellow-400 flex items-center gap-1">
                        <i class="ri-star-fill"></i> {{ $repo['stargazers_count'] }}
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
</div>
