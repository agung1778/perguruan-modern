@extends('layouts.app')

@section('content')

{{-- =========================================================
    HERO
========================================================= --}}
<section class="relative overflow-hidden bg-gradient-to-br from-emerald-950 via-emerald-900 to-emerald-800">

    <div class="absolute inset-0">
        <div class="absolute -left-32 top-0 h-80 w-80 rounded-full bg-emerald-400/10 blur-3xl"></div>
        <div class="absolute -right-32 bottom-0 h-96 w-96 rounded-full bg-green-300/10 blur-3xl"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-6 py-20 lg:px-8">

        <div class="mx-auto max-w-4xl text-center">

            <span
                class="inline-flex rounded-full border border-emerald-300/20 bg-white/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.2em] text-emerald-200 backdrop-blur"
            >
                PPDB {{ $ppdb->educationUnit->name }}
            </span>

            <h1 class="mt-6 text-4xl font-extrabold tracking-tight text-white lg:text-6xl">
                {{ $ppdb->title }}
            </h1>

            <p class="mt-5 text-lg text-emerald-100">
                Tahun Ajaran
                <strong>{{ $ppdb->academic_year }}</strong>
            </p>

        </div>

    </div>

</section>


{{-- =========================================================
    CONTENT
========================================================= --}}
<section class="bg-slate-50 py-16">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="grid gap-10 lg:grid-cols-3">

            {{-- =====================================================
                MAIN CONTENT
            ====================================================== --}}
            <div class="lg:col-span-2">

                <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm">

                    <div class="mb-8">

                        <span class="text-sm font-bold uppercase tracking-wider text-emerald-600">
                            Informasi PPDB
                        </span>

                        <h2 class="mt-2 text-3xl font-bold text-slate-900">
                            {{ $ppdb->title }}
                        </h2>

                    </div>

                    <div
                        class="prose prose-slate max-w-none prose-headings:text-slate-900 prose-a:text-emerald-700"
                    >
                        {!! $ppdb->description !!}
                    </div>

                </div>

            </div>


            {{-- =====================================================
                SIDEBAR
            ====================================================== --}}
            <div>

                <div class="sticky top-24 space-y-6">

                    {{-- INFO --}}
                    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">

                        <h3 class="text-lg font-bold text-slate-900">
                            Informasi Pendaftaran
                        </h3>

                        <div class="mt-6 space-y-5">

                            <div>

                                <p class="text-xs uppercase tracking-wider text-slate-500">
                                    Unit Pendidikan
                                </p>

                                <p class="mt-1 font-semibold text-slate-800">
                                    {{ $ppdb->educationUnit->name }}
                                </p>

                            </div>

                            <div>

                                <p class="text-xs uppercase tracking-wider text-slate-500">
                                    Tahun Ajaran
                                </p>

                                <p class="mt-1 font-semibold text-slate-800">
                                    {{ $ppdb->academic_year }}
                                </p>

                            </div>

                            <div>

                                <p class="text-xs uppercase tracking-wider text-slate-500">
                                    Periode Pendaftaran
                                </p>

                                <p class="mt-1 font-semibold text-slate-800">

                                    @if($ppdb->registration_start)
                                        {{ $ppdb->registration_start->translatedFormat('d F Y') }}
                                    @endif

                                    -

                                    @if($ppdb->registration_end)
                                        {{ $ppdb->registration_end->translatedFormat('d F Y') }}
                                    @endif

                                </p>

                            </div>

                        </div>

                        @if($ppdb->registration_url)

                            <a
                                href="{{ $ppdb->registration_url }}"
                                target="_blank"
                                class="mt-8 flex w-full items-center justify-center rounded-xl bg-emerald-700 px-6 py-3 font-bold text-white transition hover:bg-emerald-800"
                            >
                                Daftar Sekarang
                            </a>

                        @endif

                    </div>


                    {{-- PPDB LAIN --}}
                    @if($related->count())

                        <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">

                            <h3 class="text-lg font-bold text-slate-900">
                                PPDB Unit Lain
                            </h3>

                            <div class="mt-6 space-y-4">

                                @foreach($related as $item)

                                    <a
                                        href="{{ route('ppdb.show', $item) }}"
                                        class="group block rounded-2xl border border-slate-200 p-4 transition hover:border-emerald-300 hover:bg-emerald-50"
                                    >

                                        <p
                                            class="font-semibold text-slate-900 transition group-hover:text-emerald-700"
                                        >
                                            {{ $item->educationUnit->name }}
                                        </p>

                                        <p class="mt-1 text-sm text-slate-500">
                                            Tahun {{ $item->academic_year }}
                                        </p>

                                    </a>

                                @endforeach

                            </div>

                        </div>

                    @endif

                </div>

            </div>

        </div>

    </div>

</section>

@endsection