@extends('layouts.app')

@section('content')

{{-- =========================================================
HERO
========================================================= --}}

<section class="relative overflow-hidden bg-gradient-to-br from-emerald-950 via-emerald-900 to-slate-950">

{{-- Decorative Background --}}
<div class="pointer-events-none absolute inset-0">

    <div class="absolute -right-32 -top-32 h-96 w-96 rounded-full bg-emerald-400/10 blur-3xl"></div>

    <div class="absolute -bottom-40 -left-32 h-96 w-96 rounded-full bg-amber-400/5 blur-3xl"></div>

    <div class="absolute left-1/2 top-1/2 h-72 w-72 -translate-x-1/2 -translate-y-1/2 rounded-full bg-emerald-500/5 blur-3xl"></div>

</div>


<div class="relative mx-auto max-w-5xl px-5 py-16 sm:px-6 sm:py-20 lg:px-8 lg:py-24">

    {{-- Back Navigation --}}
    <a
        href="{{ route('agenda.index') }}"
        class="inline-flex items-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-semibold text-emerald-100 backdrop-blur-sm transition hover:border-amber-400/30 hover:bg-white/10 hover:text-amber-300"
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

        Kembali ke Agenda

    </a>


    {{-- Hero Content --}}
    <div class="mt-10 max-w-4xl">

        {{-- Label --}}
        <span class="inline-flex items-center rounded-full border border-amber-400/20 bg-amber-400/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.2em] text-amber-300">
            Agenda Kegiatan
        </span>


        {{-- Title --}}
        <h1 class="mt-6 text-3xl font-extrabold leading-tight tracking-tight text-white sm:text-4xl lg:text-5xl">
            {{ $agenda->title }}
        </h1>


        {{-- Date --}}
        <div class="mt-7 flex flex-wrap items-center gap-4 text-sm text-emerald-100/80 sm:text-base">

            <div class="flex items-center gap-3">

                <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/10 text-amber-300 ring-1 ring-white/10">

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
                            d="M6.75 3v2.25M17.25 3v2.25M3.75 9.75h16.5M5.25 5.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25A2.25 2.25 0 0 1 18.75 21H5.25A2.25 2.25 0 0 1 3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25Z"
                        />
                    </svg>

                </span>

                <span class="font-medium">
                    {{ $agenda->date
                        ? $agenda->date->translatedFormat('d F Y')
                        : '-'
                    }}
                </span>

            </div>

        </div>

    </div>

</div>

</section>

{{-- =========================================================
DETAIL AGENDA
========================================================= --}}

<section class="bg-slate-50 py-16 sm:py-20 lg:py-24">

<div class="mx-auto max-w-5xl px-5 sm:px-6 lg:px-8">

    <article class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">


        {{-- =====================================================
            INFORMATION CARDS
        ====================================================== --}}
        <div class="grid gap-px bg-slate-200 md:grid-cols-2">


            {{-- DATE --}}
            <div class="bg-white p-6 sm:p-8">

                <div class="flex items-start gap-4">

                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-700">

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
                                d="M6.75 3v2.25M17.25 3v2.25M3.75 9.75h16.5M5.25 5.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25A2.25 2.25 0 0 1 18.75 21H5.25A2.25 2.25 0 0 1 3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25Z"
                            />
                        </svg>

                    </div>

                    <div>

                        <p class="text-xs font-bold uppercase tracking-widest text-slate-400">
                            Tanggal Kegiatan
                        </p>

                        <p class="mt-2 text-base font-bold text-slate-900 sm:text-lg">

                            {{ $agenda->date
                                ? $agenda->date->translatedFormat('d F Y')
                                : '-'
                            }}

                        </p>

                    </div>

                </div>

            </div>


            {{-- LOCATION --}}
            <div class="bg-white p-6 sm:p-8">

                <div class="flex items-start gap-4">

                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-amber-50 text-amber-600">

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
                                d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                            />

                        </svg>

                    </div>

                    <div class="min-w-0">

                        <p class="text-xs font-bold uppercase tracking-widest text-slate-400">
                            Lokasi Kegiatan
                        </p>

                        <p class="mt-2 text-base font-bold text-slate-900 sm:text-lg">

                            {{ $agenda->location ?? 'Belum ditentukan' }}

                        </p>

                    </div>

                </div>

            </div>

        </div>


        {{-- =====================================================
            DESCRIPTION
        ====================================================== --}}
        <div class="p-6 sm:p-8 lg:p-10">

            <div class="max-w-3xl">

                {{-- Section Label --}}
                <span class="text-sm font-bold uppercase tracking-widest text-emerald-700">
                    Informasi Kegiatan
                </span>


                {{-- Heading --}}
                <h2 class="mt-3 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-3xl">
                    Deskripsi Kegiatan
                </h2>


                {{-- Accent --}}
                <div class="mt-5 h-1 w-14 rounded-full bg-amber-400"></div>


                {{-- Description --}}
                <div class="mt-7 text-sm leading-8 text-slate-600 sm:text-base">

                    @if($agenda->description)

                        {!! nl2br(e($agenda->description)) !!}

                    @else

                        <p class="text-slate-400">
                            Deskripsi agenda belum tersedia.
                        </p>

                    @endif

                </div>

            </div>

        </div>


        {{-- =====================================================
            FOOTER ACTION
        ====================================================== --}}
        <div class="flex flex-col gap-4 border-t border-slate-100 bg-slate-50 px-6 py-6 sm:flex-row sm:items-center sm:justify-between sm:px-8">

            <p class="text-sm text-slate-500">
                Informasi kegiatan Perguruan Amaliah
            </p>


            <a
                href="{{ route('agenda.index') }}"
                class="inline-flex items-center justify-center gap-2 rounded-xl bg-emerald-700 px-5 py-3 text-sm font-bold text-white shadow-sm transition hover:bg-emerald-800 hover:shadow-md"
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

                Kembali ke Agenda

            </a>

        </div>

    </article>

</div>

</section>

@endsection
