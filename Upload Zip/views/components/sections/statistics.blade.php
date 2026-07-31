{{-- =========================================================
    STATISTICS SECTION
========================================================= --}}
<section class="relative overflow-hidden bg-gradient-to-br from-emerald-950 via-emerald-900 to-slate-950 py-24 sm:py-28">

    {{-- =====================================================
        DECORATIVE BACKGROUND
    ====================================================== --}}
    <div class="pointer-events-none absolute -left-40 top-0 h-96 w-96 rounded-full bg-emerald-500/10 blur-3xl"></div>

    <div class="pointer-events-none absolute -right-40 bottom-0 h-96 w-96 rounded-full bg-green-400/10 blur-3xl"></div>

    <div class="pointer-events-none absolute left-1/2 top-1/2 h-72 w-72 -translate-x-1/2 -translate-y-1/2 rounded-full bg-emerald-400/5 blur-3xl"></div>


    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">


        {{-- =====================================================
            HEADER
        ====================================================== --}}
        <div class="mx-auto max-w-3xl text-center">

            {{-- Label --}}
            <div class="inline-flex items-center gap-2 rounded-full border border-emerald-300/20 bg-emerald-400/10 px-4 py-2 text-sm font-semibold uppercase tracking-widest text-emerald-200">

                <span class="h-2 w-2 rounded-full bg-emerald-400"></span>

                Statistik

            </div>


            {{-- Title --}}
            <h2 class="mt-5 text-3xl font-extrabold tracking-tight text-white sm:text-4xl md:text-5xl">

                Perguruan Dalam Angka

            </h2>


            {{-- Accent --}}
            <div class="mt-6 flex items-center justify-center gap-2">

                <span class="h-1 w-14 rounded-full bg-emerald-500"></span>

                <span class="h-1 w-5 rounded-full bg-emerald-300"></span>

            </div>


            {{-- Description --}}
            <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-emerald-50/70 sm:text-lg">

                Data terbaru perkembangan
                {{ $website?->school_name ?? 'Perguruan Amaliah' }}.

            </p>

        </div>


        {{-- =====================================================
            DEFAULT STATISTICS
        ====================================================== --}}
        @php
            $stats = $stats ?? [
                'teachers' => 0,
                'students' => 0,
                'units' => 0,
                'news' => 0,
            ];
        @endphp


        {{-- =====================================================
            STATISTICS GRID
        ====================================================== --}}
        <div class="mt-16 grid grid-cols-2 gap-5 sm:gap-7 lg:grid-cols-4">


            {{-- =================================================
                TEACHERS
            ================================================== --}}
            <div
                class="group relative overflow-hidden rounded-3xl border border-white/10 bg-white/[0.07] p-6 text-center shadow-2xl backdrop-blur-sm transition-all duration-300 hover:-translate-y-2 hover:border-emerald-400/30 hover:bg-white/[0.12] sm:p-8"
            >

                {{-- Hover Glow --}}
                <div class="absolute -right-10 -top-10 h-24 w-24 rounded-full bg-emerald-400/10 blur-2xl transition-all duration-500 group-hover:bg-emerald-400/20"></div>


                {{-- Icon --}}
                <div class="relative mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-500/15 text-emerald-300 ring-1 ring-emerald-400/20 transition duration-300 group-hover:scale-110 group-hover:bg-emerald-500/25">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.7"
                        stroke="currentColor"
                        class="h-7 w-7"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.34 9.34 0 0 0 4.121-.952M15 19.128v-.003c0-1.14-.67-2.2-1.712-2.7a6.75 6.75 0 0 0-5.576 0C6.67 16.925 6 17.985 6 19.125v.003m9 0a9.38 9.38 0 0 1-2.625.372 9.34 9.34 0 0 1-4.121-.952M12 13.5a4.125 4.125 0 1 0 0-8.25 4.125 4.125 0 0 0 0 8.25Z"
                        />
                    </svg>

                </div>


                {{-- Number --}}
                <h3 class="relative mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl">

                    {{ number_format($stats['teachers']) }}

                </h3>


                {{-- Label --}}
                <p class="relative mt-3 text-sm font-medium text-emerald-100/60 sm:text-base">

                    Guru

                </p>

            </div>


            {{-- =================================================
                STUDENTS
            ================================================== --}}
           <div
                class="group relative overflow-hidden rounded-3xl border border-white/10 bg-white/[0.07] p-6 text-center shadow-2xl backdrop-blur-sm transition-all duration-300 hover:-translate-y-2 hover:border-emerald-400/30 hover:bg-white/[0.12] sm:p-8"
            >
                <div class="absolute -right-10 -top-10 h-24 w-24 rounded-full bg-emerald-400/10 blur-2xl transition-all duration-500 group-hover:bg-emerald-400/20"></div>

                <div class="relative mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-500/15 text-emerald-300 ring-1 ring-emerald-400/20 transition duration-300 group-hover:scale-110 group-hover:bg-emerald-500/25">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.7"
                        stroke="currentColor"
                        class="h-7 w-7"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4.5 7.5 12 3l7.5 4.5L12 12 4.5 7.5Z"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M7.5 9.3V15c0 .8 2 2.5 4.5 2.5s4.5-1.7 4.5-2.5V9.3"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M19.5 9v5"
                        />
                    </svg>

                </div>

                <h3 class="relative mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl">
                    {{ number_format($stats['students']) }}
                </h3>

                <p class="relative mt-3 text-sm font-medium text-emerald-100/60 sm:text-base">
                    Total Murid
                    <span>
                        Tahun Ajaran
                        <strong class="ml-1 text-white">
                            {{ $stats['academic_year'] }}
                        </strong>
                    </span>
                </p>
            </div>


            {{-- =================================================
                EDUCATION UNITS
            ================================================== --}}
            <div
                class="group relative overflow-hidden rounded-3xl border border-white/10 bg-white/[0.07] p-6 text-center shadow-2xl backdrop-blur-sm transition-all duration-300 hover:-translate-y-2 hover:border-emerald-400/30 hover:bg-white/[0.12] sm:p-8"
            >

                {{-- Hover Glow --}}
                <div class="absolute -right-10 -top-10 h-24 w-24 rounded-full bg-emerald-400/10 blur-2xl transition-all duration-500 group-hover:bg-emerald-400/20"></div>


                {{-- Icon --}}
                <div class="relative mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-500/15 text-emerald-300 ring-1 ring-emerald-400/20 transition duration-300 group-hover:scale-110 group-hover:bg-emerald-500/25">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.7"
                        stroke="currentColor"
                        class="h-7 w-7"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3 21h18M5.25 21V9.75L12 5l6.75 4.75V21M9 21v-5.25h6V21M8.25 9.75h.008v.008H8.25V9.75Zm3.746 0h.008v.008h-.008V9.75Zm3.746 0h.008v.008h-.008V9.75Z"
                        />
                    </svg>

                </div>


                {{-- Number --}}
                <h3 class="relative mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl">

                    {{ number_format($stats['units']) }}

                </h3>


                {{-- Label --}}
                <p class="relative mt-3 text-sm font-medium text-emerald-100/60 sm:text-base">

                    Unit Pendidikan

                </p>

            </div>


            {{-- =================================================
                NEWS
            ================================================== --}}
            <div
                class="group relative overflow-hidden rounded-3xl border border-white/10 bg-white/[0.07] p-6 text-center shadow-2xl backdrop-blur-sm transition-all duration-300 hover:-translate-y-2 hover:border-emerald-400/30 hover:bg-white/[0.12] sm:p-8"
            >

                {{-- Hover Glow --}}
                <div class="absolute -right-10 -top-10 h-24 w-24 rounded-full bg-emerald-400/10 blur-2xl transition-all duration-500 group-hover:bg-emerald-400/20"></div>


                {{-- Icon --}}
                <div class="relative mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-500/15 text-emerald-300 ring-1 ring-emerald-400/20 transition duration-300 group-hover:scale-110 group-hover:bg-emerald-500/25">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.7"
                        stroke="currentColor"
                        class="h-7 w-7"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4.5 4.5h15v15h-15z"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m7.5 15 2.5-2.5 2 2 2.5-3 2 2.5"
                        />

                        <circle
                            cx="9"
                            cy="9"
                            r="1.25"
                        />

                    </svg>

                </div>


                {{-- Number --}}
                <h3 class="relative mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl">

                    {{ number_format($stats['news']) }}

                </h3>


                {{-- Label --}}
                <p class="relative mt-3 text-sm font-medium text-emerald-100/60 sm:text-base">

                    Berita

                </p>

            </div>


        </div>

    </div>

</section>
