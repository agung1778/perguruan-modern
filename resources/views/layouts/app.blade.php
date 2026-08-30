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
    @php
        $schoolName = $website?->school_name ?? 'Perguruan Amaliah';
        $pageTitle = trim(strip_tags(trim((string) View::getSection('title', ''))));
        $metaTitle = $pageTitle !== ''
            ? $pageTitle . ' | ' . $schoolName
            : $schoolName;
        $metaDescription = $website?->meta_description
            ?? ($seo_defaults['description'] ?? 'Website resmi Perguruan Amaliah');
        $currentUrl = url()->current();
        $schoolLogo = $website?->logo
            ? Storage::url($website->logo)
            : asset('logo/logo.png');
    @endphp
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ $currentUrl }}">
    {{-- =====================================================
        OPEN GRAPH
    ====================================================== --}}
    <meta property="og:site_name" content="{{ $schoolName }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $metaTitle }}">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:url" content="{{ $currentUrl }}">
    <meta property="og:image" content="{{ $schoolLogo }}">
    <meta name="twitter:card" content="summary_large_image">
    {{-- =====================================================
        STRUCTURED DATA (Organization)
    ====================================================== --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@type": "Organization",
        "name": {!! json_encode($schoolName) !!},
        "url": {!! json_encode(config('app.url')) !!},
        "logo": {!! json_encode($schoolLogo) !!},
        "image": {!! json_encode($schoolLogo) !!},
        "description": {!! json_encode($metaDescription) !!},
        "email": {!! json_encode($website?->email ?? '') !!},
        "telephone": {!! json_encode($website?->phone ?? '') !!},
        "address": {
            "@type": "PostalAddress",
            "streetAddress": {!! json_encode($website?->address ?? '') !!},
            "addressCountry": "ID"
        },
        "sameAs": [
            {!! json_encode($website?->facebook ?? '') !!},
            {!! json_encode($website?->instagram ?? '') !!},
            {!! json_encode($website?->youtube ?? '') !!}
        ]
    }
    </script>
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