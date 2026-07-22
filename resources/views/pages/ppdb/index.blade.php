@extends('layouts.app')

@section('content')

{{-- =========================================================
    HERO
========================================================= --}}
<section class="relative overflow-hidden bg-blue-950 py-24">
    <div class="absolute inset-0 bg-gradient-to-br from-blue-950 via-blue-900 to-slate-950"></div>

    <div class="relative max-w-7xl mx-auto px-6 text-center text-white">
        <span class="inline-flex items-center rounded-full bg-white/10 px-5 py-2 text-sm font-semibold text-yellow-400 ring-1 ring-white/20">
            Penerimaan Peserta Didik Baru
        </span>

        <h1 class="mt-6 text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight">
            PPDB Perguruan Amaliah
        </h1>

        <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-slate-300">
            Temukan informasi penerimaan peserta didik baru
            dari seluruh unit pendidikan Perguruan Amaliah.
        </p>
    </div>
</section>


{{-- =========================================================
    CONTENT
========================================================= --}}
<section class="bg-slate-50 py-20">

    <div class="max-w-7xl mx-auto px-6">

        {{-- Filter --}}
        <div class="mb-12 rounded-3xl bg-white p-6 shadow-sm ring-1 ring-slate-200">

            <form
                action="{{ route('ppdb.index') }}"
                method="GET"
                class="flex flex-col gap-5 md:flex-row md:items-end"
            >

                <div class="flex-1">

                    <label
                        for="unit"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Pilih Unit Pendidikan
                    </label>

                    <select
                        name="unit"
                        id="unit"
                        class="w-full rounded-xl border-slate-300 px-4 py-3 text-slate-700 focus:border-blue-900 focus:ring-blue-900"
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


                <div class="flex gap-3">

                    <button
                        type="submit"
                        class="rounded-xl bg-blue-900 px-7 py-3 font-semibold text-white transition hover:bg-blue-800"
                    >
                        Filter
                    </button>

                    @if(request()->filled('unit'))

                        <a
                            href="{{ route('ppdb.index') }}"
                            class="rounded-xl border border-slate-300 px-7 py-3 font-semibold text-slate-700 transition hover:bg-slate-100"
                        >
                            Reset
                        </a>

                    @endif

                </div>

            </form>

        </div>


        {{-- PPDB Cards --}}
        @if($ppdbs->count())

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

                @foreach($ppdbs as $ppdb)

                    <article
                        class="group flex h-full flex-col overflow-hidden rounded-3xl bg-white shadow-sm ring-1 ring-slate-200 transition duration-300 hover:-translate-y-1 hover:shadow-xl"
                    >

                        {{-- Header --}}
                        <div class="relative bg-gradient-to-br from-blue-950 to-blue-800 p-8 text-white">

                            <div class="flex items-start justify-between gap-4">

                                <div>

                                    <span class="text-sm font-medium text-blue-200">
                                        {{ $ppdb->educationUnit?->name ?? 'Perguruan Amaliah' }}
                                    </span>

                                    <h2 class="mt-3 text-2xl font-bold leading-tight">
                                        {{ $ppdb->title }}
                                    </h2>

                                </div>


                                @if($ppdb->status === 'open')

                                    <span class="shrink-0 rounded-full bg-emerald-500/20 px-3 py-1 text-xs font-bold text-emerald-300 ring-1 ring-emerald-400/30">
                                        Dibuka
                                    </span>

                                @elseif($ppdb->status === 'upcoming')

                                    <span class="shrink-0 rounded-full bg-yellow-500/20 px-3 py-1 text-xs font-bold text-yellow-300 ring-1 ring-yellow-400/30">
                                        Akan Dibuka
                                    </span>

                                @else

                                    <span class="shrink-0 rounded-full bg-red-500/20 px-3 py-1 text-xs font-bold text-red-300 ring-1 ring-red-400/30">
                                        Ditutup
                                    </span>

                                @endif

                            </div>

                        </div>


                        {{-- Body --}}
                        <div class="flex flex-1 flex-col p-8">

                            <div class="space-y-4">

                                <div class="flex items-start gap-4">

                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-900">
                                        📅
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


                                @if($ppdb->registration_start || $ppdb->registration_end)

                                    <div class="flex items-start gap-4">

                                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-yellow-50 text-yellow-600">
                                            🗓️
                                        </div>

                                        <div>

                                            <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                                                Periode Pendaftaran
                                            </p>

                                            <p class="mt-1 font-semibold text-slate-800">

                                                @if($ppdb->registration_start)

                                                    {{ $ppdb->registration_start->translatedFormat('d F Y') }}

                                                @endif

                                                @if($ppdb->registration_start && $ppdb->registration_end)

                                                    <span class="text-slate-400">
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
                            <div class="mt-auto flex gap-3 pt-8">

                                <a
                                    href="{{ route('ppdb.show', $ppdb) }}"
                                    class="flex-1 rounded-xl bg-blue-900 px-5 py-3 text-center text-sm font-bold text-white transition hover:bg-blue-800"
                                >
                                    Lihat Detail
                                </a>

                                @if($ppdb->status === 'open' && $ppdb->registration_url)

                                    <a
                                        href="{{ $ppdb->registration_url }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="flex-1 rounded-xl bg-yellow-500 px-5 py-3 text-center text-sm font-bold text-slate-950 transition hover:bg-yellow-400"
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
            <div class="mt-14">
                {{ $ppdbs->links() }}
            </div>

        @else

            {{-- Empty State --}}
            <div class="rounded-3xl bg-white px-6 py-20 text-center shadow-sm ring-1 ring-slate-200">

                <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-blue-50 text-4xl">
                    🎓
                </div>

                <h2 class="mt-6 text-2xl font-bold text-slate-900">
                    Belum Ada Informasi PPDB
                </h2>

                <p class="mx-auto mt-3 max-w-lg text-slate-500">
                    Informasi penerimaan peserta didik baru
                    belum tersedia untuk saat ini.
                </p>

            </div>

        @endif

    </div>

</section>

@endsection