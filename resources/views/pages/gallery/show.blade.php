@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="bg-gradient-to-r from-blue-950 to-slate-900 py-20">
    <div class="max-w-7xl mx-auto px-6 text-white">
        <a href="{{ route('gallery.index') }}"class="inline-flex items-center text-yellow-400 hover:text-yellow-300 transition mb-6">
            ← Kembali ke Galeri
        </a>
        <h1 class="text-5xl font-bold">
            {{ $album->title }}
        </h1>
        @if(filled($album->description))
            <p class="mt-5 max-w-3xl text-lg leading-8 text-slate-300">
                {{ $album->description }}
            </p>
        @else
            <p class="mt-5 text-slate-400">
                Dokumentasi kegiatan Perguruan Amaliah.
            </p>
        @endif
    </div>
</section>

{{-- Photos --}}
<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        @if($album->photos->count())
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach($album->photos as $photo)
                    <div class="overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition duration-300">
                        <img src="{{ Storage::url($photo->photo) }}" alt="{{ $album->title }}" loading="lazy"class="w-full h-72 object-cover transition duration-500 hover:scale-110">
                    </div>
                @endforeach
            </div>
        @else
            <div class="py-24 text-center">
                <div class="text-6xl mb-4">
                    📷
                </div>
                <h2 class="text-2xl font-bold text-slate-700">
                    Album Masih Kosong
                </h2>
                <p class="mt-3 text-slate-500">
                    Belum ada foto yang ditambahkan pada album ini.
                </p>
            </div>
        @endif
    </div>
</section>
@endsection