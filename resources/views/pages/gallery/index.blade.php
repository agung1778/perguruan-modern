@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="bg-gradient-to-r from-blue-950 to-slate-900 py-24">
    <div class="max-w-7xl mx-auto px-6 text-center text-white">
        <h1 class="text-5xl font-bold">
            Galeri Perguruan
        </h1>
        <p class="mt-5 text-slate-300 text-lg">
            Dokumentasi kegiatan, prestasi, dan aktivitas Perguruan Modern.
        </p>
    </div>
</section>

{{-- Gallery --}}
<section class="bg-slate-50 py-24">
    <div class="max-w-7xl mx-auto px-6">
        @if($albums->count())
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach($albums as $album)
                    @php
                        $cover = $album->photos->first();
                    @endphp
                    <div class="overflow-hidden bg-white rounded-3xl shadow-lg hover:shadow-2xl transition duration-300">
                        {{-- Cover --}}
                        @if($cover && filled($cover->photo))
                            <img src="{{ Storage::url($cover->photo) }}" alt="{{ $album->title }}" loading="lazy"class="w-full h-64 object-cover transition duration-500 hover:scale-105">
                        @else
                            <div class="flex items-center justify-center h-64 bg-slate-200 text-slate-500">
                                Belum Ada Foto
                            </div>
                        @endif

                        {{-- Content --}}
                        <div class="p-6">
                            <h2 class="text-2xl font-bold text-slate-800">
                                {{ $album->title }}
                            </h2>
                            <p class="mt-2 text-slate-500">
                                {{ $album->photos->count() }} Foto
                            </p>
                            <a href="{{ route('gallery.show', $album) }}" class="inline-flex items-center mt-6 font-semibold text-blue-900 hover:text-yellow-500 transition">
                                Lihat Galeri
                                <span class="ml-2">→</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="flex justify-center mt-14">
                {{ $albums->links() }}
            </div>
        @else
            <div class="py-20 text-center">
                <h2 class="text-2xl font-semibold text-slate-700">
                    Belum ada album galeri.
                </h2>
                <p class="mt-3 text-slate-500">
                    Album akan muncul setelah ditambahkan melalui dashboard admin.
                </p>
            </div>
        @endif
    </div>
</section>
@endsection