{{-- =========================================================
    WELCOME / SAMBUTAN SECTION
========================================================= --}}
<section class="relative overflow-hidden bg-white py-16 sm:py-20 lg:py-24 xl:py-28">

    {{-- =====================================================
        DECORATIVE BACKGROUND
    ====================================================== --}}
    <div
        class="pointer-events-none absolute
               -left-40 top-0
               h-72 w-72
               rounded-full
               bg-emerald-100/50
               blur-3xl
               sm:h-96 sm:w-96"
    ></div>

    <div
        class="pointer-events-none absolute
               -right-40 bottom-0
               h-72 w-72
               rounded-full
               bg-green-100/40
               blur-3xl
               sm:h-96 sm:w-96"
    ></div>


    {{-- =====================================================
        MAIN CONTAINER
    ====================================================== --}}
    <div
        class="relative mx-auto w-full max-w-7xl
               px-5
               sm:px-6
               lg:px-8"
    >

        <div
            class="grid
                   items-center
                   gap-12
                   md:gap-16
                   lg:grid-cols-2
                   lg:gap-20
                   xl:gap-28"
        >

            {{-- =================================================
                TEXT CONTENT
            ================================================== --}}
            <div class="order-1">

                {{-- =================================================
                    LABEL
                ================================================== --}}
                <div
                    class="inline-flex
                           items-center
                           gap-2
                           rounded-full
                           border
                           border-emerald-200
                           bg-emerald-50
                           px-3.5 py-2
                           text-xs
                           font-semibold
                           uppercase
                           tracking-[0.15em]
                           text-emerald-700
                           sm:px-4
                           sm:text-sm"
                >

                    <span
                        class="h-2 w-2
                               shrink-0
                               rounded-full
                               bg-emerald-500"
                    ></span>

                    <span>
                        Sambutan
                    </span>

                </div>


                {{-- =================================================
                    TITLE
                ================================================== --}}
                <h2
                    class="mt-5
                           max-w-2xl
                           text-3xl
                           font-extrabold
                           leading-[1.15]
                           tracking-tight
                           text-slate-900
                           sm:mt-6
                           sm:text-4xl
                           md:text-5xl
                           lg:mt-7
                           xl:text-[3.25rem]"
                >
                    Selamat Datang di

                    <span class="mt-1 block text-emerald-700 sm:mt-2">
                        {{ $website?->site_name ?? 'Perguruan Amaliah' }}
                    </span>
                </h2>


                {{-- =================================================
                    ACCENT
                ================================================== --}}
                <div
                    class="mt-5
                           flex
                           items-center
                           gap-2
                           sm:mt-6
                           lg:mt-7"
                >

                    <span
                        class="h-1
                               w-12
                               rounded-full
                               bg-emerald-600
                               sm:w-14"
                    ></span>

                    <span
                        class="h-1
                               w-5
                               rounded-full
                               bg-emerald-300"
                    ></span>

                </div>


                {{-- =================================================
                    WELCOME MESSAGE
                ================================================== --}}
                @if(filled($website?->welcome_message))

                    <div
                        class="relative
                               mt-6
                               max-w-2xl
                               sm:mt-7
                               lg:mt-8"
                    >

                        {{-- Quote Decoration --}}
                        <div
                            class="pointer-events-none absolute
                                   -left-1
                                   -top-4
                                   font-serif
                                   text-5xl
                                   font-bold
                                   leading-none
                                   text-emerald-100
                                   sm:-left-2
                                   sm:-top-5
                                   sm:text-6xl"
                        >
                            “
                        </div>

                        <p
                            class="relative
                                   text-base
                                   leading-7
                                   text-slate-600
                                   sm:text-lg
                                   sm:leading-8"
                        >
                            {{ $website->welcome_message }}
                        </p>

                    </div>

                @else

                    <p
                        class="mt-6
                               max-w-2xl
                               text-base
                               leading-7
                               text-slate-500
                               sm:mt-7
                               sm:text-lg
                               sm:leading-8
                               lg:mt-8"
                    >
                        Selamat datang di website resmi
                        {{ $website?->site_name ?? 'Perguruan Amaliah' }}.
                    </p>

                @endif


                {{-- =================================================
                    SMALL INFORMATION
                ================================================== --}}
                <div
                    class="mt-6
                           flex
                           items-start
                           gap-3
                           text-sm
                           font-medium
                           leading-6
                           text-slate-500
                           sm:mt-8"
                >

                    <span
                        class="flex
                               h-9 w-9
                               shrink-0
                               items-center
                               justify-center
                               rounded-xl
                               bg-emerald-50
                               text-emerald-600"
                    >

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

                    <span class="max-w-xl">
                        Membangun generasi unggul melalui pendidikan berkualitas
                    </span>

                </div>

            </div>


            {{-- =================================================
                LOGO / VISUAL
            ================================================== --}}
            <div
                class="order-2
                       flex
                       justify-center
                       lg:justify-end"
            >

                <div
                    class="relative
                           flex
                           h-[290px] w-[290px]
                           items-center
                           justify-center
                           sm:h-[340px] sm:w-[340px]
                           md:h-[380px] md:w-[380px]
                           lg:h-[360px] lg:w-[360px]
                           xl:h-[410px] xl:w-[410px]"
                >

                    {{-- =================================================
                        OUTER DECORATIVE CIRCLE
                    ================================================== --}}
                    <div
                        class="pointer-events-none absolute
                               inset-0
                               rounded-full
                               border
                               border-emerald-200"
                    ></div>

                    {{-- =================================================
                        INNER DECORATIVE CIRCLE
                    ================================================== --}}
                    <div
                        class="pointer-events-none absolute
                               inset-4
                               rounded-full
                               border
                               border-emerald-100
                               sm:inset-5
                               lg:inset-6"
                    ></div>


                    {{-- =================================================
                        DECORATIVE SHAPES
                    ================================================== --}}
                    <div
                        class="pointer-events-none absolute
                               -right-2
                               -top-2
                               h-16 w-16
                               rotate-12
                               rounded-2xl
                               bg-emerald-100/70
                               sm:-right-4
                               sm:-top-4
                               sm:h-24 sm:w-24
                               sm:rounded-3xl"
                    ></div>

                    <div
                        class="pointer-events-none absolute
                               -bottom-2
                               -left-2
                               h-14 w-14
                               rounded-full
                               bg-emerald-100/70
                               sm:-bottom-4
                               sm:-left-4
                               sm:h-20 sm:w-20"
                    ></div>


                    {{-- =================================================
                        LOGO CONTAINER
                    ================================================== --}}
                    <div
                        class="relative
                               flex
                               h-[220px] w-[220px]
                               items-center
                               justify-center
                               rounded-[1.75rem]
                               border
                               border-slate-200
                               bg-white
                               p-7
                               shadow-2xl
                               shadow-emerald-900/10
                               sm:h-[260px] sm:w-[260px]
                               sm:rounded-[2rem]
                               sm:p-8
                               md:h-[290px] md:w-[290px]
                               md:p-9
                               lg:h-[275px] lg:w-[275px]
                               xl:h-[315px] xl:w-[315px]"
                    >

                        @if(filled($website?->logo))

                            <img
                                src="{{ Storage::url($website->logo) }}"
                                alt="{{ $website?->site_name ?? 'Logo Perguruan' }}"
                                loading="lazy"
                                class="h-full
                                       w-full
                                       object-contain"
                            >

                        @else

                            <div
                                class="flex
                                       h-full
                                       w-full
                                       flex-col
                                       items-center
                                       justify-center
                                       text-center"
                            >

                                <div
                                    class="flex
                                           h-14 w-14
                                           items-center
                                           justify-center
                                           rounded-2xl
                                           bg-emerald-50
                                           text-emerald-600
                                           sm:h-16 sm:w-16"
                                >

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.7"
                                        stroke="currentColor"
                                        class="h-7 w-7 sm:h-8 sm:w-8"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M3 21h18M5.25 21V9.75L12 5l6.75 4.75V21M9 21v-5.25h6V21"
                                        />
                                    </svg>

                                </div>

                                <span
                                    class="mt-3
                                           text-xs
                                           font-medium
                                           text-slate-400
                                           sm:mt-4
                                           sm:text-sm"
                                >
                                    Logo Perguruan
                                </span>

                            </div>

                        @endif

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
