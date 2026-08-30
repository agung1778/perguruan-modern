@extends('layouts.app')

@section('title', 'Home')

@section('content')

{{-- HERO --}}
@include('components.sections.hero')

{{-- SAMBUTAN --}}
@include('components.sections.welcome')

{{-- TENTANG SEKOLAH --}}
@include('components.sections.about')

{{-- STATISTIK --}}
@include('components.sections.statistics')

{{-- UNIT PENDIDIKAN --}}
@include('components.sections.units')

{{-- PIMPINAN YAYASAN --}}
@include('components.sections.foundation', [
    'leader' => $leader
])

{{-- STRUKTUR ORGANISASI --}}
@include('components.sections.organization')

{{-- BERITA TERBARU --}}
@include('components.sections.news')

{{-- AGENDA KEGIATAN --}}
@include('components.sections.agenda')

{{-- GALERI --}}
@include('components.sections.gallery')

{{-- TESTIMONI --}}
@include('components.sections.testimonial')

{{-- KONTAK --}}
@include('components.sections.contact')

@endsection