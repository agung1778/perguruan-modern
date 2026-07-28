{{-- =========================================================
    EDUCATION UNITS SECTION
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

                Unit Pendidikan

            </div>


            {{-- Title --}}
            <h2 class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl md:text-5xl">

                Pilih Jenjang Pendidikan

            </h2>


            {{-- Accent --}}
            <div class="mt-6 flex items-center justify-center gap-2">

                <span class="h-1 w-14 rounded-full bg-emerald-600"></span>

                <span class="h-1 w-5 rounded-full bg-emerald-300"></span>

            </div>


            {{-- Description --}}
            <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">

                Kenali unit pendidikan kami dari tingkat TK hingga
                jenjang pendidikan lainnya.

            </p>

        </div>


{{-- =========================================================
    EDUCATION UNITS SLIDER
========================================================= --}}
@if(isset($units) && $units->count())

    <div
        x-data="{
            active: 0,
            total: {{ $units->count() }},
            perPage: 3,
            interval: null,
            touchStartX: 0,
            touchEndX: 0,

            init() {
                this.updatePerPage()

                window.addEventListener('resize', () => {
                    this.updatePerPage()
                })

                if (this.total > this.perPage) {
                    this.startAutoSlide()
                }
            },

            updatePerPage() {
                if (window.innerWidth < 768) {
                    this.perPage = 1
                } else if (window.innerWidth < 1024) {
                    this.perPage = 2
                } else {
                    this.perPage = 3
                }

                const maxIndex = Math.max(
                    0,
                    this.total - this.perPage
                )

                if (this.active > maxIndex) {
                    this.active = maxIndex
                }
            },

            get maxIndex() {
                return Math.max(
                    0,
                    this.total - this.perPage
                )
            },

            get canSlide() {
                return this.total > this.perPage
            },

            startAutoSlide() {
                this.stopAutoSlide()

                if (!this.canSlide) {
                    return
                }

                this.interval = setInterval(() => {
                    this.next()
                }, 5000)
            },

            stopAutoSlide() {
                if (this.interval) {
                    clearInterval(this.interval)
                    this.interval = null
                }
            },

            restartAutoSlide() {
                this.stopAutoSlide()

                if (this.canSlide) {
                    this.startAutoSlide()
                }
            },

            next() {
                if (!this.canSlide) {
                    return
                }

                if (this.active >= this.maxIndex) {
                    this.active = 0
                } else {
                    this.active++
                }
            },

            previous() {
                if (!this.canSlide) {
                    return
                }

                if (this.active <= 0) {
                    this.active = this.maxIndex
                } else {
                    this.active--
                }
            },

            goTo(index) {
                this.active = index
                this.restartAutoSlide()
            },

            handleTouchStart(event) {
                this.touchStartX = event.changedTouches[0].screenX
            },

            handleTouchEnd(event) {
                this.touchEndX = event.changedTouches[0].screenX

                const distance =
                    this.touchStartX - this.touchEndX

                if (Math.abs(distance) < 50) {
                    return
                }

                if (distance > 0) {
                    this.next()
                } else {
                    this.previous()
                }

                this.restartAutoSlide()
            }
        }"
        class="relative mt-16"
        @mouseenter="stopAutoSlide()"
        @mouseleave="restartAutoSlide()"
        @touchstart="handleTouchStart($event)"
        @touchend="handleTouchEnd($event)"
    >


        {{-- =====================================================
            SLIDER VIEWPORT
        ====================================================== --}}
        <div class="relative overflow-hidden">


            {{-- =================================================
                SLIDER TRACK
            ================================================== --}}
            <div
                class="flex transition-transform duration-700 ease-[cubic-bezier(0.22,1,0.36,1)] will-change-transform"
                :style="`
                    transform: translateX(
                        -${active * (100 / perPage)}%
                    );
                `"
            >

                @foreach($units as $index => $unit)

                    {{-- =================================================
                        UNIT CARD
                    ================================================== --}}
                    <div
                        class="w-full shrink-0 px-3 md:w-1/2 lg:w-1/3"
                    >

                        <article
                            class="group relative h-full overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition-all duration-500 hover:-translate-y-2 hover:border-emerald-200 hover:shadow-xl hover:shadow-emerald-900/10"
                        >

                            {{-- =================================================
                                SCHOOL PHOTO
                            ================================================== --}}
                            <div class="relative h-56 overflow-hidden">

                                @if(filled($unit->photo))

                                    <img
                                        src="{{ Storage::url($unit->photo) }}"
                                        alt="{{ $unit->name }}"
                                        loading="{{ $index < 3 ? 'eager' : 'lazy' }}"
                                        class="h-full w-full object-cover transition duration-700 ease-out group-hover:scale-110"
                                    >

                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-950/20 to-transparent"></div>

                                @else

                                    <div class="flex h-full w-full items-center justify-center bg-gradient-to-br from-emerald-50 to-slate-100">

                                        <div class="text-center">

                                            <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-white text-emerald-600 shadow-sm">

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
                                                        d="M3 21h18M5.25 21V9.75L12 5l6.75 4.75V21M9 21v-5.25h6V21"
                                                    />
                                                </svg>

                                            </div>

                                            <span class="mt-3 block text-sm text-slate-500">
                                                Foto Belum Tersedia
                                            </span>

                                        </div>

                                    </div>

                                @endif


                                {{-- =================================================
                                    UNIT NAME
                                ================================================== --}}
                                <div class="absolute bottom-0 left-0 right-0 p-6">

                                    <h3 class="text-xl font-extrabold leading-tight text-white">

                                        {{ $unit->name }}

                                    </h3>

                                    @if(filled($unit->short_name))

                                        <span class="mt-2 inline-flex rounded-full bg-emerald-600 px-3 py-1 text-xs font-bold uppercase tracking-wider text-white">

                                            {{ $unit->short_name }}

                                        </span>

                                    @endif

                                </div>

                            </div>


                            {{-- =================================================
                                CARD CONTENT
                            ================================================== --}}
                            <div class="p-6">


                                {{-- =================================================
                                    LOGO
                                ================================================== --}}
                                <div class="flex items-center gap-4">

                                    @if(filled($unit->logo))

                                        <img
                                            src="{{ Storage::url($unit->logo) }}"
                                            alt="{{ $unit->name }}"
                                            loading="lazy"
                                            class="h-20 w-20 shrink-0 rounded-2xl border-4 border-white bg-white object-contain p-2 shadow-lg ring-1 ring-slate-100"
                                        >

                                    @else

                                        <div class="flex h-20 w-20 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-emerald-600 to-emerald-800 text-2xl font-bold text-white shadow-lg">

                                            {{ strtoupper(mb_substr($unit->short_name ?? $unit->name, 0, 1)) }}

                                        </div>

                                    @endif


                                    {{-- Description --}}
                                    <div class="min-w-0">

                                        @if(filled($unit->description))

                                            <p class="line-clamp-3 text-sm leading-6 text-slate-500">

                                                {{ Str::limit(
                                                    strip_tags($unit->description),
                                                    110
                                                ) }}

                                            </p>

                                        @else

                                            <p class="text-sm leading-6 text-slate-400">

                                                Informasi unit pendidikan belum tersedia.

                                            </p>

                                        @endif

                                    </div>

                                </div>


                                {{-- =================================================
                                    STATISTICS
                                ================================================== --}}
                                <div class="mt-6 grid grid-cols-2 gap-3">


                                    {{-- Students --}}
                                    <div class="rounded-2xl border border-emerald-100 bg-emerald-50 p-4 text-center">

                                        <p class="text-2xl font-extrabold text-emerald-700">

                                            {{ number_format(
                                                $unit->students_count ?? 0
                                            ) }}

                                        </p>

                                        <p class="mt-1 text-xs font-medium text-slate-500">

                                            Siswa

                                        </p>

                                    </div>


                                    {{-- Teachers --}}
                                    <div class="rounded-2xl border border-emerald-100 bg-emerald-50 p-4 text-center">

                                        <p class="text-2xl font-extrabold text-emerald-700">

                                            {{ number_format(
                                                $unit->teachers_count ?? 0
                                            ) }}

                                        </p>

                                        <p class="mt-1 text-xs font-medium text-slate-500">

                                            Guru

                                        </p>

                                    </div>

                                </div>


                                {{-- =================================================
                                    WEBSITE BUTTON
                                ================================================== --}}
                                @if(filled($unit->website))

                                    <a
                                        href="{{ $unit->website }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="mt-6 flex w-full items-center justify-center gap-2 rounded-xl bg-emerald-700 px-5 py-3 font-semibold text-white transition-all duration-300 hover:bg-emerald-800 hover:shadow-lg hover:shadow-emerald-900/20"
                                    >

                                        Kunjungi Website

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
                                                d="M13.5 4.5 19 10m0 0-5.5 5.5M19 10H5"
                                            />
                                        </svg>

                                    </a>

                                @endif

                            </div>

                        </article>

                    </div>

                @endforeach

            </div>


            {{-- =====================================================
                NAVIGATION BUTTONS
            ====================================================== --}}
            @if($units->count() > 3)

                {{-- Previous --}}
                <button
                    type="button"
                    @click="previous(); restartAutoSlide()"
                    aria-label="Unit sebelumnya"
                    class="group absolute left-2 top-1/2 z-20 flex h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full border border-slate-200 bg-white/95 text-slate-700 shadow-xl backdrop-blur transition-all duration-300 hover:scale-110 hover:bg-emerald-600 hover:text-white md:left-0"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="h-5 w-5 transition-transform duration-300 group-hover:-translate-x-1"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15.5 19.5 8 12l7.5-7.5"
                        />
                    </svg>

                </button>


                {{-- Next --}}
                <button
                    type="button"
                    @click="next(); restartAutoSlide()"
                    aria-label="Unit berikutnya"
                    class="group absolute right-2 top-1/2 z-20 flex h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full border border-slate-200 bg-white/95 text-slate-700 shadow-xl backdrop-blur transition-all duration-300 hover:scale-110 hover:bg-emerald-600 hover:text-white md:right-0"
                >

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
                            d="m8.5 4.5 7.5 7.5"
                        />
                    </svg>

                </button>

            @endif

        </div>


        {{-- =====================================================
            SLIDER INDICATORS
        ====================================================== --}}
        @if($units->count() > 3)

            <div class="mt-8 flex justify-center gap-2">

                @foreach($units as $index => $unit)

                    @if($index <= $units->count() - 3)

                        <button
                            type="button"
                            @click="goTo({{ $index }})"
                            aria-label="Tampilkan unit mulai dari {{ $unit->name }}"
                            :class="active === {{ $index }}
                                ? 'w-10 bg-emerald-600'
                                : 'w-2.5 bg-slate-300 hover:bg-emerald-300'"
                            class="h-2.5 rounded-full transition-all duration-500"
                        ></button>

                    @endif

                @endforeach

            </div>

        @endif


        {{-- =====================================================
            SLIDE INFO
        ====================================================== --}}
        @if($units->count() > 3)

            <div class="mt-4 text-center">

                <span class="text-sm text-slate-400">

                    Geser untuk melihat unit pendidikan lainnya

                </span>

            </div>

        @endif

    </div>


@else

    {{-- =====================================================
        EMPTY STATE
    ====================================================== --}}
    <div class="mt-16 rounded-3xl border border-slate-200 bg-white px-6 py-16 text-center shadow-sm">

        <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600">

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
                    d="M3 21h18M5.25 21V9.75L12 5l6.75 4.75V21M9 21v-5.25h6V21"
                />
            </svg>

        </div>


        <h3 class="mt-5 text-xl font-bold text-slate-900">

            Belum Ada Unit Pendidikan

        </h3>


        <p class="mx-auto mt-2 max-w-lg text-sm leading-7 text-slate-500">

            Informasi unit pendidikan akan ditampilkan setelah
            ditambahkan melalui dashboard admin.

        </p>

    </div>

@endif