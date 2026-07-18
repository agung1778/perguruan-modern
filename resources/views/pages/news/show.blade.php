@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="bg-gradient-to-r from-blue-950 to-slate-900 py-20">
    <div class="max-w-5xl mx-auto px-6 text-white">
        <span class="text-yellow-400 font-semibold uppercase tracking-widest">
            Berita
        </span>
        <h1 class="mt-4 text-4xl md:text-5xl font-bold leading-tight">
            {{ $news->title }}
        </h1>
        <p class="mt-5 text-slate-300">
            {{ $news->created_at->translatedFormat('d F Y') }}
        </p>
    </div>
</section>

{{-- Content --}}
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-3 gap-12">
        {{-- Artikel --}}
        <article class="lg:col-span-2">
            @if($news->thumbnail)
                <img src="{{ Storage::url($news->thumbnail) }}" alt="{{ $news->title }}" class="w-full rounded-3xl shadow-lg object-cover">
            @endif
            <div class="mt-10 prose prose-lg max-w-none">
                {!! $news->content !!}
            </div>
        </article>
        {{-- Sidebar --}}
        <aside>
            <div class="bg-slate-50 rounded-3xl p-8 shadow">
                <h3 class="text-xl font-bold text-slate-900">
                    Berita Terbaru
                </h3>
                <div class="mt-6 space-y-6">
                    @foreach($latest as $item)
                        <a href="{{ route('news.show', ['news'=>$item]) }}" class="block group">
                            <h4 class="font-semibold text-slate-800 group-hover:text-blue-900 transition">
                                {{ $item->title }}
                            </h4>
                            <p class="mt-2 text-sm text-slate-500">
                                {{ $item->created_at->translatedFormat('d M Y') }}
                            </p>
                        </a>
                    @endforeach
                </div>
            </div>
        </aside>
    </div>
</section>
@endsection