@extends('layouts.app')

@section('content')
{{-- =========================================================
HERO CONTACT
========================================================= --}}
<section class="relative isolate overflow-hidden bg-gradient-to-br from-emerald-950 via-emerald-900 to-green-800">
{{-- Background Decoration --}}
<div class="pointer-events-none absolute inset-0">
    <div class="absolute -left-32 top-10 h-96 w-96 rounded-full bg-emerald-400/10 blur-3xl"></div>
    <div class="absolute -right-32 bottom-0 h-96 w-96 rounded-full bg-green-300/10 blur-3xl"></div>
    <div class="absolute left-1/2 top-1/2 h-72 w-72 -translate-x-1/2 -translate-y-1/2 rounded-full bg-white/5 blur-3xl"></div>
</div>
{{-- Hero Content --}}
<div class="relative mx-auto max-w-7xl px-5 py-24 sm:px-6 sm:py-28 lg:px-8 lg:py-32">
    <div class="mx-auto max-w-3xl text-center text-white">
        {{-- Badge --}}
        <span class="inline-flex items-center gap-2 rounded-full border border-emerald-300/20 bg-white/10 px-5 py-2.5 text-xs font-bold uppercase tracking-[0.2em] text-emerald-200 shadow-lg backdrop-blur-md sm:text-sm">
            <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
            Hubungi Kami
        </span>
        {{-- Title --}}
        <h1 class="mt-7 text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
            Mari Terhubung
            <span class="block text-emerald-300">
                Bersama Kami
            </span>
        </h1>
        {{-- Description --}}
        <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-emerald-50/80 sm:text-lg">
            Jangan ragu menghubungi Perguruan Amaliah untuk mendapatkan
            informasi mengenai pendidikan, pendaftaran, kegiatan sekolah,
            maupun kerja sama.
        </p>
    </div>
</div>
</section>

