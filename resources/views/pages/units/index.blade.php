@extends('layouts.app')

@section('content')

{{-- =========================================================
    HERO
========================================================= --}}
<section class="relative overflow-hidden bg-emerald-950">
    {{-- Background --}}
    <div class="absolute inset-0 bg-gradient-to-br from-emerald-950 via-emerald-900 to-slate-950"></div>
    {{-- Decorative Background --}}
    <div class="pointer-events-none absolute inset-0">
        <div class="absolute -right-32 -top-32 h-80 w-80 rounded-full bg-emerald-400/10 blur-3xl"></div>
        <div class="absolute -bottom-32 -left-32 h-80 w-80 rounded-full bg-emerald-300/10 blur-3xl"></div>
        <div class="absolute left-1/2 top-1/2 h-96 w-96 -translate-x-1/2 -translate-y-1/2 rounded-full bg-emerald-500/5 blur-3xl"></div>
    </div>
    {{-- Hero Content --}}
    <div class="relative mx-auto max-w-7xl px-5 py-20 text-center sm:px-6 sm:py-24 lg:px-8 lg:py-28">
        <span class="inline-flex items-center rounded-full border border-emerald-300/20 bg-white/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.2em] text-emerald-200 backdrop-blur-sm sm:text-sm">
            Pendidikan
        </span>
        <h1 class="mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
            Unit Pendidikan
        </h1>
        <p class="mx-auto mt-6 max-w-2xl text-base leading-7 text-emerald-50/80 sm:text-lg sm:leading-8">
            Kenali berbagai unit pendidikan yang berada di bawah naungan
            Perguruan Amaliah dan temukan informasi lengkap mengenai
            setiap jenjang pendidikan.
        </p>
    </div>
