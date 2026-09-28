@php
    $navLinks = [
        ['label' => 'Inicio', 'href' => url('/'), 'active' => request()->is('/')],
        ['label' => 'Nosotros', 'href' => route('nosotros'), 'active' => request()->routeIs('nosotros')],
        ['label' => 'Servicios', 'href' => route('servicios'), 'active' => request()->routeIs('servicios')],
        ['label' => 'Productos', 'href' => route('productos'), 'active' => request()->routeIs('productos')],
        ['label' => 'Contacto', 'href' => route('contacto'), 'active' => request()->routeIs('contacto')],
    ];
@endphp

<header class="sticky top-0 z-50 w-full bg-white shadow-sm">
    <div class="container-agma flex items-center justify-between py-4">
        <a href="{{ url('/') }}" class="flex items-center">
            <img src="{{ asset('logo-on-light.png') }}" alt="Agmatech" class="h-8 w-auto sm:h-9" />
        </a>

        <nav class="hidden items-center gap-8 lg:flex">
            @foreach ($navLinks as $link)
                <a href="{{ $link['href'] }}" class="font-heading text-sm font-semibold uppercase tracking-wide transition-colors hover:text-primary {{ $link['active'] ? 'text-primary' : 'text-dark' }}">
                    {{ $link['label'] }}
                </a>
            @endforeach
        </nav>

        <div class="flex items-center gap-4">
            <a href="tel:+524461067409" class="hidden items-center gap-3 sm:flex">
                <span class="flex h-10 w-10 items-center justify-center rounded-full bg-primary text-white">
                    <i class="fa-solid fa-phone text-sm"></i>
                </span>
                <span class="font-heading text-sm font-bold text-dark">+52 446 106 7409</span>
            </a>
            <button type="button" aria-label="Buscar" class="flex h-10 w-10 items-center justify-center rounded-full border border-dark/10 text-dark transition-colors hover:border-primary hover:text-primary">
                <i class="fa-solid fa-magnifying-glass text-sm"></i>
            </button>
        </div>
    </div>
</header>
