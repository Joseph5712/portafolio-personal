<div class="container px-5 py-24 mx-auto">
    <div class="text-center mb-12">
        <h5 class="text-base md:text-lg text-indigo-700 mb-1">Tecnologías que domino</h5>
        <h1 class="text-4xl md:text-6xl text-gray-700 font-semibold">Mi Stack Tecnológico</h1>
    </div>

    <div class="flex flex-wrap -m-4">
    @foreach ($tecnologies as $technology)
        <div class="p-4 sm:w-1/2 lg:w-1/3">
            <div class="h-full border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <div class="flex justify-center items-center bg-gray-100 p-4">
                    <img class="h-16" src="{{ $technology->icon_url }}" alt="{{ $technology->name }}">
                </div>

                <div class="p-4 hover:bg-indigo-700 hover:text-white transition duration-300 ease-in flex flex-col gap-2">
                    <h2 class="text-sm font-medium text-indigo-500">
                        {{ $technology->experience_years }} año{{ $technology->experience_years > 1 ? 's' : '' }} de experiencia
                    </h2>

                    <h1 class="text-xl font-semibold">
                        {{ $technology->name }}
                    </h1>

                    <p class="text-sm leading-snug line-clamp-3">
                        {{ $technology->description }}
                    </p>
                </div>
            </div>
        </div>
    @endforeach
</div>

    <div class="mt-12">
        {{ $tecnologies->links('pagination::tailwind') }}
    </div>
</div>