</section>
{{-- =========================================================
    UNIT PENDIDIKAN
========================================================= --}}
<section class="bg-slate-50 py-16 sm:py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="mx-auto max-w-2xl text-center">
            <span class="text-sm font-bold uppercase tracking-[0.15em] text-emerald-600">
                Pilihan Pendidikan
            </span>
            <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                Temukan Unit Pendidikan Kami
            </h2>
            <div class="mx-auto mt-5 h-1 w-14 rounded-full bg-emerald-600"></div>
            <p class="mt-5 text-sm leading-7 text-slate-600 sm:text-base">
                Pilih unit pendidikan untuk melihat informasi lebih lengkap
                mengenai profil, statistik siswa, tenaga pendidik, dan informasi lainnya.
            </p>
        </div>
        {{-- Grid Unit --}}
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:mt-16 lg:grid-cols-3 lg:gap-8">

            @forelse($units as $unit)

                @php
                    $studentStats = $unit->student_statistics ?? null;

                    $totalTeachers = $unit->teachers_count ?? 0;

                    $totalTeachersActive = $unit->teachers
                        ? $unit->teachers->where('is_active', true)->count()
                        : 0;

                    $totalGuru = $unit->teachers
                        ? $unit->teachers
                            ->where('type', 'teacher')
                            ->where('is_active', true)
                            ->count()
                        : 0;

                    $totalStaff = $unit->teachers
                        ? $unit->teachers
                            ->where('type', 'staff')
                            ->where('is_active', true)
                            ->count()
                        : 0;
                @endphp

                {{-- =================================================
                    UNIT CARD
                ================================================== --}}
                <article class="group flex h-full flex-col overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">
                    {{-- Photo --}}
                    <div class="relative h-56 overflow-hidden bg-emerald-950 sm:h-60">
                        @if($unit->photo)
                            <img src="{{ Storage::url($unit->photo) }}" alt="{{ $unit->name }}" loading="lazy" decoding="async"class="h-full w-full object-cover transition duration-500 ease-out group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-emerald-950/70 via-emerald-950/10 to-transparent"></div>
                        @else
                            <div class="flex h-full items-center justify-center bg-gradient-to-br from-emerald-800 via-emerald-900 to-slate-950">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-16 w-16 text-emerald-300/40" >
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15A1.5 1.5 0 0 1 21 4.5v13.125A1.875 1.875 0 0 1 19.125 19.5H4.875A1.875 1.875 0 0 1 3 17.625V4.5A1.5 1.5 0 0 1 4.5 3Z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h9M7.5 11.25h9M7.5 15h5.25"/>
                                </svg>
                            </div>
                        @endif
                    </div>
                    {{-- Content --}}
                    <div class="relative flex flex-1 flex-col px-5 pb-7 sm:px-7">
                        {{-- Logo --}}
                        <div class="-mt-12 flex justify-center">
                            <div class="flex h-24 w-24 items-center justify-center overflow-hidden rounded-2xl border-4 border-white bg-white p-3 shadow-lg sm:h-28 sm:w-28">
                                @if($unit->logo)
                                    <img src="{{ Storage::url($unit->logo) }}" alt="Logo {{ $unit->name }}" loading="lazy" decoding="async" class="h-full w-full object-contain" >
                                @else
                                    <div class="flex h-full w-full items-center justify-center rounded-xl bg-emerald-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-10 w-10 text-emerald-600">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18M3 9h18M5 21h14M5 9V5.25A2.25 2.25 0 0 1 7.25 3h9.5A2.25 2.25 0 0 1 19 5.25V9"/>
                                        </svg>
                                    </div>
                                @endif
                            </div>
                        </div>
                        {{-- Name --}}
                        <div class="mt-6 text-center">
                            <h2 class="text-xl font-bold tracking-tight text-slate-900 sm:text-2xl">
                                {{ $unit->name }}
                            </h2>
                            @if($unit->short_name)
                                <p class="mt-1 text-sm font-semibold text-emerald-600">
                                    {{ $unit->short_name }}
                                </p>
                            @endif
                        </div>
                        {{-- Description --}}
                        <p class="mt-4 min-h-[4.5rem] text-center text-sm leading-7 text-slate-600">
                            @if($unit->description)
                                {{ Str::limit($unit->description, 120) }}
                            @else
                                Informasi mengenai unit pendidikan belum tersedia.
                            @endif
                        </p>
                        {{-- =================================================
                            STATISTIK
                        ================================================== --}}
                        <div class="mt-6 grid grid-cols-3 gap-2">
                            {{-- Siswa --}}
                            <div class="rounded-xl border border-emerald-100 bg-emerald-50 p-3 text-center">
                                <p class="text-xl font-extrabold text-emerald-700">
                                    {{ number_format($studentStats->total ?? 0) }}
                                </p>
                                <p class="mt-1 text-[11px] font-medium text-slate-600 sm:text-xs">
                                    Siswa
                                </p>
                            </div>
                            {{-- Guru --}}
                            <div class="rounded-xl border border-green-100 bg-green-50 p-3 text-center">
                                <p class="text-xl font-extrabold text-green-700">
                                    {{ number_format($totalGuru) }}
                                </p>
                                <p class="mt-1 text-[11px] font-medium text-slate-600 sm:text-xs">
                                    Guru
                                </p>
                            </div>
                            {{-- Staff --}}
                            <div class="rounded-xl border border-blue-100 bg-blue-50 p-3 text-center">
                                <p class="text-xl font-extrabold text-blue-700">
                                    {{ number_format($totalStaff) }}
                                </p>
                                <p class="mt-1 text-[11px] font-medium text-slate-600 sm:text-xs">
                                    Staff
                                </p>
                            </div>
                        </div>
                        {{-- Total Tenaga Pendidik --}}
                        <div class="mt-3 rounded-xl border border-slate-200 bg-slate-50 p-3 text-center">
                            <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">
                                Total Tenaga Pendidik
                            </p>
                            <p class="mt-1 text-lg font-extrabold text-emerald-700">
                                {{ number_format($totalTeachersActive) }}
                            </p>
                        </div>
                        {{-- Button --}}
                        <a href="{{ route('units.show', $unit) }}" class="mt-6 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-emerald-700 px-5 py-3 text-sm font-bold text-white transition duration-200 hover:bg-emerald-800 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">
                            <span>
                                Lihat Detail
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                            </svg>
                        </a>
                    </div>
                </article>
            @empty
                {{-- Empty State --}}
                <div class="col-span-full">
                    <div class="rounded-3xl border border-dashed border-slate-300 bg-white px-6 py-20 text-center shadow-sm">
                        <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-9 w-9" >
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 6.75A2.25 2.25 0 0 1 6.75 4.5h10.5a2.25 2.25 0 0 1 2.25 2.25v10.5a2.25 2.25 0 0 1-2.25 2.25H6.75a2.25 2.25 0 0 1-2.25-2.25V6.75Z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9h7.5M8.25 12h7.5M8.25 15h4.5"/>
                            </svg>
                        </div>
                        <h3 class="mt-6 text-xl font-bold text-slate-900">
                            Belum Ada Unit Pendidikan
                        </h3>
                        <p class="mx-auto mt-3 max-w-md text-sm leading-7 text-slate-500 sm:text-base">
                            Informasi unit pendidikan belum tersedia saat ini.
                        </p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection