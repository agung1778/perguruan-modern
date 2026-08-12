<section class="relative overflow-hidden bg-slate-50 py-16 sm:py-20 lg:py-24">
    <div class="pointer-events-none absolute -left-40 top-20 h-80 w-80 rounded-full bg-emerald-100/50 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-40 bottom-0 h-96 w-96 rounded-full bg-green-100/40 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
        <div class="flex flex-col gap-7 md:flex-row md:items-end md:justify-between">
            <div class="max-w-2xl">
                <span class="inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-2 text-xs font-bold uppercase tracking-wider text-emerald-700">
                    <span class="h-2 w-2 rounded-full bg-emerald-600"></span>
                    Galeri
                </span>

                <h2 class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                    Dokumentasi Kegiatan
                </h2>

                <div class="mt-5 flex items-center gap-2">
                    <span class="h-1 w-14 rounded-full bg-emerald-600"></span>
                    <span class="h-1 w-5 rounded-full bg-emerald-300"></span>
                </div>

                <p class="mt-5 text-sm leading-7 text-slate-600 sm:text-base">
                    Berbagai dokumentasi kegiatan dan aktivitas
                    {{ $website?->school_name ?? 'Perguruan Amaliah' }}.
                </p>
            </div>

            @if(isset($gallery) && $gallery->count() > 1)
                <div class="flex shrink-0 items-center gap-3">
                    <button
                        type="button"
                        id="gallery-prev"
                        aria-label="Galeri sebelumnya"
                        class="flex h-11 w-11 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-600 shadow-sm transition-all duration-300 hover:border-emerald-200 hover:bg-emerald-50 hover:text-emerald-700 disabled:cursor-not-allowed disabled:opacity-40"
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

                    <button
                        type="button"
                        id="gallery-next"
                        aria-label="Galeri berikutnya"
                        class="flex h-11 w-11 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-600 shadow-sm transition-all duration-300 hover:border-emerald-200 hover:bg-emerald-50 hover:text-emerald-700 disabled:cursor-not-allowed disabled:opacity-40"
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

        @if(isset($gallery) && $gallery->count())
            <div class="relative mt-10 sm:mt-12">
                <div
                    id="gallery-viewport"
                    class="overflow-hidden"
                >
                    <div
                        id="gallery-slider"
                        class="flex gap-4 transition-transform duration-500 ease-out sm:gap-6"
                        style="will-change: transform;"
                    >
                        @foreach($gallery as $album)
                            @php
                                $cover = $album->photos->first();
                            @endphp

                            <article
                                class="gallery-card min-w-0 shrink-0 basis-full overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-emerald-200 hover:shadow-xl hover:shadow-emerald-900/10 sm:basis-[calc(50%-12px)] lg:basis-[calc(33.333333%-16px)]"
                            >
                                <a
                                    href="{{ route('gallery.show', $album) }}"
                                    class="group block"
                                >
                                    <div class="relative h-56 overflow-hidden sm:h-60 lg:h-64">
                                        @if($cover && filled($cover->photo))
                                            <img
                                                src="{{ Storage::url($cover->photo) }}"
                                                alt="{{ $album->title }}"
                                                loading="lazy"
                                                class="h-full w-full object-cover transition duration-700 ease-out group-hover:scale-105"
                                            >

                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/5 to-transparent opacity-80"></div>

                                            <div class="absolute bottom-4 left-4 rounded-lg bg-black/40 px-3 py-2 text-xs font-semibold text-white backdrop-blur-md">
                                                {{ $album->photos->count() }} Foto
                                            </div>
                                        @else
                                            <div class="flex h-full items-center justify-center bg-emerald-50">
                                                <div class="text-center">
                                                    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-100 text-emerald-600">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            fill="none"
                                                            viewBox="0 0 24 24"
                                                            stroke-width="1.6"
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

                                                    <span class="mt-3 block text-sm font-medium text-emerald-700">
                                                        Belum Ada Foto
                                                    </span>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </a>

                                <div class="p-5 sm:p-6">
                                    <h3 class="line-clamp-2 text-lg font-bold leading-snug text-slate-900 sm:text-xl">
                                        {{ $album->title }}
                                    </h3>

                                    <p class="mt-3 line-clamp-2 text-sm leading-7 text-slate-600">
                                        {{ $album->description ?? 'Dokumentasi kegiatan Perguruan Amaliah.' }}
                                    </p>

                                    <a
                                        href="{{ route('gallery.show', $album) }}"
                                        class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-emerald-700 transition-colors duration-300 hover:text-emerald-800"
                                    >
                                        <span>Lihat Galeri</span>

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
                                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"
                                            />
                                        </svg>
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        @else
            <div class="mt-12 rounded-3xl border border-dashed border-slate-300 bg-white px-6 py-14 text-center sm:px-10 sm:py-16">
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

                <h3 class="mt-6 text-xl font-bold text-slate-900">
                    Belum Ada Galeri
                </h3>

                <p class="mx-auto mt-3 max-w-md text-sm leading-7 text-slate-500">
                    Dokumentasi kegiatan akan muncul setelah ditambahkan melalui dashboard admin.
                </p>
            </div>
        @endif
    </div>
</section>

@if(isset($gallery) && $gallery->count() > 1)
<script>
document.addEventListener('DOMContentLoaded', () => {
    const viewport = document.getElementById('gallery-viewport');
    const slider = document.getElementById('gallery-slider');
    const next = document.getElementById('gallery-next');
    const prev = document.getElementById('gallery-prev');

    if (!viewport || !slider || !next || !prev) {
        return;
    }

    let currentIndex = 0;

    const getVisibleCards = () => {
        if (window.innerWidth >= 1024) {
            return 3;
        }

        if (window.innerWidth >= 640) {
            return 2;
        }

        return 1;
    };

    const getMaxIndex = () => {
        const visibleCards = getVisibleCards();
        const totalCards = slider.querySelectorAll('.gallery-card').length;

        return Math.max(0, totalCards - visibleCards);
    };

    const getCardStep = () => {
        const card = slider.querySelector('.gallery-card');

        if (!card) {
            return viewport.clientWidth;
        }

        const sliderStyle = window.getComputedStyle(slider);
        const gap = parseFloat(sliderStyle.columnGap || sliderStyle.gap || 0);

        return card.getBoundingClientRect().width + gap;
    };

    const updateSlider = (animate = true) => {
        const maxIndex = getMaxIndex();

        currentIndex = Math.min(
            Math.max(currentIndex, 0),
            maxIndex
        );

        const offset = currentIndex * getCardStep();

        slider.style.transitionDuration = animate ? '500ms' : '0ms';
        slider.style.transform = `translate3d(-${offset}px, 0, 0)`;

        prev.disabled = currentIndex <= 0;
        next.disabled = currentIndex >= maxIndex;
    };

    next.addEventListener('click', () => {
        const maxIndex = getMaxIndex();

        if (currentIndex < maxIndex) {
            currentIndex++;
            updateSlider();
        }
    });

    prev.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlider();
        }
    });

    let resizeTimer;

    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);

        resizeTimer = setTimeout(() => {
            currentIndex = Math.min(
                currentIndex,
                getMaxIndex()
            );

            updateSlider(false);
        }, 100);
    });

    updateSlider(false);
});
</script>
@endif