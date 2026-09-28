@php
    $sectors = [
        ['title' => 'Emprendedores y Profesionistas Independientes', 'image' => 'agmatech-sector-1'],
        ['title' => 'Hogar', 'image' => 'agmatech-sector-2'],
        ['title' => 'Oficinas y Pymes', 'image' => 'agmatech-sector-3'],
        ['title' => 'Industrias', 'image' => 'agmatech-sector-4'],
    ];
@endphp

<section id="sectores" class="bg-white py-20 lg:py-28">
    <div class="container-agma">
        <div class="mx-auto max-w-xl text-center">
            <span class="eyebrow mx-auto mb-4 justify-center">Sectores</span>
            <h2 class="section-heading">Sectores a los que <span class="text-primary">servimos</span></h2>
            <p class="mt-4 text-sm text-muted">Ofrecemos una solución adecuada a cada sector</p>
        </div>

        <div class="mt-14 grid grid-cols-1 gap-1 sm:grid-cols-2">
            @foreach ($sectors as $sector)
                <div class="group relative h-64 overflow-hidden">
                    <img src="https://picsum.photos/seed/{{ $sector['image'] }}/700/500" alt="{{ $sector['title'] }}" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-gradient-to-t from-dark/80 via-dark/10 to-transparent"></div>
                    <span class="absolute bottom-5 left-6 font-heading text-sm font-bold uppercase tracking-wide text-white">
                        {{ $sector['title'] }}
                    </span>
                </div>
            @endforeach
        </div>
    </div>
</section>
