<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Title --}}
    <title>
        {{ $website?->school_name ?? config('app.name') }}
    </title>
    {{-- SEO --}}
    <meta  name="description" content="{{ $website?->meta_description ?? 'Website resmi Perguruan Modern' }}">
    {{-- Favicon --}}
    @if(!empty($website?->favicon))
        <link rel="icon" type="image/png" href="{{ Storage::url($website->favicon) }}">
    @endif
    {{-- Assets --}}
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body class="bg-slate-100 text-slate-800 antialiased">
    {{-- Navbar --}}
    @include('layouts.partials.navbar')
    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>
    {{-- Footer --}}
    @include('layouts.partials.footer')
</body>
</html>