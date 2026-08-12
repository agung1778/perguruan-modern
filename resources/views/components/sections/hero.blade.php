<section class="relative isolate overflow-hidden bg-emerald-950 text-white">
    @if(isset($banners) && $banners->isNotEmpty())
        <div
            x-data="{
                active: 0,
                total: {{ $banners->count() }},
                interval: null,
                init() {
                    if (this.total > 1) {
                        this.interval = setInterval(() => this.next(), 6000)
                    }
                },
                destroy() {
                    if (this.interval) clearInterval(this.interval)
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
            class="relative min-h-[560px] sm:min-h-[600px] md:min-h-[650px] lg:min-h-[680px] xl:min-h-[700px]"
        >
            @foreach($banners as $index => $banner)
                <article
                    x-show="active === {{ $index }}"
                    x-cloak
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 scale-[1.02]"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-500"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="absolute inset-0"
                >
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

                    <div class="absolute inset-0 bg-gradient-to-r from-emerald-950 via-emerald-950/80 to-emerald-950/20"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-emerald-950 via-transparent to-emerald-950/30"></div>

                    <div class="pointer-events-none absolute -right-32 -top-32 h-80 w-80 rounded-full border border-emerald-300/10 sm:h-[30rem] sm:w-[30rem]"></div>
                    <div class="pointer-events-none absolute -right-20 -top-20 h-56 w-56 rounded-full border border-white/5 sm:h-72 sm:w-72"></div>
                    <div class="pointer-events-none absolute bottom-0 right-[15%] h-48 w-48 rounded-full bg-emerald-400/10 blur-3xl sm:h-72 sm:w-72"></div>

                    <div class="relative flex min-h-[560px] items-center sm:min-h-[600px] md:min-h-[650px] lg:min-h-[680px] xl:min-h-[700px]">
                        <div class="mx-auto w-full max-w-7xl px-5 sm:px-6 lg:px-8">
                            <div class="max-w-3xl pb-10 pt-20 sm:pb-12 lg:pb-16">
                                <div class="mb-5 inline-flex max-w-full items-center gap-2 rounded-full border border-emerald-300/20 bg-emerald-400/10 px-3.5 py-2 text-[11px] font-bold uppercase tracking-[0.16em] text-emerald-200 backdrop-blur-md sm:mb-6 sm:px-4 sm:text-xs">
                                    <span class="h-2 w-2 shrink-0 rounded-full bg-emerald-400 shadow-[0_0_12px_rgba(52,211,153,0.7)]"></span>
                                    <span class="truncate">{{ $website?->school_name ?? 'Perguruan Amaliah' }}</span>
                                </div>

                                <h1 class="max-w-3xl text-4xl font-black leading-[1.05] tracking-tight text-white sm:text-5xl md:text-6xl lg:text-7xl xl:text-[4.8rem]">
                                    {{ $banner->title }}
                                </h1>

                                <div class="mt-5 flex items-center gap-2 sm:mt-6">
                                    <span class="h-1.5 w-14 rounded-full bg-emerald-500 sm:w-20"></span>
                                    <span class="h-1.5 w-5 rounded-full bg-emerald-300"></span>
                                </div>

                                @if(filled($banner->description))
                                    <p class="mt-5 max-w-2xl text-sm leading-7 text-emerald-50/80 sm:mt-6 sm:text-base sm:leading-8 md:text-lg">
                                        {{ $banner->description }}
                                    </p>
                                @endif

                                @if(filled($banner->button_text))
                                    <div class="mt-7 sm:mt-8">
                                        <a
                                            href="{{ filled($banner->button_link) ? $banner->button_link : '#' }}"
                                            class="group inline-flex min-h-12 w-full items-center justify-center gap-3 rounded-xl bg-emerald-600 px-6 py-3.5 text-sm font-bold text-white shadow-xl shadow-emerald-950/40 transition-all duration-300 hover:-translate-y-1 hover:bg-emerald-500 hover:shadow-2xl hover:shadow-emerald-500/20 sm:w-auto sm:px-7 sm:text-base"
                                        >
                                            <span>{{ $banner->button_text }}</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 transition-transform duration-300 group-hover:translate-x-1">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                                            </svg>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach

            @if($banners->count() > 1)
                <div class="absolute bottom-6 left-5 z-30 flex items-center gap-3 sm:bottom-8 sm:left-6 lg:left-8">
                    <button
                        type="button"
                        @click="previous()"
                        aria-label="Banner sebelumnya"
                        class="group flex h-10 w-10 items-center justify-center rounded-full border border-white/15 bg-black/20 text-white backdrop-blur-md transition-all duration-300 hover:border-emerald-400/50 hover:bg-emerald-600 sm:h-11 sm:w-11"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4 transition-transform group-hover:-translate-x-0.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"/>
                        </svg>
                    </button>

                    <button
                        type="button"
                        @click="next()"
                        aria-label="Banner berikutnya"
                        class="group flex h-10 w-10 items-center justify-center rounded-full border border-white/15 bg-black/20 text-white backdrop-blur-md transition-all duration-300 hover:border-emerald-400/50 hover:bg-emerald-600 sm:h-11 sm:w-11"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4 transition-transform group-hover:translate-x-0.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m13.5 4.5 7.5 7.5m0 0-7.5 7.5M21 12H3"/>
                        </svg>
                    </button>
                </div>

                <div class="absolute bottom-7 left-1/2 z-30 flex -translate-x-1/2 items-center gap-2 sm:bottom-9">
                    @foreach($banners as $index => $banner)
                        <button
                            type="button"
                            @click="goTo({{ $index }})"
                            aria-label="Buka banner {{ $index + 1 }}"
                            :class="active === {{ $index }} ? 'w-9 bg-emerald-400' : 'w-2.5 bg-white/35 hover:bg-white/60'"
                            class="h-2 rounded-full transition-all duration-300"
                        ></button>
                    @endforeach
                </div>

                <div class="absolute bottom-7 right-5 z-30 hidden items-center gap-2 text-xs font-medium text-white/60 sm:flex md:right-6 lg:right-8">
                    <span x-text="String(active + 1).padStart(2, '0')" class="font-bold text-white"></span>
                    <span class="text-white/30">/</span>
                    <span>{{ str_pad($banners->count(), 2, '0', STR_PAD_LEFT) }}</span>
                </div>
            @endif
        </div>
    @else
        <div class="relative flex min-h-[560px] items-center overflow-hidden bg-gradient-to-br from-emerald-950 via-emerald-900 to-slate-950 sm:min-h-[600px] md:min-h-[650px] lg:min-h-[680px]">
            <div class="pointer-events-none absolute -right-32 -top-32 h-80 w-80 rounded-full border border-emerald-400/10 sm:h-[30rem] sm:w-[30rem]"></div>
            <div class="pointer-events-none absolute -right-20 -top-20 h-56 w-56 rounded-full border border-white/5 sm:h-72 sm:w-72"></div>
            <div class="pointer-events-none absolute bottom-0 right-1/4 h-72 w-72 rounded-full bg-emerald-500/10 blur-3xl"></div>

            <div class="relative mx-auto w-full max-w-7xl px-5 sm:px-6 lg:px-8">
                <div class="max-w-3xl pb-10 text-center sm:pb-0 sm:text-left">
                    <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-emerald-300/20 bg-emerald-400/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.16em] text-emerald-200 backdrop-blur-md sm:mb-6">
                        <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                        <span>{{ $website?->school_name ?? 'Perguruan Amaliah' }}</span>
                    </div>

                    <h1 class="text-4xl font-black leading-[1.05] tracking-tight text-white sm:text-5xl md:text-6xl lg:text-7xl">
                        Selamat Datang di
                        <span class="mt-2 block text-emerald-400">
                            {{ $website?->school_name ?? 'Perguruan Amaliah' }}
                        </span>
                    </h1>

                    <div class="mt-6 flex items-center justify-center gap-2 sm:justify-start">
                        <span class="h-1.5 w-14 rounded-full bg-emerald-500 sm:w-20"></span>
                        <span class="h-1.5 w-5 rounded-full bg-emerald-300"></span>
                    </div>

                    <p class="mt-6 max-w-2xl text-sm leading-7 text-emerald-50/70 sm:text-base sm:leading-8 md:text-lg">
                        Membangun generasi unggul melalui pendidikan yang berkualitas, berkarakter, dan berintegritas.
                    </p>
                </div>
            </div>
        </div>
    @endif
</section>
