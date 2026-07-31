{{-- =========================================================
    GALLERY SECTION
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
        <div class="flex flex-col items-start justify-between gap-8 md:flex-row md:items-end">
            <div class="max-w-2xl">
                {{-- Label --}}
                <div class="inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-2 text-sm font-semibold uppercase tracking-wider text-emerald-700">
                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                    Galeri
                </div>

                {{-- Title --}}
                <h2 class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl md:text-5xl">
                    Dokumentasi Kegiatan
                </h2>
                {{-- Accent --}}
                <div class="mt-6 flex items-center gap-2">
                    <span class="h-1 w-14 rounded-full bg-emerald-600"></span>
                    <span class="h-1 w-5 rounded-full bg-emerald-300"></span>
                </div>
                {{-- Description --}}
                <p class="mt-6 text-base leading-8 text-slate-600 sm:text-lg">
                    Berbagai kegiatan dan aktivitas
                    {{ $website?->school_name ?? 'Perguruan Amaliah' }}.
                </p>
            </div>
            {{-- =================================================
                VIEW ALL BUTTON
            ================================================== --}}
            <a
                href="{{ route('gallery.index') }}"
                class="group inline-flex shrink-0 items-center gap-3 rounded-xl bg-emerald-700 px-6 py-3.5 font-semibold text-white shadow-lg shadow-emerald-700/20 transition-all duration-300 hover:-translate-y-1 hover:bg-emerald-800 hover:shadow-xl hover:shadow-emerald-700/30"
            >
                <span>
                    Lihat Semua
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
            GALLERY ALBUMS
        ====================================================== --}}
        @if(isset($gallery) && $gallery->count())
            <div class="mt-16 grid gap-7 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($gallery as $album)
                    @php
                        $cover = $album->photos->first();
                    @endphp
                    {{-- =================================================
                        ALBUM CARD
                    ================================================== --}}
                    <article
                        class="group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-emerald-200 hover:shadow-xl hover:shadow-emerald-900/10"
                    >
                        {{-- =================================================
                            COVER IMAGE
                        ================================================== --}}
                        <a
                            href="{{ route('gallery.show', $album) }}"
                            class="relative block h-64 overflow-hidden"
                        >
                            @if($cover && filled($cover->photo))
                                <img
                                    src="{{ Storage::url($cover->photo) }}"
                                    alt="{{ $album->title }}"
                                    loading="lazy"
                                    class="h-full w-full object-cover transition duration-700 ease-out group-hover:scale-110"
                                >
                                {{-- Image Overlay --}}
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent opacity-80"></div>
                                {{-- View Icon --}}
                                <div class="absolute right-5 top-5 flex h-10 w-10 items-center justify-center rounded-xl bg-white/90 text-emerald-700 opacity-0 shadow-lg backdrop-blur-sm transition-all duration-300 group-hover:opacity-100">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.8"
                                        stroke="currentColor"
                                        class="h-5 w-5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M2.25 12s3.75-6.75 9.75-6.75S21.75 12 21.75 12s-3.75 6.75-9.75 6.75S2.25 12 2.25 12Z"
                                        />
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                        />
                                    </svg>
                                </div>
                                {{-- Photo Count Badge --}}
                                <div class="absolute bottom-4 left-4 inline-flex items-center gap-2 rounded-lg bg-black/50 px-3 py-2 text-xs font-semibold text-white backdrop-blur-md">
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
                                            d="m2.25 15.75 4.5-4.5 3 3 4.5-4.5 7.5 7.5"
                                        />
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M3 5.25h18v13.5H3z"
                                        />
                                    </svg>
                                    {{ $album->photos->count() }} Foto
                                </div>
                            @else
                                {{-- Empty Cover --}}
                                <div class="flex h-full w-full flex-col items-center justify-center bg-emerald-50 text-center">

                                    <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-emerald-100 text-emerald-600">

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.6"
                                            stroke="currentColor"
                                            class="h-8 w-8"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="m2.25 15.75 4.5-4.5 3 3 4.5-4.5 7.5 7.5"
                                            />
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M3 5.25h18v13.5H3z"
                                            />
                                        </svg>
                                    </div>
                                    <span class="mt-3 text-sm font-medium text-emerald-700">
                                        Belum Ada Foto
                                    </span>
                                </div>
                            @endif
                        </a>
                        {{-- =================================================
                            CONTENT
                        ================================================== --}}
                        <div class="p-6">
                            {{-- Title --}}
                            <h3 class="text-xl font-bold leading-snug text-slate-900">
                                <a
                                    href="{{ route('gallery.show', $album) }}"
                                    class="transition-colors duration-300 hover:text-emerald-700"
                                >
                                    {{ $album->title }}
                                </a>
                            </h3>
                            {{-- Description --}}
                            @if(filled($album->description))
                                <p class="mt-3 line-clamp-2 text-sm leading-7 text-slate-600">
                                    {{ $album->description }}
                                </p>
                            @else
                                <p class="mt-3 line-clamp-2 text-sm leading-7 text-slate-500">
                                    Dokumentasi kegiatan
                                    {{ $website?->school_name ?? 'Perguruan Amaliah' }}.
                                </p>
                            @endif
                            {{-- Bottom Info --}}
                            <div class="mt-6 flex items-center justify-between border-t border-slate-100 pt-5">
                                {{-- Photo Count --}}
                                <span class="inline-flex items-center gap-2 text-sm font-semibold text-emerald-700">
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
                                            d="M3 5.25h18v13.5H3z"
                                        />
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="m3 15.75 4.5-4.5 3 3 4.5-4.5 6 6"
                                        />
                                    </svg>
                                    {{ $album->photos->count() }} Foto
                                </span>
                                {{-- View Gallery --}}
                                <a
                                    href="{{ route('gallery.show', $album) }}"
                                    class="group/link inline-flex items-center gap-2 text-sm font-semibold text-slate-500 transition-colors duration-300 hover:text-emerald-700"
                                >
                                    Lihat Galeri
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        class="h-4 w-4 transition-transform duration-300 group-hover/link:translate-x-1"
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
            <div class="mt-16 rounded-3xl border border-slate-200 bg-white px-6 py-16 text-center shadow-sm">
                {{-- Icon --}}
                <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.6"
                        stroke="currentColor"
                        class="h-10 w-10"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m2.25 15.75 4.5-4.5 3 3 4.5-4.5 7.5 7.5"
                        />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3 5.25h18v13.5H3z"
                        />
                    </svg>
                </div>
                {{-- Title --}}
                <h3 class="mt-6 text-xl font-bold text-slate-900">
                    Belum Ada Galeri
                </h3>
                {{-- Description --}}
                <p class="mx-auto mt-2 max-w-lg text-sm leading-7 text-slate-500">
                    Dokumentasi kegiatan akan ditampilkan setelah
                    ditambahkan melalui dashboard admin.
                </p>
            </div>
        @endif
    </div>
</section>
