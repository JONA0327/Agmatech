@php
    $categories = [
        'Desktop Computing',
        'Laptops',
        'Keyboard and Mouse',
        'Wifi Signal Extenders',
        'Regulators',
        'Multifunction Printers',
        'Monitors',
        'Dock Stations',
        'Memories and SSD Drives',
        'Office, Windows, and Antivirus Licenses',
    ];

    $products = [
        ['name' => 'Asus Mini Celeron N5100 Mini PC', 'image' => 'agmatech-product-1', 'price' => 623.0, 'old_price' => 698.0],
        ['name' => 'Asus Mini Celeron N5100 Mini PC', 'image' => 'agmatech-product-2', 'price' => 623.0, 'old_price' => 743.0, 'featured' => true],
        ['name' => 'AMD Ryzen 5800X Desktop PC', 'image' => 'agmatech-product-3', 'price' => 523.0, 'old_price' => 623.0],
        ['name' => 'AMD Ryzen 5 5600G Desktop PC', 'image' => 'agmatech-product-4', 'price' => 623.0, 'old_price' => null],
        ['name' => 'Intel 12th Gen Core i5-12400 Desktop PC', 'image' => 'agmatech-product-5', 'price' => 713.0, 'old_price' => 756.0],
        ['name' => 'AMD Ryzen 5800X 3D Desktop PC', 'image' => 'agmatech-product-6', 'price' => 443.0, 'old_price' => 543.0],
        ['name' => 'AMD Ryzen 5 5600G Desktop PC', 'image' => 'agmatech-product-7', 'price' => 563.0, 'old_price' => 643.0],
        ['name' => 'AMD Ryzen 5 7600 Desktop PC', 'image' => 'agmatech-product-8', 'price' => 423.0, 'old_price' => 543.0],
        ['name' => 'Intel Core i5 11400 14-Gen Desktop PC', 'image' => 'agmatech-product-9', 'price' => 523.0, 'old_price' => 553.0],
    ];
@endphp

<section id="productos" class="bg-white py-20 lg:py-28">
    <div class="container-agma">
        <div class="flex flex-col items-start justify-between gap-4 sm:flex-row sm:items-end">
            <div>
                <span class="eyebrow mb-4">Productos</span>
                <h2 class="section-heading">Productos de <span class="text-primary">tecnología</span></h2>
            </div>
            <select class="border border-dark/10 px-4 py-2.5 font-heading text-xs font-semibold uppercase tracking-wide text-dark focus:border-primary focus:outline-none">
                <option>Low to High</option>
                <option>High to Low</option>
                <option>Más recientes</option>
            </select>
        </div>

        <div class="mt-14 grid grid-cols-1 gap-10 lg:grid-cols-[260px_1fr]">
            {{-- sidebar categories --}}
            <aside class="flex flex-col gap-2">
                @foreach ($categories as $index => $category)
                    <a href="#" class="px-5 py-3 font-heading text-xs font-semibold uppercase tracking-wide transition-colors {{ $index === 0 ? 'bg-primary text-white' : 'border border-dark/10 text-dark hover:border-primary hover:text-primary' }}">
                        {{ $category }}
                    </a>
                @endforeach
            </aside>

            {{-- product grid --}}
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-3">
                @foreach ($products as $product)
                    <div class="group border {{ !empty($product['featured']) ? 'border-primary' : 'border-dark/10' }} p-5 transition-shadow hover:shadow-lg">
                        <div class="flex h-36 items-center justify-center overflow-hidden bg-light">
                            <img src="https://picsum.photos/seed/{{ $product['image'] }}/240/200" alt="{{ $product['name'] }}" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105" />
                        </div>
                        <div class="mt-4 flex gap-1 text-primary">
                            @for ($i = 0; $i < 5; $i++)
                                <i class="fa-solid fa-star text-[10px]"></i>
                            @endfor
                        </div>
                        <h3 class="mt-2 font-heading text-xs font-bold uppercase leading-snug text-dark">{{ $product['name'] }}</h3>
                        <div class="mt-2 flex items-baseline gap-2">
                            <span class="font-heading text-sm font-bold text-primary">${{ number_format($product['price'], 1) }} USD</span>
                            @if ($product['old_price'])
                                <span class="text-xs text-muted line-through">${{ number_format($product['old_price'], 2) }} USD</span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
