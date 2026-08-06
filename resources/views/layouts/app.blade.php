<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"class="scroll-smooth">
<head>
    {{-- =====================================================
        BASIC META
    ====================================================== --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- =====================================================
        SEO
    ====================================================== --}}
    <title>
        @yield(
            'title',
            $website?->school_name ?? config('app.name')
        )
    </title>
    <meta name="description" content="{{ $website?->meta_description ?? 'Website resmi Perguruan Amaliah' }}">
    <meta name="robots" content="index, follow">
    {{-- =====================================================
    FAVICON / LOGO YAYASAN
    ====================================================== --}}
    @if(filled($website?->logo))
        <link rel="icon" type="image/png" href="{{ Storage::url($website->logo) }}">
    @elseif(filled($website?->favicon))
        <link rel="icon" type="image/png" href="{{ Storage::url($website->favicon) }}">
    @else
        <link rel="icon" type="image/png" href="{{ asset('logo/logo.png') }}">
    @endif
    {{-- =====================================================
        PRECONNECT
        Digunakan jika website menggunakan font eksternal.
        Jika tidak menggunakan Google Fonts, bagian ini
        tidak diperlukan.
    ====================================================== --}}
    {{-- 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    --}}
    {{-- =====================================================
        VITE ASSETS
    ====================================================== --}}
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
    {{-- =====================================================
        EXTRA HEAD CONTENT
    ====================================================== --}}
    @stack('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body class="min-h-screen bg-slate-50 text-slate-800 antialiased">
    {{-- =====================================================
        NAVBAR
    ====================================================== --}}
    @include('layouts.partials.navbar')
    {{-- =====================================================
        MAIN CONTENT
    ====================================================== --}}
    <main class="min-h-screen">
        @yield('content')
    </main>
    {{-- =====================================================
        FOOTER
    ====================================================== --}}
    @include('layouts.partials.footer')
    {{-- =====================================================
        EXTRA SCRIPTS
    ====================================================== --}}
    @stack('scripts')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    new Swiper(".gallerySwiper", {
        slidesPerView: 1,
        spaceBetween: 24,

        loop: true,

        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },

        pagination: {
            el: ".gallery-pagination",
            clickable: true,
        },

        navigation: {
            nextEl: ".gallery-next",
            prevEl: ".gallery-prev",
        },

        breakpoints: {

            640: {
                slidesPerView: 2,
            },

            1024: {
                slidesPerView: 3,
            },

        },

    });
</script>
</body>
</html>