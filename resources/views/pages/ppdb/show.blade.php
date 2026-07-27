@extends('layouts.app')

@section('content')

{{-- =========================================================
    HERO
========================================================= --}}
<section class="relative overflow-hidden bg-emerald-950 py-20 sm:py-24 lg:py-28">

    {{-- Background Gradient --}}
    <div class="absolute inset-0 bg-gradient-to-br from-emerald-950 via-emerald-900 to-slate-950"></div>

    {{-- Decorative Circle --}}
    <div class="absolute -right-24 -top-24 h-72 w-72 rounded-full bg-emerald-500/10 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">

        <span class="inline-flex items-center rounded-full bg-white/10 px-5 py-2 text-xs font-bold uppercase tracking-widest text-emerald-300 ring-1 ring-white/10 sm:text-sm">
            Penerimaan Peserta Didik Baru
        </span>

        <h1 class="mx-auto mt-6 max-w-4xl text-3xl font-extrabold tracking-tight text-white sm:text-4xl md:text-5xl lg:text-6xl">
            PPDB Perguruan Amaliah
        </h1>

        <p class="mx-auto mt-6 max-w-2xl text-base leading-7 text-emerald-100/80 sm:text-lg sm:leading-8">
            Temukan informasi penerimaan peserta didik baru
            dari seluruh unit pendidikan Perguruan Amaliah.
        </p>

    </div>

</section>


