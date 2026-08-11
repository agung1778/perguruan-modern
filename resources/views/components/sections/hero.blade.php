{{-- =========================================================
    HERO / HOMEPAGE BANNER
========================================================= --}}

<section
    class="relative isolate overflow-hidden"
    aria-label="Hero {{ $website?->school_name ?? 'Perguruan Amaliah' }}"
>
    @if(isset($banners) && $banners->isNotEmpty())

        <div
            x-data="{
                active: 0,
                total: {{ $banners->count() }},
                interval: null,
                isPaused: false,

                init() {
                    if (this.total > 1) {
                        this.startAutoPlay()
                    }
                },

                destroy() {
                    this.stopAutoPlay()
                },

                startAutoPlay() {
                    this.stopAutoPlay()

                    this.interval = setInterval(() => {
                        if (!this.isPaused) {
                            this.next()
                        }
                    }, 6000)
                },

                stopAutoPlay() {
                    if (this.interval) {
                        clearInterval(this.interval)
                        this.interval = null
                    }
                },

                next() {
                    this.active = (this.active + 1) % this.total
                },

                previous() {
                    this.active =
                        (this.active - 1 + this.total) % this.total
                },

                goTo(index) {
                    this.active = index
                },

                pause() {
                    this.isPaused = true
                },

                resume() {
                    this.isPaused = false
                }
            }"
            class="relative h-[600px] sm:h-[640px] md:h-[680px] lg:h-[720px]"
            @mouseenter="pause()"
            @mouseleave="resume()"
            @focusin="pause()"
            @focusout="resume()"
        >

            {{-- =====================================================
                SLIDES
            ====================================================== --}}

            @foreach($banners as $index => $banner)

                <article
                    x-show="active === {{ $index }}"
                    x-cloak
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-500"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="absolute inset-0"
                    aria-hidden="{{ $index === 0 ? 'false' : 'true' }}"
                >

                    {{-- =================================================
                        BACKGROUND
                    ================================================== --}}

                    @if(filled($banner->image))

                        <img
                            src="{{ Storage::url($banner->image) }}"
                            alt="{{ $banner->title }}"
                            @if($index === 0)
                                fetchpriority="high"
                            @else
                                loading="lazy"
                            @endif
                            class="absolute inset-0 h-full w-full object-cover object-center"
                        >

                    @else

                        <div
                            class="absolute inset-0 bg-gradient-to-br from-emerald-950 via-emerald-900 to-slate-950"
                        ></div>

                    @endif


                    {{-- =================================================
                        IMAGE OVERLAY
                    ================================================== --}}

                    <div
                        class="absolute inset-0 bg-gradient-to-r
                        from-emerald-950/95
                        via-emerald-950/75
                        to-emerald-950/35"
                    ></div>

                    <div
                        class="absolute inset-x-0 bottom-0 h-56
                        bg-gradient-to-t from-emerald-950/70 to-transparent"
                    ></div>


                    {{-- =================================================
                        DECORATIVE ELEMENTS
                    ================================================== --}}

                    <div
                        class="pointer-events-none absolute -right-40 -top-40
                        h-[32rem] w-[32rem]
                        rounded-full border border-white/10"
                    ></div>

                    <div
                        class="pointer-events-none absolute -right-20 -top-20
                        h-[24rem] w-[24rem]
                        rounded-full border border-emerald-400/10"
                    ></div>

                    <div
                        class="pointer-events-none absolute bottom-20 right-[15%]
                        h-48 w-48 rounded-full
                        bg-emerald-400/10 blur-3xl"
                    ></div>


                    {{-- =================================================
                        CONTENT
                    ================================================== --}}

                    <div class="relative flex h-full items-center">

                        <div class="mx-auto w-full max-w-7xl px-5 sm:px-6 lg:px-8">

                            <div class="max-w-3xl text-white">

                                {{-- Label --}}

                                <div
                                    class="inline-flex items-center gap-2
                                    rounded-full
                                    border border-emerald-300/20
                                    bg-emerald-400/10
                                    px-4 py-2
                                    text-xs font-bold uppercase
                                    tracking-[0.18em]
                                    text-emerald-200
                                    backdrop-blur-md
                                    sm:px-5 sm:py-2.5 sm:text-sm"
                                >

                                    <span
                                        class="h-2 w-2 rounded-full bg-emerald-400"
                                    ></span>

                                    {{ $website?->school_name ?? 'Perguruan Amaliah' }}

                                </div>


                                {{-- Title --}}

                                <h1
                                    class="mt-6
                                    text-4xl font-extrabold
                                    leading-[1.08]
                                    tracking-tight
                                    sm:text-5xl
                                    md:text-6xl
                                    lg:text-7xl"
                                >
                                    {{ $banner->title }}
                                </h1>


                                {{-- Accent --}}

                                <div class="mt-7 flex items-center gap-2">

                                    <span
                                        class="h-1.5 w-16 rounded-full bg-emerald-500"
                                    ></span>

                                    <span
                                        class="h-1.5 w-6 rounded-full bg-emerald-300"
                                    ></span>

                                </div>


                                {{-- Description --}}

                                @if(filled($banner->description))

                                    <p
                                        class="mt-7 max-w-2xl
                                        text-base leading-8
                                        text-emerald-50/80
                                        sm:text-lg
                                        md:text-xl"
                                    >
                                        {{ $banner->description }}
                                    </p>

                                @endif


                                {{-- Button --}}

                                @if(filled($banner->button_text))

                                    <div class="mt-9">

                                        <a
                                            href="{{ filled($banner->button_link) ? $banner->button_link : '#' }}"
                                            class="group inline-flex
                                            items-center gap-3
                                            rounded-xl
                                            bg-emerald-600
                                            px-6 py-3.5
                                            text-sm font-bold
                                            text-white
                                            shadow-xl shadow-emerald-950/30
                                            transition-all duration-300
                                            hover:-translate-y-1
                                            hover:bg-emerald-500
                                            hover:shadow-2xl
                                            hover:shadow-emerald-500/20
                                            focus:outline-none
                                            focus:ring-2
                                            focus:ring-emerald-400
                                            focus:ring-offset-2
                                            focus:ring-offset-emerald-950
                                            sm:px-7 sm:py-4
                                            sm:text-base"
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

                </article>

            @endforeach


            {{-- =====================================================
                NAVIGATION
            ====================================================== --}}

            @if($banners->count() > 1)

                {{-- Previous --}}

                <button
                    type="button"
                    @click="previous()"
                    aria-label="Banner sebelumnya"
                    class="group absolute left-4 top-1/2
                    flex h-11 w-11
                    -translate-y-1/2
                    items-center justify-center
                    rounded-full
                    border border-white/20
                    bg-black/20
                    text-white
                    backdrop-blur-md
                    transition-all duration-300
                    hover:border-emerald-400/50
                    hover:bg-emerald-600
                    focus:outline-none
                    focus:ring-2
                    focus:ring-emerald-400
                    sm:left-6
                    md:left-8"
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
                            d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"
                        />
                    </svg>

                </button>


                {{-- Next --}}

                <button
                    type="button"
                    @click="next()"
                    aria-label="Banner berikutnya"
                    class="group absolute right-4 top-1/2
                    flex h-11 w-11
                    -translate-y-1/2
                    items-center justify-center
                    rounded-full
                    border border-white/20
                    bg-black/20
                    text-white
                    backdrop-blur-md
                    transition-all duration-300
                    hover:border-emerald-400/50
                    hover:bg-emerald-600
                    focus:outline-none
                    focus:ring-2
                    focus:ring-emerald-400
                    sm:right-6
                    md:right-8"
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
                            d="m13.5 4.5 7.5 7.5m0 0-7.5 7.5M21 12H3"
                        />
                    </svg>

                </button>


                {{-- =================================================
                    INDICATORS
                ================================================== --}}

                <div
                    class="absolute bottom-7 left-1/2
                    flex -translate-x-1/2
                    items-center gap-2"
                >

                    @foreach($banners as $index => $banner)

                        <button
                            type="button"
                            @click="goTo({{ $index }})"
                            aria-label="Buka banner {{ $index + 1 }}"
                            :class="active === {{ $index }}
                                ? 'w-10 bg-emerald-500'
                                : 'w-2.5 bg-white/40 hover:bg-white/70'"
                            class="h-2.5 rounded-full
                            transition-all duration-300
                            focus:outline-none
                            focus:ring-2
                            focus:ring-emerald-400
                            focus:ring-offset-2
                            focus:ring-offset-transparent"
                        ></button>

                    @endforeach

                </div>


                {{-- =================================================
                    COUNTER
                ================================================== --}}

                <div
                    class="absolute bottom-7 right-6
                    hidden items-center gap-2
                    text-sm font-medium text-white/70
                    sm:flex md:right-8"
                >

                    <span
                        x-text="String(active + 1).padStart(2, '0')"
                        class="font-bold text-white"
                    ></span>

                    <span class="text-white/30">/</span>

                    <span>
                        {{ str_pad($banners->count(), 2, '0', STR_PAD_LEFT) }}
                    </span>

                </div>

            @endif

        </div>

    @else

        {{-- =====================================================
            FALLBACK HERO
        ====================================================== --}}

        <div
            class="relative flex
            min-h-[600px]
            items-center
            overflow-hidden
            bg-gradient-to-br
            from-emerald-950
            via-emerald-900
            to-slate-950
            sm:min-h-[640px]
            md:min-h-[680px]
            lg:min-h-[720px]"
        >

            {{-- Decorative Background --}}

            <div
                class="pointer-events-none absolute -right-40 -top-40
                h-[35rem] w-[35rem]
                rounded-full
                border border-emerald-400/10"
            ></div>

            <div
                class="pointer-events-none absolute -right-20 -top-20
                h-[25rem] w-[25rem]
                rounded-full
                border border-white/5"
            ></div>

            <div
                class="pointer-events-none absolute bottom-0 right-1/4
                h-96 w-96
                rounded-full
                bg-emerald-500/10
                blur-3xl"
            ></div>


            {{-- Content --}}

            <div
                class="relative mx-auto w-full max-w-7xl
                px-5 sm:px-6 lg:px-8"
            >

                <div class="max-w-3xl text-white">

                    {{-- Label --}}

                    <div
                        class="inline-flex items-center gap-2
                        rounded-full
                        border border-emerald-300/20
                        bg-emerald-400/10
                        px-4 py-2
                        text-xs font-bold uppercase
                        tracking-[0.18em]
                        text-emerald-200
                        sm:px-5 sm:py-2.5 sm:text-sm"
                    >

                        <span
                            class="h-2 w-2 rounded-full bg-emerald-400"
                        ></span>

                        {{ $website?->school_name ?? 'Perguruan Amaliah' }}

                    </div>


                    {{-- Title --}}

                    <h1
                        class="mt-7
                        text-4xl font-extrabold
                        leading-[1.08]
                        tracking-tight
                        sm:text-5xl
                        md:text-6xl
                        lg:text-7xl"
                    >

                        Selamat Datang di

                        <span class="text-emerald-400">
                            {{ $website?->school_name ?? 'Perguruan Amaliah' }}
                        </span>

                    </h1>


                    {{-- Accent --}}

                    <div class="mt-7 flex items-center gap-2">

                        <span
                            class="h-1.5 w-16 rounded-full bg-emerald-500"
                        ></span>

                        <span
                            class="h-1.5 w-6 rounded-full bg-emerald-300"
                        ></span>

                    </div>


                    {{-- Description --}}

                    <p
                        class="mt-7 max-w-2xl
                        text-base leading-8
                        text-emerald-50/75
                        sm:text-lg
                        md:text-xl"
                    >
                        Membangun generasi unggul melalui pendidikan
                        yang berkualitas, berkarakter, dan berintegritas.
                    </p>

                </div>

            </div>

        </div>

    @endif

</section>
