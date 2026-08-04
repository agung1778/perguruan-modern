<article
    class="group overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:border-emerald-200 hover:shadow-lg"
>

    {{-- FOTO --}}
    <div class="relative h-64 overflow-hidden bg-emerald-950">

        @if($teacher->photo)

            <img
                src="{{ Storage::url($teacher->photo) }}"
                alt="{{ $teacher->name }}"
                loading="lazy"
                decoding="async"
                class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
            >

            <div class="absolute inset-0 bg-gradient-to-t from-emerald-950/70 via-transparent to-transparent"></div>

        @else

            <div class="flex h-full items-center justify-center bg-gradient-to-br from-emerald-800 to-emerald-950">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-20 w-20 text-emerald-200/30"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15.75 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Z"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4.5 20.25a7.5 7.5 0 0 1 15 0"
                    />
                </svg>

            </div>

        @endif


        {{-- STATUS --}}
        <div class="absolute right-4 top-4">

            <span class="inline-flex items-center gap-1.5 rounded-full bg-white/90 px-3 py-1.5 text-xs font-bold text-emerald-700 shadow-sm backdrop-blur">

                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>

                Aktif

            </span>

        </div>

    </div>



    {{-- CONTENT --}}
    <div class="p-5">


        {{-- TYPE --}}
        <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">

            @if($teacher->type === 'staff')

                Karyawan / Staff

            @else

                Guru

            @endif

        </span>


        {{-- NAME --}}
        <h4 class="mt-2 line-clamp-2 min-h-[3.5rem] text-lg font-bold leading-7 text-slate-900">

            {{ $teacher->name }}

        </h4>


        {{-- POSITION --}}
        @if($teacher->position)

            <p class="mt-2 text-sm font-medium text-slate-600">
                {{ $teacher->position }}
            </p>

        @else

            <p class="mt-2 text-sm text-slate-400">
                Jabatan belum tersedia
            </p>

        @endif


        {{-- SUBJECT --}}
        @if($teacher->type !== 'staff' && $teacher->subject)

            <div class="mt-4 border-t border-slate-100 pt-4">

                <p class="text-xs text-slate-400">
                    Mata Pelajaran
                </p>

                <p class="mt-1 text-sm font-semibold text-slate-700">
                    {{ $teacher->subject }}
                </p>

            </div>

        @endif


        {{-- DESCRIPTION --}}
        @if($teacher->description || $teacher->bio)

            <p class="mt-4 line-clamp-2 text-sm leading-6 text-slate-500">

                {{ Str::limit($teacher->description ?: $teacher->bio, 100) }}

            </p>

        @endif

    </div>

</article>