{{-- =========================================================
    CONTENT
========================================================= --}}
<section class="bg-slate-50 py-16 sm:py-20 lg:py-24">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">


        {{-- =====================================================
            FILTER
        ====================================================== --}}
        <div class="mb-10 rounded-2xl bg-white p-5 shadow-sm ring-1 ring-slate-200 sm:mb-12 sm:rounded-3xl sm:p-6">

            <form
                action="{{ route('ppdb.index') }}"
                method="GET"
                class="flex flex-col gap-5 lg:flex-row lg:items-end"
            >

                <div class="w-full flex-1">

                    <label
                        for="unit"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Pilih Unit Pendidikan
                    </label>

                    <select
                        name="unit"
                        id="unit"
                        class="w-full rounded-xl border-slate-300 bg-white px-4 py-3 text-sm text-slate-700 shadow-sm transition focus:border-emerald-600 focus:ring-emerald-600"
                    >

                        <option value="">
                            Semua Unit Pendidikan
                        </option>

                        @foreach($units as $unit)

                            <option
                                value="{{ $unit->id }}"
                                @selected(request('unit') == $unit->id)
                            >
                                {{ $unit->name }}
                            </option>

                        @endforeach

                    </select>

                </div>


                <div class="flex w-full flex-col gap-3 sm:flex-row lg:w-auto">

                    <button
                        type="submit"
                        class="w-full rounded-xl bg-emerald-700 px-7 py-3 text-sm font-bold text-white shadow-sm transition hover:bg-emerald-800 focus:outline-none focus:ring-2 focus:ring-emerald-600 focus:ring-offset-2 sm:w-auto"
                    >
                        Filter
                    </button>

                    @if(request()->filled('unit'))

                        <a
                            href="{{ route('ppdb.index') }}"
                            class="w-full rounded-xl border border-slate-300 px-7 py-3 text-center text-sm font-bold text-slate-700 transition hover:bg-slate-100 sm:w-auto"
                        >
                            Reset
                        </a>

                    @endif

                </div>

            </form>

        </div>


        {{-- =====================================================
            PPDB CARDS
        ====================================================== --}}
        @if($ppdbs->count())

            <div class="grid gap-6 sm:gap-8 md:grid-cols-2 lg:grid-cols-3">

                @foreach($ppdbs as $ppdb)

                    <article
                        class="group flex h-full flex-col overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200 transition duration-300 hover:-translate-y-1 hover:shadow-xl sm:rounded-3xl"
                    >

                        {{-- Header --}}
                        <div class="relative bg-gradient-to-br from-emerald-950 via-emerald-900 to-emerald-800 p-6 text-white sm:p-8">

                            <div class="flex items-start justify-between gap-4">

                                <div class="min-w-0">

                                    <span class="text-xs font-semibold uppercase tracking-wide text-emerald-300">
                                        {{ $ppdb->educationUnit?->name ?? 'Perguruan Amaliah' }}
                                    </span>

                                    <h2 class="mt-3 text-xl font-bold leading-tight sm:text-2xl">
                                        {{ $ppdb->title }}
                                    </h2>

                                </div>


                                @if($ppdb->status === 'open')

                                    <span class="shrink-0 rounded-full bg-emerald-400/20 px-3 py-1 text-xs font-bold text-emerald-200 ring-1 ring-emerald-300/20">
                                        Dibuka
                                    </span>

                                @elseif($ppdb->status === 'upcoming')

                                    <span class="shrink-0 rounded-full bg-amber-400/20 px-3 py-1 text-xs font-bold text-amber-200 ring-1 ring-amber-300/20">
                                        Akan Dibuka
                                    </span>

                                @else

                                    <span class="shrink-0 rounded-full bg-red-400/20 px-3 py-1 text-xs font-bold text-red-200 ring-1 ring-red-300/20">
                                        Ditutup
                                    </span>

                                @endif

                            </div>

                        </div>


                        {{-- Body --}}
                        <div class="flex flex-1 flex-col p-6 sm:p-8">

                            <div class="space-y-5">

                                {{-- Tahun Ajaran --}}
                                <div class="flex items-start gap-4">

                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-700">
                                        <svg
                                            class="h-5 w-5"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                            />
                                        </svg>
                                    </div>

                                    <div>

                                        <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                            Tahun Ajaran
                                        </p>

                                        <p class="mt-1 font-semibold text-slate-800">
                                            {{ $ppdb->academic_year }}
                                        </p>

                                    </div>

                                </div>


                                {{-- Periode --}}
                                @if($ppdb->registration_start || $ppdb->registration_end)

                                    <div class="flex items-start gap-4">

                                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                                            <svg
                                                class="h-5 w-5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                                />
                                            </svg>
                                        </div>

                                        <div>

                                            <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                                Periode Pendaftaran
                                            </p>

                                            <p class="mt-1 text-sm font-semibold leading-6 text-slate-800">

                                                @if($ppdb->registration_start)

                                                    {{ $ppdb->registration_start->translatedFormat('d F Y') }}

                                                @endif

                                                @if($ppdb->registration_start && $ppdb->registration_end)

                                                    <span class="mx-1 text-slate-400">
                                                        —
                                                    </span>

                                                @endif

                                                @if($ppdb->registration_end)

                                                    {{ $ppdb->registration_end->translatedFormat('d F Y') }}

                                                @endif

                                            </p>

                                        </div>

                                    </div>

                                @endif

                            </div>


                            {{-- Description --}}
                            @if($ppdb->description)

                                <div class="mt-6 border-t border-slate-100 pt-6">

                                    <p class="line-clamp-3 text-sm leading-7 text-slate-600">
                                        {{ strip_tags($ppdb->description) }}
                                    </p>

                                </div>

                            @endif


                            {{-- Actions --}}
                            <div class="mt-auto flex flex-col gap-3 pt-8 sm:flex-row">

                                <a
                                    href="{{ route('ppdb.show', $ppdb) }}"
                                    class="flex-1 rounded-xl bg-emerald-700 px-5 py-3 text-center text-sm font-bold text-white transition hover:bg-emerald-800 focus:outline-none focus:ring-2 focus:ring-emerald-600 focus:ring-offset-2"
                                >
                                    Lihat Detail
                                </a>

                                @if($ppdb->status === 'open' && $ppdb->registration_url)

                                    <a
                                        href="{{ $ppdb->registration_url }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="flex-1 rounded-xl bg-amber-500 px-5 py-3 text-center text-sm font-bold text-slate-950 transition hover:bg-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2"
                                    >
                                        Daftar Sekarang
                                    </a>

                                @endif

                            </div>

                        </div>

                    </article>

                @endforeach

            </div>


            {{-- Pagination --}}
            <div class="mt-12 sm:mt-14">
                {{ $ppdbs->links() }}
            </div>


        @else

            {{-- Empty State --}}
            <div class="rounded-2xl bg-white px-6 py-16 text-center shadow-sm ring-1 ring-slate-200 sm:rounded-3xl sm:py-20">

                <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-emerald-50 text-emerald-700">

                    <svg
                        class="h-10 w-10"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M12 14l9-5-9-5-9 5 9 5z"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M5 12v5c3 2 9 2 14 0v-5"
                        />
                    </svg>
                </div>
                <h2 class="mt-6 text-xl font-bold text-slate-900 sm:text-2xl">
                    Belum Ada Informasi PPDB
                </h2>
                <p class="mx-auto mt-3 max-w-lg text-sm leading-7 text-slate-500 sm:text-base">
                    Informasi penerimaan peserta didik baru
                    belum tersedia untuk saat ini.
                </p>
            </div>
        @endif
    </div>
</section>

@endsection