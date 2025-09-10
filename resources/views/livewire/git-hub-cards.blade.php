<div class="max-w-6xl mx-auto px-6 py-12">
    <h1 class="text-4xl font-bold text-center text-indigo-400 mb-10">
        Repos públicos de {{ env('GITHUB_USERNAME') }}
    </h1>

    <!-- Swiper container -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach ($repos as $repo)
                <a href="{{ $repo['html_url'] }}" class="swiper-slide" target="_blank">
                    <div class="card-github">
                        <h2 class="text-xl font-semibold mb-2">{{ $repo['name'] }}</h2>
                        <p class="text-sm text-gray-300 leading-relaxed min-h-[64px]">
                            {{ $repo['description'] ?? 'Sin descripción disponible.' }}
                        </p>
                        <div class="flex justify-between text-sm text-gray-400">
                            <span>⭐ {{ $repo['stargazers_count'] }}</span>
                            <span>🛠 {{ $repo['language'] ?? 'N/A' }}</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <!-- Botones de navegación opcionales -->
        <div class="swiper-button-next text-white"></div>
        <div class="swiper-button-prev text-white"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<script>
    const swiper = new Swiper('.mySwiper', {
        loop: true,
        grabCursor: true,
        spaceBetween: 24,
        centeredSlides: false,
        slidesPerView: 1,
        speed: 700,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false, // sigue después de arrastrar
            pauseOnMouseEnter: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            640: { slidesPerView: 1 },
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
        },
    });
</script>

