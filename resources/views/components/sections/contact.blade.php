{{-- =========================================================
    CONTACT SECTION
========================================================= --}}

<section class="relative overflow-hidden bg-emerald-950 py-16 text-white sm:py-20 lg:py-24">

    {{-- =====================================================
        BACKGROUND DECORATION
    ====================================================== --}}

    <div class="pointer-events-none absolute -right-32 -top-32 h-64 w-64 rounded-full bg-emerald-700/20 blur-3xl sm:-right-40 sm:-top-40 sm:h-96 sm:w-96"></div>

    <div class="pointer-events-none absolute -bottom-32 -left-32 h-64 w-64 rounded-full bg-green-600/10 blur-3xl sm:-bottom-40 sm:-left-40 sm:h-96 sm:w-96"></div>

    <div class="pointer-events-none absolute left-1/2 top-1/2 hidden h-96 w-96 -translate-x-1/2 -translate-y-1/2 rounded-full bg-emerald-500/5 blur-3xl lg:block"></div>


    <div class="relative mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">

        {{-- =====================================================
            MAIN GRID
        ====================================================== --}}

        <div class="grid items-start gap-10 md:gap-12 lg:grid-cols-2 lg:items-center lg:gap-16 xl:gap-20">


            {{-- =================================================
                CONTACT INFORMATION
            ================================================== --}}

            <div class="min-w-0">

                {{-- Label --}}

                <div
                    class="inline-flex items-center gap-2 rounded-full border border-emerald-400/20 bg-emerald-400/10 px-3.5 py-2 text-xs font-bold uppercase tracking-wider text-emerald-300 sm:px-4 sm:text-sm"
                >

                    <span class="h-2 w-2 shrink-0 rounded-full bg-emerald-400"></span>

                    Hubungi Kami

                </div>


                {{-- Title --}}

                <h2
                    class="mt-5 max-w-2xl text-3xl font-extrabold tracking-tight text-white sm:mt-6 sm:text-4xl lg:text-5xl"
                >
                    Informasi Kontak
                </h2>


                {{-- Accent --}}

                <div class="mt-5 flex items-center gap-2 sm:mt-6">

                    <span class="h-1 w-10 rounded-full bg-emerald-500 sm:w-14"></span>

                    <span class="h-1 w-4 rounded-full bg-emerald-300 sm:w-5"></span>

                </div>


                {{-- Description --}}

                <p
                    class="mt-5 max-w-xl text-sm leading-7 text-emerald-100/70 sm:mt-7 sm:text-base sm:leading-8 lg:text-lg"
                >
                    Silakan hubungi kami untuk mendapatkan informasi lebih lanjut
                    mengenai
                    {{ $website?->school_name ?? 'Perguruan Amaliah' }},
                    layanan pendidikan, dan informasi lainnya.
                </p>


                {{-- =================================================
                    CONTACT LIST
                ================================================== --}}

                <div class="mt-8 space-y-3.5 sm:mt-10 sm:space-y-4">


                    {{-- =================================================
                        ADDRESS
                    ================================================== --}}

                    <div
                        class="group flex items-start gap-4 rounded-2xl border border-white/10 bg-white/5 p-4 backdrop-blur-sm transition-all duration-300 hover:border-emerald-400/30 hover:bg-white/10 sm:gap-5 sm:p-5"
                    >

                        {{-- Icon --}}

                        <div
                            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-500/15 text-emerald-300 ring-1 ring-emerald-400/20 sm:h-12 sm:w-12"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.8"
                                stroke="currentColor"
                                class="h-5 w-5 sm:h-6 sm:w-6"
                            >

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M19.5 10.5c0 5.25-7.5 10.5-7.5 10.5S4.5 15.75 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                                />

                            </svg>

                        </div>


                        {{-- Content --}}

                        <div class="min-w-0 flex-1">

                            <h4 class="text-base font-bold text-white sm:text-lg">
                                Alamat
                            </h4>

                            <p
                                class="mt-1.5 break-words text-sm leading-6 text-emerald-100/60 sm:mt-2 sm:leading-7"
                            >
                                {{ $website?->address ?? 'Alamat belum tersedia' }}
                            </p>

                        </div>

                    </div>


                    {{-- =================================================
                        PHONE
                    ================================================== --}}

                    <div
                        class="group flex items-start gap-4 rounded-2xl border border-white/10 bg-white/5 p-4 backdrop-blur-sm transition-all duration-300 hover:border-emerald-400/30 hover:bg-white/10 sm:gap-5 sm:p-5"
                    >

                        {{-- Icon --}}

                        <div
                            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-500/15 text-emerald-300 ring-1 ring-emerald-400/20 sm:h-12 sm:w-12"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.8"
                                stroke="currentColor"
                                class="h-5 w-5 sm:h-6 sm:w-6"
                            >

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M2.25 6.75c0-1.243 1.007-2.25 2.25-2.25h2.08c.93 0 1.74.57 2.07 1.43l.75 1.95a2.25 2.25 0 0 1-.52 2.35l-1.17 1.17a16.5 16.5 0 0 0 7.89 7.89l1.17-1.17a2.25 2.25 0 0 1 2.35-.52l1.95.75c.86.33 1.43 1.14 1.43 2.07V18c0 1.243-1.007 2.25-2.25 2.25C10.4 20.25 3.75 13.6 3.75 5.75"
                                />

                            </svg>

                        </div>


                        {{-- Content --}}

                        <div class="min-w-0 flex-1">

                            <h4 class="text-base font-bold text-white sm:text-lg">
                                Telepon
                            </h4>

                            @if($website?->phone)

                                <a
                                    href="tel:{{ $website->phone }}"
                                    class="mt-1.5 inline-flex max-w-full items-center gap-2 break-all text-sm text-emerald-100/60 transition hover:text-emerald-300 sm:mt-2"
                                >

                                    <span>
                                        {{ $website->phone }}
                                    </span>

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        class="h-4 w-4 shrink-0 transition-transform duration-300 group-hover:translate-x-1"
                                    >

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"
                                        />

                                    </svg>

                                </a>

                            @else

                                <p class="mt-1.5 text-sm text-emerald-100/40 sm:mt-2">
                                    Nomor telepon belum tersedia.
                                </p>

                            @endif

                        </div>

                    </div>


                    {{-- =================================================
                        EMAIL
                    ================================================== --}}

                    <div
                        class="group flex items-start gap-4 rounded-2xl border border-white/10 bg-white/5 p-4 backdrop-blur-sm transition-all duration-300 hover:border-emerald-400/30 hover:bg-white/10 sm:gap-5 sm:p-5"
                    >

                        {{-- Icon --}}

                        <div
                            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-500/15 text-emerald-300 ring-1 ring-emerald-400/20 sm:h-12 sm:w-12"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.8"
                                stroke="currentColor"
                                class="h-5 w-5 sm:h-6 sm:w-6"
                            >

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M3 7.5 12 13l9-5.5"
                                />

                                <rect
                                    width="18"
                                    height="15"
                                    x="3"
                                    y="4.5"
                                    rx="2"
                                />

                            </svg>

                        </div>


                        {{-- Content --}}

                        <div class="min-w-0 flex-1">

                            <h4 class="text-base font-bold text-white sm:text-lg">
                                Email
                            </h4>

                            @if($website?->email)

                                <a
                                    href="mailto:{{ $website->email }}"
                                    class="mt-1.5 inline-flex max-w-full items-center gap-2 break-all text-sm text-emerald-100/60 transition hover:text-emerald-300 sm:mt-2"
                                >

                                    <span>
                                        {{ $website->email }}
                                    </span>

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        class="h-4 w-4 shrink-0 transition-transform duration-300 group-hover:translate-x-1"
                                    >

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"
                                        />

                                    </svg>

                                </a>

                            @else

                                <p class="mt-1.5 text-sm text-emerald-100/40 sm:mt-2">
                                    Email belum tersedia.
                                </p>

                            @endif

                        </div>

                    </div>

                </div>

            </div>


            {{-- =====================================================
                GOOGLE MAPS
            ====================================================== --}}

            <div class="min-w-0">

                <div
                    class="relative overflow-hidden rounded-3xl border border-white/10 bg-white/10 p-1.5 shadow-2xl shadow-black/20 sm:p-2"
                >

                    <div class="overflow-hidden rounded-2xl">

                        @if($website?->google_maps)

                            {{-- Map --}}

                            <div
                                class="h-[300px] w-full sm:h-[360px] lg:h-[420px]"
                            >
                                {!! $website->google_maps !!}
                            </div>

                        @else

                            {{-- Empty Map State --}}

                            <div
                                class="flex h-[300px] items-center justify-center bg-emerald-900 px-6 text-center sm:h-[360px] lg:h-[420px]"
                            >

                                <div class="max-w-sm">

                                    {{-- Icon --}}

                                    <div
                                        class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-emerald-800 text-emerald-300 ring-1 ring-emerald-700 sm:h-20 sm:w-20"
                                    >

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.6"
                                            stroke="currentColor"
                                            class="h-8 w-8 sm:h-10 sm:w-10"
                                        >

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                            />

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M19.5 10.5c0 5.25-7.5 10.5-7.5 10.5S4.5 15.75 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                                            />

                                        </svg>

                                    </div>


                                    {{-- Title --}}

                                    <h3
                                        class="mt-5 text-lg font-bold text-white sm:mt-6 sm:text-xl"
                                    >
                                        Lokasi
                                        {{ $website?->school_name ?? 'Perguruan Amaliah' }}
                                    </h3>


                                    {{-- Description --}}

                                    <p
                                        class="mt-2 text-sm leading-6 text-emerald-100/50 sm:leading-7"
                                    >
                                        Google Maps belum tersedia.
                                        Silakan tambahkan lokasi perguruan
                                        melalui pengaturan website.
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
