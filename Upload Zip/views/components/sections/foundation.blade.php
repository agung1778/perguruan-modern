@props([
    'leader' => null
])

@if($leader)
<section class="relative overflow-hidden bg-slate-50 py-24 sm:py-28">
    {{-- =====================================================
        DECORATIVE BACKGROUND
    ====================================================== --}}
    <div class="pointer-events-none absolute -left-40 top-10 h-96 w-96 rounded-full bg-emerald-100/60 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-40 bottom-0 h-96 w-96 rounded-full bg-green-100/50 blur-3xl"></div>
    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid items-center gap-14 lg:grid-cols-2 lg:gap-20">
            {{-- =====================================================
                PHOTO
            ====================================================== --}}
            <div class="relative flex justify-center lg:justify-start">
                {{-- =================================================
                    DECORATIVE ELEMENTS
                ================================================== --}}
                {{-- Outer Circle --}}
                <div class="absolute h-80 w-80 rounded-full border-2 border-emerald-600/10 sm:h-96 sm:w-96"></div>
                {{-- Green Circle --}}
                <div class="absolute -right-2 -top-6 h-24 w-24 rounded-full bg-emerald-400/20 blur-sm"></div>
                {{-- Small Accent --}}
                <div class="absolute -bottom-5 -left-2 h-20 w-20 rounded-full bg-green-500/15"></div>
                {{-- Decorative Dots --}}
                <div class="absolute -bottom-3 right-6 grid grid-cols-4 gap-2 opacity-40">
                    @for($i = 0; $i < 12; $i++)
                        <span class="h-2 w-2 rounded-full bg-emerald-600"></span>
                    @endfor
                </div>

                {{-- =================================================
                    PHOTO / AVATAR
                ================================================== --}}
                @if(filled($leader->photo))
                    <div class="relative">
                        {{-- Photo Ring --}}
                        <div class="absolute -inset-3 rounded-full border border-emerald-200"></div>
                        <img
                            src="{{ Storage::url($leader->photo) }}"
                            alt="{{ $leader->name }}"
                            loading="lazy"
                            class="relative h-72 w-72 rounded-full object-cover shadow-2xl ring-8 ring-white transition duration-500 hover:scale-[1.02] sm:h-80 sm:w-80"
                        >
                    </div>
                @else
                    {{-- Default Avatar --}}
                    <div class="relative flex h-72 w-72 items-center justify-center rounded-full bg-gradient-to-br from-emerald-700 to-green-900 text-white shadow-2xl ring-8 ring-white sm:h-80 sm:w-80">
                        <span class="text-7xl font-extrabold">
                            {{ strtoupper(substr($leader->name, 0, 1)) }}
                        </span>
                    </div>
                @endif
            </div>
            {{-- =====================================================
                INFORMATION
            ====================================================== --}}
            <div>
                {{-- =================================================
                    LABEL
                ================================================== --}}
                <div class="inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-2 text-sm font-semibold uppercase tracking-wider text-emerald-700">
                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                    Kepala Yayasan
                </div>
                {{-- =================================================
                    NAME
                ================================================== --}}
                <h2 class="mt-6 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl md:text-5xl">
                    {{ $leader->name }}
                </h2>
                {{-- =================================================
                    POSITION
                ================================================== --}}
                @if(filled($leader->position))
                    <p class="mt-4 text-lg font-semibold text-emerald-600">
                        {{ $leader->position }}
                    </p>
                @endif
                {{-- =================================================
                    DIVIDER
                ================================================== --}}
                <div class="mt-7 flex items-center gap-2">
                    <span class="h-1 w-14 rounded-full bg-emerald-600"></span>
                    <span class="h-1 w-5 rounded-full bg-emerald-300"></span>
                </div>
                {{-- =================================================
                    MESSAGE
                ================================================== --}}
                @if(filled($leader->message))
                    <div class="relative mt-8">
                        {{-- Quote Icon --}}
                        <div class="absolute -left-1 -top-5 text-6xl font-serif leading-none text-emerald-100">
                            “
                        </div>
                        <div class="relative whitespace-pre-line text-base leading-8 text-slate-600 sm:text-lg">
                            {{ $leader->message }}
                        </div>
                    </div>
                @else
                    <div class="mt-8 rounded-2xl border border-slate-200 bg-white p-5 text-slate-500 shadow-sm">
                        Pesan pimpinan belum tersedia.
                    </div>
                @endif
                {{-- =================================================
                    BOTTOM ACCENT
                ================================================== --}}
                <div class="mt-8 flex items-center gap-3">
                    <div class="h-px w-16 bg-emerald-200"></div>
                    <div class="h-2 w-2 rounded-full bg-emerald-500"></div>
                    <div class="h-px w-8 bg-emerald-200"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

