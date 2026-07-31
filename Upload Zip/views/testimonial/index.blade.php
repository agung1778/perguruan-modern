@extends('layouts.app')

@section('content')

    {{-- =========================================================
        TESTIMONIAL HERO
    ========================================================== --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-emerald-950 via-emerald-900 to-slate-950 py-24">

        {{-- Decorative Background --}}
        <div class="pointer-events-none absolute -right-32 -top-32 h-96 w-96 rounded-full bg-emerald-500/20 blur-3xl"></div>

        <div class="pointer-events-none absolute -bottom-32 -left-32 h-96 w-96 rounded-full bg-green-400/10 blur-3xl"></div>


        <div class="relative mx-auto max-w-7xl px-6 text-center">

            {{-- Label --}}
            <span class="inline-flex items-center rounded-full border border-emerald-400/20 bg-emerald-400/10 px-5 py-2 text-sm font-semibold uppercase tracking-widest text-emerald-300">

                Testimoni

            </span>


            {{-- Title --}}
            <h1 class="mt-6 text-4xl font-bold tracking-tight text-white md:text-5xl lg:text-6xl">

                Apa Kata Mereka?

            </h1>


            {{-- Description --}}
            <p class="mx-auto mt-6 max-w-3xl text-lg leading-8 text-emerald-100/70">

                Berbagai pengalaman dan kesan dari siswa, alumni, orang tua,
                maupun masyarakat terhadap Perguruan Amaliah.

            </p>


            {{-- Decorative Line --}}
            <div class="mx-auto mt-8 flex items-center justify-center gap-2">

                <span class="h-1 w-12 rounded-full bg-emerald-500"></span>

                <span class="h-1 w-3 rounded-full bg-emerald-300"></span>

            </div>

        </div>

    </section>



    {{-- =========================================================
        TESTIMONIALS
    ========================================================== --}}
    <section class="relative overflow-hidden bg-slate-50 py-24">

        {{-- Background Decoration --}}
        <div class="pointer-events-none absolute -left-40 top-40 h-96 w-96 rounded-full bg-emerald-100/50 blur-3xl"></div>

        <div class="pointer-events-none absolute -right-40 bottom-20 h-96 w-96 rounded-full bg-green-100/40 blur-3xl"></div>


        <div class="relative mx-auto max-w-7xl px-6">

            @if($testimonials->count())

                {{-- Section Header --}}
                <div class="mx-auto max-w-2xl text-center">

                    <span class="font-semibold uppercase tracking-widest text-emerald-600">
                        Pengalaman Mereka
                    </span>

                    <h2 class="mt-4 text-3xl font-bold text-slate-900 md:text-4xl">
                        Cerita dari Keluarga Perguruan Amaliah
                    </h2>

                    <p class="mt-4 leading-7 text-slate-600">
                        Simak pengalaman dan kesan mereka selama menjadi bagian
                        dari keluarga besar Perguruan Amaliah.
                    </p>

                </div>


                {{-- Testimonials Grid --}}
                <div class="mt-16 grid gap-8 md:grid-cols-2 lg:grid-cols-3">

                    @foreach($testimonials as $item)

                        <article
                            class="group relative flex h-full flex-col overflow-hidden rounded-3xl border border-slate-200/80 bg-white p-8 shadow-sm transition duration-300 hover:-translate-y-2 hover:border-emerald-200 hover:shadow-2xl"
                        >

                            {{-- Top Accent --}}
                            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-emerald-500 to-green-300"></div>


                            {{-- Profile --}}
                            <div class="flex items-center gap-5">

                                @if(filled($item->photo))

                                    <div class="relative shrink-0">

                                        <img
                                            src="{{ Storage::url($item->photo) }}"
                                            alt="{{ $item->name }}"
                                            loading="lazy"
                                            class="h-20 w-20 rounded-full object-cover ring-4 ring-emerald-50 transition duration-300 group-hover:ring-emerald-100"
                                        >

                                        <div class="absolute -bottom-1 -right-1 flex h-7 w-7 items-center justify-center rounded-full border-2 border-white bg-emerald-600 text-white">

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
                                                    d="m5 12 4 4L19 6"
                                                />
                                            </svg>

                                        </div>

                                    </div>

                                @else

                                    <div class="flex h-20 w-20 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-emerald-700 ring-4 ring-emerald-50">

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.8"
                                            stroke="currentColor"
                                            class="h-10 w-10"
                                        >

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M15.75 6.75a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 20.118a7.5 7.5 0 0 1 15 0"
                                            />

                                        </svg>

                                    </div>

                                @endif


                                {{-- Profile Information --}}
                                <div class="min-w-0">

                                    <h3 class="truncate text-xl font-bold text-slate-900">

                                        {{ $item->name }}

                                    </h3>


                                    @if(filled($item->position))

                                        <p class="mt-1 text-sm font-medium text-emerald-600">

                                            {{ $item->position }}

                                        </p>

                                    @endif

                                </div>

                            </div>


                            {{-- Quote --}}
                            <div class="mt-8 flex-1">

                                <div class="mb-5 flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">

                                    <svg
                                        class="h-6 w-6"
                                        fill="currentColor"
                                        viewBox="0 0 24 24"
                                    >

                                        <path
                                            d="M7.17 6A5.001 5.001 0 002 11v7h7v-7H5.08A3.001 3.001 0 017.17 6zM19.17 6A5.001 5.001 0 0014 11v7h7v-7h-3.92A3.001 3.001 0 0119.17 6z"
                                        />

                                    </svg>

                                </div>


                                <p class="leading-8 text-slate-600 italic">

                                    "{{ $item->message }}"

                                </p>

                            </div>


                            {{-- Bottom Accent --}}
                            <div class="mt-8 flex items-center gap-2">

                                <span class="h-1 w-8 rounded-full bg-emerald-500 transition-all duration-300 group-hover:w-12"></span>

                                <span class="h-1 w-2 rounded-full bg-emerald-200"></span>

                            </div>

                        </article>

                    @endforeach

                </div>


                {{-- Pagination --}}
                @if($testimonials->hasPages())

                    <div class="mt-16 flex justify-center">

                        <div class="rounded-2xl bg-white p-3 shadow-sm ring-1 ring-slate-200">

                            {{ $testimonials->links() }}

                        </div>

                    </div>

                @endif


            @else

                {{-- =================================================
                    EMPTY STATE
                ================================================== --}}
                <div class="mx-auto max-w-2xl py-16 text-center">

                    <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-3xl bg-emerald-100 text-emerald-600">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.7"
                            stroke="currentColor"
                            class="h-10 w-10"
                        >

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8 10h.01M16 10h.01M9 16h6M12 3C7.03 3 3 6.582 3 11c0 2.17.972 4.136 2.55 5.595L5 21l4.75-1.585A10.09 10.09 0 0012 19c4.97 0 9-3.582 9-8s-4.03-8-9-8Z"
                            />

                        </svg>

                    </div>


                    <h2 class="mt-6 text-2xl font-bold text-slate-900">

                        Belum Ada Testimoni

                    </h2>


                    <p class="mx-auto mt-3 max-w-lg leading-7 text-slate-500">

                        Testimoni dari siswa, alumni, orang tua, dan masyarakat
                        akan ditampilkan setelah ditambahkan melalui dashboard administrator.

                    </p>

                </div>

            @endif

        </div>

    </section>

@endsection
