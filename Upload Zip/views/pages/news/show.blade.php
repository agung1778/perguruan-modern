@extends('layouts.app')

@section('content')

{{-- =========================================================
HERO / ARTICLE HEADER
========================================================= --}}

<section class="relative isolate overflow-hidden bg-slate-950">

{{-- Background Gradient --}}
<div class="absolute inset-0 bg-gradient-to-br from-emerald-950 via-emerald-900 to-slate-950"></div>

{{-- Decorative Background --}}
<div class="pointer-events-none absolute -right-32 -top-32 h-96 w-96 rounded-full bg-emerald-500/10 blur-3xl"></div>

<div class="pointer-events-none absolute -bottom-40 -left-32 h-96 w-96 rounded-full bg-emerald-400/10 blur-3xl"></div>

{{-- Subtle Grid --}}
<div
    class="pointer-events-none absolute inset-0 opacity-[0.035]"
    style="background-image: linear-gradient(rgba(255,255,255,.5) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.5) 1px, transparent 1px); background-size: 40px 40px;"
></div>


{{-- Hero Content --}}
<div class="relative mx-auto max-w-7xl px-5 py-16 sm:px-6 sm:py-20 lg:px-8 lg:py-24">

    <div class="mx-auto max-w-5xl">

        {{-- Back --}}
        <a
            href="{{ route('news.index') }}"
            class="group inline-flex items-center gap-2 text-sm font-semibold text-emerald-200 transition hover:text-white"
        >

            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="h-4 w-4 transition-transform duration-200 group-hover:-translate-x-1"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"
                />
            </svg>

            Kembali ke Berita

        </a>


        {{-- Article Header --}}
        <div class="mt-8 sm:mt-10">

            {{-- Category --}}
            <span class="inline-flex items-center gap-2 rounded-full border border-emerald-400/20 bg-emerald-400/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.18em] text-emerald-300 backdrop-blur-sm sm:text-sm">

                <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>

                @if($news->category)
                    {{ $news->category->name }}
                @else
                    Berita
                @endif

            </span>


            {{-- Title --}}
            <h1 class="mt-6 max-w-4xl text-3xl font-extrabold leading-tight tracking-tight text-white sm:text-4xl lg:text-5xl xl:text-6xl">

                {{ $news->title }}

            </h1>


            {{-- Date --}}
            <div class="mt-7 flex flex-wrap items-center gap-3 text-sm text-slate-300 sm:text-base">

                <div class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 bg-white/10 text-emerald-300">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.7"
                        stroke="currentColor"
                        class="h-5 w-5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2Z"
                        />
                    </svg>

                </div>

                <div>

                    <p class="text-xs font-medium uppercase tracking-wider text-emerald-300/70">
                        Dipublikasikan
                    </p>

                    <time
                        datetime="{{ $news->created_at->toDateString() }}"
                        class="font-semibold text-slate-200"
                    >
                        {{ $news->created_at->translatedFormat('d F Y') }}
                    </time>

                </div>

            </div>

        </div>

    </div>

</div>

</section>

{{-- =========================================================
CONTENT
========================================================= --}}

<section class="bg-slate-50 py-14 sm:py-20 lg:py-24">

