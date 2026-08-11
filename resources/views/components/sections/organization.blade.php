{{-- =========================================================
    ORGANIZATION STRUCTURE
========================================================= --}}
@if(isset($organizations) && $organizations->count())

<section class="relative overflow-hidden bg-slate-50 py-24 sm:py-28">

    {{-- Background --}}
    <div class="pointer-events-none absolute -left-40 top-20 h-96 w-96 rounded-full bg-emerald-100/50 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-40 bottom-0 h-96 w-96 rounded-full bg-green-100/40 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Header --}}
        <div class="mx-auto max-w-3xl text-center">

            <div class="inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-2 text-sm font-semibold uppercase tracking-wider text-emerald-700">
                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                Struktur Organisasi
            </div>

            <h2 class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl md:text-5xl">
                Yayasan Amaliah
            </h2>

            <div class="mt-6 flex items-center justify-center gap-2">
                <span class="h-1 w-14 rounded-full bg-emerald-600"></span>
                <span class="h-1 w-5 rounded-full bg-emerald-300"></span>
            </div>

            <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">
                Mengenal jajaran pengurus dan pengelola
                {{ $website?->school_name ?? 'Perguruan Amaliah' }}
                dalam menjalankan visi dan misi pendidikan.
            </p>

        </div>

        @php
            $leader = $organizations->first();
            $members = $organizations->skip(1);
        @endphp

        {{-- Organization --}}
        <div class="mx-auto mt-16 max-w-6xl">

            {{-- Leader --}}
            @if($leader)

                <div class="flex justify-center">

                    <article class="group relative w-full max-w-md overflow-hidden rounded-3xl border-2 border-emerald-500 bg-white p-6 shadow-xl shadow-emerald-900/10 transition duration-300 hover:-translate-y-1 hover:shadow-2xl">

                        <div class="absolute inset-x-0 top-0 h-1.5 bg-gradient-to-r from-emerald-700 via-emerald-400 to-emerald-700"></div>

                        <div class="flex items-center gap-5">

                            @if(filled($leader->photo))

                                <div class="h-24 w-24 shrink-0 overflow-hidden rounded-full border-4 border-white bg-emerald-50 shadow-lg ring-2 ring-emerald-100">
                                    <img
                                        src="{{ Storage::url($leader->photo) }}"
                                        alt="{{ $leader->name }}"
                                        class="h-full w-full object-cover"
                                    >
                                </div>

                            @else

                                <div class="flex h-24 w-24 shrink-0 items-center justify-center rounded-full bg-gradient-to-br from-emerald-600 to-emerald-800 text-3xl font-bold text-white shadow-lg">
                                    {{ strtoupper(mb_substr($leader->name, 0, 1)) }}
                                </div>

                            @endif

                            <div class="min-w-0">

                                <span class="text-xs font-bold uppercase tracking-widest text-emerald-600">
                                    Pimpinan
                                </span>

                                <h3 class="mt-1 text-xl font-extrabold text-slate-900">
                                    {{ $leader->name }}
                                </h3>

                                @if(filled($leader->position))
                                    <p class="mt-1 text-sm font-semibold text-slate-500">
                                        {{ $leader->position }}
                                    </p>
                                @endif

                            </div>

                        </div>

                    </article>

                </div>

            @endif

            {{-- Connector --}}
            @if($members->count())

                <div class="mx-auto my-8 h-10 w-px bg-emerald-300"></div>

            @endif

            {{-- Members --}}
            @if($members->count())

                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

                    @foreach($members as $item)

                        <article class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-emerald-300 hover:shadow-xl hover:shadow-emerald-900/10">

                            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-emerald-600 via-emerald-400 to-emerald-600"></div>

                            <div class="flex items-center gap-4">

                                @if(filled($item->photo))

                                    <div class="h-16 w-16 shrink-0 overflow-hidden rounded-full border-4 border-white bg-emerald-50 shadow-md ring-2 ring-emerald-100">
                                        <img
                                            src="{{ Storage::url($item->photo) }}"
                                            alt="{{ $item->name }}"
                                            loading="lazy"
                                            class="h-full w-full object-cover transition duration-500 group-hover:scale-110"
                                        >
                                    </div>

                                @else

                                    <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-full bg-gradient-to-br from-emerald-600 to-emerald-800 text-xl font-bold text-white shadow-md">
                                        {{ strtoupper(mb_substr($item->name, 0, 1)) }}
                                    </div>

                                @endif

                                <div class="min-w-0 flex-1">

                                    <h3 class="truncate text-base font-extrabold text-slate-900">
                                        {{ $item->name }}
                                    </h3>

                                    @if(filled($item->position))

                                        <p class="mt-1 text-xs font-bold uppercase tracking-wide text-emerald-600">
                                            {{ $item->position }}
                                        </p>

                                    @endif

                                    @if(filled($item->description))

                                        <p class="mt-2 line-clamp-2 text-xs leading-5 text-slate-500">
                                            {{ Str::limit(strip_tags($item->description), 90) }}
                                        </p>

                                    @endif

                                </div>

                            </div>

                        </article>

                    @endforeach

                </div>

            @endif

        </div>

    </div>

</section>

@endif