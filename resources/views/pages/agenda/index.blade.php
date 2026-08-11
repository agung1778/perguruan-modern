@extends('layouts.app')

@section('content')

{{-- =========================================================
    HERO / AGENDA
========================================================= --}}
<section class="relative isolate overflow-hidden bg-slate-950">

    {{-- Background --}}
    <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-emerald-950 to-emerald-900"></div>

    {{-- Decorative Glow --}}
    <div class="pointer-events-none absolute -right-32 -top-32 h-96 w-96 rounded-full bg-emerald-500/15 blur-3xl"></div>
    <div class="pointer-events-none absolute -bottom-32 -left-32 h-96 w-96 rounded-full bg-teal-500/10 blur-3xl"></div>

    {{-- Hero Content --}}
    <div class="relative mx-auto max-w-7xl px-5 py-20 sm:px-6 sm:py-24 lg:px-8 lg:py-28">

        <div class="mx-auto max-w-3xl text-center text-white">

            {{-- Badge --}}
            <span class="inline-flex items-center rounded-full border border-emerald-400/20 bg-emerald-500/10 px-5 py-2 text-xs font-bold uppercase tracking-[0.2em] text-emerald-300 backdrop-blur-sm sm:text-sm">
                Kegiatan Perguruan
            </span>

            {{-- Title --}}
            <h1 class="mt-6 text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                Agenda Kegiatan
            </h1>

            {{-- Description --}}
            <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-slate-300 sm:text-lg">
                Informasi kegiatan, acara, dan agenda terbaru
                yang diselenggarakan oleh Perguruan Amaliah.
            </p>

            {{-- Decorative Divider --}}
            <div class="mt-8 flex items-center justify-center gap-3">
                <span class="h-px w-12 bg-emerald-500/40"></span>
                <span class="h-2 w-2 rounded-full bg-amber-400"></span>
                <span class="h-px w-12 bg-emerald-500/40"></span>
            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    AGENDA LIST
========================================================= --}}
<section class="bg-slate-50 py-20 sm:py-24 lg:py-28">

    <div class="mx-auto max-w-5xl px-5 sm:px-6 lg:px-8">

        @if($agendas->isNotEmpty())

            {{-- =================================================
                SECTION HEADER
            ================================================== --}}
            <div class="mx-auto mb-14 max-w-3xl text-center">

                <span class="inline-flex items-center gap-2 text-sm font-bold uppercase tracking-[0.15em] text-emerald-700">
                    <span class="h-2 w-2 rounded-full bg-amber-500"></span>
                    Informasi Kegiatan
                </span>

                <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
                    Agenda Terbaru
                </h2>

                <p class="mx-auto mt-4 max-w-2xl leading-7 text-slate-600">
                    Temukan berbagai kegiatan dan agenda yang diselenggarakan
                    oleh Perguruan Amaliah.
                </p>

            </div>


            {{-- =================================================
                AGENDA LIST
            ================================================== --}}
            <div class="space-y-7">

                @foreach($agendas as $agenda)

                    <article
                        class="group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:border-emerald-200 hover:shadow-xl"
                    >

                        <div class="flex flex-col sm:flex-row">

                            {{-- =================================================
                                DATE CARD
                            ================================================== --}}
                            <div class="relative flex shrink-0 items-center justify-center overflow-hidden bg-gradient-to-br from-emerald-800 to-emerald-950 px-7 py-7 text-white sm:w-36 sm:flex-col sm:px-5">

                                {{-- Decorative --}}
                                <div class="pointer-events-none absolute -right-8 -top-8 h-20 w-20 rounded-full bg-white/5"></div>

                                <div class="relative text-center">

                                    <span class="block text-4xl font-extrabold leading-none sm:text-5xl">
                                        {{ $agenda->date?->format('d') ?? '--' }}
                                    </span>

                                    <span class="mt-2 block text-xs font-bold uppercase tracking-widest text-emerald-200 sm:mt-3">
                                        {{ $agenda->date?->translatedFormat('M Y') ?? 'Tanggal' }}
                                    </span>

                                </div>

                            </div>


                            {{-- =================================================
                                CONTENT
                            ================================================== --}}
                            <div class="flex flex-1 flex-col p-6 sm:p-8">

                                {{-- Title --}}
                                <h2 class="text-xl font-extrabold leading-tight text-slate-900 transition duration-200 group-hover:text-emerald-700 sm:text-2xl">
                                    {{ $agenda->title }}
                                </h2>


                                {{-- Description --}}
                                @if(filled($agenda->description))

                                    <p class="mt-4 text-sm leading-7 text-slate-600 sm:text-base">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($agenda->description), 200) }}
                                    </p>

                                @endif


                                {{-- Location --}}
                                @if(filled($agenda->location))

                                    <div class="mt-5 flex items-start gap-3">

                                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-700">

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
                                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                                />

                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                                                />
                                            </svg>

                                        </div>

                                        <span class="pt-1.5 text-sm leading-6 text-slate-500">
                                            {{ $agenda->location }}
                                        </span>

                                    </div>

                                @endif


                                {{-- Action --}}
                                <div class="mt-7">

                                    <a
                                        href="{{ route('agenda.show', ['agenda' => $agenda]) }}"
                                        class="inline-flex items-center gap-2 rounded-xl bg-emerald-700 px-5 py-3 text-sm font-bold text-white shadow-sm transition duration-200 hover:bg-emerald-800 hover:shadow-md"
                                    >

                                        Lihat Detail

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-1"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"
                                            />
                                        </svg>

                                    </a>

                                </div>

                            </div>

                        </div>

                    </article>

                @endforeach

            </div>


            {{-- =================================================
                PAGINATION
            ================================================== --}}
            @if($agendas->hasPages())

                <div class="mt-14 flex justify-center">
                    {{ $agendas->links() }}
                </div>

            @endif


        @else

            {{-- =================================================
                EMPTY STATE
            ================================================== --}}
            <div class="rounded-3xl border border-slate-200 bg-white px-6 py-20 text-center shadow-sm sm:py-24">

                {{-- Icon --}}
                <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-emerald-50 text-emerald-700">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.8"
                        stroke="currentColor"
                        class="h-9 w-9"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6.75 3.75h10.5A2.25 2.25 0 0 1 19.5 6v12a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 18V6a2.25 2.25 0 0 1 2.25-2.25Z"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8.25 3.75V6h7.5V3.75M8.25 10.5h7.5M8.25 14.25h4.5"
                        />
                    </svg>

                </div>


                <h2 class="mt-6 text-2xl font-extrabold text-slate-900">
                    Belum Ada Agenda
                </h2>


                <p class="mx-auto mt-3 max-w-lg text-sm leading-7 text-slate-500 sm:text-base">
                    Belum ada agenda kegiatan yang tersedia saat ini.
                    Informasi kegiatan akan ditampilkan setelah ditambahkan
                    melalui dashboard admin.
                </p>

            </div>

        @endif

    </div>

</section>

@endsection
