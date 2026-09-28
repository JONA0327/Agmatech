<section class="relative overflow-hidden bg-white py-20 lg:py-28">
    <div class="container-agma grid grid-cols-1 gap-14 lg:grid-cols-2 lg:gap-20">
        {{-- left: images + decorative rings --}}
        <div class="relative">
            <div class="pointer-events-none absolute -bottom-16 -right-10 hidden h-80 w-80 sm:block">
                <div class="absolute inset-0 rounded-full border border-dark/5"></div>
                <div class="absolute inset-6 rounded-full border border-dark/5"></div>
                <div class="absolute inset-12 rounded-full border border-dark/5"></div>
                <div class="absolute inset-20 rounded-full border border-dark/5"></div>
            </div>

            <div class="relative grid grid-cols-2 gap-4">
                <img src="https://picsum.photos/seed/agmatech-about2-1/300/420" alt="Colaboradora Agmatech" class="w-full rounded-sm object-cover shadow-md" />
                <img src="https://picsum.photos/seed/agmatech-about2-2/300/320" alt="Colaboradora revisando equipo" class="mt-10 w-full rounded-sm object-cover shadow-md" />
            </div>
        </div>

        {{-- right: content --}}
        <div>
            <span class="eyebrow mb-4">Bienvenido a Agmatech</span>
            <h2 class="section-heading">¿Qué es <span class="text-primary">Agmatech</span>?</h2>

            <div class="mt-6 space-y-4 text-sm leading-relaxed text-muted">
                <p>
                    Agmatech ofrece soluciones tecnológicas que van desde la comercialización de productos digitales como licencias electrónicas, equipo de cómputo, periféricos, accesorios y refacciones hasta la asesoría, selección y recomendación acorde a las necesidades de cada sector como lo es hogar, oficinas e industria.
                </p>
                <p>
                    Iniciamos con el desarrollo de soluciones en software y aplicaciones y brindamos asesoría a los emprendedores y empresarios para que tuvieran su presencia en internet y fueran visibles a sus clientes. Alrededor de este comienzo pudimos incrementar nuestra oferta con equipo de cómputo de escritorio, laptops y servidores con una orientación en la satisfacción del cliente y la cobertura real de sus necesidades.
                </p>
                <p>
                    No estamos conformes con solo vender equipo de cómputo. Nos interesamos en que nuestros clientes logren una innovación adecuada con el apoyo de nuestros asesores y les den la mejor alternativa. A través de nuestra experiencia en cómputo y tecnología podemos ofrecer soluciones confiables y al nivel de la misma industria podemos ofrecer un compromiso de buena calidad y una opción recomendable en este sector tan competido.
                </p>
            </div>

            <p class="mt-8 font-heading text-base font-bold uppercase text-dark">
                Sin duda, <span class="text-primary">podemos apoyarle,</span> contáctenos.
            </p>

            <a href="{{ route('servicios') }}" class="btn-primary mt-7">Descubra nuestros servicios</a>
        </div>
    </div>
</section>
