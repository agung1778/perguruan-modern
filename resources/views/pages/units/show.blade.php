@extends('layouts.app')

@section('content')

{{-- =========================================================
HERO
========================================================= --}}

<section class="relative overflow-hidden bg-gradient-to-br from-emerald-950 via-green-900 to-emerald-800">
{{-- Decorative Background --}}
<div class="pointer-events-none absolute inset-0">
    <div class="absolute -right-24 -top-24 h-72 w-72 rounded-full bg-emerald-400/10 blur-3xl"></div>
    <div class="absolute -bottom-32 -left-24 h-80 w-80 rounded-full bg-green-300/10 blur-3xl"></div>
</div>
<div class="relative mx-auto max-w-7xl px-5 py-16 sm:px-6 sm:py-20 lg:px-8 lg:py-24">
    {{-- Breadcrumb --}}
    <nav class="mb-8 flex flex-wrap items-center gap-2 text-sm text-emerald-100/70"aria-label="Breadcrumb">
        <a href="{{ url('/') }}" class="transition hover:text-white">
            Beranda
        </a>
        <span>/</span>
        <a href="{{ route('units.index') }}" class="transition hover:text-white">
            Unit Pendidikan
        </a>
        <span>/</span>
        <span class="font-medium text-white">
            {{ $unit->name }}
        </span>
    </nav>
    {{-- Hero Content --}}
    <div class="max-w-4xl">
        <span class="inline-flex rounded-full border border-emerald-300/20 bg-white/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.2em] text-emerald-200 backdrop-blur-sm">
            {{ $unit->short_name ?? 'Unit Pendidikan' }}
        </span>
        <h1 class="mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
            {{ $unit->name }}
        </h1>
        @if($unit->description)
            <p class="mt-6 max-w-3xl text-base leading-7 text-emerald-50/80 sm:text-lg sm:leading-8">
                {{ Str::limit($unit->description, 300) }}
            </p>
        @endif
    </div>
</div>
</section>

{{-- =========================================================
MAIN CONTENT
========================================================= --}}

