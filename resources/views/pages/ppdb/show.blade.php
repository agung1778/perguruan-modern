@extends('layouts.app')

@section('content')

{{-- =========================================================
    HERO
========================================================= --}}
<section class="relative overflow-hidden bg-blue-950 py-24">

    <div class="absolute inset-0 bg-gradient-to-br from-blue-950 via-blue-900 to-slate-950"></div>

    <div class="relative mx-auto max-w-5xl px-6 text-white">

        <a
            href="{{ route('ppdb.index') }}"
            class="inline-flex items-center gap-2 text-sm font-semibold text-blue-200 transition hover:text-yellow-400"
        >
            ← Kembali ke PPDB
        </a>

        <div class="mt-8">

            <span class="text-sm font-semibold uppercase tracking-wider text-yellow-400">
                {{ $ppdb->educationUnit?->name }}
            </span>

            <h1 class="mt-4 text-4xl font-bold md:text-5xl">
                {{ $ppdb->title }}
            </h1>

            <p class="mt-5 text-lg text-slate-300">
                Tahun Ajaran {{ $ppdb->academic_year }}
            </p>

        </div>

    </div>

</section>


{{-- =========================================================
    MAIN CONTENT
========================================================= --}}
<section class="bg-slate-50 py-20">

    <div class="mx-auto grid max-w-7xl gap-10 px-6 lg:grid-cols-3">


        {{-- Main --}}
        <article class="lg:col-span-2">

            <div class="rounded-3xl bg-white p-8 shadow-sm ring-1 ring-slate-200 md:p-10">


                {{-- Status --}}
                <div class="flex flex-wrap items-center justify-between gap-4 border-b border-slate-100 pb-8">

                    <div>

                        <p class="text-sm font-medium text-slate-500">
                            Status Pendaftaran
                        </p>

                        <div class="mt-2">

                            @if($ppdb->status === 'open')

                                <span class="inline-flex rounded-full bg-emerald-100 px-4 py-2 text-sm font-bold text-emerald-700">
                                    ● Pendaftaran Dibuka
                                </span>

                            @elseif($ppdb->status === 'upcoming')

                                <span class="inline-flex rounded-full bg-yellow-100 px-4 py-2 text-sm font-bold text-yellow-700">
                                    ● Akan Dibuka
                                </span>

                            @else

                                <span class="inline-flex rounded-full bg-red-100 px-4 py-2 text-sm font-bold text-red-700">
                                    ● Pendaftaran Ditutup
                                </span>

                            @endif

                        </div>

                    </div>

                </div>


                {{-- Description --}}
                @if($ppdb->description)

                    <div class="mt-10">

                        <h2 class="text-2xl font-bold text-slate-900">
                            Informasi PPDB
                        </h2>

                        <div class="prose prose-slate mt-6 max-w-none">
                            {!! $ppdb->description !!}
                        </div>

                    </div>

                @endif


                {{-- Requirements --}}
                @if($ppdb->requirements)

                    <div class="mt-12 border-t border-slate-100 pt-10">

                        <h2 class="text-2xl font-bold text-slate-900">
                            Persyaratan Pendaftaran
                        </h2>

                        <div class="prose prose-slate mt-6 max-w-none">
                            {!! $ppdb->requirements !!}
                        </div>

                    </div>

                @endif


                {{-- Schedule --}}
                @if($ppdb->schedule)

                    <div class="mt-12 border-t border-slate-100 pt-10">

                        <h2 class="text-2xl font-bold text-slate-900">
                            Jadwal Pendaftaran
                        </h2>

                        <div class="prose prose-slate mt-6 max-w-none">
                            {!! $ppdb->schedule !!}
                        </div>

                    </div>

                @endif

            </div>

        </article>


        {{-- Sidebar --}}
        <aside class="space-y-6">


            {{-- Registration --}}
            <div class="rounded-3xl bg-white p-8 shadow-sm ring-1 ring-slate-200">

                <h3 class="text-xl font-bold text-slate-900">
                    Pendaftaran
                </h3>


                @if($ppdb->registration_start || $ppdb->registration_end)

                    <div class="mt-6 space-y-5">

                        @if($ppdb->registration_start)

                            <div>

                                <p class="text-sm text-slate-500">
                                    Mulai Pendaftaran
                                </p>

                                <p class="mt-1 font-bold text-slate-900">
                                    {{ $ppdb->registration_start->translatedFormat('d F Y') }}
                                </p>

                            </div>

                        @endif


                        @if($ppdb->registration_end)

                            <div>

                                <p class="text-sm text-slate-500">
                                    Batas Pendaftaran
                                </p>

                                <p class="mt-1 font-bold text-slate-900">
                                    {{ $ppdb->registration_end->translatedFormat('d F Y') }}
                                </p>

                            </div>

                        @endif

                    </div>

                @endif


                @if($ppdb->status === 'open' && $ppdb->registration_url)

                    <a
                        href="{{ $ppdb->registration_url }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="mt-8 block w-full rounded-xl bg-yellow-500 px-6 py-4 text-center font-bold text-slate-950 transition hover:bg-yellow-400"
                    >
                        Daftar Sekarang
                    </a>

                @elseif($ppdb->status === 'upcoming')

                    <div class="mt-8 rounded-xl bg-yellow-50 p-4 text-center text-sm font-semibold text-yellow-700">
                        Pendaftaran belum dibuka.
                    </div>

                @else

                    <div class="mt-8 rounded-xl bg-slate-100 p-4 text-center text-sm font-semibold text-slate-500">
                        Pendaftaran telah ditutup.
                    </div>

                @endif

            </div>


            {{-- Contact --}}
            @if($ppdb->contact)

                <div class="rounded-3xl bg-blue-950 p-8 text-white">

                    <h3 class="text-xl font-bold">
                        Informasi Kontak
                    </h3>

                    <div class="mt-5 whitespace-pre-line text-sm leading-7 text-blue-100">
                        {{ $ppdb->contact }}
                    </div>

                </div>

            @endif


            {{-- Related PPDB --}}
            @if($relatedPpdbs->count())

                <div class="rounded-3xl bg-white p-8 shadow-sm ring-1 ring-slate-200">

                    <h3 class="text-xl font-bold text-slate-900">
                        PPDB Lainnya
                    </h3>

                    <div class="mt-6 space-y-5">

                        @foreach($relatedPpdbs as $item)

                            <a
                                href="{{ route('ppdb.show', $item) }}"
                                class="group block border-b border-slate-100 pb-5 last:border-0 last:pb-0"
                            >

                                <p class="font-semibold text-slate-800 transition group-hover:text-blue-900">
                                    {{ $item->title }}
                                </p>

                                <p class="mt-1 text-sm text-slate-500">
                                    {{ $item->academic_year }}
                                </p>

                            </a>

                        @endforeach

                    </div>

                </div>

            @endif

        </aside>

    </div>

</section>

@endsection