<div class="mx-auto grid max-w-7xl gap-8 px-5 sm:px-6 lg:grid-cols-3 lg:gap-10 lg:px-8">


    {{-- =================================================
        ARTICLE
    ================================================= --}}
    <article class="lg:col-span-2">

        <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">


            {{-- =================================================
                THUMBNAIL
            ================================================= --}}
            @if($news->thumbnail)

                <div class="relative overflow-hidden bg-slate-100">

                    <img
                        src="{{ Storage::url($news->thumbnail) }}"
                        alt="{{ $news->title }}"
                        loading="eager"
                        decoding="async"
                        class="max-h-[650px] w-full object-cover"
                    >

                    {{-- Bottom Overlay --}}
                    <div class="pointer-events-none absolute inset-x-0 bottom-0 h-24 bg-gradient-to-t from-slate-950/20 to-transparent"></div>

                </div>

            @endif


            {{-- =================================================
                ARTICLE CONTENT
            ================================================= --}}
            <div class="p-6 sm:p-8 lg:p-10 xl:p-12">

                <div
                    class="prose prose-slate max-w-none
                    prose-headings:font-bold
                    prose-headings:tracking-tight
                    prose-headings:text-slate-900
                    prose-h2:mt-10
                    prose-h2:text-2xl
                    prose-h3:mt-8
                    prose-h3:text-xl
                    prose-p:leading-8
                    prose-p:text-slate-600
                    prose-a:font-semibold
                    prose-a:text-emerald-700
                    prose-a:no-underline
                    hover:prose-a:text-emerald-900
                    prose-strong:text-slate-900
                    prose-blockquote:border-emerald-600
                    prose-blockquote:bg-emerald-50
                    prose-blockquote:px-5
                    prose-blockquote:py-2
                    prose-blockquote:text-slate-700
                    prose-img:rounded-2xl
                    prose-li:text-slate-600"
                >

                    {!! $news->content !!}

                </div>

            </div>

        </div>


        {{-- =================================================
            BACK BUTTON
        ================================================= --}}
        <div class="mt-8">

            <a
                href="{{ route('news.index') }}"
                class="group inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-5 py-3 text-sm font-bold text-slate-700 shadow-sm transition duration-200 hover:border-emerald-200 hover:bg-emerald-50 hover:text-emerald-800"
            >

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-4 w-4 transition-transform duration-200 group-hover:-translate-x-1"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"
                    />
                </svg>

                Kembali ke Semua Berita

            </a>

        </div>

    </article>


    {{-- =================================================
        SIDEBAR
    ================================================= --}}
    <aside>

        <div class="lg:sticky lg:top-24">

            <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">


                {{-- =================================================
                    SIDEBAR HEADER
                ================================================= --}}
                <div class="border-b border-slate-100 bg-slate-50/70 p-6 sm:p-7">

                    <div class="flex items-center gap-3">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-600 text-white shadow-sm">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.7"
                                stroke="currentColor"
                                class="h-5 w-5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4 6h16M4 10h16M4 14h10M4 18h7"
                                />
                            </svg>

                        </div>

                        <div>

                            <span class="text-xs font-bold uppercase tracking-widest text-emerald-700">
                                Informasi
                            </span>

                            <h3 class="mt-1 text-lg font-bold text-slate-900 sm:text-xl">
                                Berita Terbaru
                            </h3>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                    LATEST NEWS
                ================================================= --}}
                @if($latest->count())

                    <div class="divide-y divide-slate-100 px-6 sm:px-7">

                        @foreach($latest as $item)

                            <a
                                href="{{ route('news.show', ['news' => $item]) }}"
                                class="group block py-5 first:pt-6 last:pb-6"
                            >

                                {{-- Category --}}
                                @if($item->category)

                                    <span class="inline-flex rounded-full bg-emerald-50 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider text-emerald-700">
                                        {{ $item->category->name }}
                                    </span>

                                @endif


                                {{-- Title --}}
                                <h4 class="mt-2 font-semibold leading-6 text-slate-800 transition duration-200 group-hover:text-emerald-700">

                                    {{ $item->title }}

                                </h4>


                                {{-- Date --}}
                                <div class="mt-3 flex items-center gap-2 text-xs font-medium text-slate-500">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.7"
                                        stroke="currentColor"
                                        class="h-4 w-4 text-emerald-600"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2Z"
                                        />
                                    </svg>

                                    {{ $item->created_at->translatedFormat('d M Y') }}

                                </div>

                            </a>

                        @endforeach

                    </div>

                @else

                    <div class="p-6 sm:p-7">

                        <p class="text-sm leading-6 text-slate-500">
                            Belum ada berita terbaru lainnya.
                        </p>

                    </div>

                @endif

            </div>

        </div>

    </aside>

</div>

</section>

@endsection
