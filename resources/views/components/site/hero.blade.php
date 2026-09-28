<section id="inicio" class="relative overflow-hidden bg-dark">
    {{-- decorative circles --}}
    <div class="pointer-events-none absolute -left-16 top-10 h-56 w-56 rounded-full border border-white/5"></div>
    <div class="pointer-events-none absolute -left-24 top-24 h-72 w-72 rounded-full border border-white/5"></div>

    {{-- right image + diagonal orange divider --}}
    <div class="absolute inset-y-0 right-0 hidden w-[56%] lg:block">
        <div class="diagonal-clip relative h-full w-full">
            <img src="https://picsum.photos/seed/agmatech-hero/1200/900" alt="Equipo Agmatech trabajando" class="h-full w-full object-cover" />
            <div class="absolute inset-0 bg-gradient-to-r from-dark/60 via-transparent to-transparent"></div>
        </div>
        <div class="absolute -left-10 top-0 h-full w-20 -skew-x-[18deg] bg-primary"></div>
    </div>

    <div class="container-agma relative z-10 py-20 lg:py-32">
        <div class="max-w-xl">
            <span class="eyebrow mb-5">Bienvenido a Agmatech</span>
            <h1 class="font-heading text-4xl font-bold uppercase leading-[1.08] text-white sm:text-5xl lg:text-6xl">
                Somos el arquitecto de tu <span class="text-primary">negocio</span> digital.
            </h1>
            <a href="#servicios" class="btn-primary mt-10">Descubre nuestros servicios</a>
        </div>
    </div>

    {{-- side slide navigation --}}
    <div class="absolute left-6 top-1/2 z-10 hidden -translate-y-1/2 flex-col items-center gap-4 lg:flex">
        <button type="button" class="dot-nav bg-white/10 font-heading text-sm font-semibold">1</button>
        <button type="button" class="dot-nav bg-primary">
            <i class="fa-solid fa-arrow-down text-xs"></i>
        </button>
    </div>
</section>
