{{-- =========================================================
    ABOUT SECTION
========================================================= --}}
<section class="relative overflow-hidden bg-slate-50 py-16 sm:py-20 lg:py-24 xl:py-28">

    {{-- =====================================================
        DECORATIVE BACKGROUND
    ====================================================== --}}
    <div
        class="pointer-events-none absolute
               -left-32 top-20
               h-64 w-64
               rounded-full
               bg-emerald-100/50
               blur-3xl
               sm:h-72 sm:w-72"
    ></div>

    <div
        class="pointer-events-none absolute
               -right-32 bottom-0
               h-72 w-72
               rounded-full
               bg-green-100/50
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
                   xl:gap-24"
        >

            {{-- =================================================
                LEFT - ABOUT
            ================================================== --}}
            <div>

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

                    Tentang Kami

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
                           lg:text-[3rem]
                           xl:text-[3.25rem]"
                >
                    {{ $website?->school_name ?? 'Perguruan Amaliah' }}
                </h2>


                {{-- =================================================
                    GREEN ACCENT
                ================================================== --}}
                <div
                    class="mt-5
                           flex
                           items-center
                           gap-2
                           sm:mt-6"
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
                    DESCRIPTION
                ================================================== --}}
                <div
                    class="mt-6
                           max-w-2xl
                           text-base
                           leading-7
                           text-slate-600
                           sm:mt-7
                           sm:text-lg
                           sm:leading-8
                           lg:mt-8"
                >

                    @if($website?->about)

                        {!! nl2br(e($website->about)) !!}

                    @else

                        <p>
                            Informasi tentang perguruan belum tersedia.
                        </p>

                    @endif

                </div>


                {{-- =================================================
                    BUTTON
                ================================================== --}}
                <div class="mt-7 sm:mt-8 lg:mt-9">

                    <a
                        href="{{ route('about') }}"
                        class="group inline-flex
                               min-h-12
                               w-full
                               items-center
                               justify-center
                               gap-3
                               rounded-xl
                               bg-emerald-700
                               px-6
                               py-3.5
                               text-sm
                               font-semibold
                               text-white
                               shadow-lg
                               shadow-emerald-700/20
                               transition-all
                               duration-300
                               hover:-translate-y-1
                               hover:bg-emerald-800
                               hover:shadow-xl
                               hover:shadow-emerald-700/30
                               sm:w-auto
                               sm:px-7
                               sm:py-4
                               sm:text-base"
                    >

                        <span>
                            Mengenal Kami Lebih Dekat
                        </span>

                        <span
                            class="text-lg
                                   transition-transform
                                   duration-300
                                   group-hover:translate-x-1"
                        >
                            →
                        </span>

                    </a>

                </div>

            </div>


            {{-- =================================================
                RIGHT - VISION & MISSION
            ================================================== --}}
            <div class="relative">

                {{-- Decorative Background --}}
                <div
                    class="pointer-events-none absolute
                           -inset-2
                           rounded-[1.75rem]
                           bg-emerald-100/70
                           blur-sm
                           sm:-inset-3
                           sm:rounded-[2rem]
                           lg:-inset-4"
                ></div>


                {{-- =================================================
                    MAIN CARD
                ================================================== --}}
                <div
                    class="relative
                           overflow-hidden
                           rounded-2xl
                           border
                           border-emerald-100
                           bg-white
                           shadow-xl
                           shadow-emerald-900/10
                           sm:rounded-3xl
                           sm:shadow-2xl"
                >

                    {{-- Top Accent --}}
                    <div
                        class="h-1
                               w-full
                               bg-gradient-to-r
                               from-emerald-700
                               via-emerald-500
                               to-green-400
                               sm:h-1.5"
                    ></div>


                    <div
                        class="p-5
                               sm:p-7
                               md:p-8
                               lg:p-9
                               xl:p-10"
                    >

                        {{-- =================================================
                            VISI
                        ================================================== --}}
                        <div>

                            {{-- Visi Header --}}
                            <div
                                class="flex
                                       items-center
                                       gap-3
                                       sm:gap-4"
                            >

                                {{-- Icon --}}
                                <div
                                    class="flex
                                           h-12 w-12
                                           shrink-0
                                           items-center
                                           justify-center
                                           rounded-xl
                                           bg-emerald-100
                                           text-emerald-700
                                           shadow-sm
                                           sm:h-14 sm:w-14
                                           sm:rounded-2xl"
                                >

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.8"
                                        stroke="currentColor"
                                        class="h-6 w-6 sm:h-7 sm:w-7"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M2.25 12s3.75-6.75 9.75-6.75S21.75 12 21.75 12s-3.75 6.75-9.75 6.75S2.25 12 2.25 12Z"
                                        />

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                        />
                                    </svg>

                                </div>


                                {{-- Title --}}
                                <div class="min-w-0">

                                    <span
                                        class="block
                                               text-[11px]
                                               font-semibold
                                               uppercase
                                               tracking-[0.15em]
                                               text-emerald-600
                                               sm:text-sm"
                                    >
                                        Arah Kami
                                    </span>

                                    <h3
                                        class="mt-0.5
                                               text-xl
                                               font-bold
                                               text-slate-900
                                               sm:mt-1
                                               sm:text-2xl"
                                    >
                                        Visi
                                    </h3>

                                </div>

                            </div>


                            {{-- Visi Content --}}
                            <div
                                class="mt-5
                                       rounded-xl
                                       bg-slate-50
                                       p-4
                                       text-sm
                                       leading-7
                                       text-slate-600
                                       sm:mt-6
                                       sm:rounded-2xl
                                       sm:p-5
                                       sm:text-base
                                       sm:leading-8"
                            >

                                @if($website?->vision)

                                    {!! nl2br(e($website->vision)) !!}

                                @else

                                    <p>
                                        Visi belum tersedia.
                                    </p>

                                @endif

                            </div>

                        </div>


                        {{-- =================================================
                            DIVIDER
                        ================================================== --}}
                        <div
                            class="my-6
                                   flex
                                   items-center
                                   gap-3
                                   sm:my-8"
                        >

                            <div class="h-px flex-1 bg-slate-200"></div>

                            <div
                                class="h-1.5 w-1.5
                                       shrink-0
                                       rounded-full
                                       bg-emerald-500
                                       sm:h-2 sm:w-2"
                            ></div>

                            <div class="h-px flex-1 bg-slate-200"></div>

                        </div>


                        {{-- =================================================
                            MISI
                        ================================================== --}}
                        <div>

                            {{-- Misi Header --}}
                            <div
                                class="flex
                                       items-center
                                       gap-3
                                       sm:gap-4"
                            >

                                {{-- Icon --}}
                                <div
                                    class="flex
                                           h-12 w-12
                                           shrink-0
                                           items-center
                                           justify-center
                                           rounded-xl
                                           bg-green-100
                                           text-green-700
                                           shadow-sm
                                           sm:h-14 sm:w-14
                                           sm:rounded-2xl"
                                >

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.8"
                                        stroke="currentColor"
                                        class="h-6 w-6 sm:h-7 sm:w-7"
                                    >

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 6.75v10.5M6.75 12h10.5"
                                        />

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M4.5 4.5h15v15h-15z"
                                        />

                                    </svg>

                                </div>


                                {{-- Title --}}
                                <div class="min-w-0">

                                    <span
                                        class="block
                                               text-[11px]
                                               font-semibold
                                               uppercase
                                               tracking-[0.15em]
                                               text-green-600
                                               sm:text-sm"
                                    >
                                        Langkah Kami
                                    </span>

                                    <h3
                                        class="mt-0.5
                                               text-xl
                                               font-bold
                                               text-slate-900
                                               sm:mt-1
                                               sm:text-2xl"
                                    >
                                        Misi
                                    </h3>

                                </div>

                            </div>


                            {{-- Misi Content --}}
                            <div
                                class="mt-5
                                       rounded-xl
                                       bg-slate-50
                                       p-4
                                       text-sm
                                       leading-7
                                       text-slate-600
                                       sm:mt-6
                                       sm:rounded-2xl
                                       sm:p-5
                                       sm:text-base
                                       sm:leading-8"
                            >

                                @if($website?->mission)

                                    {!! nl2br(e($website->mission)) !!}

                                @else

                                    <p>
                                        Misi belum tersedia.
                                    </p>

                                @endif

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>