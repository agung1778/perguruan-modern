{{-- =========================================================
LATEST NEWS SECTION
========================================================= --}}

<section class="relative overflow-hidden bg-slate-50 py-20 sm:py-24 lg:py-28">
{{-- =====================================================
    DECORATIVE BACKGROUND
====================================================== --}}

<div class="pointer-events-none absolute -left-40 top-20 h-96 w-96 rounded-full bg-emerald-100/50 blur-3xl"></div>

<div class="pointer-events-none absolute -right-40 bottom-0 h-96 w-96 rounded-full bg-green-100/40 blur-3xl"></div>

<div class="pointer-events-none absolute left-1/2 top-1/2 h-72 w-72 -translate-x-1/2 -translate-y-1/2 rounded-full bg-emerald-100/20 blur-3xl"></div>


<div class="relative mx-auto max-w-7xl px-6 lg:px-8">

    {{-- =====================================================
        HEADER
    ====================================================== --}}

    <div class="flex flex-col gap-8 md:flex-row md:items-end md:justify-between">

        {{-- TITLE --}}

        <div class="max-w-2xl">

            {{-- Label --}}

            <div class="inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-2 text-xs font-bold uppercase tracking-[0.15em] text-emerald-700">

                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>

                Informasi Terkini

            </div>


            {{-- Title --}}

            <h2 class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">

                Berita Terbaru

            </h2>


            {{-- Accent --}}

            <div class="mt-6 flex items-center gap-2">

                <span class="h-1 w-14 rounded-full bg-emerald-600"></span>

                <span class="h-1 w-5 rounded-full bg-emerald-300"></span>

            </div>


            {{-- Description --}}

            <p class="mt-6 max-w-xl text-base leading-8 text-slate-600 sm:text-lg">

                Ikuti informasi, kegiatan, prestasi, dan perkembangan terbaru dari

                <span class="font-semibold text-emerald-700">

                    {{ $website?->school_name ?? 'Perguruan Amaliah' }}

                </span>.

            </p>

        </div>


        {{-- =================================================
            VIEW ALL
        ================================================== --}}

        <a
            href="{{ route('news.index') }}"
            class="group inline-flex w-fit shrink-0 items-center gap-3 rounded-xl bg-emerald-700 px-6 py-3.5 font-semibold text-white shadow-lg shadow-emerald-700/20 transition-all duration-300 hover:-translate-y-1 hover:bg-emerald-800 hover:shadow-xl hover:shadow-emerald-700/30"
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


    {{-- =====================================================
        NEWS DATA
    ====================================================== --}}

    @if(isset($news) && $news->count() > 0)

        <div class="mt-14 grid gap-7 sm:grid-cols-2 lg:mt-16 lg:grid-cols-3">

            @foreach($news as $item)

                @php

                    $title = $item->title ?? 'Berita';

                    $categoryName = $item->category?->name;

                    $date = $item->created_at
                        ? $item->created_at->translatedFormat('d F Y')
                        : null;

                    $excerpt = filled($item->content)
                        ? Str::limit(
                            trim(strip_tags($item->content)),
                            130
                        )
                        : 'Informasi terbaru dari ' .
                          ($website?->school_name ?? 'Perguruan Amaliah') .
                          '.';

                @endphp


                {{-- =================================================
                    NEWS CARD
                ================================================== --}}

                <article
                    class="group flex h-full flex-col overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-emerald-200 hover:shadow-xl hover:shadow-emerald-900/10"
                >

                    {{-- =================================================
                        IMAGE
                    ================================================== --}}

                    <a
                        href="{{ route('news.show', ['news' => $item]) }}"
                        class="relative block h-60 overflow-hidden bg-emerald-50"
                    >

                        @if(filled($item->thumbnail))

                            <img
                                src="{{ Storage::url($item->thumbnail) }}"
                                alt="{{ $title }}"
                                loading="lazy"
                                class="h-full w-full object-cover transition duration-700 ease-out group-hover:scale-110"
                            >

                            {{-- Image Overlay --}}

                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>

                        @else

                            {{-- =================================================
                                FALLBACK IMAGE
                            ================================================== --}}

                            <div class="flex h-full w-full items-center justify-center bg-gradient-to-br from-emerald-50 via-white to-green-50">

                                <div class="text-center">

                                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-emerald-100 text-emerald-600">

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="h-8 w-8"
                                        >

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M4.5 5.25A2.25 2.25 0 0 1 6.75 3h10.5a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 17.25 21H6.75a2.25 2.25 0 0 1-2.25-2.25V5.25Z"
                                            />

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="m7.5 16.5 3.25-3.25 2.25 2.25 2.5-3 2 2.5"
                                            />

                                            <circle
                                                cx="9"
                                                cy="8.5"
                                                r="1"
                                            />

                                        </svg>

                                    </div>

                                    <span class="mt-3 block text-xs font-semibold uppercase tracking-wider text-emerald-600">

                                        Dokumentasi Berita

                                    </span>

                                </div>

                            </div>

                        @endif


                        {{-- =================================================
                            CATEGORY BADGE
                        ================================================== --}}

                        @if(filled($categoryName))

                            <div class="absolute left-5 top-5">

                                <span class="inline-flex items-center rounded-lg bg-emerald-600/95 px-3 py-1.5 text-xs font-bold text-white shadow-lg backdrop-blur-sm">

                                    {{ $categoryName }}

                                </span>

                            </div>

                        @endif


                        {{-- =================================================
                            DATE
                        ================================================== --}}

                        @if($date)

                            <div class="absolute bottom-5 right-5 flex items-center gap-2 rounded-lg bg-black/40 px-3 py-2 text-xs font-medium text-white backdrop-blur-md">

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
                                        d="M6.75 3v3M17.25 3v3M3.75 9.75h16.5M5.25 5.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.25a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25Z"
                                    />

                                </svg>

                                {{ $date }}

                            </div>

                        @endif

                    </a>


                    {{-- =================================================
                        CONTENT
                    ================================================== --}}

                    <div class="flex flex-1 flex-col p-6 sm:p-7">

                        {{-- Category --}}

                        @if(filled($categoryName))

                            <div class="mb-3">

                                <span class="text-xs font-bold uppercase tracking-[0.12em] text-emerald-600">

                                    {{ $categoryName }}

                                </span>

                            </div>

                        @endif


                        {{-- Date --}}

                        @if($date)

                            <p class="text-xs font-medium text-slate-400">

                                Dipublikasikan {{ $date }}

                            </p>

                        @endif


                        {{-- Title --}}

                        <h3 class="mt-3 line-clamp-2 text-xl font-bold leading-snug text-slate-900 sm:text-2xl">

                            <a
                                href="{{ route('news.show', ['news' => $item]) }}"
                                class="transition-colors duration-300 hover:text-emerald-700"
                            >

                                {{ $title }}

                            </a>

                        </h3>


                        {{-- Excerpt --}}

                        <p class="mt-4 line-clamp-3 text-sm leading-7 text-slate-600">

                            {{ $excerpt }}

                        </p>


                        {{-- Read More --}}

                        <div class="mt-auto pt-7">

                            <a
                                href="{{ route('news.show', ['news' => $item]) }}"
                                class="group/link inline-flex items-center gap-2 font-semibold text-emerald-700 transition-colors duration-300 hover:text-emerald-800"
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
                                    class="h-5 w-5 transition-transform duration-300 group-hover/link:translate-x-1"
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

        <div class="mt-14 rounded-3xl border border-dashed border-slate-300 bg-white px-6 py-16 text-center shadow-sm lg:mt-16">

            {{-- Icon --}}

            <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-10 w-10"
                >

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4.5 5.25A2.25 2.25 0 0 1 6.75 3h10.5a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 17.25 21H6.75a2.25 2.25 0 0 1-2.25-2.25V5.25Z"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m7.5 16.5 3.25-3.25 2.25 2.25 2.5-3 2 2.5"
                    />

                    <circle
                        cx="9"
                        cy="8.5"
                        r="1"
                    />

                </svg>

            </div>


            {{-- Title --}}

            <h3 class="mt-6 text-xl font-bold text-slate-900">

                Belum Ada Berita

            </h3>


            {{-- Description --}}

            <p class="mx-auto mt-3 max-w-lg text-sm leading-7 text-slate-500">

                Belum ada berita atau informasi yang dipublikasikan.
                Berita terbaru akan muncul di halaman ini setelah ditambahkan melalui dashboard admin.

            </p>


            {{-- Button --}}

            <a
                href="{{ route('news.index') }}"
                class="mt-7 inline-flex items-center gap-3 rounded-xl bg-emerald-700 px-6 py-3.5 font-semibold text-white shadow-lg shadow-emerald-700/20 transition-all duration-300 hover:-translate-y-0.5 hover:bg-emerald-800 hover:shadow-xl"
            >

                Lihat Semua Berita

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-5 w-5"
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
