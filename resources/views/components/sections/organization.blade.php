{{-- =========================================================
    ORGANIZATION STRUCTURE
========================================================= --}}
@if(isset($organizations) && $organizations->count())

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

                Struktur Organisasi

            </div>


            {{-- Title --}}
            <h2 class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl md:text-5xl">

                Yayasan Amaliah

            </h2>


            {{-- Accent --}}
            <div class="mt-6 flex justify-center items-center gap-2">

                <span class="h-1 w-14 rounded-full bg-emerald-600"></span>

                <span class="h-1 w-5 rounded-full bg-emerald-300"></span>

            </div>


            {{-- Description --}}
            <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">

                Mengenal jajaran organisasi yang mengelola dan mengembangkan
                {{ $website?->school_name ?? 'Perguruan Amaliah' }}.

            </p>

        </div>


        {{-- =====================================================
            ORGANIZATION CARDS
        ====================================================== --}}
        <div class="mt-16 grid gap-7 sm:grid-cols-2 lg:grid-cols-4">

            @foreach($organizations as $item)

                {{-- =================================================
                    ORGANIZATION CARD
                ================================================== --}}
                <article
                    class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-white p-7 text-center shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-emerald-200 hover:shadow-xl hover:shadow-emerald-900/10"
                >

                    {{-- Top Accent --}}
                    <div class="absolute inset-x-0 top-0 h-1.5 bg-gradient-to-r from-emerald-600 via-emerald-400 to-emerald-600 opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>


                    {{-- =================================================
                        PHOTO / AVATAR
                    ================================================== --}}
                    <div class="relative mx-auto w-fit">

                        {{-- Decorative Ring --}}
                        <div class="absolute -inset-2 rounded-full border border-emerald-200/70 transition-all duration-500 group-hover:scale-110 group-hover:border-emerald-400"></div>


                        @if(filled($item->photo))

                            {{-- Photo --}}
                            <div class="relative h-28 w-28 overflow-hidden rounded-full border-4 border-white bg-emerald-50 shadow-lg ring-4 ring-emerald-50">

                                <img
                                    src="{{ Storage::url($item->photo) }}"
                                    alt="{{ $item->name }}"
                                    loading="lazy"
                                    class="h-full w-full object-cover transition duration-500 group-hover:scale-110"
                                >

                            </div>

                        @else

                            {{-- Initial Avatar --}}
                            <div class="relative flex h-28 w-28 items-center justify-center rounded-full border-4 border-white bg-gradient-to-br from-emerald-600 to-emerald-800 text-3xl font-bold text-white shadow-lg ring-4 ring-emerald-50">

                                {{ strtoupper(mb_substr($item->name, 0, 1)) }}

                            </div>

                        @endif

                    </div>


                    {{-- =================================================
                        NAME
                    ================================================== --}}
                    <h3 class="mt-7 line-clamp-2 text-xl font-bold leading-snug text-slate-900">

                        {{ $item->name }}

                    </h3>


                    {{-- =================================================
                        POSITION
                    ================================================== --}}
                    @if(filled($item->position))

                        <div class="mt-3">

                            <span class="inline-flex rounded-full bg-emerald-50 px-3.5 py-1.5 text-xs font-bold uppercase tracking-wide text-emerald-700">

                                {{ $item->position }}

                            </span>

                        </div>

                    @endif


                    {{-- =================================================
                        DESCRIPTION
                    ================================================== --}}
                    @if(filled($item->description))

                        <p class="mt-5 line-clamp-3 text-sm leading-7 text-slate-500">

                            {{ Str::limit(
                                strip_tags($item->description),
                                100
                            ) }}

                        </p>

                    @else

                        <p class="mt-5 text-sm leading-7 text-slate-400">

                            Bagian dari jajaran pengelola
                            {{ $website?->school_name ?? 'Perguruan Amaliah' }}.

                        </p>

                    @endif


                    {{-- =================================================
                        BOTTOM DECORATION
                    ================================================== --}}
                    <div class="mx-auto mt-6 h-1 w-8 rounded-full bg-emerald-200 transition-all duration-300 group-hover:w-14 group-hover:bg-emerald-500"></div>

                </article>

            @endforeach

        </div>

    </div>

</section>

@endif
