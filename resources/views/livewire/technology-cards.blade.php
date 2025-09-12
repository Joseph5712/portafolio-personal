
<div id="stack" class="py-24 px-6 sm:px-20 bg-[#0a192f] text-slate-300" >
    <div class="text-center mb-12">
        <h3 class="text-green-400 font-mono text-sm">Tecnologías que domino</h3>
        <h2 class="text-4xl sm:text-5xl font-bold text-slate-200">Mi Stack Tecnológico</h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach ($tecnologies as $tech)
            <div class="bg-[#0f1f3a] border border-slate-700 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                <div class="bg-slate-950 flex justify-center items-center py-6">
                    <img class="w-16 h-16 object-contain" src="{{ $tech->icon_url }}" alt="{{ $tech->name }}">
                </div>
                <div class="p-6">
                    <p class="text-green-400 text-sm mb-2 font-mono">{{ $tech['experience'] }}</p>
                    <h3 class="text-lg font-semibold text-slate-200 mb-1">{{ $tech['name'] }}</h3>
                    <p class="text-sm text-slate-400">{{ $tech['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-12 flex justify-center">
        {{ $tecnologies->links(data: ['scrollTo' => false]) }}
    </div>
</div>