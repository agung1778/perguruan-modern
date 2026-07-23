<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="scroll-smooth"
>

<head>

    {{-- =====================================================
        BASIC META
    ====================================================== --}}

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >


    {{-- =====================================================
        SEO
    ====================================================== --}}

    <title>
        @yield(
            'title',
            $website?->school_name ?? config('app.name')
        )
    </title>

    <meta
        name="description"
        content="{{ $website?->meta_description ?? 'Website resmi Perguruan Amaliah' }}"
    >

    <meta
        name="robots"
        content="index, follow"
    >


    {{-- =====================================================
        FAVICON
    ====================================================== --}}

    @if(filled($website?->favicon))

        <link
            rel="icon"
            type="image/png"
            href="{{ Storage::url($website->favicon) }}"
        >

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

</head>


<body
    class="min-h-screen bg-slate-50 text-slate-800 antialiased"
>

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

</body>

</html>