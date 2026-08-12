@props([
    'leader' => null
])

@if($leader)
<section class="relative isolate overflow-hidden bg-slate-50 py-16 sm:py-20 lg:py-24">

    {{-- =====================================================
        DECORATIVE BACKGROUND
    ====================================================== --}}
    <div
        aria-hidden="true"
        class="pointer-events-none absolute -left-32 top-10 h-72 w-72 rounded-full bg-emerald-100/60 blur-3xl sm:-left-40 sm:h-96 sm:w-96"
    ></div>

    <div
        aria-hidden="true"
        class="pointer-events-none absolute -right-32 bottom-0 h-72 w-72 rounded-full bg-green-100/50 blur-3xl sm:-right-40 sm:h-96 sm:w-96"
    ></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- =====================================================
            MAIN CONTENT
        ====================================================== --}}
        <div class="grid items-center gap-12 sm:gap-14 lg:grid-cols-[0.9fr_1.1fr] lg:gap-20 xl:gap-24">

            {{-- =================================================
                PHOTO
            ================================================== --}}
            <div class="relative flex justify-center lg:justify-start">

                {{-- Decorative Circle --}}
                <div
                    aria-hidden="true"
                    class="absolute h-64 w-64 rounded-full border border-emerald-600/10 sm:h-80 sm:w-80 lg:h-96 lg:w-96"
                ></div>

                {{-- Decorative Glow --}}
                <div
                    aria-hidden="true"
                    class="absolute -right-2 -top-4 h-20 w-20 rounded-full bg-emerald-400/20 blur-sm sm:-right-4 sm:-top-6 sm:h-24 sm:w-24"
                ></div>

                <div
                    aria-hidden="true"
                    class="absolute -bottom-4 -left-2 h-16 w-16 rounded-full bg-green-500/15 sm:-bottom-5 sm:h-20 sm:w-20"
                ></div>

                {{-- Decorative Dots --}}
                <div
                    aria-hidden="true"
                    class="absolute -bottom-2 right-2 grid grid-cols-4 gap-1.5 opacity-40 sm:right-6 sm:gap-2"
                >
                    @for($i = 0; $i < 12; $i++)
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-600 sm:h-2 sm:w-2"></span>
                    @endfor
                </div>

                {{-- =================================================
                    PHOTO / AVATAR
                ================================================== --}}
                @if(filled($leader->photo))

                    <div class="relative">

                        {{-- Photo Ring --}}
                        <div
                            aria-hidden="true"
                            class="absolute -inset-2 rounded-full border border-emerald-200 sm:-inset-3"
                        ></div>

                        <img
                            src="{{ Storage::url($leader->photo) }}"
                            alt="{{ $leader->name ?: 'Kepala Yayasan' }}"
                            loading="lazy"
                            decoding="async"
                            class="relative h-56 w-56 rounded-full object-cover shadow-2xl ring-8 ring-white sm:h-72 sm:w-72 lg:h-80 lg:w-80"
                        >

                    </div>

                @else

                    {{-- Default Avatar --}}
                    <div
                        class="relative flex h-56 w-56 items-center justify-center rounded-full bg-gradient-to-br from-emerald-700 to-green-900 text-white shadow-2xl ring-8 ring-white sm:h-72 sm:w-72 lg:h-80 lg:w-80"
                    >
                        <span class="text-6xl font-extrabold sm:text-7xl lg:text-8xl">
                            {{ strtoupper(substr($leader->name ?: 'K', 0, 1)) }}
                        </span>
                    </div>

                @endif

            </div>


            {{-- =================================================
                INFORMATION
            ================================================== --}}
            <div class="text-center lg:text-left">

                {{-- =================================================
                    LABEL
                ================================================== --}}
                <div class="inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-3.5 py-2 text-xs font-bold uppercase tracking-wider text-emerald-700 sm:px-4 sm:text-sm">

                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>

                    Kepala Yayasan

                </div>


                {{-- =================================================
                    NAME
                ================================================== --}}
                <h2 class="mt-5 text-3xl font-extrabold leading-tight tracking-tight text-slate-900 sm:mt-6 sm:text-4xl lg:text-5xl xl:text-6xl">

                    {{ $leader->name }}

                </h2>


                {{-- =================================================
                    POSITION
                ================================================== --}}
                @if(filled($leader->position))

                    <p class="mt-3 text-base font-semibold text-emerald-600 sm:mt-4 sm:text-lg">

                        {{ $leader->position }}

                    </p>

                @endif


                {{-- =================================================
                    DIVIDER
                ================================================== --}}
                <div class="mt-6 flex items-center justify-center gap-2 lg:justify-start">

                    <span class="h-1 w-12 rounded-full bg-emerald-600 sm:w-14"></span>

                    <span class="h-1 w-4 rounded-full bg-emerald-300 sm:w-5"></span>

                </div>


                {{-- =================================================
                    MESSAGE
                ================================================== --}}
                @if(filled($leader->message))

                    <div class="relative mt-7 sm:mt-8">

                        {{-- Quote Icon --}}
                        <div
                            aria-hidden="true"
                            class="absolute -left-2 -top-5 select-none text-6xl font-serif font-bold leading-none text-emerald-100 sm:-left-3 sm:text-7xl"
                        >
                            “
                        </div>

                        {{-- Message Card --}}
                        <div class="relative rounded-2xl border border-slate-200 bg-white p-5 text-left shadow-sm sm:p-6 lg:p-7">

                            <p class="whitespace-pre-line text-sm leading-7 text-slate-600 sm:text-base sm:leading-8 lg:text-lg">

                                {{ $leader->message }}

                            </p>

                        </div>

                    </div>

                @else

                    <div class="mt-7 rounded-2xl border border-dashed border-slate-300 bg-white p-5 text-left text-sm text-slate-500 shadow-sm sm:mt-8 sm:p-6">

                        Pesan pimpinan belum tersedia.

                    </div>

                @endif


                {{-- =================================================
                    BOTTOM ACCENT
                ================================================== --}}
                <div class="mt-7 flex items-center justify-center gap-3 lg:justify-start">

                    <div class="h-px w-12 bg-emerald-200 sm:w-16"></div>

                    <div class="h-2 w-2 rounded-full bg-emerald-500"></div>

                    <div class="h-px w-6 bg-emerald-200 sm:w-8"></div>

                </div>

            </div>

        </div>

    </div>

</section>
@endif
