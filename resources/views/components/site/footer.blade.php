<footer class="bg-dark pt-16 text-white/70">
    <div class="container-agma grid grid-cols-1 gap-12 pb-12 sm:grid-cols-2 lg:grid-cols-4">
        <div>
            <a href="/" class="flex items-center">
                <img src="{{ asset('logo-on-dark.png') }}" alt="Agmatech" class="h-8 w-auto" />
            </a>
            <p class="mt-5 text-sm leading-relaxed">
                Asesoría tecnológica confiable y servicios profesionales para llevar tu negocio al siguiente nivel digital.
            </p>
            <div class="mt-6 flex gap-3">
                @foreach (['facebook-f', 'twitter', 'youtube', 'instagram'] as $icon)
                    <a href="#" class="flex h-9 w-9 items-center justify-center rounded-full border border-white/15 text-sm transition-colors hover:border-primary hover:bg-primary hover:text-white">
                        <i class="fa-brands fa-{{ $icon }}"></i>
                    </a>
                @endforeach
            </div>
        </div>

        <div>
            <h3 class="font-heading text-sm font-bold uppercase tracking-wide text-white">Useful Links</h3>
            <ul class="mt-5 space-y-3 text-sm">
                <li><a href="{{ url('/') }}" class="transition-colors hover:text-primary">Home</a></li>
                <li><a href="{{ route('nosotros') }}" class="transition-colors hover:text-primary">About Us</a></li>
                <li><a href="{{ route('servicios') }}" class="transition-colors hover:text-primary">Services</a></li>
                <li><a href="{{ route('productos') }}" class="transition-colors hover:text-primary">Products</a></li>
                <li><a href="{{ url('/#testimonios') }}" class="transition-colors hover:text-primary">Testimonial</a></li>
                <li><a href="{{ route('contacto') }}" class="transition-colors hover:text-primary">Contact</a></li>
            </ul>
        </div>

        <div>
            <h3 class="font-heading text-sm font-bold uppercase tracking-wide text-white">Contact</h3>
            <ul class="mt-5 space-y-4 text-sm">
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-location-dot mt-1 text-primary"></i>
                    <span>Nirankay Garden street, New York, USA</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-phone mt-1 text-primary"></i>
                    <span>+52 446 106 7409</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fa-solid fa-envelope mt-1 text-primary"></i>
                    <span>info@agmatech.mx</span>
                </li>
            </ul>
        </div>

        <div>
            <h3 class="font-heading text-sm font-bold uppercase tracking-wide text-white">Subscribe to get latest updates on daily basis</h3>
            <form class="mt-5 flex">
                <input type="email" placeholder="E-mail Address" class="w-full border border-white/15 bg-transparent px-4 py-2.5 text-sm text-white placeholder:text-white/50 focus:border-primary focus:outline-none" />
                <button type="submit" class="shrink-0 bg-primary px-4 py-2.5 text-sm font-semibold uppercase text-white transition-colors hover:bg-primary-dark">
                    Subscribe
                </button>
            </form>
        </div>
    </div>

    <div class="border-t border-white/10 py-6">
        <div class="container-agma flex flex-col items-center justify-between gap-2 text-xs sm:flex-row">
            <p>&copy; Copyright {{ date('Y') }} by agmatech. All rights reserved.</p>
            <div class="flex gap-4">
                <a href="#" class="transition-colors hover:text-primary">Aviso de Privacidad</a>
                <a href="#" class="transition-colors hover:text-primary">Términos y Condiciones</a>
            </div>
        </div>
    </div>
</footer>
