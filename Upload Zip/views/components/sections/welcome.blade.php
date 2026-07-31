{{-- =========================================================
    WELCOME / SAMBUTAN SECTION
========================================================= --}}
<section class="relative overflow-hidden bg-white py-24 sm:py-28">

    {{-- =====================================================
        DECORATIVE BACKGROUND
    ====================================================== --}}
    <div class="pointer-events-none absolute -left-40 top-0 h-96 w-96 rounded-full bg-emerald-100/50 blur-3xl"></div>

    <div class="pointer-events-none absolute -right-40 bottom-0 h-96 w-96 rounded-full bg-green-100/40 blur-3xl"></div>


    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

        <div class="grid items-center gap-16 lg:grid-cols-2 lg:gap-24">


            {{-- =====================================================
                TEXT CONTENT
            ====================================================== --}}
            <div>

                {{-- Label --}}
                <div class="inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-2 text-sm font-semibold uppercase tracking-wider text-emerald-700">

                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>

                    Sambutan

                </div>


                {{-- Title --}}
                <h2 class="mt-6 text-3xl font-extrabold leading-tight tracking-tight text-slate-900 sm:text-4xl md:text-5xl">

                    Selamat Datang di

                    <span class="mt-2 block text-emerald-700">

                        {{ $website?->site_name ?? 'Perguruan Amaliah' }}

                    </span>

                </h2>


                {{-- Accent --}}
                <div class="mt-7 flex items-center gap-2">

                    <span class="h-1 w-14 rounded-full bg-emerald-600"></span>

                    <span class="h-1 w-5 rounded-full bg-emerald-300"></span>

                </div>


                {{-- Welcome Message --}}
                @if(filled($website?->welcome_message))

                    <div class="relative mt-8">

                        {{-- Quote Icon --}}
                        <div class="absolute -left-2 -top-5 text-6xl font-serif font-bold leading-none text-emerald-100">

                            “

                        </div>


                        <p class="relative text-lg leading-8 text-slate-600">

                            {{ $website->welcome_message }}

                        </p>

                    </div>

                @else

                    <p class="mt-8 text-lg leading-8 text-slate-500">

                        Selamat datang di website resmi
                        {{ $website?->site_name ?? 'Perguruan Amaliah' }}.

                    </p>

                @endif


                {{-- Small Information --}}
                <div class="mt-8 flex items-center gap-3 text-sm font-medium text-slate-500">

                    <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.7"
                            stroke="currentColor"
                            class="h-5 w-5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 6.75v4.5l3 1.5m6-1.5a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                            />
                        </svg>

                    </span>

                    <span>
                        Membangun generasi unggul melalui pendidikan berkualitas
                    </span>

                </div>

            </div>


            {{-- =====================================================
                LOGO / VISUAL
            ====================================================== --}}
            <div class="relative flex justify-center lg:justify-end">

                {{-- Decorative Circle --}}
                <div class="absolute h-80 w-80 rounded-full border border-emerald-200 sm:h-96 sm:w-96"></div>

                <div class="absolute h-72 w-72 rounded-full border border-emerald-100 sm:h-80 sm:w-80"></div>


                {{-- Decorative Shape --}}
                <div class="absolute -right-4 -top-4 h-24 w-24 rounded-3xl bg-emerald-100/70 rotate-12"></div>

                <div class="absolute -bottom-4 -left-4 h-20 w-20 rounded-full bg-emerald-100/70"></div>


                {{-- Logo Container --}}
                <div class="relative flex h-72 w-72 items-center justify-center rounded-[2rem] border border-slate-200 bg-white p-8 shadow-2xl shadow-emerald-900/10 sm:h-80 sm:w-80">

                    @if(filled($website?->logo))

                        <img
                            src="{{ Storage::url($website->logo) }}"
                            alt="{{ $website?->site_name ?? 'Logo Perguruan' }}"
                            loading="lazy"
                            class="h-full w-full object-contain"
                        >

                    @else

                        <div class="flex h-full w-full flex-col items-center justify-center text-center">

                            <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600">

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

                            <span class="mt-4 text-sm font-medium text-slate-400">

                                Logo Perguruan

                            </span>

                        </div>

                    @endif

                </div>

            </div>

        </div>

    </div>

</section>
