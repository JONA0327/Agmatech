@php
    $items = [
        [
            'icon' => 'fa-shield-halved',
            'title' => 'Mantenimiento de Sitios Web',
            'desc' => 'Mantén el sitio web de tu negocio en óptimas condiciones. Actualizamos el contenido, corregimos errores y garantizamos su funcionamiento correcto en todo momento.',
        ],
        [
            'icon' => 'fa-laptop-code',
            'title' => 'Soluciones en Software',
            'desc' => 'Diseñamos e implementamos herramientas digitales adaptadas a las necesidades de tu negocio, mejorando la eficiencia operativa y facilitando la toma de decisiones.',
        ],
        [
            'icon' => 'fa-headset',
            'title' => 'Soporte Técnico Remoto',
            'desc' => 'Resolvemos problemas técnicos de manera ágil y efectiva, sin necesidad de desplazamientos, minimizando tiempos de inactividad en tus operaciones.',
        ],
        [
            'icon' => 'fa-magnifying-glass-chart',
            'title' => 'Gestión de Presencia Digital',
            'desc' => 'Ayudamos a fortalecer la imagen de tu negocio en internet, optimizando tu presencia en redes sociales, sitio web y plataformas digitales para mayor visibilidad.',
        ],
        [
            'icon' => 'fa-microchip',
            'title' => 'Consultoría en Cómputo, Tecnología y Componentes Industriales',
            'desc' => 'Ofrecemos asesoría especializada en la selección, compra e instalación de equipo de cómputo y componentes tecnológicos para uso empresarial e industrial.',
        ],
    ];
@endphp

<section class="relative overflow-hidden bg-white py-20 lg:py-28">
    <div class="container-agma grid grid-cols-1 gap-14 lg:grid-cols-2 lg:gap-20">
        {{-- left: visual --}}
        <div class="relative">
            {{-- decorative concentric rings --}}
            <div class="pointer-events-none absolute -bottom-16 -left-10 hidden h-80 w-80 sm:block">
                <div class="absolute inset-0 rounded-full border border-dark/5"></div>
                <div class="absolute inset-6 rounded-full border border-dark/5"></div>
                <div class="absolute inset-12 rounded-full border border-dark/5"></div>
                <div class="absolute inset-20 rounded-full border border-dark/5"></div>
            </div>

            <div class="relative grid grid-cols-2 gap-4 pt-10">
                <a href="{{ route('contacto') }}" class="flex h-32 w-32 flex-col items-center justify-center self-start rounded-full bg-primary text-center shadow-lg transition-transform hover:scale-105">
                    <span class="font-heading text-xs font-bold uppercase leading-tight text-white">Servicios<br>TI</span>
                </a>
                <img src="https://picsum.photos/seed/agmatech-service-detail-1/300/220" alt="Especialista asesorando" class="w-full rounded-sm object-cover shadow-md" />

                <img src="https://picsum.photos/seed/agmatech-service-detail-2/300/280" alt="Equipo trabajando" class="w-full rounded-sm object-cover shadow-md" />
                <a href="{{ route('contacto') }}" class="flex h-32 w-32 flex-col items-center justify-center justify-self-end rounded-full bg-dark text-center shadow-lg transition-transform hover:scale-105">
                    <span class="font-heading text-xs font-bold uppercase leading-tight text-white">Solución<br>Profesional</span>
                </a>
            </div>
        </div>

        {{-- right: content --}}
        <div>
            <span class="eyebrow mb-4">Análisis Personalizado</span>
            <h2 class="section-heading">
                Transformando <span class="text-primary">ideas</span> en soluciones digitales <span class="text-primary">escalables</span>
            </h2>

            <ul class="mt-10 space-y-7">
                @foreach ($items as $item)
                    <li class="flex gap-4">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary">
                            <i class="fa-solid {{ $item['icon'] }}"></i>
                        </span>
                        <div>
                            <h3 class="font-heading text-sm font-bold uppercase text-dark">{{ $item['title'] }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-muted">{{ $item['desc'] }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="container-agma mt-16 border-t border-dark/10 pt-10">
        <p class="font-heading text-sm font-bold uppercase leading-relaxed text-dark sm:text-base">
            Además de todos estos servicios, contamos con alianzas de especialistas para completar nuestra oferta, tales como
            <span class="text-primary">diseño de marca, marketing digital, gestión de redes sociales, diseño gráfico</span>,
            entre otros.
        </p>
    </div>
</section>
