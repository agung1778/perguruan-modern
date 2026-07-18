@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="bg-gradient-to-r from-blue-950 to-slate-900 py-24">
    <div class="max-w-7xl mx-auto px-6 text-white">
        <span class="text-yellow-400 font-semibold uppercase tracking-widest">
            Unit Pendidikan
        </span>
        <h1 class="mt-4 text-5xl font-bold">
            {{ $unit->name }}
        </h1>
        <p class="mt-6 max-w-3xl text-lg text-slate-300 leading-8">
            {{ $unit->description }}
        </p>
    </div>
</section>

{{-- Detail --}}
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-start">
            {{-- Foto --}}
            <div>
                @if($unit->photo)
                    <img src="{{ Storage::url($unit->photo) }}" alt="{{ $unit->name }}" class="rounded-3xl shadow-xl w-full object-cover">
                @else
                    <div class="h-96 bg-slate-200 rounded-3xl flex items-center justify-center">
                        <span class="text-slate-500">
                            Foto belum tersedia
                        </span>
                    </div>
                @endif
            </div>

            {{-- Informasi --}}
            <div>
                @if($unit->logo)
                    <img src="{{ Storage::url($unit->logo) }}" alt="{{ $unit->name }}" class="h-28 object-contain">
                @endif
                <h2 class="mt-8 text-3xl font-bold text-slate-900">
                    {{ $unit->name }}
                </h2>
                <div class="mt-6 text-slate-600 leading-8">
                    {!! nl2br(e($unit->description)) !!}
                </div>
                {{-- Statistik --}}
                <div class="grid grid-cols-2 gap-5 mt-10">
                    <div class="bg-blue-50 rounded-2xl p-6 text-center">
                        <h3 class="text-4xl font-bold text-blue-900">
                            {{ number_format($unit->students_count ?? 0) }}
                        </h3>
                        <p class="mt-2 text-slate-600">
                            Jumlah Siswa
                        </p>
                    </div>
                    <div class="bg-yellow-50 rounded-2xl p-6 text-center">
                        <h3 class="text-4xl font-bold text-yellow-600">
                            {{ number_format($unit->teachers_count ?? 0) }}
                        </h3>
                        <p class="mt-2 text-slate-600">
                            Jumlah Guru
                        </p>
                    </div>
                </div>

                {{-- Website --}}
                @if($unit->website)
                    <a href="{{ $unit->website }}" target="_blank" class="inline-flex mt-10 bg-blue-900 hover:bg-blue-800 text-white px-8 py-4 rounded-xl transition">
                        Kunjungi Website Sekolah →
                    </a>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection