@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="bg-gradient-to-r from-blue-950 to-slate-900 py-24">
    <div class="max-w-7xl mx-auto px-6 text-center text-white">
        <span class="text-yellow-400 font-semibold uppercase tracking-widest">
            Informasi
        </span>
        <h1 class="mt-4 text-5xl font-bold">
            Berita Perguruan
        </h1>
        <p class="mt-5 text-lg text-slate-300">
            Informasi terbaru, kegiatan, dan perkembangan Perguruan Amaliah.
        </p>
    </div>
</section>

{{-- Content --}}
<section class="bg-slate-50 py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-4 gap-10">
            {{-- News --}}
            <div class="lg:col-span-3">
                @if($news->count())
                    <div class="grid md:grid-cols-2 gap-8">
                        @foreach($news as $item)
                            <article class="bg-white rounded-3xl shadow overflow-hidden hover:shadow-xl transition">
                                {{-- Thumbnail --}}
                                @if($item->thumbnail)
                                    <img src="{{ Storage::url($item->thumbnail) }}"alt="{{ $item->title }}" class="w-full h-56 object-cover">
                                @else
                                    <div class="h-56 bg-slate-200 flex items-center justify-center">
                                        <span class="text-slate-500">
                                            Tidak Ada Gambar
                                        </span>
                                    </div>
                                @endif
                                <div class="p-7">
                                    <p class="text-sm text-slate-500">
                                        {{ $item->created_at->translatedFormat('d F Y') }}
                                    </p>
                                    <h2 class="mt-3 text-xl font-bold text-slate-900">
                                        {{ $item->title }}
                                    </h2>
                                    <p class="mt-4 text-slate-600 leading-7">
                                        {{ Str::limit(strip_tags($item->content),120) }}
                                    </p>
                                    <a href="{{ route('news.show', ['news' => $item]) }}" class="inline-flex mt-6 font-semibold text-blue-900 hover:text-yellow-500 transition">
                                        Baca Selengkapnya →
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <div class="flex justify-center mt-12">
                        {{ $news->links() }}
                    </div>
                @else
                    <div class="bg-white rounded-3xl p-10 text-center shadow">
                        <h2 class="text-2xl font-semibold">
                            Belum ada berita
                        </h2>
                        <p class="mt-3 text-slate-500">
                            Berita akan muncul setelah ditambahkan melalui dashboard.
                        </p>
                    </div>
                @endif
            </div>
            {{-- Sidebar --}}
            <aside>
                <div class="bg-white rounded-3xl p-8 shadow">
                    <h3 class="text-xl font-bold">
                        Kategori Berita
                    </h3>
                    <ul class="mt-6 space-y-4">
                        @foreach($categories as $category)
                            <li>
                                <a href="{{ route('news.index', ['category' => $category->id]) }}" class="text-slate-600 hover:text-blue-900 transition">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection