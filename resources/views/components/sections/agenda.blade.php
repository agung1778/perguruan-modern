```blade
{{-- =========================================================
    AGENDA SECTION
========================================================= --}}
<section class="relative overflow-hidden bg-slate-50 py-16 sm:py-20 lg:py-24">

    {{-- =====================================================
        DECORATIVE BACKGROUND
    ====================================================== --}}
    <div class="pointer-events-none absolute -left-40 top-20 h-72 w-72 rounded-full bg-emerald-100/50 blur-3xl sm:h-80 sm:w-80"></div>

    <div class="pointer-events-none absolute -right-40 bottom-0 h-80 w-80 rounded-full bg-green-100/40 blur-3xl sm:h-96 sm:w-96"></div>


    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">


        {{-- =====================================================
            HEADER
        ====================================================== --}}
        <div class="mx-auto max-w-3xl text-center">

            {{-- Label --}}
            <div class="inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-3 py-1.5 text-xs font-semibold uppercase tracking-wider text-emerald-700 sm:px-4 sm:py-2 sm:text-sm">

                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>

                Agenda

            </div>


            {{-- Title --}}
            <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-slate-900 sm:mt-5 sm:text-4xl lg:text-5xl">

                Kegiatan Mendatang

            </h2>


            {{-- Accent --}}
            <div class="mt-5 flex items-center justify-center gap-2 sm:mt-6">

                <span class="h-1 w-10 rounded-full bg-emerald-600 sm:w-12"></span>

                <span class="h-1 w-4 rounded-full bg-emerald-300"></span>

            </div>


            {{-- Description --}}
            <p class="mx-auto mt-5 max-w-2xl text-sm leading-7 text-slate-600 sm:mt-6 sm:text-base sm:leading-8 lg:text-lg">

                Informasi kegiatan dan agenda terbaru
                yang akan dilaksanakan oleh
                {{ $website?->school_name ?? 'Perguruan Amaliah' }}.

            </p>

        </div>


        {{-- =====================================================
            AGENDA LIST
        ====================================================== --}}
        @if(isset($agendas) && $agendas->count())

            <div class="mt-10 space-y-4 sm:mt-12 sm:space-y-5 lg:mt-16">

                @foreach($agendas as $agenda)

                    <article
                        class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-emerald-200 hover:shadow-xl hover:shadow-emerald-900/10 sm:rounded-3xl sm:p-6 lg:p-7"
                    >

                        {{-- Left Accent --}}
                        <div
                            class="absolute left-0 top-0 h-full w-1 bg-emerald-600 opacity-0 transition duration-300 group-hover:opacity-100"
                        ></div>


                        <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between lg:gap-8">


                            {{-- =================================================
                                LEFT CONTENT
                            ================================================== --}}
                            <div class="flex min-w-0 flex-1 flex-col gap-5 sm:flex-row sm:items-start sm:gap-6">


                                {{-- =================================================
                                    DATE
                                ================================================== --}}
                                @if($agenda->date)

                                    <div
                                        class="flex h-[72px] w-[72px] shrink-0 flex-col items-center justify-center rounded-2xl bg-emerald-700 text-white shadow-lg shadow-emerald-700/20 transition duration-300 group-hover:bg-emerald-800 sm:h-20 sm:w-20"
                                    >

                                        <span class="text-2xl font-extrabold leading-none sm:text-3xl">

                                            {{ $agenda->date->format('d') }}

                                        </span>

                                        <span class="mt-1 text-[10px] font-semibold uppercase tracking-wider text-emerald-100 sm:text-xs">

                                            {{ $agenda->date->translatedFormat('M') }}

                                        </span>

                                    </div>

                                @else

                                    <div
                                        class="flex h-[72px] w-[72px] shrink-0 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600 sm:h-20 sm:w-20"
                                    >

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.8"
                                            stroke="currentColor"
                                            class="h-8 w-8 sm:h-9 sm:w-9"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M6.75 3v3M17.25 3v3M3.75 9.75h16.5M5.25 5.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.25a2.25 2.25 0 0 1-2.25-2.25V7.5a2.25 2.25 0 0 1 2.25-2.25Z"
                                            />
                                        </svg>

                                    </div>

                                @endif


                                {{-- =================================================
                                    CONTENT
                                ================================================== --}}
                                <div class="min-w-0 flex-1">

                                    {{-- Title --}}
                                    <h3
                                        class="text-lg font-bold leading-snug text-slate-900 transition duration-300 group-hover:text-emerald-700 sm:text-xl lg:text-2xl"
                                    >

                                        {{ $agenda->title }}

                                    </h3>


                                    {{-- Meta Information --}}
                                    <div class="mt-3 flex flex-col gap-2 text-xs text-slate-500 sm:flex-row sm:flex-wrap sm:gap-x-5 sm:text-sm">


                                        {{-- Date --}}
                                        @if($agenda->date)

                                            <div class="flex items-center gap-2">

                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke-width="1.8"
                                                    stroke="currentColor"
                                                    class="h-4 w-4 shrink-0 text-emerald-600"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M6.75 3v3M17.25 3v3M3.75 9.75h16.5M5.25 5.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.25a2.25 2.25 0 0 1-2.25-2.25V7.5a2.25 2.25 0 0 1 2.25-2.25Z"
                                                    />
                                                </svg>

                                                <span>
                                                    {{ $agenda->date->translatedFormat('d F Y') }}
                                                </span>

                                            </div>

                                        @endif


                                        {{-- Location --}}
                                        @if($agenda->location)

                                            <div class="flex min-w-0 items-center gap-2">

                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke-width="1.8"
                                                    stroke="currentColor"
                                                    class="h-4 w-4 shrink-0 text-emerald-600"
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

                                                <span class="truncate">
                                                    {{ $agenda->location }}
                                                </span>

                                            </div>

                                        @endif

                                    </div>


                                    {{-- Description --}}
                                    @if($agenda->description)

                                        <p class="mt-3 max-w-3xl text-sm leading-6 text-slate-600 sm:mt-4 sm:leading-7">

                                            {{ Str::limit(strip_tags($agenda->description), 150) }}

                                        </p>

                                    @endif

                                </div>

                            </div>


                            {{-- =================================================
                                DETAIL BUTTON
                            ================================================== --}}
                            <div class="w-full shrink-0 lg:w-auto">

                                <a
                                    href="{{ route('agenda.show', $agenda) }}"
                                    class="group/button inline-flex w-full items-center justify-center gap-3 rounded-xl bg-emerald-700 px-5 py-3 text-sm font-semibold text-white shadow-md shadow-emerald-700/20 transition-all duration-300 hover:-translate-y-0.5 hover:bg-emerald-800 hover:shadow-lg hover:shadow-emerald-700/30 sm:px-6 sm:py-3.5 sm:text-base lg:w-auto"
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
                                        class="h-5 w-5 transition-transform duration-300 group-hover/button:translate-x-1"
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


            {{-- =====================================================
                VIEW ALL BUTTON
            ====================================================== --}}
            <div class="mt-8 text-center sm:mt-10 lg:mt-12">

                <a
                    href="{{ route('agenda.index') }}"
                    class="group inline-flex w-full items-center justify-center gap-3 rounded-xl border-2 border-emerald-700 px-6 py-3 text-sm font-semibold text-emerald-700 transition-all duration-300 hover:-translate-y-0.5 hover:bg-emerald-700 hover:text-white hover:shadow-lg hover:shadow-emerald-700/20 sm:w-auto sm:px-7 sm:py-3.5 sm:text-base"
                >

                    <span>
                        Lihat Semua Agenda
                    </span>

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="h-5 w-5 transition-transform duration-300 group-hover:translate-x-1"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"
                        />
                    </svg>

                </a>

            </div>

        @else

            {{-- =====================================================
                EMPTY STATE
            ====================================================== --}}
            <div class="mt-10 overflow-hidden rounded-2xl border border-slate-200 bg-white px-5 py-12 text-center shadow-sm sm:mt-12 sm:rounded-3xl sm:px-6 sm:py-16">

                {{-- Icon --}}
                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600 sm:h-20 sm:w-20">

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
                            d="M6.75 3v3M17.25 3v3M3.75 9.75h16.5M5.25 5.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.25a2.25 2.25 0 0 1-2.25 2.25Z"
                        />
                    </svg>

                </div>


                {{-- Title --}}
                <h3 class="mt-5 text-lg font-bold text-slate-900 sm:mt-6 sm:text-xl">

                    Belum Ada Agenda

                </h3>


                {{-- Description --}}
                <p class="mx-auto mt-2 max-w-md text-sm leading-7 text-slate-500">

                    Belum ada kegiatan atau agenda yang tersedia saat ini.
                    Silakan kembali lagi untuk melihat informasi kegiatan terbaru.

                </p>

            </div>

        @endif

    </div>

</section>
```
