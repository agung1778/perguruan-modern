{{-- =========================================================
CONTACT SECTION
========================================================= --}}

<section class="relative overflow-hidden bg-emerald-950 py-24 text-white sm:py-28">
{{-- Background Decoration --}}
<div class="pointer-events-none absolute -right-40 -top-40 h-[30rem] w-[30rem] rounded-full bg-emerald-700/20 blur-3xl"></div>
<div class="pointer-events-none absolute -bottom-40 -left-40 h-[30rem] w-[30rem] rounded-full bg-green-600/10 blur-3xl"></div>

<div class="relative mx-auto max-w-7xl px-6 lg:px-8">

    {{-- =====================================================
        HEADER
    ====================================================== --}}
    <div class="mx-auto max-w-3xl text-center">

        <span class="inline-flex items-center gap-2 rounded-full border border-emerald-400/20 bg-emerald-400/10 px-4 py-2 text-sm font-semibold uppercase tracking-wider text-emerald-300">
            <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
            Hubungi Kami
        </span>

        <h2 class="mt-6 text-3xl font-extrabold tracking-tight sm:text-4xl lg:text-5xl">
            Mari Terhubung Dengan Kami
        </h2>

        <div class="mt-6 flex items-center justify-center gap-2">
            <span class="h-1 w-14 rounded-full bg-emerald-500"></span>
            <span class="h-1 w-5 rounded-full bg-emerald-300"></span>
        </div>

        <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-emerald-100/70 sm:text-lg">
            Hubungi kami untuk mendapatkan informasi mengenai
            {{ $website?->school_name ?? 'Perguruan Amaliah' }},
            layanan pendidikan, pendaftaran, dan informasi lainnya.
        </p>

    </div>


    {{-- =====================================================
        CONTACT CONTENT
    ====================================================== --}}
    <div class="mt-16 grid gap-10 lg:grid-cols-2 lg:gap-14">

        {{-- =================================================
            CONTACT INFORMATION
        ================================================== --}}
        <div class="space-y-4">

            {{-- ADDRESS --}}
            <div class="group flex items-start gap-5 rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur-sm transition duration-300 hover:border-emerald-400/30 hover:bg-white/10">

                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-emerald-500/15 text-emerald-300 ring-1 ring-emerald-400/20">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.8"
                        stroke="currentColor"
                        class="h-6 w-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                        />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M19.5 10.5c0 5.25-7.5 10.5-7.5 10.5S4.5 15.75 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                        />
                    </svg>
                </div>

                <div class="min-w-0">
                    <p class="text-xs font-bold uppercase tracking-widest text-emerald-400">
                        Alamat
                    </p>

                    <h3 class="mt-1 text-lg font-bold text-white">
                        Lokasi Perguruan
                    </h3>

                    <p class="mt-2 text-sm leading-7 text-emerald-100/60">
                        {{ $website?->address ?? 'Alamat belum tersedia.' }}
                    </p>
                </div>

            </div>


            {{-- PHONE --}}
            <div class="group flex items-start gap-5 rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur-sm transition duration-300 hover:border-emerald-400/30 hover:bg-white/10">

                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-emerald-500/15 text-emerald-300 ring-1 ring-emerald-400/20">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.8"
                        stroke="currentColor"
                        class="h-6 w-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M2.25 6.75c0-1.243 1.007-2.25 2.25-2.25h2.08c.93 0 1.74.57 2.07 1.43l.75 1.95a2.25 2.25 0 0 1-.52 2.35l-1.17 1.17a16.5 16.5 0 0 0 7.89 7.89l1.17-1.17a2.25 2.25 0 0 1 2.35-.52l1.95.75c.86.33 1.43 1.14 1.43 2.07V18c0 1.243-1.007 2.25-2.25 2.25C10.4 20.25 3.75 13.6 3.75 5.75"
                        />
                    </svg>
                </div>

                <div>
                    <p class="text-xs font-bold uppercase tracking-widest text-emerald-400">
                        Telepon
                    </p>

                    <h3 class="mt-1 text-lg font-bold text-white">
                        Hubungi Kami
                    </h3>

                    @if($website?->phone)

                        <a
                            href="tel:{{ $website->phone }}"
                            class="mt-2 inline-flex items-center gap-2 text-sm text-emerald-100/60 transition hover:text-emerald-300"
                        >
                            {{ $website->phone }}

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                class="h-4 w-4 transition-transform group-hover:translate-x-1"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"
                                />
                            </svg>
                        </a>

                    @else

                        <p class="mt-2 text-sm text-emerald-100/40">
                            Nomor telepon belum tersedia.
                        </p>

                    @endif
                </div>

            </div>


            {{-- EMAIL --}}
            <div class="group flex items-start gap-5 rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur-sm transition duration-300 hover:border-emerald-400/30 hover:bg-white/10">

                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-emerald-500/15 text-emerald-300 ring-1 ring-emerald-400/20">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.8"
                        stroke="currentColor"
                        class="h-6 w-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3 7.5 12 13l9-5.5"
                        />
                        <rect
                            width="18"
                            height="15"
                            x="3"
                            y="4.5"
                            rx="2"
                        />
                    </svg>
                </div>

                <div>
                    <p class="text-xs font-bold uppercase tracking-widest text-emerald-400">
                        Email
                    </p>

                    <h3 class="mt-1 text-lg font-bold text-white">
                        Email Resmi
                    </h3>

                    @if($website?->email)

                        <a
                            href="mailto:{{ $website->email }}"
                            class="mt-2 inline-flex items-center gap-2 text-sm text-emerald-100/60 transition hover:text-emerald-300"
                        >
                            {{ $website->email }}

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                class="h-4 w-4 transition-transform group-hover:translate-x-1"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"
                                />
                            </svg>
                        </a>

                    @else

                        <p class="mt-2 text-sm text-emerald-100/40">
                            Email belum tersedia.
                        </p>

                    @endif
                </div>

            </div>

        </div>


        {{-- =================================================
            GOOGLE MAPS
        ================================================== --}}
        <div class="relative overflow-hidden rounded-3xl border border-white/10 bg-white p-2 shadow-2xl shadow-black/20">

            <div class="overflow-hidden rounded-2xl">

                @if($website?->google_maps)

                    <div class="h-[420px] w-full">
                        {!! $website->google_maps !!}
                    </div>

                @else

                    <div class="flex h-[420px] items-center justify-center bg-emerald-900">

                        <div class="px-6 text-center">

                            <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-2xl bg-emerald-800 text-emerald-300 ring-1 ring-emerald-700">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.6"
                                    stroke="currentColor"
                                    class="h-10 w-10"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                    />
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M19.5 10.5c0 5.25-7.5 10.5-7.5 10.5S4.5 15.75 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                                    />
                                </svg>

                            </div>

                            <h3 class="mt-6 text-xl font-bold text-white">
                                Lokasi Perguruan
                            </h3>

                            <p class="mx-auto mt-2 max-w-sm text-sm leading-7 text-emerald-100/50">
                                Google Maps belum tersedia.
                                Silakan tambahkan lokasi melalui pengaturan website.
                            </p>

                        </div>

                    </div>

                @endif

            </div>

        </div>

    </div>

</div>
</section>
