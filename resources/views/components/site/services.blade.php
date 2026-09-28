@php
    $services = [
        [
            'title' => 'Desarrollo Web y Presencia Digital',
            'image' => 'agmatech-service-1',
        ],
        [
            'title' => 'Software Empresarial',
            'image' => 'agmatech-service-2',
        ],
        [
            'title' => 'Soporte Técnico Remoto',
            'image' => 'agmatech-service-3',
        ],
        [
            'title' => 'Asesoría en Equipos de Cómputo',
            'image' => 'agmatech-service-4',
        ],
    ];
@endphp

<section id="servicios" class="bg-dark py-20 lg:py-28">
    <div class="container-agma">
        <div class="flex flex-col items-start justify-between gap-6 sm:flex-row sm:items-end">
            <div>
                <span class="eyebrow mb-4">Nuestros Servicios</span>
                <h2 class="font-heading text-3xl font-bold uppercase leading-tight text-white sm:text-4xl">
                    Explore nuestros <span class="text-primary">servicios.</span>
                </h2>
            </div>
            <a href="{{ route('servicios') }}" class="btn-primary shrink-0">Ver más</a>
        </div>

        <div class="mt-14 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($services as $service)
                <div class="group overflow-hidden rounded-sm bg-dark-card">
                    <div class="h-48 overflow-hidden">
                        <img src="https://picsum.photos/seed/{{ $service['image'] }}/460/380" alt="{{ $service['title'] }}" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105" />
                    </div>
                    <div class="p-5 text-center">
                        <h3 class="font-heading text-sm font-bold uppercase leading-snug text-white">{{ $service['title'] }}</h3>
                        <a href="{{ route('servicios') }}" class="mt-4 inline-block bg-primary px-5 py-2 font-heading text-xs font-semibold uppercase tracking-wider text-white transition-colors hover:bg-primary-dark">
                            Ver detalles
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-12 flex items-center justify-center gap-4">
            <button type="button" class="dot-nav bg-white/5">
                <i class="fa-solid fa-arrow-left text-xs"></i>
            </button>
            <button type="button" class="dot-nav bg-primary">
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </button>
        </div>
    </div>
</section>
