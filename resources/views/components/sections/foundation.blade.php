@props([
    'leader' => null
])

@if($leader)
<section class="relative isolate overflow-hidden bg-slate-50 py-16 sm:py-20 lg:py-24">

    {{-- =========================================================
        BACKGROUND DECORATION
    ========================================================== --}}
    <div
        aria-hidden="true"
        class="pointer-events-none absolute -left-40 -top-40 h-96 w-96 rounded-full bg-emerald-100/50 blur-3xl"
    ></div>

    <div
        aria-hidden="true"
        class="pointer-events-none absolute -bottom-40 -right-40 h-96 w-96 rounded-full bg-green-100/50 blur-3xl"
    ></div>


    {{-- =========================================================
        CONTAINER
    ========================================================== --}}
    <div class="relative mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">

        {{-- =====================================================
            SECTION HEADER
        ====================================================== --}}
        <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">

            <span
                class="inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-2 text-xs font-bold uppercase tracking-[0.15em] text-emerald-700 sm:text-sm"
            >
                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                Pimpinan Yayasan
            </span>

            <h2
                class="mt-4 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-3xl lg:text-4xl"
            >
                Sambutan Kepala Yayasan
            </h2>

            <p class="mt-3 text-sm leading-6 text-slate-500 sm:text-base">
                Mengenal sosok yang memimpin dan mengarahkan perjalanan
                Perguruan Amaliah.
            </p>

        </div>


        {{-- =====================================================
            PROFILE CARD
        ====================================================== --}}
        <div
            class="relative overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-xl shadow-slate-200/50"
        >

            {{-- =================================================
                TOP ACCENT
            ================================================== --}}
            <div
                aria-hidden="true"
                class="h-1.5 w-full bg-gradient-to-r from-emerald-700 via-emerald-500 to-green-400"
            ></div>


            {{-- =================================================
                CARD CONTENT
            ================================================== --}}
            <div class="grid lg:grid-cols-[300px_1fr]">


                {{-- =================================================
                    PROFILE / PHOTO
                ================================================== --}}
                <div
                    class="relative flex flex-col items-center justify-center overflow-hidden bg-gradient-to-br from-emerald-800 via-emerald-700 to-green-900 px-6 py-10 sm:px-10 lg:px-8 lg:py-12"
                >

                    {{-- Background Pattern --}}
                    <div
                        aria-hidden="true"
                        class="absolute inset-0 opacity-10"
                    >
                        <div
                            class="absolute -right-20 -top-20 h-56 w-56 rounded-full border-[20px] border-white"
                        ></div>

                        <div
                            class="absolute -bottom-24 -left-20 h-64 w-64 rounded-full border-[20px] border-white"
                        ></div>
                    </div>


                    {{-- Photo --}}
                    <div class="relative z-10">

                        <div
                            class="absolute -inset-3 rounded-2xl border border-white/20"
                        ></div>

                        @if(filled($leader->photo))

                            <img
                                src="{{ Storage::url($leader->photo) }}"
                                alt="{{ $leader->name ?: 'Kepala Yayasan' }}"
                                loading="lazy"
                                decoding="async"
                                class="relative h-56 w-44 rounded-xl object-cover shadow-2xl ring-4 ring-white/20 sm:h-64 sm:w-48 lg:h-64 lg:w-48"
                            >

                        @else

                            <div
                                class="relative flex h-56 w-44 items-center justify-center rounded-xl bg-white/10 text-white shadow-2xl ring-4 ring-white/20 backdrop-blur-sm sm:h-64 sm:w-48 lg:h-64 lg:w-48"
                            >
                                <span
                                    class="text-7xl font-black uppercase"
                                >
                                    {{ strtoupper(substr($leader->name ?: 'K', 0, 1)) }}
                                </span>
                            </div>

                        @endif

                    </div>


                    {{-- Small Label --}}
                    <div class="relative z-10 mt-6 text-center">

                        <span
                            class="text-[10px] font-bold uppercase tracking-[0.25em] text-emerald-100 sm:text-xs"
                        >
                            Perguruan Amaliah
                        </span>

                    </div>

                </div>



                {{-- =================================================
                    INFORMATION
                ================================================== --}}
                <div class="flex flex-col justify-center px-6 py-8 sm:px-10 sm:py-10 lg:px-12 lg:py-12">

                    {{-- Header --}}
                    <div>

                        <div class="flex items-center gap-3">

                            <div
                                class="h-10 w-1 rounded-full bg-emerald-600"
                            ></div>

                            <div>

                                <p
                                    class="text-xs font-bold uppercase tracking-[0.15em] text-emerald-600"
                                >
                                    Kepala Yayasan
                                </p>

                                <h3
                                    class="mt-1 text-2xl font-extrabold leading-tight tracking-tight text-slate-900 sm:text-3xl lg:text-4xl"
                                >
                                    {{ $leader->name }}
                                </h3>

                            </div>

                        </div>


                        {{-- Position --}}
                        @if(filled($leader->position))

                            <p
                                class="mt-4 text-sm font-semibold text-slate-500 sm:text-base"
                            >
                                {{ $leader->position }}
                            </p>

                        @endif

                    </div>


                    {{-- Divider --}}
                    <div class="my-6 h-px w-full bg-slate-100 sm:my-7"></div>


                    {{-- =================================================
                        MESSAGE
                    ================================================== --}}
                    @if(filled($leader->message))

                        <div class="relative">

                            {{-- Quote --}}
                            <div
                                aria-hidden="true"
                                class="absolute -left-1 -top-6 font-serif text-6xl leading-none text-emerald-100 sm:-left-2 sm:text-7xl"
                            >
                                “
                            </div>


                            <div class="relative">

                                <p
                                    class="whitespace-pre-line text-sm leading-7 text-slate-600 sm:text-base sm:leading-8"
                                >
                                    {{ $leader->message }}
                                </p>

                            </div>

                        </div>

                    @else

                        <div
                            class="rounded-xl border border-dashed border-slate-200 bg-slate-50 p-5 text-sm text-slate-500"
                        >
                            Pesan pimpinan belum tersedia.
                        </div>

                    @endif


                    {{-- =================================================
                        FOOTER
                    ================================================== --}}
                    <div class="mt-8 flex flex-wrap items-center gap-3">

                        <div class="flex items-center gap-2">

                            <span
                                class="h-2.5 w-2.5 rounded-full bg-emerald-500"
                            ></span>

                            <span
                                class="text-xs font-semibold text-slate-500 sm:text-sm"
                            >
                                Pimpinan Perguruan Amaliah
                            </span>

                        </div>

                        <span class="hidden text-slate-300 sm:inline">
                            •
                        </span>

                        <span
                            class="text-xs font-medium text-slate-400 sm:text-sm"
                        >
                            Pendidikan • Karakter • Masa Depan
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
@endif
