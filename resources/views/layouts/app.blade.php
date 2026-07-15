<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>

        {{ $website?->school_name ?? config('app.name') }}

    </title>

    <meta
        name="description"
        content="{{ $website?->meta_description }}"
    >

    @if($website?->favicon)

        <link
            rel="icon"
            href="{{ Storage::url($website->favicon) }}"
        >

    @endif

    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
    ])

</head>

<body class="bg-slate-100 text-slate-800">

@include('layouts.partials.navbar')

<main>

    @yield('content')

</main>

@include('layouts.partials.footer')

</body>

</html>