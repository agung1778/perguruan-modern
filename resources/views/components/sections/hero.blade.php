{{-- =========================================================
    HERO / HOMEPAGE BANNER
========================================================= --}}
<section class="relative overflow-hidden bg-emerald-950">

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
            class="relative
                   h-[560px]
                   sm:h-[600px]
                   md:h-[650px]
                   lg:h-[700px]
                   xl:h-[720px]"
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
                            class="absolute inset-0 h-full w-full object-cover object-center"
                        >

                    @else

                        <div class="absolute inset-0 bg-emerald-950"></div>

                    @endif


                    {{-- =================================================
                        RESPONSIVE OVERLAY
                    ================================================== --}}
                    <div
                        class="absolute inset-0
                               bg-gradient-to-b
                               from-emerald-950/85
                               via-emerald-950/65
                               to-emerald-950/90
                               sm:bg-gradient-to-r
                               sm:from-emerald-950/95
                               sm:via-emerald-950/75
                               sm:to-emerald-950/30"
                    ></div>


                    {{-- =================================================
                        BOTTOM GRADIENT
                    ================================================== --}}
                    <div
                        class="absolute inset-x-0 bottom-0 h-32
                               bg-gradient-to-t
                               from-emerald-950/70
                               to-transparent
                               sm:h-40"
                    ></div>


                    {{-- =================================================
                        DECORATIVE ELEMENTS
                    ================================================== --}}
                    <div
                        class="pointer-events-none absolute
                               -right-32 -top-32
                               h-72 w-72
                               rounded-full
                               border border-white/10
                               sm:h-96 sm:w-96"
                    ></div>

                    <div
                        class="pointer-events-none absolute
                               -right-20 -top-20
                               h-56 w-56
                               rounded-full
                               border border-emerald-400/10
                               sm:h-72 sm:w-72"
                    ></div>

                    <div
                        class="pointer-events-none absolute
                               bottom-20 right-[10%]
                               h-32 w-32
                               rounded-full
                               bg-emerald-400/10
                               blur-3xl
                               sm:h-40 sm:w-40"
                    ></div>


                    {{-- =================================================
                        CONTENT WRAPPER
                    ================================================== --}}
                    <div class="relative flex h-full items-center">

                        <div
                            class="mx-auto w-full max-w-7xl
                                   px-5
                                   sm:px-6
                                   lg:px-8"
                        >

                            <div
                                class="max-w-3xl
                                       pb-12
                                       text-center
                                       text-white
                                       sm:pb-10
                                       sm:text-left"
                            >

                                {{-- =================================================
                                    LABEL
                                ================================================== --}}
                                <div
                                    class="inline-flex
                                           items-center
                                           gap-2
                                           rounded-full
                                           border
                                           border-emerald-300/20
                                           bg-emerald-400/10
                                           px-4 py-2
                                           text-xs
                                           font-semibold
                                           uppercase
                                           tracking-[0.18em]
                                           text-emerald-200
                                           backdrop-blur-sm
                                           sm:px-5
                                           sm:py-2.5
                                           sm:text-sm"
                                >
                                    <span
                                        class="h-2 w-2
                                               shrink-0
                                               rounded-full
                                               bg-emerald-400"
                                    ></span>

                                    <span class="truncate">
                                        {{ $website?->school_name ?? 'Perguruan Amaliah' }}
                                    </span>
                                </div>


                                {{-- =================================================
                                    TITLE
                                ================================================== --}}
                                <h1
                                    class="mt-5
                                           text-3xl
                                           font-extrabold
                                           leading-[1.1]
                                           tracking-tight
                                           sm:mt-6
                                           sm:text-5xl
                                           md:text-6xl
                                           lg:mt-7
                                           lg:text-7xl
                                           xl:text-[5rem]"
                                >
                                    {{ $banner->title }}
                                </h1>


                                {{-- =================================================
                                    GREEN ACCENT
                                ================================================== --}}
                                <div
                                    class="mt-5
                                           flex
                                           items-center
                                           justify-center
                                           gap-2
                                           sm:mt-6
                                           sm:justify-start
                                           lg:mt-7"
                                >
                                    <span
                                        class="h-1.5 w-12
                                               rounded-full
                                               bg-emerald-500
                                               sm:w-16"
                                    ></span>

                                    <span
                                        class="h-1.5 w-5
                                               rounded-full
                                               bg-emerald-300
                                               sm:w-6"
                                    ></span>
                                </div>


                                {{-- =================================================
                                    DESCRIPTION
                                ================================================== --}}
                                @if(filled($banner->description))

                                    <p
                                        class="mt-5
                                               max-w-2xl
                                               text-sm
                                               leading-7
                                               text-emerald-50/80
                                               sm:mt-6
                                               sm:text-base
                                               sm:leading-8
                                               md:text-lg
                                               lg:mt-7
                                               lg:text-xl"
                                    >
                                        {{ $banner->description }}
                                    </p>

                                @endif


                                {{-- =================================================
                                    BUTTON
                                ================================================== --}}
                                @if(filled($banner->button_text))

                                    <div class="mt-7 sm:mt-8 lg:mt-10">

                                        <a
                                            href="{{ $banner->button_link ?: '#' }}"
                                            class="group inline-flex
                                                   min-h-12
                                                   w-full
                                                   items-center
                                                   justify-center
                                                   gap-3
                                                   rounded-xl
                                                   bg-emerald-600
                                                   px-6
                                                   py-3.5
                                                   text-sm
                                                   font-bold
                                                   text-white
                                                   shadow-xl
                                                   shadow-emerald-950/30
                                                   transition-all
                                                   duration-300
                                                   hover:-translate-y-1
                                                   hover:bg-emerald-500
                                                   hover:shadow-2xl
                                                   hover:shadow-emerald-500/20
                                                   sm:w-auto
                                                   sm:px-7
                                                   sm:py-4
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
                                                class="h-5 w-5
                                                       shrink-0
                                                       transition-transform
                                                       duration-300
                                                       group-hover:translate-x-1"
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

                    class="group absolute
                           left-3
                           top-1/2
                           z-20
                           flex
                           h-10 w-10
                           -translate-y-1/2
                           items-center
                           justify-center
                           rounded-full
                           border
                           border-white/20
                           bg-black/20
                           text-white
                           backdrop-blur-md
                           transition-all
                           duration-300
                           hover:border-emerald-400/50
                           hover:bg-emerald-600
                           hover:shadow-lg
                           hover:shadow-emerald-900/30
                           sm:left-5
                           sm:h-12
                           sm:w-12
                           md:left-8"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="h-4 w-4 sm:h-5 sm:w-5
                               transition-transform
                               duration-300
                               group-hover:-translate-x-0.5"
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

                    class="group absolute
                           right-3
                           top-1/2
                           z-20
                           flex
                           h-10 w-10
                           -translate-y-1/2
                           items-center
                           justify-center
                           rounded-full
                           border
                           border-white/20
                           bg-black/20
                           text-white
                           backdrop-blur-md
                           transition-all
                           duration-300
                           hover:border-emerald-400/50
                           hover:bg-emerald-600
                           hover:shadow-lg
                           hover:shadow-emerald-900/30
                           sm:right-5
                           sm:h-12
                           sm:w-12
                           md:right-8"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="h-4 w-4 sm:h-5 sm:w-5
                               transition-transform
                               duration-300
                               group-hover:translate-x-0.5"
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
                    class="absolute
                           bottom-5
                           left-1/2
                           z-20
                           flex
                           -translate-x-1/2
                           items-center
                           justify-center
                           gap-2
                           sm:bottom-7
                           sm:gap-2.5"
                >

                    @foreach($banners as $index => $banner)

                        <button
                            type="button"
                            @click="goTo({{ $index }})"
                            aria-label="Buka banner {{ $index + 1 }}"

                            :class="active === {{ $index }}
                                ? 'w-8 bg-emerald-500 sm:w-10'
                                : 'w-2.5 bg-white/40 hover:bg-white/70 sm:w-3'"

                            class="h-2
                                   rounded-full
                                   transition-all
                                   duration-300
                                   sm:h-2.5"
                        ></button>

                    @endforeach

                </div>


                {{-- =================================================
                    SLIDE COUNTER
                ================================================== --}}
                <div
                    class="absolute
                           bottom-6
                           right-5
                           z-20
                           hidden
                           items-center
                           gap-2
                           text-xs
                           font-medium
                           text-white/70
                           sm:flex
                           md:right-8
                           md:text-sm"
                >

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
        <div
            class="relative
                   flex
                   h-[560px]
                   items-center
                   overflow-hidden
                   bg-gradient-to-br
                   from-emerald-950
                   via-emerald-900
                   to-slate-950
                   sm:h-[600px]
                   md:h-[650px]
                   lg:h-[700px]
                   xl:h-[720px]"
        >

            {{-- =================================================
                DECORATIVE BACKGROUND
            ================================================== --}}
            <div
                class="pointer-events-none absolute
                       -right-32
                       -top-32
                       h-72 w-72
                       rounded-full
                       border border-emerald-400/10
                       sm:-right-40
                       sm:-top-40
                       sm:h-[35rem]
                       sm:w-[35rem]"
            ></div>

            <div
                class="pointer-events-none absolute
                       -right-16
                       -top-16
                       h-52 w-52
                       rounded-full
                       border border-white/5
                       sm:-right-20
                       sm:-top-20
                       sm:h-[25rem]
                       sm:w-[25rem]"
            ></div>

            <div
                class="pointer-events-none absolute
                       bottom-0
                       right-1/4
                       h-72 w-72
                       rounded-full
                       bg-emerald-500/10
                       blur-3xl
                       sm:h-96
                       sm:w-96"
            ></div>


            {{-- =================================================
                CONTENT
            ================================================== --}}
            <div
                class="relative
                       mx-auto
                       w-full
                       max-w-7xl
                       px-5
                       sm:px-6
                       lg:px-8"
            >

                <div
                    class="max-w-3xl
                           pb-10
                           text-center
                           text-white
                           sm:pb-0
                           sm:text-left"
                >

                    {{-- Label --}}
                    <div
                        class="inline-flex
                               items-center
                               gap-2
                               rounded-full
                               border
                               border-emerald-300/20
                               bg-emerald-400/10
                               px-4 py-2
                               text-xs
                               font-semibold
                               uppercase
                               tracking-[0.18em]
                               text-emerald-200
                               sm:px-5
                               sm:py-2.5
                               sm:text-sm"
                    >

                        <span
                            class="h-2 w-2
                                   shrink-0
                                   rounded-full
                                   bg-emerald-400"
                        ></span>

                        <span class="truncate">
                            {{ $website?->school_name ?? 'Perguruan Amaliah' }}
                        </span>

                    </div>


                    {{-- Title --}}
                    <h1
                        class="mt-5
                               text-3xl
                               font-extrabold
                               leading-[1.1]
                               tracking-tight
                               sm:mt-6
                               sm:text-5xl
                               md:text-6xl
                               lg:mt-7
                               lg:text-7xl
                               xl:text-[5rem]"
                    >
                        Selamat Datang di

                        <span class="block text-emerald-400">
                            {{ $website?->school_name ?? 'Perguruan Amaliah' }}
                        </span>
                    </h1>


                    {{-- Accent --}}
                    <div
                        class="mt-5
                               flex
                               items-center
                               justify-center
                               gap-2
                               sm:mt-6
                               sm:justify-start
                               lg:mt-7"
                    >

                        <span
                            class="h-1.5 w-12
                                   rounded-full
                                   bg-emerald-500
                                   sm:w-16"
                        ></span>

                        <span
                            class="h-1.5 w-5
                                   rounded-full
                                   bg-emerald-300
                                   sm:w-6"
                        ></span>

                    </div>


                    {{-- Description --}}
                    <p
                        class="mt-5
                               max-w-2xl
                               text-sm
                               leading-7
                               text-emerald-50/70
                               sm:mt-6
                               sm:text-base
                               sm:leading-8
                               md:text-lg
                               lg:mt-7
                               lg:text-xl"
                    >
                        Membangun generasi unggul melalui pendidikan
                        yang berkualitas, berkarakter, dan berintegritas.
                    </p>

                </div>

            </div>

        </div>

    @endif

</section>
