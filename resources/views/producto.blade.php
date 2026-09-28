<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Agmatech') }} | Productos de Tecnología</title>
        <meta name="description" content="Equipo de cómputo, refacciones especializadas y soluciones industriales. Tecnología más inteligente para un futuro más rápido.">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white font-sans text-dark antialiased">
        <x-site.navbar />
        <x-site.product-hero />
        <x-site.products-catalog />
        <x-site.product-extras />
        <x-site.contact-cta />
        <x-site.footer />
    </body>
</html>
