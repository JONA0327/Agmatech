@php
    $features = [
        [
            'icon' => 'fa-laptop-code',
            'title' => 'Soluciones de Software',
            'desc' => 'Herramientas adecuadas para su negocio.',
        ],
        [
            'icon' => 'fa-headset',
            'title' => 'Soporte Técnico Remoto',
            'desc' => 'Ayuda de expertos en cualquier lugar.',
        ],
        [
            'icon' => 'fa-magnifying-glass-chart',
            'title' => 'Consultoría en Presencia Digital',
            'desc' => 'Potencie su visibilidad en línea y el impacto de su marca.',
        ],
        [
            'icon' => 'fa-shield-halved',
            'title' => 'Mantenimiento de Sitios Web',
            'desc' => 'Mantenga su sitio seguro, actualizado y presentable.',
        ],
    ];
@endphp

<section class="bg-light py-20 lg:py-28">
    <div class="container-agma">
        <div class="mx-auto max-w-2xl text-center">
            <span class="eyebrow mx-auto mb-4 justify-center">¿Quiénes somos?</span>
            <h2 class="section-heading">
                Transformando <span class="text-primary">ideas</span> en soluciones digitales <span class="text-primary">escalables</span>
            </h2>
        </div>

        <div class="mt-16 grid grid-cols-1 gap-14 lg:grid-cols-2 lg:gap-20">
            {{-- left: lead item + feature grid --}}
            <div>
                <div class="flex gap-4">
                    <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary">
                        <i class="fa-solid fa-handshake text-lg"></i>
                    </span>
                    <div>
                        <h3 class="font-heading text-base font-bold uppercase text-dark">Asesores Tecnológicos de Confianza</h3>
                        <p class="mt-2 text-sm leading-relaxed text-muted">
                            Trabajamos con un enfoque consultivo, guiando a nuestros clientes para implementar la tecnología adecuada en cada etapa de su crecimiento.
                        </p>
                        <p class="mt-3 text-sm leading-relaxed text-muted">
                            Nuestra experiencia combina desarrollo web, software y soporte técnico y comercialización de equipo de cómputo con un servicio cercano, transparente y orientado a resultados.
                        </p>
                    </div>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-8 sm:grid-cols-2">
                    @foreach ($features as $feature)
                        <div class="flex gap-4">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary">
                                <i class="fa-solid {{ $feature['icon'] }}"></i>
                            </span>
                            <div>
                                <h4 class="font-heading text-sm font-bold uppercase text-dark">{{ $feature['title'] }}</h4>
                                <p class="mt-1 text-sm leading-relaxed text-muted">{{ $feature['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- right: image collage + circular ctas --}}
            <div class="relative">
                <div class="grid grid-cols-2 gap-4">
                    <img src="https://picsum.photos/seed/agmatech-why-1/300/380" alt="Especialista en asesoría" class="mt-10 w-full rounded-sm object-cover shadow-md" />
                    <img src="https://picsum.photos/seed/agmatech-why-2/300/280" alt="Equipo colaborando" class="w-full rounded-sm object-cover shadow-md" />
                </div>

                <a href="{{ route('servicios') }}" class="absolute left-0 top-0 flex h-32 w-32 -translate-x-6 -translate-y-6 flex-col items-center justify-center rounded-full bg-primary text-center shadow-lg transition-transform hover:scale-105">
                    <span class="font-heading text-xs font-bold uppercase leading-tight text-white">Explore<br>Servicios TI</span>
                </a>

                <a href="#contacto" class="absolute bottom-6 right-0 flex h-36 w-36 translate-x-4 flex-col items-center justify-center rounded-full bg-dark text-center shadow-lg transition-transform hover:scale-105">
                    <span class="font-heading text-xs font-bold uppercase leading-tight text-white">Obtenga una<br>Solución<br>Profesional</span>
                </a>
            </div>
        </div>
    </div>
</section>
