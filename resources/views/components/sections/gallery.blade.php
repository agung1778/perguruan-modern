{{-- =========================================================
GALLERY SECTION
========================================================= --}}

<section class="relative overflow-hidden bg-slate-50 py-16 sm:py-20 lg:py-24">

{{-- =====================================================
    DECORATIVE BACKGROUND
====================================================== --}}
<div class="pointer-events-none absolute -left-40 top-20 h-80 w-80 rounded-full bg-emerald-100/50 blur-3xl"></div>
<div class="pointer-events-none absolute -right-40 bottom-0 h-96 w-96 rounded-full bg-green-100/40 blur-3xl"></div>

<div class="relative mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">

    {{-- =====================================================
        HEADER
    ====================================================== --}}
    <div class="flex flex-col gap-8 md:flex-row md:items-end md:justify-between">

        <div class="max-w-2xl">

            {{-- Label --}}
            <span class="inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-2 text-xs font-bold uppercase tracking-wider text-emerald-700">
                <span class="h-2 w-2 rounded-full bg-emerald-600"></span>
                Galeri
            </span>

            {{-- Title --}}
            <h2 class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                Dokumentasi Kegiatan
            </h2>

            {{-- Accent --}}
            <div class="mt-5 flex items-center gap-2">
                <span class="h-1 w-14 rounded-full bg-emerald-600"></span>
                <span class="h-1 w-5 rounded-full bg-emerald-300"></span>
            </div>

            {{-- Description --}}
            <p class="mt-5 text-sm leading-7 text-slate-600 sm:text-base">
                Lihat berbagai dokumentasi kegiatan dan aktivitas
                {{ $website?->school_name ?? 'Perguruan Amaliah' }}.
            </p>

        </div>

        {{-- =====================================================
            NAVIGATION
        ====================================================== --}}
        @if(isset($gallery) && $gallery->count() > 1)

            <div class="flex items-center gap-3">

                {{-- Previous --}}
                <button
                    type="button"
                    id="gallery-prev"
                    aria-label="Galeri sebelumnya"
                    class="flex h-11 w-11 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-600 shadow-sm transition hover:border-emerald-200 hover:bg-emerald-50 hover:text-emerald-700 disabled:cursor-not-allowed disabled:opacity-40"
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
                            d="M15.75 19.5 8.25 12l7.5-7.5"
                        />
                    </svg>
                </button>

                {{-- Next --}}
                <button
                    type="button"
                    id="gallery-next"
                    aria-label="Galeri berikutnya"
                    class="flex h-11 w-11 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-600 shadow-sm transition hover:border-emerald-200 hover:bg-emerald-50 hover:text-emerald-700 disabled:cursor-not-allowed disabled:opacity-40"
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
                            d="m8.25 4.5 7.5 7.5-7.5 7.5"
                        />
                    </svg>
                </button>

            </div>

        @endif

    </div>


    {{-- =====================================================
        GALLERY DATA
    ====================================================== --}}

    @if(isset($gallery) && $gallery->isNotEmpty())

        {{-- =================================================
            SLIDER
        ================================================== --}}
        <div
            id="gallery-wrapper"
            class="relative mt-12 overflow-hidden"
        >

            <div
                id="gallery-slider"
                class="flex gap-6 transition-transform duration-500 ease-out will-change-transform"
            >

                @foreach($gallery as $album)

                    @php
                        /*
                         * Ambil foto pertama sebagai cover.
                         * Pastikan relasi photos tersedia.
                         */
                        $cover = $album->photos?->first();

                        /*
                         * Hitung jumlah foto.
                         */
                        $photoCount = $album->photos?->count() ?? 0;

                        /*
                         * Deskripsi fallback.
                         */
                        $description = filled($album->description)
                            ? strip_tags($album->description)
                            : 'Dokumentasi kegiatan dan aktivitas Perguruan Amaliah.';
                    @endphp


                    {{-- =================================================
                        ALBUM CARD
                    ================================================== --}}
                    <article
                        class="gallery-card min-w-[85%] overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:border-emerald-200 hover:shadow-xl sm:min-w-[45%] lg:min-w-[31%]"
                    >

                        {{-- =================================================
                            COVER IMAGE
                        ================================================== --}}
                        <div class="relative h-60 overflow-hidden bg-emerald-50">

                            @if($cover && filled($cover->photo))

                                <img
                                    src="{{ Storage::url($cover->photo) }}"
                                    alt="{{ $album->title }}"
                                    loading="lazy"
                                    class="h-full w-full object-cover transition duration-500 hover:scale-105"
                                    onerror="this.style.display='none'; this.nextElementSibling.classList.remove('hidden');"
                                >

                                {{-- Image fallback --}}
                                <div class="absolute inset-0 hidden items-center justify-center bg-emerald-50">
                                    <div class="text-center">
                                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-100 text-emerald-600">
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
                                                    d="m2.25 15.75 5.25-5.25a2.25 2.25 0 0 1 3.182 0l1.636 1.636m0 0 1.318-1.318a2.25 2.25 0 0 1 3.182 0l5.182 5.182M3.75 19.5h16.5A2.25 2.25 0 0 0 22.5 17.25V6.75A2.25 2.25 0 0 0 20.25 4.5H3.75A2.25 2.25 0 0 0 1.5 6.75v10.5A2.25 2.25 0 0 0 3.75 19.5Z"
                                                />
                                            </svg>
                                        </div>

                                        <p class="mt-3 text-xs font-medium text-emerald-600">
                                            Foto tidak dapat ditampilkan
                                        </p>
                                    </div>
                                </div>

                                {{-- Image overlay --}}
                                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>

                                {{-- Photo count --}}
                                <div class="absolute bottom-4 left-4 inline-flex items-center gap-2 rounded-lg bg-black/45 px-3 py-2 text-xs font-semibold text-white backdrop-blur-sm">

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
                                            d="m2.25 15.75 5.25-5.25a2.25 2.25 0 0 1 3.182 0l1.636 1.636m0 0 1.318-1.318a2.25 2.25 0 0 1 3.182 0l5.182 5.182M3.75 19.5h16.5A2.25 2.25 0 0 0 22.5 17.25V6.75A2.25 2.25 0 0 0 20.25 4.5H3.75A2.25 2.25 0 0 0 1.5 6.75v10.5A2.25 2.25 0 0 0 3.75 19.5Z"
                                        />
                                    </svg>

                                    {{ $photoCount }} {{ $photoCount === 1 ? 'Foto' : 'Foto' }}

                                </div>

                            @else

                                {{-- No cover --}}
                                <div class="flex h-full items-center justify-center bg-gradient-to-br from-emerald-50 to-green-100">

                                    <div class="text-center">

                                        <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-white text-emerald-600 shadow-sm ring-1 ring-emerald-100">

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
                                                    d="m2.25 15.75 5.25-5.25a2.25 2.25 0 0 1 3.182 0l1.636 1.636m0 0 1.318-1.318a2.25 2.25 0 0 1 3.182 0l5.182 5.182M3.75 19.5h16.5A2.25 2.25 0 0 0 22.5 17.25V6.75A2.25 2.25 0 0 0 20.25 4.5H3.75A2.25 2.25 0 0 0 1.5 6.75v10.5A2.25 2.25 0 0 0 3.75 19.5Z"
                                                />
                                            </svg>

                                        </div>

                                        <p class="mt-3 text-sm font-semibold text-emerald-700">
                                            Belum Ada Foto
                                        </p>

                                    </div>

                                </div>

                            @endif

                        </div>


                        {{-- =================================================
                            ALBUM CONTENT
                        ================================================== --}}
                        <div class="flex min-h-[230px] flex-col p-6">

                            {{-- Title --}}
                            <h3 class="line-clamp-2 text-xl font-bold leading-snug text-slate-900">
                                {{ $album->title }}
                            </h3>

                            {{-- Description --}}
                            <p class="mt-3 line-clamp-3 text-sm leading-7 text-slate-600">
                                {{ Str::limit($description, 150) }}
                            </p>

                            {{-- Album metadata --}}
                            <div class="mt-4 flex items-center gap-2 text-xs font-medium text-slate-500">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.8"
                                    stroke="currentColor"
                                    class="h-4 w-4 text-emerald-600"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="m2.25 15.75 5.25-5.25a2.25 2.25 0 0 1 3.182 0l1.636 1.636m0 0 1.318-1.318a2.25 2.25 0 0 1 3.182 0l5.182 5.182M3.75 19.5h16.5A2.25 2.25 0 0 0 22.5 17.25V6.75A2.25 2.25 0 0 0 20.25 4.5H3.75A2.25 2.25 0 0 0 1.5 6.75v10.5A2.25 2.25 0 0 0 3.75 19.5Z"
                                    />
                                </svg>

                                <span>
                                    {{ $photoCount }} foto tersedia
                                </span>

                            </div>


                            {{-- Action --}}
                            <div class="mt-auto pt-6">

                                <a
                                    href="{{ route('gallery.show', $album) }}"
                                    class="group/link inline-flex items-center gap-2 text-sm font-bold text-emerald-700 transition hover:text-emerald-800"
                                >

                                    <span>
                                        Lihat Galeri
                                    </span>

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        class="h-4 w-4 transition-transform duration-200 group-hover/link:translate-x-1"
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

        </div>


        {{-- =================================================
            VIEW ALL
        ================================================== --}}
        <div class="mt-10 text-center">

            <a
                href="{{ route('gallery.index') }}"
                class="inline-flex items-center gap-2 rounded-xl border-2 border-emerald-700 px-6 py-3 text-sm font-bold text-emerald-700 transition hover:-translate-y-0.5 hover:bg-emerald-700 hover:text-white hover:shadow-lg hover:shadow-emerald-700/20"
            >

                Lihat Semua Galeri

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

    @else

        {{-- =================================================
            EMPTY STATE
        ================================================== --}}
        <div class="mt-12 overflow-hidden rounded-3xl border border-dashed border-slate-300 bg-white px-6 py-16 text-center shadow-sm">

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
                        d="m2.25 15.75 5.25-5.25a2.25 2.25 0 0 1 3.182 0l1.636 1.636m0 0 1.318-1.318a2.25 2.25 0 0 1 3.182 0l5.182 5.182M3.75 19.5h16.5A2.25 2.25 0 0 0 22.5 17.25V6.75A2.25 2.25 0 0 0 20.25 4.5H3.75A2.25 2.25 0 0 0 1.5 6.75v10.5A2.25 2.25 0 0 0 3.75 19.5Z"
                    />
                </svg>

            </div>

            <h3 class="mt-6 text-xl font-bold text-slate-900">
                Belum Ada Galeri
            </h3>

            <p class="mx-auto mt-3 max-w-md text-sm leading-7 text-slate-500">
                Dokumentasi kegiatan belum tersedia.
                Galeri akan ditampilkan setelah album dan foto
                ditambahkan melalui dashboard admin.
            </p>

        </div>

    @endif

