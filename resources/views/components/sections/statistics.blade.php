{{-- =========================================================
    STATISTICS SECTION
========================================================= --}}
<section class="relative overflow-hidden bg-gradient-to-br from-emerald-950 via-emerald-900 to-slate-950 py-24 sm:py-28">

    {{-- Decorative Background --}}
    <div class="pointer-events-none absolute -left-40 top-0 h-96 w-96 rounded-full bg-emerald-500/10 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-40 bottom-0 h-96 w-96 rounded-full bg-green-400/10 blur-3xl"></div>
    <div class="pointer-events-none absolute left-1/2 top-1/2 h-80 w-80 -translate-x-1/2 -translate-y-1/2 rounded-full bg-emerald-400/5 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Header --}}
        <div class="mx-auto max-w-3xl text-center">

            <div class="inline-flex items-center gap-2 rounded-full border border-emerald-300/20 bg-emerald-400/10 px-4 py-2 text-sm font-semibold uppercase tracking-widest text-emerald-200">
                <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                Statistik
            </div>

            <h2 class="mt-5 text-3xl font-extrabold tracking-tight text-white sm:text-4xl md:text-5xl">
                Perguruan Dalam Angka
            </h2>

            <div class="mt-6 flex items-center justify-center gap-2">
                <span class="h-1 w-14 rounded-full bg-emerald-500"></span>
                <span class="h-1 w-5 rounded-full bg-emerald-300"></span>
            </div>

            <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-emerald-50/70 sm:text-lg">
                Gambaran perkembangan dan capaian
                {{ $website?->school_name ?? 'Perguruan Amaliah' }}
                berdasarkan data terbaru.
            </p>

            {{-- Academic Year --}}
            @if(!empty($academicYears) && $academicYears->count())

                <form
                    method="GET"
                    action="{{ route('home') }}"
                    class="mx-auto mt-8 flex w-fit flex-col items-center gap-3 rounded-2xl border border-white/10 bg-white/5 p-3 backdrop-blur-md sm:flex-row"
                >

                    <label
                        for="academic_year"
                        class="text-sm font-semibold text-emerald-50"
                    >
                        Tahun Ajaran
                    </label>

                    <select
                        id="academic_year"
                        name="academic_year"
                        onchange="this.form.submit()"
                        class="min-w-52 cursor-pointer rounded-xl border border-white/10 bg-white/10 px-4 py-2.5 text-sm font-semibold text-white outline-none transition focus:border-emerald-400 focus:ring-2 focus:ring-emerald-400/20"
                    >
                        @foreach($academicYears as $year)
                            <option
                                value="{{ $year }}"
                                class="bg-emerald-950 text-white"
                                {{ $year == ($activeAcademicYear ?? $stats['academic_year'] ?? null) ? 'selected' : '' }}
                            >
                                {{ $year }}
                            </option>
                        @endforeach
                    </select>

                </form>

            @endif

        </div>

        {{-- Default Statistics --}}
        @php
            $stats = $stats ?? [
                'teachers' => 0,
                'students' => 0,
                'units' => 0,
                'news' => 0,
                'academic_year' => '-',
            ];
        @endphp

        {{-- Statistics Grid --}}
        <div class="mt-16 grid grid-cols-2 gap-4 sm:gap-6 lg:grid-cols-4">

            {{-- Guru --}}
            <div class="group relative overflow-hidden rounded-3xl border border-white/10 bg-white/[0.06] p-6 text-center backdrop-blur-md transition-all duration-300 hover:-translate-y-2 hover:border-emerald-400/30 hover:bg-white/[0.10] sm:p-8">

                <div class="absolute -right-10 -top-10 h-28 w-28 rounded-full bg-emerald-400/10 blur-3xl transition group-hover:bg-emerald-400/20"></div>

                <div class="relative mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-400/10 text-emerald-300 ring-1 ring-emerald-400/20 transition duration-300 group-hover:scale-110 group-hover:bg-emerald-400/20">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="h-7 w-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.34 9.34 0 0 0 4.121-.952M15 19.128v-.003c0-1.14-.67-2.2-1.712-2.7a6.75 6.75 0 0 0-5.576 0C6.67 16.925 6 17.985 6 19.125v.003m9 0a9.38 9.38 0 0 1-2.625.372 9.34 9.34 0 0 1-4.121-.952M12 13.5a4.125 4.125 0 1 0 0-8.25 4.125 4.125 0 0 0 0 8.25Z"/>
                    </svg>
                </div>

                <p class="mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl">
                    {{ number_format($stats['teachers']) }}
                </p>

                <p class="mt-3 text-sm font-medium text-emerald-100/60 sm:text-base">
                    Tenaga Pendidik
                </p>

            </div>

            {{-- Siswa --}}
            <div class="group relative overflow-hidden rounded-3xl border border-white/10 bg-white/[0.06] p-6 text-center backdrop-blur-md transition-all duration-300 hover:-translate-y-2 hover:border-emerald-400/30 hover:bg-white/[0.10] sm:p-8">

                <div class="absolute -right-10 -top-10 h-28 w-28 rounded-full bg-emerald-400/10 blur-3xl transition group-hover:bg-emerald-400/20"></div>

                <div class="relative mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-400/10 text-emerald-300 ring-1 ring-emerald-400/20 transition duration-300 group-hover:scale-110 group-hover:bg-emerald-400/20">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="h-7 w-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M4.5 7.5 12 3l7.5 4.5L12 12 4.5 7.5Z"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M7.5 9.3V15c0 .8 2 2.5 4.5 2.5s4.5-1.7 4.5-2.5V9.3"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M19.5 9v5"/>
                    </svg>
                </div>

                <p class="mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl">
                    {{ number_format($stats['students']) }}
                </p>

                <p class="mt-3 text-sm font-medium text-emerald-100/60 sm:text-base">
                    Total Siswa
                </p>

                <p class="mt-1 text-xs text-emerald-200/40">
                    Tahun Ajaran {{ $stats['academic_year'] ?? '-' }}
                </p>

            </div>

            {{-- Unit Pendidikan --}}
            <div class="group relative overflow-hidden rounded-3xl border border-white/10 bg-white/[0.06] p-6 text-center backdrop-blur-md transition-all duration-300 hover:-translate-y-2 hover:border-emerald-400/30 hover:bg-white/[0.10] sm:p-8">

                <div class="absolute -right-10 -top-10 h-28 w-28 rounded-full bg-emerald-400/10 blur-3xl transition group-hover:bg-emerald-400/20"></div>

                <div class="relative mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-400/10 text-emerald-300 ring-1 ring-emerald-400/20 transition duration-300 group-hover:scale-110 group-hover:bg-emerald-400/20">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="h-7 w-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 21h18M5.25 21V9.75L12 5l6.75 4.75V21M9 21v-5.25h6V21M8.25 9.75h.008v.008H8.25V9.75Zm3.746 0h.008v.008h-.008V9.75Zm3.746 0h.008v.008h-.008V9.75Z"/>
                    </svg>
                </div>

                <p class="mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl">
                    {{ number_format($stats['units']) }}
                </p>

                <p class="mt-3 text-sm font-medium text-emerald-100/60 sm:text-base">
                    Unit Pendidikan
                </p>

            </div>

            {{-- Berita --}}
            <div class="group relative overflow-hidden rounded-3xl border border-white/10 bg-white/[0.06] p-6 text-center backdrop-blur-md transition-all duration-300 hover:-translate-y-2 hover:border-emerald-400/30 hover:bg-white/[0.10] sm:p-8">

                <div class="absolute -right-10 -top-10 h-28 w-28 rounded-full bg-emerald-400/10 blur-3xl transition group-hover:bg-emerald-400/20"></div>

                <div class="relative mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-400/10 text-emerald-300 ring-1 ring-emerald-400/20 transition duration-300 group-hover:scale-110 group-hover:bg-emerald-400/20">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="h-7 w-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M4.5 4.5h15v15h-15z"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="m7.5 15 2.5-2.5 2 2 2.5-3 2 2.5"/>
                        <circle cx="9" cy="9" r="1.25"/>
                    </svg>
                </div>

                <p class="mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl">
                    {{ number_format($stats['news']) }}
                </p>

                <p class="mt-3 text-sm font-medium text-emerald-100/60 sm:text-base">
                    Publikasi Berita
                </p>

            </div>

        </div>

    </div>
</section>