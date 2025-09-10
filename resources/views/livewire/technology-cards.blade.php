<div class="container px-5 py-24 mx-auto">
    <div class="text-center mb-12">
        <h5 class="text-base md:text-lg text-indigo-700 mb-1">Tecnologías que domino</h5>
        <h1 class="text-4xl md:text-6xl text-gray-700 font-semibold">Mi Stack Tecnológico</h1>
    </div>

    <div class="flex flex-wrap -m-4">
    @foreach ($tecnologies as $technology)
        <div class="p-4 sm:w-1/2 lg:w-1/3">
    <div class="card-tecnologia">
        <div class="card-tecnologia-header">
            <img class="h-16" src="{{ $technology->icon_url }}" alt="{{ $technology->name }}">
        </div>
        <div class="card-tecnologia-body">
            <div>
                <h2 class="text-sm font-medium text-indigo-500 mb-1">
                    {{ $technology->experience_years }} año{{ $technology->experience_years > 1 ? 's' : '' }} de experiencia
                </h2>
                <h1 class="card-tecnologia-title">{{ $technology->name }}</h1>
                <p class="card-tecnologia-texto">{{ $technology->description }}</p>
            </div>
        </div>
    </div>
</div>
    @endforeach
</div>

    <div class="mt-12">
        {{ $tecnologies->links() }}
    </div>
</div>
