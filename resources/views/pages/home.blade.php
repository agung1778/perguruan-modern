@extends('layouts.app')

@section('content')

    {{-- HERO --}}
    @include('components.sections.hero')

    {{-- SAMBUTAN --}}
    @include('components.sections.welcome')

    {{-- TENTANG PERGURUAN --}}
    @include('components.sections.about')

    {{-- YAYASAN / PIMPINAN --}}
    @include('components.sections.foundation', [
        'leader' => $leader
    ])

    {{-- UNIT PENDIDIKAN --}}
    @include('components.sections.units')

    {{-- STATISTIK --}}
    @include('components.sections.statistics')

    {{-- STRUKTUR ORGANISASI --}}
    @include('components.sections.organization')

    {{-- BERITA --}}
    @include('components.sections.news')

    {{-- AGENDA --}}
    @include('components.sections.agenda')

    {{-- GALERI --}}
    @include('components.sections.gallery')

    {{-- TESTIMONI --}}
    @include('components.sections.testimonial')

    {{-- KONTAK --}}
    @include('components.sections.contact')

@endsection