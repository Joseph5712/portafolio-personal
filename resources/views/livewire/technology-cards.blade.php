<div id="stack" class="py-24 px-6 sm:px-20 bg-[#0a192f] text-slate-300">
    <div class="text-center mb-12">
        <h3 class="text-green-400 font-mono text-sm">Tecnologías que domino</h3>
        <h2 class="text-4xl sm:text-5xl font-bold text-slate-200">Mi Stack Tecnológico</h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach ($tecnologies as $tech)
            <div class="bg-gradient-to-br from-[#0f1f3a] to-[#0c172a] border border-slate-700 rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300 min-h-[300px] flex flex-col justify-between text-center p-6">
                <div class="flex justify-center items-center mb-4">
                    <img class="w-16 h-16 object-contain" src="{{ $tech->icon_url }}" alt="{{ $tech->name }}">
                </div>
                <div class="flex-1 flex flex-col justify-center">
                    <h3 class="text-lg font-bold text-slate-100 mb-1">{{ $tech['name'] }}</h3>
                    <p class="text-sm text-slate-400">{{ $tech['description'] }}</p>
                </div>
                <p class="text-green-400 font-mono text-sm mt-4">Nivel de experiencia {{ $tech['skill_level'] }} </p>
            </div>
        @endforeach
    </div>

    <div class="mt-12 flex justify-center">
        {{ $tecnologies->onEachSide(1)->links(data: ['scrollTo' => false]) }}
    </div>
</div>