{{-- =========================================================
CONTACT INFORMATION
========================================================= --}}
<section class="relative bg-slate-50 py-20 sm:py-24 lg:py-28">
<div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
    {{-- Section Header --}}
    <div class="mx-auto max-w-2xl text-center">
        <span class="text-sm font-bold uppercase tracking-[0.2em] text-emerald-600">
            Informasi Kontak
        </span>
        <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
            Kami Siap Membantu Anda
        </h2>
        <p class="mt-4 leading-7 text-slate-600">
            Hubungi kami melalui informasi di bawah ini atau kunjungi
            lokasi Perguruan Amaliah secara langsung.
        </p>
    </div>
    {{-- Main Grid --}}
    <div class="mt-14 grid gap-8 lg:grid-cols-5 lg:gap-10">
        {{-- =================================================
            CONTACT INFO
        ================================================= --}}
        <div class="lg:col-span-2">
            <div class="h-full rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
                {{-- Header --}}
                <div>
                    <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-100 text-emerald-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5H4.5a2.25 2.25 0 0 0-2.25 2.25m19.5 0-8.69 5.794a1.125 1.125 0 0 1-1.247 0L2.25 6.75"/>
                        </svg>
                    </div>
                    <h2 class="mt-6 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                        Informasi Kontak
                    </h2>
                    <p class="mt-3 text-sm leading-7 text-slate-500 sm:text-base">
                        Silakan hubungi Perguruan Amaliah melalui
                        informasi kontak yang tersedia.
                    </p>
                </div>
                {{-- Contact List --}}
                <div class="mt-8 space-y-4">
                    {{-- ADDRESS --}}
                    <div class="group rounded-2xl border border-slate-100 bg-slate-50 p-5 transition duration-300 hover:border-emerald-100 hover:bg-emerald-50/50">
                        <div class="flex gap-4">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700 transition group-hover:bg-emerald-600 group-hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-5 w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round"d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/>
                                </svg>
                            </div>
                            <div class="min-w-0">
                                <h3 class="font-bold text-slate-900">
                                    Alamat
                                </h3>
                                <p class="mt-1 text-sm leading-6 text-slate-500">
                                    {{ $website?->address ?? 'Alamat belum tersedia.' }}
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- PHONE --}}
                    <div class="group rounded-2xl border border-slate-100 bg-slate-50 p-5 transition duration-300 hover:border-emerald-100 hover:bg-emerald-50/50">
                        <div class="flex gap-4">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700 transition group-hover:bg-emerald-600 group-hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-5 w-5" >
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.967-.852-1.096l-4.423-1.14a1.125 1.125 0 0 0-1.173.417l-.97 1.293a1.125 1.125 0 0 1-1.21.36 12.035 12.035 0 0 1-7.16-7.16 1.125 1.125 0 0 1 .36-1.21l1.293-.97c.36-.27.52-.738.417-1.173l-1.14-4.423A1.125 1.125 0 0 0 5.622 2.25H4.25A2.25 2.25 0 0 0 2 4.5v2.25Z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900">
                                    Telepon
                                </h3>
                                @if($website?->phone)
                                    <a href="tel:{{ $website->phone }}" class="mt-1 inline-block text-sm font-medium text-slate-500 transition hover:text-emerald-600 sm:text-base">
                                        {{ $website->phone }}
                                    </a>
                                @else
                                    <p class="mt-1 text-sm text-slate-500">
                                        Nomor telepon belum tersedia.
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{-- EMAIL --}}
                    <div class="group rounded-2xl border border-slate-100 bg-slate-50 p-5 transition duration-300 hover:border-emerald-100 hover:bg-emerald-50/50">
                        <div class="flex gap-4">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700 transition group-hover:bg-emerald-600 group-hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-5 w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5H4.5a2.25 2.25 0 0 0-2.25 2.25m19.5 0-8.69 5.794a1.125 1.125 0 0 1-1.247 0L2.25 6.75"/>
                                </svg>
                            </div>
                            <div class="min-w-0">
                                <h3 class="font-bold text-slate-900">
                                    Email
                                </h3>
                                @if($website?->email)
                                    <a href="mailto:{{ $website->email }}" class="mt-1 block break-all text-sm font-medium text-slate-500 transition hover:text-emerald-600 sm:text-base">
                                        {{ $website->email }}
                                    </a>
                                @else
                                    <p class="mt-1 text-sm text-slate-500">
                                        Email belum tersedia.
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- =================================================
            GOOGLE MAPS
        ================================================= --}}
        <div class="lg:col-span-3">
            <div class="h-full overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">
                {{-- Map Header --}}
                <div class="flex items-center gap-4 border-b border-slate-100 px-6 py-5 sm:px-8">
                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-5 w-5" >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-slate-900 sm:text-2xl">
                            Lokasi Kami
                        </h2>
                        <p class="mt-1 text-sm text-slate-500">
                            Temukan lokasi Perguruan Amaliah melalui peta berikut.
                        </p>
                    </div>
                </div>
                {{-- Map --}}
                <div class="relative min-h-[380px] w-full bg-slate-100 sm:min-h-[450px]">
                    @if(!empty($website?->google_maps))
                        <div class="absolute inset-0 [&>iframe]:h-full [&>iframe]:w-full [&>iframe]:border-0">
                            {!! $website->google_maps !!}
                        </div>
                    @else
                        <div class="flex min-h-[380px] h-full items-center justify-center p-6 sm:min-h-[450px]">
                            <div class="max-w-sm text-center">
                                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-emerald-100 text-emerald-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-7 w-7" >
                                        <path stroke-linecap="round" stroke-linejoin="round d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/>
                                    </svg>
                                </div>
                                <h3 class="mt-5 text-lg font-bold text-slate-800">
                                    Lokasi Belum Tersedia
                                </h3>
                                <p class="mt-2 text-sm leading-6 text-slate-500">
                                    Informasi lokasi Google Maps belum
                                    ditambahkan melalui dashboard administrator.
                                </p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

</section>

@endsection
