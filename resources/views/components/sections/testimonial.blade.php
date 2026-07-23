{{-- =========================================================
    TESTIMONIAL SECTION
========================================================= --}}
<section class="relative overflow-hidden bg-white py-24 sm:py-28">

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

                Testimoni

            </div>


            {{-- Title --}}
            <h2 class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl md:text-5xl">

                Apa Kata Mereka?

            </h2>


            {{-- Accent --}}
            <div class="mt-6 flex items-center justify-center gap-2">

                <span class="h-1 w-14 rounded-full bg-emerald-600"></span>

                <span class="h-1 w-5 rounded-full bg-emerald-300"></span>

            </div>


            {{-- Description --}}
            <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">

                Pengalaman dan kesan dari siswa, orang tua, dan masyarakat
                terhadap {{ $website?->school_name ?? 'Perguruan Amaliah' }}.

            </p>

        </div>


        {{-- =====================================================
            TESTIMONIAL LIST
        ====================================================== --}}
        @if(isset($testimonials) && $testimonials->count())

            <div class="mt-16 grid gap-7 md:grid-cols-2 lg:grid-cols-3">

                @foreach($testimonials as $testimonial)

                    {{-- =================================================
                        TESTIMONIAL CARD
                    ================================================== --}}
                    <article
                        class="group relative flex flex-col overflow-hidden rounded-3xl border border-slate-200 bg-white p-7 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-emerald-200 hover:shadow-xl hover:shadow-emerald-900/10 sm:p-8"
                    >

                        {{-- Top Accent --}}
                        <div class="absolute inset-x-0 top-0 h-1.5 bg-gradient-to-r from-emerald-600 via-emerald-400 to-emerald-600 opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>


                        {{-- =================================================
                            QUOTE ICON
                        ================================================== --}}
                        <div class="absolute right-7 top-7 flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-500 transition-all duration-300 group-hover:bg-emerald-600 group-hover:text-white">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                                class="h-6 w-6"
                            >
                                <path d="M7.17 6A5.17 5.17 0 0 0 2 11.17V18h7v-6H6.83A2.83 2.83 0 0 1 9.66 9V6H7.17zM17.17 6A5.17 5.17 0 0 0 12 11.17V18h7v-6h-2.17A2.83 2.83 0 0 1 19.66 9V6h-2.49z"/>
                            </svg>

                        </div>


                        {{-- =================================================
                            PROFILE
                        ================================================== --}}
                        <div class="flex items-center gap-4 pr-14">

                            @if(filled($testimonial->photo))

                                <div class="relative shrink-0">

                                    <div class="absolute -inset-1 rounded-full bg-emerald-200 opacity-70 transition-transform duration-300 group-hover:scale-110"></div>

                                    <img
                                        src="{{ Storage::url($testimonial->photo) }}"
                                        alt="{{ $testimonial->name }}"
                                        loading="lazy"
                                        class="relative h-16 w-16 rounded-full border-4 border-white object-cover shadow-md"
                                    >

                                </div>

                            @else

                                <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-full border-4 border-white bg-gradient-to-br from-emerald-600 to-emerald-800 text-xl font-bold text-white shadow-md ring-2 ring-emerald-100">

                                    {{ strtoupper(mb_substr($testimonial->name, 0, 1)) }}

                                </div>

                            @endif


                            <div class="min-w-0">

                                <h3 class="truncate text-lg font-bold text-slate-900">

                                    {{ $testimonial->name }}

                                </h3>


                                @if(filled($testimonial->position))

                                    <p class="mt-1 text-sm font-medium text-emerald-600">

                                        {{ $testimonial->position }}

                                    </p>

                                @endif

                            </div>

                        </div>


                        {{-- =================================================
                            DIVIDER
                        ================================================== --}}
                        <div class="my-6 h-px bg-slate-100"></div>


                        {{-- =================================================
                            MESSAGE
                        ================================================== --}}
                        <div class="flex-1">

                            <p class="text-base leading-8 text-slate-600">

                                <span class="font-serif text-2xl font-bold text-emerald-500">
                                    “
                                </span>

                                {{ $testimonial->message }}

                                <span class="font-serif text-2xl font-bold text-emerald-500">
                                    ”
                                </span>

                            </p>

                        </div>


                        {{-- =================================================
                            BOTTOM DECORATION
                        ================================================== --}}
                        <div class="mt-7 flex items-center gap-2">

                            <span class="h-1 w-8 rounded-full bg-emerald-500 transition-all duration-300 group-hover:w-14"></span>

                            <span class="h-1 w-2 rounded-full bg-emerald-200"></span>

                        </div>

                    </article>

                @endforeach

            </div>


        @else


            {{-- =====================================================
                EMPTY STATE
            ====================================================== --}}
            <div class="mt-16 rounded-3xl border border-slate-200 bg-slate-50 px-6 py-16 text-center">

                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                        class="h-8 w-8"
                    >
                        <path d="M7.17 6A5.17 5.17 0 0 0 2 11.17V18h7v-6H6.83A2.83 2.83 0 0 1 9.66 9V6H7.17zM17.17 6A5.17 5.17 0 0 0 12 11.17V18h7v-6h-2.17A2.83 2.83 0 0 1 19.66 9V6h-2.49z"/>
                    </svg>

                </div>


                <h3 class="mt-5 text-xl font-bold text-slate-900">

                    Belum Ada Testimoni

                </h3>


                <p class="mx-auto mt-2 max-w-lg text-sm leading-7 text-slate-500">

                    Testimoni dari siswa, orang tua, dan masyarakat
                    akan ditampilkan setelah ditambahkan melalui dashboard admin.

                </p>

            </div>

        @endif

    </div>

</section>
