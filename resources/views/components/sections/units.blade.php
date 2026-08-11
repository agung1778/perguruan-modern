{{-- =========================================================
GALLERY SECTION - MODERN LIGHTBOX
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
            Galeri
        </div>

        {{-- Title --}}
        <h2 class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl md:text-5xl">
            Dokumentasi Kegiatan
        </h2>

        {{-- Accent --}}
        <div class="mt-6 flex items-center justify-center gap-2">
            <span class="h-1 w-14 rounded-full bg-emerald-600"></span>
            <span class="h-1 w-5 rounded-full bg-emerald-300"></span>
        </div>

        {{-- Description --}}
        <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">
            Lihat berbagai kegiatan, momen, dan aktivitas
            {{ $website?->school_name ?? 'Perguruan Amaliah' }}.
        </p>
    </div>


    {{-- =====================================================
        GALLERY
    ====================================================== --}}
    @if(isset($galleries) && $galleries->count())

        <div
            x-data="{
                active: 0,
                open: false,
                total: {{ $galleries->count() }},

                next() {
                    this.active = (this.active + 1) % this.total;
                },

                previous() {
                    this.active = (this.active - 1 + this.total) % this.total;
                },

                goTo(index) {
                    this.active = index;
                }
            }"
            @keydown.escape.window="open = false"
            @keydown.arrow-right.window="open && next()"
            @keydown.arrow-left.window="open && previous()"
            class="mt-16"
        >

            {{-- =================================================
                FEATURED IMAGE
            ================================================== --}}
            <div class="relative overflow-hidden rounded-3xl border border-slate-200 bg-white p-3 shadow-xl sm:p-4">

                <div class="relative aspect-[16/9] overflow-hidden rounded-2xl bg-emerald-950">

                    @foreach($galleries as $index => $gallery)

                        @php
                            $image = $gallery->image ?? $gallery->photo ?? null;
                            $title = $gallery->title ?? $gallery->name ?? 'Dokumentasi Kegiatan';
                            $description = $gallery->description ?? null;
                        @endphp

                        <div
                            x-show="active === {{ $index }}"
                            x-cloak
                            x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 scale-105"
                            x-transition:enter-end="opacity-100 scale-100"
                            class="absolute inset-0"
                        >

                            @if($image)

                                <img
                                    src="{{ Storage::url($image) }}"
                                    alt="{{ $title }}"
                                    loading="{{ $index === 0 ? 'eager' : 'lazy' }}"
                                    decoding="async"
                                    class="h-full w-full object-cover"
                                >

                                {{-- Overlay --}}
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-950/10 to-transparent"></div>

                            @else

                                <div class="flex h-full items-center justify-center bg-gradient-to-br from-emerald-800 via-emerald-900 to-slate-950">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="h-20 w-20 text-emerald-300/40"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l1.409 1.409m2.409-2.409 1.159-1.159a2.25 2.25 0 0 1 3.182 0l3.159 3.159M3.75 19.5h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Z"
                                        />
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M8.25 9.75h.008v.008H8.25V9.75Z"
                                        />
                                    </svg>

                                </div>

                            @endif


                            {{-- =================================================
                                IMAGE INFORMATION
                            ================================================== --}}
                            <div class="absolute inset-x-0 bottom-0 p-6 sm:p-8">

                                <div class="max-w-2xl">

                                    <span class="inline-flex items-center rounded-full border border-white/20 bg-black/20 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-white backdrop-blur-md">
                                        Dokumentasi
                                    </span>

                                    <h3 class="mt-3 text-xl font-bold text-white sm:text-2xl lg:text-3xl">
                                        {{ $title }}
                                    </h3>

                                    @if($description)

                                        <p class="mt-2 line-clamp-2 text-sm leading-6 text-white/70 sm:text-base">
                                            {{ Str::limit(strip_tags($description), 140) }}
                                        </p>

                                    @endif

                                </div>

                            </div>


                            {{-- =================================================
                                OPEN LIGHTBOX
                            ================================================== --}}
                            @if($image)

                                <button
                                    type="button"
                                    @click="open = true"
                                    aria-label="Perbesar gambar"
                                    class="absolute right-5 top-5 flex h-11 w-11 items-center justify-center rounded-full border border-white/20 bg-black/30 text-white backdrop-blur-md transition hover:scale-105 hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-white"
                                >

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
                                            d="M3.75 3.75h5.25m-5.25 0V9m0-5.25L9 9m11.25-5.25H15m5.25 0V9m0-5.25L15 9M3.75 20.25H9m-5.25 0V15m0 5.25L9 15m11.25 5.25H15m5.25 0V15m0 5.25L15 15"
                                        />
                                    </svg>

                                </button>

                            @endif

                        </div>

                    @endforeach


                    {{-- =================================================
                        PREVIOUS
                    ================================================== --}}
                    @if($galleries->count() > 1)

                        <button
                            type="button"
                            @click="previous()"
                            aria-label="Foto sebelumnya"
                            class="group absolute left-4 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full border border-white/20 bg-black/30 text-white backdrop-blur-md transition hover:bg-emerald-600 sm:left-6"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                class="h-5 w-5 transition-transform group-hover:-translate-x-0.5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15.75 19.5 8.25 12l7.5-7.5"
                                />
                            </svg>

                        </button>


                        {{-- =================================================
                            NEXT
                        ================================================== --}}
                        <button
                            type="button"
                            @click="next()"
                            aria-label="Foto berikutnya"
                            class="group absolute right-4 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full border border-white/20 bg-black/30 text-white backdrop-blur-md transition hover:bg-emerald-600 sm:right-6"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                class="h-5 w-5 transition-transform group-hover:translate-x-0.5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="m8.25 4.5 7.5 7.5-7.5 7.5"
                                />
                            </svg>

                        </button>

                    @endif

                </div>

            </div>


            {{-- =====================================================
                THUMBNAILS
            ====================================================== --}}
            @if($galleries->count() > 1)

                <div class="mt-5 grid grid-cols-4 gap-3 sm:grid-cols-5 md:grid-cols-6 lg:grid-cols-8">

                    @foreach($galleries as $index => $gallery)

                        @php
                            $image = $gallery->image ?? $gallery->photo ?? null;
                            $title = $gallery->title ?? $gallery->name ?? 'Dokumentasi Kegiatan';
                        @endphp

                        <button
                            type="button"
                            @click="goTo({{ $index }})"
                            :class="active === {{ $index }}
                                ? 'border-emerald-500 ring-2 ring-emerald-500/20'
                                : 'border-slate-200 opacity-70 hover:opacity-100'"
                            class="group relative aspect-square overflow-hidden rounded-2xl border-2 bg-white transition duration-300 focus:outline-none"
                            aria-label="Pilih foto {{ $index + 1 }}"
                        >

                            @if($image)

                                <img
                                    src="{{ Storage::url($image) }}"
                                    alt="{{ $title }}"
                                    loading="lazy"
                                    decoding="async"
                                    class="h-full w-full object-cover transition duration-500 group-hover:scale-110"
                                >

                            @else

                                <div class="flex h-full w-full items-center justify-center bg-emerald-50 text-emerald-600">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="h-7 w-7"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l1.409 1.409m2.409-2.409 1.159-1.159a2.25 2.25 0 0 1 3.182 0l3.159 3.159"
                                        />
                                    </svg>

                                </div>

                            @endif

                        </button>

                    @endforeach

                </div>

            @endif


            {{-- =====================================================
                COUNTER
            ====================================================== --}}
            <div class="mt-6 flex items-center justify-center">

                <div class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-4 py-2 text-sm text-slate-500 shadow-sm">

                    <span
                        x-text="String(active + 1).padStart(2, '0')"
                        class="font-bold text-emerald-600"
                    ></span>

                    <span>/</span>

                    <span class="font-semibold">
                        {{ str_pad($galleries->count(), 2, '0', STR_PAD_LEFT) }}
                    </span>

                </div>

            </div>


            {{-- =====================================================
                LIGHTBOX
            ====================================================== --}}
            <template x-teleport="body">

                <div
                    x-show="open"
                    x-cloak
                    x-transition.opacity
                    class="fixed inset-0 z-[9999] flex items-center justify-center bg-slate-950/95 p-4 backdrop-blur-sm sm:p-8"
                    @click.self="open = false"
                >

                    {{-- CLOSE --}}
                    <button
                        type="button"
                        @click="open = false"
                        aria-label="Tutup galeri"
                        class="absolute right-5 top-5 z-20 flex h-11 w-11 items-center justify-center rounded-full border border-white/10 bg-white/10 text-white transition hover:bg-emerald-600"
                    >

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
                                d="M6 18 18 6M6 6l12 12"
                            />
                        </svg>

                    </button>


                    {{-- PREVIOUS --}}
                    @if($galleries->count() > 1)

                        <button
                            type="button"
                            @click="previous()"
                            aria-label="Foto sebelumnya"
                            class="absolute left-3 top-1/2 z-20 flex h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full bg-white/10 text-white backdrop-blur-md transition hover:bg-emerald-600 sm:left-6"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                class="h-6 w-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="m14.5 19.5-7.5-7.5 7.5-7.5"
                                />
                            </svg>

                        </button>

                    @endif


                    {{-- IMAGE --}}
                    <div class="flex max-h-[90vh] max-w-6xl flex-col items-center">

                        @foreach($galleries as $index => $gallery)

                            @php
                                $image = $gallery->image ?? $gallery->photo ?? null;
                                $title = $gallery->title ?? $gallery->name ?? 'Dokumentasi Kegiatan';
                            @endphp

                            @if($image)

                                <img
                                    x-show="active === {{ $index }}"
                                    x-transition
                                    src="{{ Storage::url($image) }}"
                                    alt="{{ $title }}"
                                    class="max-h-[78vh] max-w-full rounded-2xl object-contain shadow-2xl"
                                >

                            @endif

                        @endforeach

                        <div class="mt-5 text-center">

                            @foreach($galleries as $index => $gallery)

                                @php
                                    $title = $gallery->title ?? $gallery->name ?? 'Dokumentasi Kegiatan';
                                @endphp

                                <h3
                                    x-show="active === {{ $index }}"
                                    class="text-lg font-bold text-white sm:text-xl"
                                >
                                    {{ $title }}
                                </h3>

                            @endforeach

                            <p class="mt-2 text-sm text-white/50">
                                Gunakan tombol panah atau keyboard ← →
                            </p>

                        </div>

                    </div>


                    {{-- NEXT --}}
                    @if($galleries->count() > 1)

                        <button
                            type="button"
                            @click="next()"
                            aria-label="Foto berikutnya"
                            class="absolute right-3 top-1/2 z-20 flex h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full bg-white/10 text-white backdrop-blur-md transition hover:bg-emerald-600 sm:right-6"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                class="h-6 w-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="m9.5 4.5 7.5 7.5-7.5 7.5"
                                />
                            </svg>

                        </button>

                    @endif

                </div>

            </template>

        </div>

    @else

        {{-- =====================================================
            EMPTY STATE
        ====================================================== --}}
        <div class="mt-16 rounded-3xl border border-dashed border-slate-300 bg-white px-6 py-20 text-center shadow-sm">

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
                        d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l1.409 1.409m2.409-2.409 1.159-1.159a2.25 2.25 0 0 1 3.182 0l3.159 3.159M3.75 19.5h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Z"
                    />
                </svg>

            </div>

            <h3 class="mt-6 text-xl font-bold text-slate-900">
                Belum Ada Dokumentasi
            </h3>

            <p class="mx-auto mt-3 max-w-md text-sm leading-7 text-slate-500 sm:text-base">
                Dokumentasi kegiatan dan aktivitas
                {{ $website?->school_name ?? 'Perguruan Amaliah' }}
                akan ditampilkan setelah ditambahkan melalui dashboard admin.
            </p>

        </div>

    @endif


    {{-- =====================================================
        VIEW ALL BUTTON
    ====================================================== --}}
    @if(isset($galleries) && $galleries->count())

        <div class="mt-10 text-center">

            <a
                href="{{ route('gallery.index') }}"
                class="inline-flex items-center justify-center gap-2 rounded-xl border border-emerald-200 bg-white px-6 py-3.5 text-sm font-bold text-emerald-700 shadow-sm transition hover:border-emerald-300 hover:bg-emerald-50 hover:text-emerald-800 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2"
            >

                <span>
                    Lihat Semua Galeri
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

    @endif

</div>

</section>