</div>

</section>

{{-- =========================================================
GALLERY SLIDER SCRIPT
========================================================= --}}

<script>
document.addEventListener('DOMContentLoaded', function () {

    const slider = document.getElementById('gallery-slider');
    const wrapper = document.getElementById('gallery-wrapper');
    const nextButton = document.getElementById('gallery-next');
    const prevButton = document.getElementById('gallery-prev');

    if (!slider || !wrapper || !nextButton || !prevButton) {
        return;
    }

    let position = 0;

    function getMaxPosition() {
        return Math.max(
            0,
            slider.scrollWidth - wrapper.clientWidth
        );
    }

    function getStep() {
        const card = slider.querySelector('.gallery-card');

        if (!card) {
            return 300;
        }

        const cardWidth = card.getBoundingClientRect().width;

        const styles = window.getComputedStyle(slider);
        const gap = parseFloat(styles.columnGap || styles.gap || 0);

        return cardWidth + gap;
    }

    function updateSlider() {

        const maxPosition = getMaxPosition();

        position = Math.max(
            0,
            Math.min(position, maxPosition)
        );

        slider.style.transform = `translate3d(-${position}px, 0, 0)`;

        prevButton.disabled = position <= 0;
        nextButton.disabled = position >= maxPosition - 1;
    }

    nextButton.addEventListener('click', function () {

        position += getStep();

        updateSlider();
    });

    prevButton.addEventListener('click', function () {

        position -= getStep();

        updateSlider();
    });

    window.addEventListener('resize', function () {

        updateSlider();
    });

    updateSlider();

});
</script>
