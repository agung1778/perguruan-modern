@extends('layouts.app')

@section('content')

{{-- =========================================================
HERO
========================================================= --}}

<section class="relative overflow-hidden bg-slate-950 py-20 sm:py-24 lg:py-28">

{{-- Background Gradient --}}
<div class="absolute inset-0 bg-gradient-to-br from-emerald-950 via-emerald-900 to-slate-950"></div>

{{-- Decorative Elements --}}
<div class="pointer-events-none absolute -right-32 -top-32 h-96 w-96 rounded-full bg-emerald-500/10 blur-3xl"></div>

<div class="pointer-events-none absolute -bottom-40 -left-32 h-96 w-96 rounded-full bg-teal-400/10 blur-3xl"></div>

<div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(16,185,129,0.06),transparent_60%)]"></div>


{{-- Hero Content --}}
<div class="relative mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">

    {{-- Back Button --}}
    <a
        href="{{ route('gallery.index') }}"
        class="inline-flex items-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-semibold text-emerald-200 backdrop-blur-sm transition hover:border-emerald-400/30 hover:bg-emerald-400/10 hover:text-white"
    >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="2"
            stroke="currentColor"
            class="h-4 w-4"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"
            />
        </svg>

        Kembali ke Galeri
    </a>


    {{-- Album Information --}}
    <div class="mt-10 max-w-4xl">

        <span class="inline-flex items-center rounded-full border border-emerald-400/20 bg-emerald-400/10 px-5 py-2 text-xs font-bold uppercase tracking-[0.2em] text-emerald-300 backdrop-blur-sm">
            Galeri Perguruan
        </span>


        <h1 class="mt-6 text-4xl font-extrabold leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">
            {{ $album->title }}
        </h1>


        @if(filled($album->description))

            <p class="mt-6 max-w-3xl text-base leading-8 text-slate-300 sm:text-lg">
                {{ $album->description }}
            </p>

        @else

            <p class="mt-6 max-w-3xl text-base leading-8 text-slate-300 sm:text-lg">
                Dokumentasi kegiatan, prestasi, dan berbagai aktivitas
                keluarga besar Perguruan Amaliah.
            </p>

        @endif


        {{-- Photo Count --}}
        <div class="mt-8 flex flex-wrap items-center gap-3">

            <div class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm font-semibold text-emerald-200 backdrop-blur-sm">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.8"
                    stroke="currentColor"
                    class="h-5 w-5"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.159 2.159m-7.5-12.75h.008v.008H13.5V3.75Z"
                    />
                </svg>

                {{ $album->photos->count() }} Foto Dokumentasi

            </div>

        </div>

    </div>

</div>

</section>

{{-- =========================================================
PHOTOS
========================================================= --}}

<section class="bg-slate-50 py-20 sm:py-24 lg:py-28">

<div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">

    @if($album->photos->count())

        {{-- Section Header --}}
        <div class="mb-12 flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">

            <div>

                <span class="text-sm font-bold uppercase tracking-[0.2em] text-emerald-700">
                    Dokumentasi
                </span>

                <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
                    Foto Kegiatan
                </h2>

                <p class="mt-3 max-w-2xl text-sm leading-7 text-slate-500 sm:text-base">
                    Kumpulan dokumentasi dan momen kegiatan
                    yang terdapat dalam album ini.
                </p>

            </div>


            {{-- Photo Count Badge --}}
            <div class="inline-flex w-fit shrink-0 items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-5 py-2.5 text-sm font-bold text-emerald-700">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.8"
                    stroke="currentColor"
                    class="h-5 w-5"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.159 2.159m-7.5-12.75h.008v.008H13.5V3.75Z"
                    />
                </svg>

                {{ $album->photos->count() }} Foto

            </div>

        </div>


        {{-- Photos Grid --}}
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

            @foreach($album->photos as $photo)

                <article
                    class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition-all duration-500 hover:-translate-y-2 hover:border-emerald-200 hover:shadow-2xl"
                >

                    {{-- Image --}}
                    <div class="relative aspect-[4/3] overflow-hidden bg-slate-100">

                        @if(filled($photo->photo))

                            <img
                                src="{{ Storage::url($photo->photo) }}"
                                alt="{{ $album->title }}"
                                loading="lazy"
                                decoding="async"
                                class="h-full w-full object-cover transition duration-700 ease-out group-hover:scale-110"
                            >

                            {{-- Overlay --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-0 transition duration-500 group-hover:opacity-100"></div>


                            {{-- View Icon --}}
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 transition duration-300 group-hover:opacity-100">

                                <div class="flex h-14 w-14 items-center justify-center rounded-full border border-white/20 bg-white/10 text-white shadow-xl backdrop-blur-md">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.8"
                                        stroke="currentColor"
                                        class="h-6 w-6"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="m15 15 6 6m-4.5-10.5a6 6 0 1 1-12 0 6 6 0 0 1 12 0Z"
                                        />
                                    </svg>

                                </div>

                            </div>

                        @else

                            <div class="flex h-full items-center justify-center bg-gradient-to-br from-emerald-50 to-slate-100">

                                <div class="text-center">

                                    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-white text-emerald-600 shadow-sm">

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="h-7 w-7"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.159 2.159m-7.5-12.75h.008V3.75Z"
                                            />
                                        </svg>

                                    </div>

                                    <p class="mt-3 text-sm font-medium text-slate-500">
                                        Foto Tidak Tersedia
                                    </p>

                                </div>

                            </div>

                        @endif

                    </div>

                </article>

            @endforeach

        </div>


        {{-- Back Button --}}
        <div class="mt-14 flex justify-center">

            <a
                href="{{ route('gallery.index') }}"
                class="inline-flex items-center gap-2 rounded-xl bg-emerald-700 px-6 py-3.5 text-sm font-bold text-white shadow-sm transition hover:bg-emerald-800 hover:shadow-lg"
            >

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-4 w-4"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"
                    />
                </svg>

                Kembali ke Semua Galeri

            </a>

        </div>


    @else

        {{-- Empty State --}}
        <div class="mx-auto max-w-2xl rounded-3xl border border-slate-200 bg-white px-6 py-20 text-center shadow-sm sm:py-24">

            <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-10 w-10"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.159 2.159m-7.5-12.75h.008V3.75Z"
                    />
                </svg>

            </div>


            <h2 class="mt-6 text-2xl font-bold text-slate-900">
                Album Masih Kosong
            </h2>


            <p class="mx-auto mt-3 max-w-lg text-sm leading-7 text-slate-500 sm:text-base">
                Belum ada foto yang ditambahkan ke dalam album ini.
                Dokumentasi akan muncul setelah ditambahkan melalui
                dashboard administrator.
            </p>


            <a
                href="{{ route('gallery.index') }}"
                class="mt-8 inline-flex items-center gap-2 rounded-xl bg-emerald-700 px-6 py-3.5 text-sm font-bold text-white shadow-sm transition hover:bg-emerald-800 hover:shadow-lg"
            >

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-4 w-4"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"
                    />
                </svg>

                Kembali ke Galeri

            </a>

        </div>

    @endif

</div>

</section>

@endsection
