{{-- =========================================================
    ORGANIZATION STRUCTURE
========================================================= --}}
@if(isset($organizations) && $organizations->count())

<section class="relative isolate overflow-hidden bg-slate-50 py-16 sm:py-20 lg:py-24">

    {{-- =====================================================
        DECORATIVE BACKGROUND
    ====================================================== --}}
    <div
        aria-hidden="true"
        class="pointer-events-none absolute -left-32 top-10 h-72 w-72 rounded-full bg-emerald-100/50 blur-3xl sm:-left-40 sm:h-96 sm:w-96"
    ></div>

    <div
        aria-hidden="true"
        class="pointer-events-none absolute -right-32 bottom-0 h-72 w-72 rounded-full bg-green-100/40 blur-3xl sm:-right-40 sm:h-96 sm:w-96"
    ></div>


    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- =====================================================
            HEADER
        ====================================================== --}}
        <div class="mx-auto max-w-3xl text-center">

            {{-- Label --}}
            <div class="inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-3.5 py-2 text-xs font-bold uppercase tracking-wider text-emerald-700 sm:px-4 sm:text-sm">

                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>

                Struktur Organisasi

            </div>


            {{-- Title --}}
            <h2 class="mt-5 text-3xl font-extrabold leading-tight tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">

                Yayasan Amaliah

            </h2>


            {{-- Accent --}}
            <div class="mt-5 flex items-center justify-center gap-2 sm:mt-6">

                <span class="h-1 w-12 rounded-full bg-emerald-600 sm:w-14"></span>

                <span class="h-1 w-4 rounded-full bg-emerald-300 sm:w-5"></span>

            </div>


            {{-- Description --}}
            <p class="mx-auto mt-5 max-w-2xl text-sm leading-7 text-slate-600 sm:mt-6 sm:text-base sm:leading-8 lg:text-lg">

                Mengenal jajaran organisasi yang mengelola dan mengembangkan
                {{ $website?->school_name ?? 'Perguruan Amaliah' }}.

            </p>

        </div>


        {{-- =====================================================
            ORGANIZATION DATA
        ====================================================== --}}
        @php
            $leader = $organizations->first();
            $members = $organizations->skip(1);
        @endphp


        {{-- =====================================================
            ORGANIZATION CHART
        ====================================================== --}}
        <div class="relative mt-12 sm:mt-16 lg:mt-20">


            {{-- =================================================
                TOP LEADER
            ================================================== --}}
            @if($leader)

                <div class="flex justify-center">

                    <article
                        class="group relative w-full max-w-md overflow-hidden rounded-3xl border-2 border-emerald-500 bg-white p-5 shadow-xl shadow-emerald-900/10 transition duration-300 sm:p-6 lg:hover:-translate-y-1 lg:hover:shadow-2xl"
                    >

                        {{-- Top Accent --}}
                        <div class="absolute inset-x-0 top-0 h-1.5 bg-emerald-600"></div>


                        <div class="flex items-center gap-4 sm:gap-5">

                            {{-- =================================================
                                PHOTO
                            ================================================== --}}
                            @if(filled($leader->photo))

                                <div class="h-20 w-20 shrink-0 overflow-hidden rounded-full border-4 border-white bg-emerald-50 shadow-md ring-2 ring-emerald-100 sm:h-24 sm:w-24">

                                    <img
                                        src="{{ Storage::url($leader->photo) }}"
                                        alt="{{ $leader->name ?: 'Pimpinan organisasi' }}"
                                        loading="lazy"
                                        decoding="async"
                                        class="h-full w-full object-cover"
                                    >

                                </div>

                            @else

                                <div class="flex h-20 w-20 shrink-0 items-center justify-center rounded-full bg-gradient-to-br from-emerald-600 to-emerald-800 text-2xl font-bold text-white shadow-md sm:h-24 sm:w-24 sm:text-3xl">

                                    {{ strtoupper(mb_substr($leader->name ?: 'P', 0, 1)) }}

                                </div>

                            @endif


                            {{-- =================================================
                                INFORMATION
                            ================================================== --}}
                            <div class="min-w-0 flex-1">

                                <span class="text-[10px] font-bold uppercase tracking-[0.18em] text-emerald-600 sm:text-xs">
                                    Pimpinan
                                </span>

                                <h3 class="mt-1 break-words text-lg font-extrabold leading-tight text-slate-900 sm:text-xl">

                                    {{ $leader->name }}

                                </h3>

                                @if(filled($leader->position))

                                    <p class="mt-1.5 text-xs font-bold uppercase tracking-wide text-emerald-600 sm:text-sm">

                                        {{ $leader->position }}

                                    </p>

                                @endif

                            </div>

                        </div>

                    </article>

                </div>


                {{-- =================================================
                    CONNECTOR TO MEMBERS
                ================================================== --}}
                @if($members->count())

                    <div class="mx-auto h-10 w-px bg-emerald-300 sm:h-12"></div>

                @endif

            @endif


            {{-- =================================================
                MEMBERS
            ================================================== --}}
            @if($members->count())

                <div class="relative">


                    {{-- =================================================
                        DESKTOP HORIZONTAL CONNECTOR
                    ================================================== --}}
                    <div
                        aria-hidden="true"
                        class="absolute left-[16.66%] right-[16.66%] top-0 hidden h-px bg-emerald-300 lg:block"
                    ></div>


                    {{-- =================================================
                        MEMBER GRID
                    ================================================== --}}
                    <div class="grid gap-5 sm:grid-cols-2 sm:gap-6 lg:grid-cols-3 lg:gap-8">

                        @foreach($members as $item)

                            <div class="relative">

                                {{-- =================================================
                                    MEMBER CONNECTOR
                                ================================================== --}}
                                <div
                                    aria-hidden="true"
                                    class="absolute left-1/2 top-0 hidden h-8 w-px -translate-y-full bg-emerald-300 lg:block"
                                ></div>


                                {{-- =================================================
                                    MEMBER CARD
                                ================================================== --}}
                                <article
                                    class="group relative h-full overflow-hidden rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition duration-300 sm:p-6 lg:hover:-translate-y-1 lg:hover:border-emerald-300 lg:hover:shadow-xl lg:hover:shadow-emerald-900/10"
                                >

                                    {{-- Accent --}}
                                    <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-emerald-600 via-emerald-400 to-emerald-600"></div>


                                    <div class="flex items-start gap-4">


                                        {{-- =================================================
                                            PHOTO
                                        ================================================== --}}
                                        @if(filled($item->photo))

                                            <div class="relative h-16 w-16 shrink-0 overflow-hidden rounded-full border-4 border-white bg-emerald-50 shadow-md ring-2 ring-emerald-100 sm:h-18 sm:w-18">

                                                <img
                                                    src="{{ Storage::url($item->photo) }}"
                                                    alt="{{ $item->name ?: 'Anggota organisasi' }}"
                                                    loading="lazy"
                                                    decoding="async"
                                                    class="h-full w-full object-cover transition duration-500 lg:group-hover:scale-110"
                                                >

                                            </div>

                                        @else

                                            <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-full bg-gradient-to-br from-emerald-600 to-emerald-800 text-xl font-bold text-white shadow-md sm:h-18 sm:w-18">

                                                {{ strtoupper(mb_substr($item->name ?: 'A', 0, 1)) }}

                                            </div>

                                        @endif


                                        {{-- =================================================
                                            INFORMATION
                                        ================================================== --}}
                                        <div class="min-w-0 flex-1">

                                            <h3 class="break-words text-base font-extrabold leading-tight text-slate-900 sm:text-lg">

                                                {{ $item->name }}

                                            </h3>


                                            @if(filled($item->position))

                                                <p class="mt-1.5 text-[11px] font-bold uppercase leading-5 tracking-wide text-emerald-600 sm:text-xs">

                                                    {{ $item->position }}

                                                </p>

                                            @endif


                                            @if(filled($item->description))

                                                <p class="mt-2 line-clamp-3 text-xs leading-5 text-slate-500 sm:text-sm sm:leading-6">

                                                    {{ Str::limit(
                                                        strip_tags($item->description),
                                                        100
                                                    ) }}

                                                </p>

                                            @endif

                                        </div>

                                    </div>

                                </article>

                            </div>

                        @endforeach

                    </div>

                </div>

            @endif

        </div>

    </div>

</section>

@endif
