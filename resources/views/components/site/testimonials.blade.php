@php
    $testimonials = [
        [
            'name' => 'Darrell Steward',
            'role' => 'CEO',
            'avatar' => 'agmatech-avatar-1',
        ],
        [
            'name' => 'Guy Hawkins',
            'role' => 'Referente',
            'avatar' => 'agmatech-avatar-2',
        ],
        [
            'name' => 'Savannah Nguyen',
            'role' => 'The Walt Disney Company',
            'avatar' => 'agmatech-avatar-3',
        ],
    ];
    $quote = 'Paradigm. Monotonectally extend open-source competitive methods of empowerment via revolutionize stand-alone business.';
@endphp

<section id="testimonios" class="bg-light py-20 lg:py-28">
    <div class="container-agma">
        <div class="mx-auto max-w-xl text-center">
            <span class="eyebrow mx-auto mb-4 justify-center">Testimonios</span>
            <h2 class="section-heading">Lo que nuestros <span class="text-primary">clientes opinan</span></h2>
            <p class="mt-4 text-sm text-muted">Nuestro profesionalismo se refleja en la confianza de nuestros clientes.</p>
        </div>

        <div class="mt-14 grid grid-cols-1 gap-6 md:grid-cols-3">
            @foreach ($testimonials as $testimonial)
                <div class="rounded-sm bg-dark-card p-8">
                    <i class="fa-solid fa-quote-left text-2xl text-primary"></i>
                    <div class="mt-4 flex gap-1 text-primary">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="fa-solid fa-star text-xs"></i>
                        @endfor
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-white/70">{{ $quote }}</p>
                    <div class="mt-6 flex items-center gap-3 border-t border-white/10 pt-6">
                        <img src="https://picsum.photos/seed/{{ $testimonial['avatar'] }}/80/80" alt="{{ $testimonial['name'] }}" class="h-11 w-11 rounded-full object-cover" />
                        <div>
                            <p class="font-heading text-sm font-bold text-white">{{ $testimonial['name'] }}</p>
                            <p class="text-xs text-muted">{{ $testimonial['role'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-10 flex items-center justify-center gap-4">
            <button type="button" class="dot-nav border-dark/10 text-dark hover:border-primary">
                <i class="fa-solid fa-arrow-left text-xs"></i>
            </button>
            <button type="button" class="dot-nav bg-primary text-white">
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </button>
        </div>
    </div>
</section>
