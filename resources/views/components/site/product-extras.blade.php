@php
    $industrial = [
        [
            'image' => 'agmatech-industrial-1',
            'desc' => 'Componentes de automatización industrial como Computadoras industriales (IPC), PLC, HMI, Variadores y Fuentes de alimentación y reguladores industriales.',
        ],
        [
            'image' => 'agmatech-industrial-2',
            'desc' => 'Componentes de potencia mecánica industrial como motores eléctricos y reductores.',
        ],
    ];
@endphp

<section class="bg-white pb-20 lg:pb-28">
    <div class="container-agma">
        {{-- refacciones cta card --}}
        <div class="mx-auto max-w-3xl bg-dark px-8 py-12 text-center">
            <img src="{{ asset('logo-on-dark.png') }}" alt="Agmatech" class="mx-auto h-8 w-auto" />
            <h3 class="mt-6 font-heading text-2xl font-bold uppercase text-white sm:text-3xl">
                Refacciones especializadas de cómputo
            </h3>
            <p class="mx-auto mt-4 max-w-xl text-sm leading-relaxed text-white/70">
                Si busca un cargador o batería, refacciones para laptops, cazadoras, impresoras, plotters, servidores y proyectores contáctenos.
            </p>
            <a href="{{ route('contacto') }}" class="btn-primary mt-7">Contáctenos</a>
        </div>

        {{-- industrial solutions --}}
        <div class="mt-20 text-center">
            <h2 class="section-heading">Soluciones <span class="text-primary">industriales</span></h2>
        </div>

        <div class="mt-10 grid grid-cols-1 gap-6 sm:grid-cols-2">
            @foreach ($industrial as $item)
                <div class="bg-light">
                    <img src="https://picsum.photos/seed/{{ $item['image'] }}/560/360" alt="Solución industrial" class="h-56 w-full object-cover" />
                    <p class="p-6 text-sm leading-relaxed text-muted">{{ $item['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
