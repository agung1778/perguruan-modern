{{-- =========================================================
    SECTION: UNIT PENDIDIKAN
    File:
    resources/views/components/sections/units.blade.php
========================================================= --}}

<section id="units" class="relative overflow-hidden bg-slate-50 py-16 sm:py-20 lg:py-24">

    {{-- =====================================================
        DECORATIVE BACKGROUND
    ====================================================== --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden">
        <div class="absolute -left-40 top-20 h-80 w-80 rounded-full bg-emerald-100/50 blur-3xl"></div>
        <div class="absolute -right-40 bottom-20 h-80 w-80 rounded-full bg-green-100/50 blur-3xl"></div>
    </div>


    <div class="relative mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">

        {{-- =================================================
            SECTION HEADER
        ================================================== --}}
        <div class="mx-auto max-w-3xl text-center">

            <span class="inline-flex items-center rounded-full border border-emerald-200 bg-emerald-50 px-4 py-2 text-xs font-bold uppercase tracking-[0.2em] text-emerald-700 sm:text-sm">
                Pendidikan
            </span>

            <h2 class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                Unit Pendidikan Kami
            </h2>

            <div class="mx-auto mt-5 h-1 w-16 rounded-full bg-emerald-600"></div>

            <p class="mx-auto mt-6 max-w-2xl text-sm leading-7 text-slate-600 sm:text-base sm:leading-8">
                Kenali berbagai unit pendidikan yang berada di bawah naungan
                Perguruan Amaliah dan temukan informasi mengenai jumlah siswa,
                tenaga pendidik, serta informasi lainnya.
            </p>

        </div>


        {{-- =================================================
            UNIT GRID
        ================================================== --}}
        @if($units->count())

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:mt-16 lg:grid-cols-3 lg:gap-8">

                @foreach($units as $unit)

                    @php
                        /*
                        |--------------------------------------------------------------------------
                        | DATA SISWA UNIT
                        |--------------------------------------------------------------------------
                        |
                        | Data $unit->students sudah difilter dari HomeController
                        | berdasarkan tahun ajaran terbaru.
                        |
                        | Setiap record StudentData dapat mewakili satu jurusan.
                        |
                        | Maka total siswa harus dijumlahkan menggunakan SUM,
                        | bukan count().
                        |
                        */

                        $unitMaleCount = (int) $unit->students->sum('male_count');

                        $unitFemaleCount = (int) $unit->students->sum('female_count');

                        $unitStudentCount = (int) $unit->students->sum('total_count');

                        $unitAcademicYear = $unit->students
                            ->pluck('academic_year')
                            ->filter()
                            ->first();

                        $unitMajorLabels = $unit->students
                            ->map(fn ($student) => $student->major_name ?? null)
                            ->filter()
                            ->unique()
                            ->values();
                    @endphp


                    {{-- =================================================
                        UNIT CARD
                    ================================================== --}}
                    <article
                        class="group flex h-full flex-col overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl"
                    >

                        {{-- =============================================
                            PHOTO
                        ============================================== --}}
                        <div class="relative h-56 overflow-hidden bg-emerald-950 sm:h-60">

                            @if($unit->photo)

                                <img
                                    src="{{ Storage::url($unit->photo) }}"
                                    alt="{{ $unit->name }}"
                                    loading="lazy"
                                    decoding="async"
                                    class="h-full w-full object-cover transition duration-500 ease-out group-hover:scale-105"
                                >

                                {{-- Image Overlay --}}
                                <div class="absolute inset-0 bg-gradient-to-t from-emerald-950/80 via-emerald-950/20 to-transparent"></div>

                            @else

                                <div class="flex h-full items-center justify-center bg-gradient-to-br from-emerald-800 via-emerald-900 to-slate-950">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="h-16 w-16 text-emerald-300/40"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M3.75 21h16.5M4.5 3h15A1.5 1.5 0 0 1 21 4.5v13.125A1.875 1.875 0 0 1 19.125 19.5H4.875A1.875 1.875 0 0 1 3 17.625V4.5A1.5 1.5 0 0 1 4.5 3Z"
                                        />

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M7.5 7.5h9M7.5 11.25h9M7.5 15h5.25"
                                        />
                                    </svg>

                                </div>

                            @endif


                            {{-- Unit Name Overlay --}}
                            <div class="absolute inset-x-0 bottom-0 p-5">

                                <span class="inline-flex rounded-full border border-white/20 bg-black/20 px-3 py-1 text-xs font-semibold text-white backdrop-blur-sm">
                                    {{ $unit->short_name ?? 'Unit Pendidikan' }}
                                </span>

                            </div>

                        </div>


                        {{-- =============================================
                            CARD CONTENT
                        ============================================== --}}
                        <div class="relative flex flex-1 flex-col px-5 pb-6 sm:px-7 sm:pb-7">


                            {{-- =============================================
                                LOGO
                            ============================================== --}}
                            <div class="-mt-12 flex justify-center">

                                <div class="flex h-24 w-24 items-center justify-center overflow-hidden rounded-2xl border-4 border-white bg-white p-3 shadow-lg sm:h-28 sm:w-28">

                                    @if($unit->logo)

                                        <img
                                            src="{{ Storage::url($unit->logo) }}"
                                            alt="Logo {{ $unit->name }}"
                                            loading="lazy"
                                            decoding="async"
                                            class="h-full w-full object-contain"
                                        >

                                    @else

                                        <div class="flex h-full w-full items-center justify-center rounded-xl bg-emerald-50">

                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke-width="1.5"
                                                stroke="currentColor"
                                                class="h-10 w-10 text-emerald-600"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M12 3v18M3 9h18M5 21h14M5 9V5.25A2.25 2.25 0 0 1 7.25 3h9.5A2.25 2.25 0 0 1 19 5.25V9"
                                                />
                                            </svg>

                                        </div>

                                    @endif

                                </div>

                            </div>


                            {{-- =============================================
                                UNIT NAME
                            ============================================== --}}
                            <div class="mt-6 text-center">

                                <h3 class="text-xl font-bold tracking-tight text-slate-900 sm:text-2xl">
                                    {{ $unit->name }}
                                </h3>

                                @if($unit->short_name)

                                    <p class="mt-1 text-sm font-semibold text-emerald-600">
                                        {{ $unit->short_name }}
                                    </p>

                                @endif

                            </div>


                            {{-- =============================================
                                DESCRIPTION
                            ============================================== --}}
                            <div class="mt-4 min-h-[4.5rem] text-center">

                                @if($unit->description)

                                    <p class="text-sm leading-7 text-slate-600">
                                        {{ Str::limit($unit->description, 120) }}
                                    </p>

                                @else

                                    <p class="text-sm leading-7 text-slate-500">
                                        Informasi mengenai unit pendidikan
                                        belum tersedia.
                                    </p>

                                @endif

                            </div>


                            {{-- =============================================
                                ACADEMIC YEAR
                            ============================================== --}}
                            @if($unitAcademicYear)

                                <div class="mt-5 flex items-center justify-center gap-2 text-xs font-semibold text-emerald-700">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.8"
                                        stroke="currentColor"
                                        class="h-4 w-4"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M6.75 3v2.25M17.25 3v2.25M3.75 9.75h16.5M5.25 5.25h13.5A1.5 1.5 0 0 1 20.25 6.75v12A1.875 1.875 0 0 1 18.375 20.625H5.625A1.875 1.875 0 0 1 3.75 18.75v-12A1.5 1.5 0 0 1 5.25 5.25Z"
                                        />
                                    </svg>

                                    <span>
                                        Tahun Ajaran {{ $unitAcademicYear }}
                                    </span>

                                </div>

                            @endif

                            {{-- =============================================
                                STATISTICS
                            ============================================== --}}
                            <div class="mt-5 grid grid-cols-2 gap-3">


                                {{-- =========================================
                                    TOTAL SISWA
                                ========================================== --}}
                                <div class="rounded-2xl border border-emerald-100 bg-emerald-50/70 p-4 text-center">

                                    <div class="text-2xl font-extrabold text-emerald-700">
                                        {{ number_format($unitStudentCount) }}
                                    </div>

                                    <div class="mt-1 text-xs font-medium text-slate-600 sm:text-sm">
                                        Total Siswa
                                    </div>

                                </div>


                                {{-- =========================================
                                    TOTAL GURU
                                ========================================== --}}
                                <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4 text-center">

                                    <div class="text-2xl font-extrabold text-emerald-700">
                                        {{ number_format($unit->teachers_count ?? 0) }}
                                    </div>

                                    <div class="mt-1 text-xs font-medium text-slate-600 sm:text-sm">
                                        Total Guru
                                    </div>

                                </div>

                            </div>


                            {{-- =============================================
                                BUTTON
                            ============================================== --}}
                            <div class="mt-6 flex flex-1 items-end">

                                <a
                                    href="{{ route('units.show', $unit) }}"
                                    class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-emerald-700 px-5 py-3 text-sm font-bold text-white transition duration-200 hover:bg-emerald-800 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2"
                                >

                                    <span>
                                        Lihat Detail
                                    </span>

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-1"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"
                                        />
                                    </svg>

                                </a>

                            </div>

                        </div>

                    </article>

                @endforeach

            </div>


        @else

            {{-- =================================================
                EMPTY STATE
            ================================================== --}}
            <div class="mt-12">

                <div class="rounded-3xl border border-dashed border-slate-300 bg-white px-6 py-20 text-center shadow-sm">

                    <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-9 w-9"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4.5 6.75A2.25 2.25 0 0 1 6.75 4.5h10.5a2.25 2.25 0 0 1 2.25 2.25v10.5a2.25 2.25 0 0 1-2.25 2.25H6.75a2.25 2.25 0 0 1-2.25-2.25V6.75Z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8.25 9h7.5M8.25 12h7.5M8.25 15h4.5"
                            />

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

        @endif


        {{-- =================================================
            VIEW ALL BUTTON
        ================================================== --}}
        @if($units->count())

            <div class="mt-10 text-center">

                <a
                    href="{{ route('units.index') }}"
                    class="inline-flex items-center justify-center gap-2 rounded-xl border border-emerald-200 bg-white px-6 py-3.5 text-sm font-bold text-emerald-700 shadow-sm transition hover:border-emerald-300 hover:bg-emerald-50 hover:text-emerald-800 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2"
                >

                    <span>
                        Lihat Semua Unit Pendidikan
                    </span>

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
                            d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"
                        />
                    </svg>

                </a>

            </div>

        @endif

    </div>

</section>