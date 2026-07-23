{{-- =========================================================
    EDUCATION UNITS SECTION
========================================================= --}}
<section class="relative overflow-hidden bg-slate-50 py-24 sm:py-28">

    {{-- =====================================================
        DECORATIVE BACKGROUND
    ====================================================== --}}
    <div class="pointer-events-none absolute -left-40 top-20 h-96 w-96 rounded-full bg-emerald-100/50 blur-3xl"></div>

    <div class="pointer-events-none absolute -right-40 bottom-0 h-96 w-96 rounded-full bg-green-100/40 blur-3xl"></div>


    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">


        {{-- =====================================================
            HEADER
        ====================================================== --}}
        <div class="mx-auto max-w-3xl text-center">

            {{-- Label --}}
            <div class="inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-2 text-sm font-semibold uppercase tracking-wider text-emerald-700">

                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>

                Unit Pendidikan

            </div>


            {{-- Title --}}
            <h2 class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl md:text-5xl">

                Pilih Jenjang Pendidikan

            </h2>


            {{-- Accent --}}
            <div class="mt-6 flex items-center justify-center gap-2">

                <span class="h-1 w-14 rounded-full bg-emerald-600"></span>

                <span class="h-1 w-5 rounded-full bg-emerald-300"></span>

            </div>


            {{-- Description --}}
            <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">

                Kenali unit pendidikan kami dari tingkat TK hingga
                jenjang pendidikan lainnya.

            </p>

        </div>


        {{-- =====================================================
            EDUCATION UNITS
        ====================================================== --}}
        @if(isset($units) && $units->count())

            <div class="mt-16 grid gap-8 md:grid-cols-2 lg:grid-cols-3">

                @foreach($units as $unit)

                    {{-- =================================================
                        UNIT CARD
                    ================================================== --}}
                    <article
                        class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-emerald-200 hover:shadow-xl hover:shadow-emerald-900/10"
                    >

                        {{-- =================================================
                            SCHOOL PHOTO
                        ================================================== --}}
                        <div class="relative h-60 overflow-hidden">

                            @if(filled($unit->photo))

                                <img
                                    src="{{ Storage::url($unit->photo) }}"
                                    alt="{{ $unit->name }}"
                                    loading="lazy"
                                    class="h-full w-full object-cover transition duration-700 group-hover:scale-110"
                                >

                                {{-- Image Overlay --}}
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-transparent to-transparent"></div>

                            @else

                                <div class="flex h-full w-full items-center justify-center bg-gradient-to-br from-emerald-50 to-slate-100">

                                    <div class="text-center">

                                        <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-white text-emerald-600 shadow-sm">

                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke-width="1.7"
                                                stroke="currentColor"
                                                class="h-8 w-8"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M3 21h18M5.25 21V9.75L12 5l6.75 4.75V21M9 21v-5.25h6V21"
                                                />
                                            </svg>

                                        </div>

                                        <span class="mt-3 block text-sm font-medium text-slate-500">
                                            Foto Belum Tersedia
                                        </span>

                                    </div>

                                </div>

                            @endif

                        </div>


                        {{-- =================================================
                            CARD CONTENT
                        ================================================== --}}
                        <div class="relative px-7 pb-7 sm:px-8 sm:pb-8">


                            {{-- =================================================
                                LOGO
                            ================================================== --}}
                            <div class="-mt-14 flex justify-center">

                                @if(filled($unit->logo))

                                    <div class="relative">

                                        <div class="absolute -inset-1 rounded-2xl bg-emerald-200/60 blur-sm"></div>

                                        <img
                                            src="{{ Storage::url($unit->logo) }}"
                                            alt="{{ $unit->name }}"
                                            loading="lazy"
                                            class="relative h-24 w-24 rounded-2xl border-4 border-white bg-white object-contain p-2 shadow-xl"
                                        >

                                    </div>

                                @else

                                    <div class="relative flex h-24 w-24 items-center justify-center rounded-2xl border-4 border-white bg-gradient-to-br from-emerald-600 to-emerald-800 text-3xl font-bold text-white shadow-xl">

                                        {{ strtoupper(mb_substr($unit->short_name ?? $unit->name, 0, 1)) }}

                                    </div>

                                @endif

                            </div>


                            {{-- =================================================
                                UNIT INFORMATION
                            ================================================== --}}
                            <div class="mt-6 text-center">

                                <h3 class="text-2xl font-bold tracking-tight text-slate-900">

                                    {{ $unit->name }}

                                </h3>


                                @if(filled($unit->short_name))

                                    <span class="mt-2 inline-flex rounded-full bg-emerald-50 px-3 py-1 text-xs font-bold uppercase tracking-wider text-emerald-700">

                                        {{ $unit->short_name }}

                                    </span>

                                @endif


                                @if(filled($unit->description))

                                    <p class="mt-4 min-h-[56px] text-sm leading-7 text-slate-500">

                                        {{ Str::limit(strip_tags($unit->description), 100) }}

                                    </p>

                                @else

                                    <p class="mt-4 min-h-[56px] text-sm leading-7 text-slate-400">

                                        Informasi unit pendidikan belum tersedia.

                                    </p>

                                @endif

                            </div>


                            {{-- =================================================
                                STATISTICS
                            ================================================== --}}
                            <div class="mt-8 grid grid-cols-2 gap-3">


                                {{-- Students --}}
                                <div class="rounded-2xl border border-emerald-100 bg-emerald-50/70 p-5 text-center transition group-hover:bg-emerald-50">

                                    <div class="mx-auto flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700">

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.7"
                                            stroke="currentColor"
                                            class="h-5 w-5"
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

                                        </svg>

                                    </div>

                                    <h4 class="mt-3 text-2xl font-extrabold text-emerald-700">

                                        {{ number_format($unit->students_count ?? 0) }}

                                    </h4>

                                    <p class="mt-1 text-xs font-medium text-slate-500">

                                        Siswa

                                    </p>

                                </div>


                                {{-- Teachers --}}
                                <div class="rounded-2xl border border-emerald-100 bg-emerald-50/70 p-5 text-center transition group-hover:bg-emerald-50">

                                    <div class="mx-auto flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700">

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.7"
                                            stroke="currentColor"
                                            class="h-5 w-5"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.34 9.34 0 0 0 4.121-.952M15 19.128v-.003c0-1.14-.67-2.2-1.712-2.7a6.75 6.75 0 0 0-5.576 0C6.67 16.925 6 17.985 6 19.125v.003m9 0a9.38 9.38 0 0 1-2.625.372 9.34 9.34 0 0 1-4.121-.952M12 13.5a4.125 4.125 0 1 0 0-8.25 4.125 4.125 0 0 0 0 8.25Z"
                                            />
                                        </svg>

                                    </div>

                                    <h4 class="mt-3 text-2xl font-extrabold text-emerald-700">

                                        {{ number_format($unit->teachers_count ?? 0) }}

                                    </h4>

                                    <p class="mt-1 text-xs font-medium text-slate-500">

                                        Guru

                                    </p>

                                </div>

                            </div>


                            {{-- =================================================
                                WEBSITE BUTTON
                            ================================================== --}}
                            @if(filled($unit->website))

                                <div class="mt-7">

                                    <a
                                        href="{{ $unit->website }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-emerald-700 px-6 py-3.5 font-semibold text-white shadow-sm transition-all duration-300 hover:bg-emerald-800 hover:shadow-lg hover:shadow-emerald-900/20"
                                    >

                                        Kunjungi Website

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M13.5 4.5 19 10m0 0-5.5 5.5M19 10H5"
                                            />
                                        </svg>

                                    </a>

                                </div>

                            @endif

                        </div>

                    </article>

                @endforeach

            </div>


        @else


            {{-- =====================================================
                EMPTY STATE
            ====================================================== --}}
            <div class="mt-16 rounded-3xl border border-slate-200 bg-white px-6 py-16 text-center shadow-sm">

                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.7"
                        stroke="currentColor"
                        class="h-8 w-8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3 21h18M5.25 21V9.75L12 5l6.75 4.75V21M9 21v-5.25h6V21"
                        />
                    </svg>

                </div>


                <h3 class="mt-5 text-xl font-bold text-slate-900">

                    Belum Ada Unit Pendidikan

                </h3>


                <p class="mx-auto mt-2 max-w-lg text-sm leading-7 text-slate-500">

                    Informasi unit pendidikan akan ditampilkan setelah
                    ditambahkan melalui dashboard admin.

                </p>

            </div>

        @endif

    </div>

</section>