<section class="bg-slate-50 py-16 sm:py-20 lg:py-24">
<div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
    {{-- =================================================
        UNIT INFORMATION
    ================================================== --}}
    <div class="grid items-start gap-8 lg:grid-cols-5 lg:gap-12">
        {{-- =================================================
            LEFT : PHOTO
        ================================================== --}}
        <div class="lg:col-span-3">
            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm sm:rounded-3xl">
                @if($unit->photo)
                    <img src="{{ Storage::url($unit->photo) }}" alt="{{ $unit->name }}" loading="lazy" class="h-[280px] w-full object-cover sm:h-[420px] lg:h-[520px]">
                @else
                    <div class="flex h-[280px] items-center justify-center bg-gradient-to-br from-emerald-800 to-green-950 sm:h-[420px] lg:h-[520px]">
                        <div class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-auto h-16 w-16 text-emerald-300/50" >
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15A1.5 1.5 0 0 1 21 4.5v13.125A1.875 1.875 0 0 1 19.125 19.5H4.875A1.875 1.875 0 0 1 3 17.625V4.5A1.5 1.5 0 0 1 4.5 3Z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h9M7.5 11.25h9M7.5 15h5.25"/>
                            </svg>
                            <p class="mt-4 text-sm font-medium text-emerald-100/70">
                                Foto unit belum tersedia
                            </p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        {{-- =================================================
            RIGHT : INFORMATION
        ================================================== --}}
        <div class="lg:col-span-2">
            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:rounded-3xl sm:p-8 lg:p-10">
                {{-- Logo --}}
                <div>
                    @if($unit->logo)
                        <div class="flex h-20 w-20 items-center justify-center overflow-hidden rounded-2xl border border-emerald-100 bg-emerald-50 p-3 sm:h-24 sm:w-24">
                            <img src="{{ Storage::url($unit->logo) }}" alt="Logo {{ $unit->name }}" loading="lazy" class="h-full w-full object-contain">
                        </div>
                    @else
                        <div class="flex h-20 w-20 items-center justify-center rounded-2xl bg-emerald-50 sm:h-24 sm:w-24">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-10 w-10 text-emerald-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18M3 9h18M5 21h14M5 9V5.25A2.25 2.25 0 0 1 7.25 3h9.5A2.25 2.25 0 0 1 19 5.25V9"/>
                            </svg>
                        </div>
                    @endif
                </div>
                {{-- Title --}}
                <div class="mt-7">
                    <span class="text-sm font-bold uppercase tracking-wider text-emerald-600">
                        Tentang Unit
                    </span>
                    <h2 class="mt-2 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                        {{ $unit->name }}
                    </h2>
                </div>
                {{-- Description --}}
                <div class="mt-6 text-sm leading-7 text-slate-600 sm:text-base sm:leading-8">
                    @if($unit->description)
                        {!! nl2br(e($unit->description)) !!}
                    @else
                        <p class="text-slate-500">
                            Informasi mengenai unit pendidikan belum tersedia.
                        </p>
                    @endif
                </div>
                {{-- Website --}}
                @if($unit->website)
                    <div class="mt-8 border-t border-slate-100 pt-8">
                        <p class="mb-3 text-sm font-semibold text-slate-700">
                            Website Resmi
                        </p>
                        <a href="{{ $unit->website }}" target="_blank" rel="noopener noreferrer" class="flex w-full items-center justify-center gap-2 rounded-xl bg-emerald-700 px-5 py-3.5 text-sm font-semibold text-white transition hover:bg-emerald-800 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">
                            <span>
                                Kunjungi Website Sekolah
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                            </svg>
                        </a>
                    </div>
                @endif
                {{-- Back Button --}}
                <a href="{{ route('units.index') }}" class="mt-4 flex w-full items-center justify-center rounded-xl border border-slate-200 bg-white px-5 py-3.5 text-sm font-semibold text-slate-700 transition hover:border-emerald-200 hover:bg-emerald-50 hover:text-emerald-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">
                    ← Kembali ke Unit Pendidikan
                </a>
            </div>
        </div>
    </div>

    {{-- =================================================
        DATA PENDIDIKAN
    ================================================== --}}
    <div class="mt-12 border-t border-slate-200 pt-12 sm:mt-16 sm:pt-16">
        {{-- Section Header --}}
        <div class="max-w-2xl">
            <span class="text-sm font-bold uppercase tracking-wider text-emerald-600">
                Data Pendidikan
            </span>
            <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                Statistik Siswa & Guru
            </h2>
            <p class="mt-4 text-sm leading-7 text-slate-600 sm:text-base">
                Informasi jumlah siswa dan tenaga pendidik yang terdaftar
                pada {{ $unit->name }}.
            </p>
        </div>

        {{-- =================================================
            TOTAL SISWA & GURU
        ================================================== --}}
        <div class="mt-8 grid gap-5 sm:grid-cols-2">
            {{-- Total Siswa --}}
            <div class="rounded-2xl border border-emerald-100 bg-white p-6 shadow-sm sm:p-7">
                <div class="flex items-center gap-5">
                    <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-7 w-7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493 M15 19.128v-.003c0-.083-.002-.166-.005-.248 A6.72 6.72 0 0 0 9.75 12.75 a6.72 6.72 0 0 0-5.245 6.127 c-.003.082-.005.165-.005.248v.003 m10.5 0a9.38 9.38 0 0 1-3.75.75 9.38 9.38 0 0 1-3.75-.75 m7.5 0a24.255 24.255 0 0 1-7.5 0 M12 12.75a3.375 3.375 0 1 0 0-6.75 3.375 3.375 0 0 0 0 6.75Z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-emerald-600">
                            Total Siswa
                        </p>
                        <p class="mt-1 text-3xl font-extrabold text-emerald-800">
                            {{ number_format($unit->students_count ?? 0) }}
                        </p>
                        <p class="mt-1 text-sm text-slate-500">
                            Siswa terdaftar di unit pendidikan
                        </p>
                    </div>
                </div>
            </div>
            {{-- Total Guru --}}
            <div class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm sm:p-7">
                <div class="flex items-center gap-5">
                    <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-green-50 text-green-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"class="h-7 w-7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.75-.952 4.125 4.125 0 0 0-7.533-2.493 M18 18.72v-.003c0-.083-.002-.166-.005-.248 A6.72 6.72 0 0 0 12.75 12.75 a6.72 6.72 0 0 0-5.245 6.127 c-.003.082-.005.165-.005.248v.003 m10.5 0a24.255 24.255 0 0 1-7.5 0 M15.75 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm6.75 3.375 a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0ZM3.75 9.75 a2.625 2.625 0 1 0 5.25 0 2.625 2.625 0 0 0-5.25 0Z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-green-600">
                            Total Guru
                        </p>
                        <p class="mt-1 text-3xl font-extrabold text-green-800">
                            {{ number_format($unit->teachers_count ?? 0) }}
                        </p>
                        <p class="mt-1 text-sm text-slate-500">
                            Tenaga pendidik terdaftar
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- =================================================
            DETAIL DATA
        ================================================== --}}
        <div class="mt-8 grid gap-6 lg:grid-cols-2">
            {{-- =================================================
                RINCIAN SISWA
            ================================================== --}}
            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                <div class="border-b border-slate-100 bg-slate-50 px-6 py-5">
                    <h3 class="font-bold text-slate-900">
                        Rincian Siswa
                    </h3>
                    <p class="mt-1 text-sm text-slate-500">
                        Jumlah siswa berdasarkan angkatan.
                    </p>
                </div>
                @if($unit->students && $unit->students->count())
                    <div class="divide-y divide-slate-100">
                        @foreach($unit->students ->groupBy('generation') ->sortKeysDesc() as $generation => $students)
                            <div class="flex items-center justify-between gap-4 px-6 py-5">
                                <div>
                                    <p class="font-semibold text-slate-800">
                                        Angkatan {{ $generation ?: 'Tidak Diketahui' }}
                                    </p>
                                    <p class="mt-1 text-xs text-slate-500">
                                        Jumlah siswa terdaftar
                                    </p>
                                </div>
                                <span class="shrink-0 rounded-full bg-emerald-50 px-3 py-1.5 text-sm font-bold text-emerald-700">
                                    {{ number_format($students->count()) }} Siswa
                                </span>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="px-6 py-10 text-center">
                        <p class="text-sm text-slate-500">
                            Belum ada data siswa yang tersedia.
                        </p>
                    </div>
                @endif
            </div>
            {{-- =================================================
                RINCIAN GURU
            ================================================== --}}
            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                <div class="border-b border-slate-100 bg-slate-50 px-6 py-5">
                    <h3 class="font-bold text-slate-900">
                        Rincian Guru
                    </h3>
                    <p class="mt-1 text-sm text-slate-500">
                        Jumlah guru berdasarkan status kepegawaian.
                    </p>
                </div>
                @if($unit->teachers && $unit->teachers->count())
                    <div class="divide-y divide-slate-100">
                        @foreach( $unit->teachers ->groupBy('status') as $status => $teachers)
                            <div class="flex items-center justify-between gap-4 px-6 py-5">
                                <div>
                                    <p class="font-semibold text-slate-800">
                                        {{ $status ?: 'Status Belum Ditentukan' }}
                                    </p>
                                    <p class="mt-1 text-xs text-slate-500">
                                        Status tenaga pendidik
                                    </p>
                                </div>
                                <span class="shrink-0 rounded-full bg-green-50 px-3 py-1.5 text-sm font-bold text-green-700">
                                    {{ number_format($teachers->count()) }} Guru
                                </span>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="px-6 py-10 text-center">
                        <p class="text-sm text-slate-500">
                            Belum ada data guru yang tersedia.
                        </p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

</section>

@endsection
