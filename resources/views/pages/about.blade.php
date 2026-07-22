@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="bg-gradient-to-r from-blue-950 to-slate-900 py-24">
    <div class="max-w-7xl mx-auto px-6 text-center text-white">
        <span class="uppercase tracking-widest text-yellow-400 font-semibold">
            Tentang Kami
        </span>
        <h1 class="mt-4 text-5xl font-bold">
            Mengenal Perguruan Amaliah
        </h1>
        <p class="mt-6 max-w-3xl mx-auto text-lg text-slate-300 leading-8">
            Mengenal lebih dekat sejarah, visi, misi, serta komitmen Perguruan Amaliah
            dalam mencetak generasi yang unggul, berkarakter, dan berprestasi.
        </p>
    </div>
</section>

{{-- Sejarah, Visi & Misi --}}
<section class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-start">
            {{-- Sejarah --}}
            <div>
                <span class="text-blue-900 font-semibold uppercase tracking-wide">
                    Sejarah
                </span>
                <h2 class="mt-3 text-4xl font-bold text-slate-900">
                    Perjalanan Perguruan
                </h2>
                <div class="mt-8 text-slate-600 leading-8 space-y-4">
                    @if(!empty($website?->history))
                        {!! nl2br(e($website->history)) !!}
                    @else
                        <p>
                            Informasi sejarah perguruan belum tersedia.
                        </p>
                    @endif
                </div>
            </div>
            {{-- Visi & Misi --}}
            <div class="space-y-8">
                <div class="rounded-3xl bg-slate-50 p-8 shadow">
                    <h3 class="text-2xl font-bold text-blue-900">
                        Visi
                    </h3>
                    <p class="mt-4 text-slate-600 leading-8">
                        {{ $website?->vision ?? 'Visi belum tersedia.' }}
                    </p>
                </div>
                <div class="rounded-3xl bg-slate-50 p-8 shadow">
                    <h3 class="text-2xl font-bold text-blue-900">
                        Misi
                    </h3>
                    <div class="mt-4 text-slate-600 leading-8">
                        @if(!empty($website?->mission))
                            {!! nl2br(e($website->mission)) !!}
                        @else
                            Misi belum tersedia.
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Pimpinan Yayasan --}}
@if(isset($leaders) && $leaders->count())
    @include('sections.foundation')
@endif

{{-- Struktur Organisasi --}}
@if(isset($organizations) && $organizations->count())
    @include('sections.organization')
@endif

@endsection