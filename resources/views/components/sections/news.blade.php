{{-- =========================================================
LATEST NEWS SECTION
========================================================= --}}

<section class="relative overflow-hidden bg-slate-50 py-16 sm:py-20 lg:py-24">

{{-- =====================================================
    DECORATIVE BACKGROUND
====================================================== --}}
<div
    class="pointer-events-none absolute -left-40 top-20 h-80 w-80 rounded-full bg-emerald-100/50 blur-3xl sm:h-96 sm:w-96"
></div>

<div
    class="pointer-events-none absolute -right-40 bottom-0 h-80 w-80 rounded-full bg-green-100/40 blur-3xl sm:h-96 sm:w-96"
></div>

<div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

    {{-- =====================================================
        HEADER
    ====================================================== --}}
    <div class="flex flex-col gap-7 md:flex-row md:items-end md:justify-between">

        {{-- HEADER CONTENT --}}
        <div class="max-w-2xl">

            {{-- LABEL --}}
            <div
                class="inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-3.5 py-2 text-xs font-semibold uppercase tracking-wider text-emerald-700 sm:px-4 sm:text-sm"
            >
                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>

                Informasi
            </div>

            {{-- TITLE --}}
            <h2
                class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl"
            >
                Berita Terbaru
            </h2>

            {{-- ACCENT --}}
            <div class="mt-5 flex items-center gap-2 sm:mt-6">
                <span class="h-1 w-12 rounded-full bg-emerald-600 sm:w-14"></span>
                <span class="h-1 w-5 rounded-full bg-emerald-300"></span>
            </div>

            {{-- DESCRIPTION --}}
            <p class="mt-5 max-w-xl text-sm leading-7 text-slate-600 sm:mt-6 sm:text-base sm:leading-8 lg:text-lg">
                Informasi dan kegiatan terbaru
                {{ $website?->school_name ?? 'Perguruan Amaliah' }}.
            </p>

        </div>

        {{-- =================================================
            VIEW ALL BUTTON
        ================================================== --}}
        <div class="shrink-0">

            <a
                href="{{ route('news.index') }}"
                class="group inline-flex w-full items-center justify-center gap-2.5 rounded-xl bg-emerald-700 px-5 py-3.5 text-sm font-semibold text-white shadow-lg shadow-emerald-700/20 transition-all duration-300 hover:-translate-y-0.5 hover:bg-emerald-800 hover:shadow-xl hover:shadow-emerald-700/30 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 sm:w-auto sm:px-6"
            >
                <span>
                    Semua Berita
                </span>

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1 sm:h-5 sm:w-5"
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


    {{-- =====================================================
        NEWS LIST
    ====================================================== --}}
    @if(isset($news) && $news->count())

        <div class="mt-12 grid gap-6 sm:mt-14 sm:grid-cols-2 sm:gap-7 lg:mt-16 lg:grid-cols-3">

            @foreach($news as $item)

                {{-- =================================================
                    NEWS CARD
                ================================================== --}}
                <article
                    class="group flex h-full flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-emerald-200 hover:shadow-xl hover:shadow-emerald-900/10 sm:rounded-3xl"
                >

                    {{-- =================================================
                        THUMBNAIL
                    ================================================== --}}
                    <a
                        href="{{ route('news.show', ['news' => $item]) }}"
                        class="relative block h-52 shrink-0 overflow-hidden sm:h-56 lg:h-64"
                        aria-label="Baca berita {{ $item->title }}"
                    >

                        @if(filled($item->thumbnail))

                            <img
                                src="{{ Storage::url($item->thumbnail) }}"
                                alt="{{ $item->title }}"
                                loading="lazy"
                                decoding="async"
                                class="h-full w-full object-cover transition duration-700 ease-out group-hover:scale-105"
                            >

                            {{-- IMAGE OVERLAY --}}
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent opacity-80"
                            ></div>

                            {{-- CATEGORY --}}
                            @if($item->category)

                                <div class="absolute left-4 top-4 sm:left-5 sm:top-5">

                                    <span
                                        class="inline-flex items-center rounded-lg bg-emerald-600/90 px-2.5 py-1.5 text-[11px] font-bold text-white shadow-lg backdrop-blur-sm sm:px-3 sm:text-xs"
                                    >
                                        {{ $item->category->name }}
                                    </span>

                                </div>

                            @endif

                            {{-- DATE --}}
                            <div
                                class="absolute bottom-4 right-4 flex items-center gap-1.5 rounded-lg bg-black/40 px-2.5 py-1.5 text-[11px] font-medium text-white backdrop-blur-md sm:bottom-5 sm:right-5 sm:gap-2 sm:px-3 sm:py-2 sm:text-xs"
                            >

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.8"
                                    stroke="currentColor"
                                    class="h-3.5 w-3.5 sm:h-4 sm:w-4"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M6.75 3v3M17.25 3v3M3.75 9.75h16.5M5.25 5.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.25a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25Z"
                                    />
                                </svg>

                                {{ $item->created_at->translatedFormat('d F Y') }}

                            </div>

                        @else

                            {{-- =================================================
                                NO IMAGE
                            ================================================== --}}
                            <div
                                class="flex h-full w-full items-center justify-center bg-gradient-to-br from-emerald-50 via-emerald-50 to-slate-50"
                            >

                                <div class="text-center">

                                    <div
                                        class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-100 text-emerald-600 sm:h-16 sm:w-16"
                                    >

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.6"
                                            stroke="currentColor"
                                            class="h-7 w-7 sm:h-8 sm:w-8"
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

                                    <span
                                        class="mt-3 block text-xs font-medium text-emerald-700 sm:text-sm"
                                    >
                                        Tidak Ada Gambar
                                    </span>

                                </div>

                            </div>

                        @endif

                    </a>


                    {{-- =================================================
                        CONTENT
                    ================================================== --}}
                    <div class="flex flex-1 flex-col p-5 sm:p-6 lg:p-7">

                        {{-- CATEGORY --}}
                        @if($item->category)

                            <span
                                class="text-[11px] font-bold uppercase tracking-wider text-emerald-600 sm:text-xs"
                            >
                                {{ $item->category->name }}
                            </span>

                        @endif


                        {{-- DATE --}}
                        <p class="mt-2 text-xs text-slate-500 sm:text-sm">
                            {{ $item->created_at->translatedFormat('d F Y') }}
                        </p>


                        {{-- TITLE --}}
                        <h3
                            class="mt-3 line-clamp-2 text-lg font-bold leading-snug text-slate-900 sm:mt-4 sm:text-xl lg:text-2xl"
                        >

                            <a
                                href="{{ route('news.show', ['news' => $item]) }}"
                                class="transition-colors duration-300 hover:text-emerald-700 focus:outline-none focus:text-emerald-700"
                            >
                                {{ $item->title }}
                            </a>

                        </h3>


                        {{-- EXCERPT --}}
                        <p
                            class="mt-3 line-clamp-3 text-sm leading-6 text-slate-600 sm:mt-4 sm:leading-7"
                        >
                            {{ Str::limit(strip_tags($item->content), 120) }}
                        </p>


                        {{-- READ MORE --}}
                        <div class="mt-auto pt-6 sm:pt-7">

                            <a
                                href="{{ route('news.show', ['news' => $item]) }}"
                                class="group/link inline-flex items-center gap-2 text-sm font-semibold text-emerald-700 transition-colors duration-300 hover:text-emerald-800 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2"
                            >

                                <span>
                                    Baca Selengkapnya
                                </span>

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="2"
                                    stroke="currentColor"
                                    class="h-4 w-4 transition-transform duration-300 group-hover/link:translate-x-1 sm:h-5 sm:w-5"
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

        {{-- =====================================================
            EMPTY STATE
        ====================================================== --}}
        <div
            class="mt-12 rounded-2xl border border-slate-200 bg-white px-5 py-14 text-center shadow-sm sm:mt-14 sm:rounded-3xl sm:px-6 sm:py-16 lg:mt-16"
        >

            {{-- ICON --}}
            <div
                class="mx-auto flex h-18 w-18 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600 sm:h-20 sm:w-20"
            >

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.6"
                    stroke="currentColor"
                    class="h-9 w-9 sm:h-10 sm:w-10"
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


            {{-- TITLE --}}
            <h3 class="mt-5 text-xl font-bold text-slate-900 sm:mt-6">
                Belum Ada Berita
            </h3>


            {{-- DESCRIPTION --}}
            <p class="mx-auto mt-2 max-w-lg text-sm leading-7 text-slate-500 sm:text-base">
                Informasi dan berita terbaru akan ditampilkan setelah
                ditambahkan melalui dashboard admin.
            </p>


            {{-- BUTTON --}}
            <a
                href="{{ route('news.index') }}"
                class="mt-6 inline-flex items-center gap-2.5 rounded-xl bg-emerald-700 px-5 py-3.5 text-sm font-semibold text-white shadow-lg shadow-emerald-700/20 transition-all duration-300 hover:-translate-y-0.5 hover:bg-emerald-800 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 sm:mt-7 sm:px-6"
            >

                <span>
                    Lihat Semua Berita
                </span>

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-4 w-4 sm:h-5 sm:w-5"
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
