@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="bg-gradient-to-r from-blue-950 to-slate-900 py-20">
    <div class="max-w-5xl mx-auto px-6 text-white">
        <span class="text-yellow-400 font-semibold uppercase tracking-widest">
            Agenda
        </span>
        <h1 class="mt-4 text-4xl md:text-5xl font-bold leading-tight">
            {{ $agenda->title }}
        </h1>
        <p class="mt-5 text-slate-300 text-lg">
            {{ $agenda->date 
                ? $agenda->date->translatedFormat('d F Y') 
                : '-' 
            }}
        </p>
    </div>
</section>

{{-- Detail Agenda --}}
<section class="bg-slate-50 py-20">
    <div class="max-w-5xl mx-auto px-6">
        <div class="bg-white rounded-3xl shadow-lg p-10">
            {{-- Informasi --}}
            <div class="grid md:grid-cols-2 gap-8 mb-10">
                <div class="bg-blue-50 rounded-2xl p-6">
                    <h3 class="font-bold text-blue-900">
                        📅 Tanggal
                    </h3>
                    <p class="mt-3 text-slate-600">
                        {{ $agenda->date 
                            ? $agenda->date->translatedFormat('d F Y') 
                            : '-' 
                        }}
                    </p>
                </div>
                <div class="bg-yellow-50 rounded-2xl p-6">
                    <h3 class="font-bold text-yellow-700">
                        📍 Lokasi
                    </h3>
                    <p class="mt-3 text-slate-600">
                        {{ $agenda->location ?? 'Belum ditentukan' }}
                    </p>
                </div>
            </div>
            {{-- Deskripsi --}}
            <div>
                <h3 class="text-2xl font-bold text-slate-900 mb-5">
                    Deskripsi Kegiatan
                </h3>

                <div class="text-slate-600 leading-8">
                    @if($agenda->description)
                        {!! nl2br(e($agenda->description)) !!}
                    @else
                        <p>
                            Deskripsi agenda belum tersedia.
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@endsection