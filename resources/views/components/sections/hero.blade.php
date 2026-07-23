{{-- =========================================================
    HERO / HOMEPAGE BANNER
========================================================= --}}
<section class="relative overflow-hidden">

    @if(isset($banners) && $banners->count())

        <div
            x-data="{
                active: 0,
                total: {{ $banners->count() }},
                interval: null,

                init() {
                    this.interval = setInterval(() => {
                        this.next()
                    }, 6000)
                },

                destroy() {
                    clearInterval(this.interval)
                },

                next() {
                    this.active = (this.active + 1) % this.total
                },

                previous() {
                    this.active = (this.active - 1 + this.total) % this.total
                },

                goTo(index) {
                    this.active = index
                }
            }"
            class="relative h-[620px] md:h-[680px] lg:h-[720px]"
        >


            {{-- =====================================================
                SLIDES
            ====================================================== --}}
            @foreach($banners as $index => $banner)

                <div
                    x-show="active === {{ $index }}"
                    x-cloak
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 scale-[1.02]"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-700"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="absolute inset-0"
                >


                    {{-- =================================================
                        BACKGROUND IMAGE
                    ================================================== --}}
                    @if(filled($banner->image))

                        <img
                            src="{{ Storage::url($banner->image) }}"
                            alt="{{ $banner->title }}"
                            loading="{{ $index === 0 ? 'eager' : 'lazy' }}"
                            class="absolute inset-0 h-full w-full object-cover"
                        >

                    @else

                        <div class="absolute inset-0 bg-emerald-950"></div>

                    @endif


                    {{-- =================================================
                        DARK GREEN OVERLAY
                    ================================================== --}}
                    <div class="absolute inset-0 bg-gradient-to-r from-emerald-950/95 via-emerald-950/75 to-emerald-950/30"></div>

                    {{-- Bottom Gradient --}}
                    <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-emerald-950/50 to-transparent"></div>


                    {{-- =================================================
                        DECORATIVE ELEMENTS
                    ================================================== --}}
                    <div class="pointer-events-none absolute -right-32 -top-32 h-96 w-96 rounded-full border border-white/10"></div>

                    <div class="pointer-events-none absolute -right-20 -top-20 h-72 w-72 rounded-full border border-emerald-400/10"></div>

                    <div class="pointer-events-none absolute bottom-20 right-[15%] h-40 w-40 rounded-full bg-emerald-400/10 blur-3xl"></div>


                    {{-- =================================================
                        CONTENT
                    ================================================== --}}
                    <div class="relative flex h-full items-center">

                        <div class="mx-auto w-full max-w-7xl px-6 lg:px-8">

                            <div class="max-w-3xl text-white">


                                {{-- =================================================
                                    LABEL
                                ================================================== --}}
                                <div class="inline-flex items-center gap-2 rounded-full border border-emerald-300/20 bg-emerald-400/10 px-5 py-2.5 text-sm font-semibold uppercase tracking-widest text-emerald-200 backdrop-blur-sm">

                                    <span class="h-2 w-2 rounded-full bg-emerald-400"></span>

                                    {{ $website?->school_name ?? 'Perguruan Amaliah' }}

                                </div>


                                {{-- =================================================
                                    TITLE
                                ================================================== --}}
                                <h1 class="mt-7 text-4xl font-extrabold leading-[1.1] tracking-tight sm:text-5xl md:text-6xl lg:text-7xl">

                                    {{ $banner->title }}

                                </h1>


                                {{-- Green Accent --}}
                                <div class="mt-7 flex items-center gap-2">

                                    <span class="h-1.5 w-16 rounded-full bg-emerald-500"></span>

                                    <span class="h-1.5 w-6 rounded-full bg-emerald-300"></span>

                                </div>


                                {{-- =================================================
                                    DESCRIPTION
                                ================================================== --}}
                                @if(filled($banner->description))

                                    <p class="mt-7 max-w-2xl text-base leading-8 text-emerald-50/80 sm:text-lg md:text-xl">

                                        {{ $banner->description }}

                                    </p>

                                @endif


                                {{-- =================================================
                                    BUTTON
                                ================================================== --}}
                                @if(filled($banner->button_text))

                                    <div class="mt-10">

                                        <a
                                            href="{{ $banner->button_link ?: '#' }}"
                                            class="group inline-flex items-center gap-3 rounded-xl bg-emerald-600 px-7 py-4 font-bold text-white shadow-xl shadow-emerald-950/30 transition-all duration-300 hover:-translate-y-1 hover:bg-emerald-500 hover:shadow-2xl hover:shadow-emerald-500/20"
                                        >

                                            <span>
                                                {{ $banner->button_text }}
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

                                @endif

                            </div>

                        </div>

                    </div>

                </div>

            @endforeach


            {{-- =====================================================
                SLIDER NAVIGATION
            ====================================================== --}}
            @if($banners->count() > 1)


                {{-- =================================================
                    PREVIOUS BUTTON
                ================================================== --}}
                <button
                    type="button"
                    @click="previous()"
                    aria-label="Banner sebelumnya"
                    class="group absolute left-5 top-1/2 flex h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full border border-white/20 bg-black/20 text-white backdrop-blur-md transition-all duration-300 hover:border-emerald-400/50 hover:bg-emerald-600 hover:shadow-lg hover:shadow-emerald-900/30 md:left-8"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="h-5 w-5 transition-transform duration-300 group-hover:-translate-x-0.5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"
                        />
                    </svg>

                </button>


                {{-- =================================================
                    NEXT BUTTON
                ================================================== --}}
                <button
                    type="button"
                    @click="next()"
                    aria-label="Banner berikutnya"
                    class="group absolute right-5 top-1/2 flex h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full border border-white/20 bg-black/20 text-white backdrop-blur-md transition-all duration-300 hover:border-emerald-400/50 hover:bg-emerald-600 hover:shadow-lg hover:shadow-emerald-900/30 md:right-8"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="h-5 w-5 transition-transform duration-300 group-hover:translate-x-0.5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m13.5 4.5 7.5 7.5m0 0-7.5 7.5M21 12H3"
                        />
                    </svg>

                </button>


                {{-- =================================================
                    INDICATORS
                ================================================== --}}
                <div class="absolute bottom-8 left-0 right-0 flex justify-center gap-2.5">

                    @foreach($banners as $index => $banner)

                        <button
                            type="button"
                            @click="goTo({{ $index }})"
                            aria-label="Buka banner {{ $index + 1 }}"
                            :class="active === {{ $index }}
                                ? 'w-10 bg-emerald-500'
                                : 'w-3 bg-white/40 hover:bg-white/70'"
                            class="h-2.5 rounded-full transition-all duration-300"
                        ></button>

                    @endforeach

                </div>


                {{-- Slide Counter --}}
                <div class="absolute bottom-8 right-6 hidden items-center gap-2 text-sm font-medium text-white/70 sm:flex md:right-8">

                    <span
                        x-text="String(active + 1).padStart(2, '0')"
                        class="font-bold text-white"
                    ></span>

                    <span class="text-white/30">
                        /
                    </span>

                    <span>
                        {{ str_pad($banners->count(), 2, '0', STR_PAD_LEFT) }}
                    </span>

                </div>

            @endif


        </div>

    @else


        {{-- =====================================================
            FALLBACK BANNER
        ====================================================== --}}
        <div class="relative flex h-[620px] items-center overflow-hidden bg-gradient-to-br from-emerald-950 via-emerald-900 to-slate-950 md:h-[680px] lg:h-[720px]">


            {{-- Decorative Background --}}
            <div class="pointer-events-none absolute -right-40 -top-40 h-[35rem] w-[35rem] rounded-full border border-emerald-400/10"></div>

            <div class="pointer-events-none absolute -right-20 -top-20 h-[25rem] w-[25rem] rounded-full border border-white/5"></div>

            <div class="pointer-events-none absolute bottom-0 right-1/4 h-96 w-96 rounded-full bg-emerald-500/10 blur-3xl"></div>


            <div class="relative mx-auto w-full max-w-7xl px-6 lg:px-8">

                <div class="max-w-3xl text-white">


                    {{-- Label --}}
                    <div class="inline-flex items-center gap-2 rounded-full border border-emerald-300/20 bg-emerald-400/10 px-5 py-2.5 text-sm font-semibold uppercase tracking-widest text-emerald-200">

                        <span class="h-2 w-2 rounded-full bg-emerald-400"></span>

                        {{ $website?->school_name ?? 'Perguruan Amaliah' }}

                    </div>


                    {{-- Title --}}
                    <h1 class="mt-7 text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl md:text-6xl lg:text-7xl">

                        Selamat Datang di
                        <span class="text-emerald-400">
                            {{ $website?->school_name ?? 'Perguruan Amaliah' }}
                        </span>

                    </h1>


                    {{-- Accent --}}
                    <div class="mt-7 flex items-center gap-2">

                        <span class="h-1.5 w-16 rounded-full bg-emerald-500"></span>

                        <span class="h-1.5 w-6 rounded-full bg-emerald-300"></span>

                    </div>


                    {{-- Description --}}
                    <p class="mt-7 max-w-2xl text-base leading-8 text-emerald-50/70 sm:text-lg md:text-xl">

                        Membangun generasi unggul melalui pendidikan
                        yang berkualitas, berkarakter, dan berintegritas.

                    </p>

                </div>

            </div>

        </div>

    @endif

</section>
