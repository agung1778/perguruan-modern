<header
    x-data="{ open: false }"
    class="sticky top-0 z-50 border-b border-emerald-100/80 bg-white/95 shadow-sm backdrop-blur-xl"
>

<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

    {{-- =========================================================
        MAIN NAVBAR
    ========================================================= --}}
    <div class="flex h-20 items-center justify-between">

        {{-- =====================================================
            BRAND
        ====================================================== --}}
        <a
            href="{{ route('home') }}"
            class="group flex min-w-0 items-center gap-3"
        >

            {{-- Logo --}}
            <div class="relative flex h-12 w-12 shrink-0 items-center justify-center sm:h-14 sm:w-14">

                @if($website?->logo)

                    <img
                        src="{{ Storage::url($website->logo) }}"
                        alt="{{ $website->school_name }}"
                        class="h-full w-full object-contain transition duration-300 group-hover:scale-105"
                    >

                @else

                    <div class="flex h-full w-full items-center justify-center rounded-2xl bg-gradient-to-br from-emerald-600 to-green-800 text-lg font-bold text-white shadow-lg shadow-emerald-900/20">
                        PA
                    </div>

                @endif

            </div>


            {{-- Brand Text --}}
            <div class="min-w-0">

                <h1 class="max-w-[180px] truncate text-sm font-extrabold tracking-tight text-emerald-950 sm:max-w-xs sm:text-lg">
                    {{ $website?->school_name ?? 'Perguruan Amaliah' }}
                </h1>

                <div class="mt-0.5 flex items-center gap-2">

                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>

                    <p class="text-[10px] font-medium uppercase tracking-wider text-slate-500 sm:text-xs">
                        Website Resmi
                    </p>

                </div>

            </div>

        </a>


        {{-- =====================================================
            DESKTOP NAVIGATION
        ====================================================== --}}
        <nav
            class="hidden items-center gap-1 lg:flex"
            aria-label="Navigasi utama"
        >

            {{-- Beranda --}}
            <a
                href="{{ route('home') }}"
                class="group relative rounded-xl px-4 py-3 text-sm font-semibold transition duration-200
                {{ request()->routeIs('home')
                    ? 'bg-emerald-50 text-emerald-700'
                    : 'text-slate-600 hover:bg-emerald-50 hover:text-emerald-700'
                }}"
            >
                Beranda

                @if(request()->routeIs('home'))
                    <span class="absolute bottom-1 left-1/2 h-1 w-1 -translate-x-1/2 rounded-full bg-emerald-600"></span>
                @endif
            </a>


            {{-- Tentang --}}
            <a
                href="{{ route('about') }}"
                class="group relative rounded-xl px-4 py-3 text-sm font-semibold transition duration-200
                {{ request()->routeIs('about')
                    ? 'bg-emerald-50 text-emerald-700'
                    : 'text-slate-600 hover:bg-emerald-50 hover:text-emerald-700'
                }}"
            >
                Tentang

                @if(request()->routeIs('about'))
                    <span class="absolute bottom-1 left-1/2 h-1 w-1 -translate-x-1/2 rounded-full bg-emerald-600"></span>
                @endif
            </a>


            {{-- Unit Pendidikan --}}
            <a
                href="{{ route('units.index') }}"
                class="group relative rounded-xl px-4 py-3 text-sm font-semibold transition duration-200
                {{ request()->routeIs('units.*')
                    ? 'bg-emerald-50 text-emerald-700'
                    : 'text-slate-600 hover:bg-emerald-50 hover:text-emerald-700'
                }}"
            >
                Unit Pendidikan

                @if(request()->routeIs('units.*'))
                    <span class="absolute bottom-1 left-1/2 h-1 w-1 -translate-x-1/2 rounded-full bg-emerald-600"></span>
                @endif
            </a>


            {{-- Berita --}}
            <a
                href="{{ route('news.index') }}"
                class="group relative rounded-xl px-4 py-3 text-sm font-semibold transition duration-200
                {{ request()->routeIs('news.*')
                    ? 'bg-emerald-50 text-emerald-700'
                    : 'text-slate-600 hover:bg-emerald-50 hover:text-emerald-700'
                }}"
            >
                Berita

                @if(request()->routeIs('news.*'))
                    <span class="absolute bottom-1 left-1/2 h-1 w-1 -translate-x-1/2 rounded-full bg-emerald-600"></span>
                @endif
            </a>


            {{-- Agenda --}}
            <a
                href="{{ route('agenda.index') }}"
                class="group relative rounded-xl px-4 py-3 text-sm font-semibold transition duration-200
                {{ request()->routeIs('agenda.*')
                    ? 'bg-emerald-50 text-emerald-700'
                    : 'text-slate-600 hover:bg-emerald-50 hover:text-emerald-700'
                }}"
            >
                Agenda

                @if(request()->routeIs('agenda.*'))
                    <span class="absolute bottom-1 left-1/2 h-1 w-1 -translate-x-1/2 rounded-full bg-emerald-600"></span>
                @endif
            </a>


            {{-- Galeri --}}
            <a
                href="{{ route('gallery.index') }}"
                class="group relative rounded-xl px-4 py-3 text-sm font-semibold transition duration-200
                {{ request()->routeIs('gallery.*')
                    ? 'bg-emerald-50 text-emerald-700'
                    : 'text-slate-600 hover:bg-emerald-50 hover:text-emerald-700'
                }}"
            >
                Galeri

                @if(request()->routeIs('gallery.*'))
                    <span class="absolute bottom-1 left-1/2 h-1 w-1 -translate-x-1/2 rounded-full bg-emerald-600"></span>
                @endif
            </a>


            {{-- Kontak --}}
            <a
                href="{{ route('contact') }}"
                class="group relative rounded-xl px-4 py-3 text-sm font-semibold transition duration-200
                {{ request()->routeIs('contact')
                    ? 'bg-emerald-50 text-emerald-700'
                    : 'text-slate-600 hover:bg-emerald-50 hover:text-emerald-700'
                }}"
            >
                Kontak

                @if(request()->routeIs('contact'))
                    <span class="absolute bottom-1 left-1/2 h-1 w-1 -translate-x-1/2 rounded-full bg-emerald-600"></span>
                @endif
            </a>


            {{-- Divider --}}
            <div class="mx-2 h-7 w-px bg-slate-200"></div>


            {{-- PPDB CTA --}}
            <a
                href="{{ route('ppdb.index') }}"
                class="inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-emerald-600 to-green-700 px-5 py-3 text-sm font-bold text-white shadow-md shadow-emerald-900/20 transition duration-300 hover:-translate-y-0.5 hover:from-emerald-700 hover:to-green-800 hover:shadow-lg"
            >
                <span>
                    PPDB
                </span>

                <span class="text-base transition-transform duration-300 group-hover:translate-x-1">
                    →
                </span>
            </a>

        </nav>


        {{-- =====================================================
            MOBILE MENU BUTTON
        ====================================================== --}}
        <button
            type="button"
            class="flex h-11 w-11 items-center justify-center rounded-xl border border-emerald-100 bg-emerald-50 text-emerald-700 transition hover:bg-emerald-100 lg:hidden"
            @click="open = !open"
            :aria-expanded="open.toString()"
            aria-label="Buka menu navigasi"
        >

            {{-- Hamburger --}}
            <svg
                x-show="!open"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="h-6 w-6"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                />
            </svg>


            {{-- Close --}}
            <svg
                x-show="open"
                x-cloak
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="h-6 w-6"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18 18 6M6 6l12 12"
                />
            </svg>

        </button>

    </div>

</div>


{{-- =========================================================
    MOBILE NAVIGATION
========================================================= --}}
<div
    x-show="open"
    x-cloak
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 -translate-y-3"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 -translate-y-3"
    class="border-t border-emerald-100 bg-white shadow-xl lg:hidden"
>

    <nav
        class="mx-auto flex max-w-7xl flex-col gap-1.5 px-4 py-5 sm:px-6"
        aria-label="Navigasi mobile"
    >

        {{-- Beranda --}}
        <a
            href="{{ route('home') }}"
            class="rounded-xl px-4 py-3.5 text-sm font-semibold transition
            {{ request()->routeIs('home')
                ? 'bg-emerald-600 text-white shadow-md shadow-emerald-900/10'
                : 'text-slate-600 hover:bg-emerald-50 hover:text-emerald-700'
            }}"
        >
            Beranda
        </a>


        {{-- Tentang --}}
        <a
            href="{{ route('about') }}"
            class="rounded-xl px-4 py-3.5 text-sm font-semibold transition
            {{ request()->routeIs('about')
                ? 'bg-emerald-600 text-white shadow-md shadow-emerald-900/10'
                : 'text-slate-600 hover:bg-emerald-50 hover:text-emerald-700'
            }}"
        >
            Tentang
        </a>


        {{-- Unit Pendidikan --}}
        <a
            href="{{ route('units.index') }}"
            class="rounded-xl px-4 py-3.5 text-sm font-semibold transition
            {{ request()->routeIs('units.*')
                ? 'bg-emerald-600 text-white shadow-md shadow-emerald-900/10'
                : 'text-slate-600 hover:bg-emerald-50 hover:text-emerald-700'
            }}"
        >
            Unit Pendidikan
        </a>


        {{-- Berita --}}
        <a
            href="{{ route('news.index') }}"
            class="rounded-xl px-4 py-3.5 text-sm font-semibold transition
            {{ request()->routeIs('news.*')
                ? 'bg-emerald-600 text-white shadow-md shadow-emerald-900/10'
                : 'text-slate-600 hover:bg-emerald-50 hover:text-emerald-700'
            }}"
        >
            Berita
        </a>


        {{-- Agenda --}}
        <a
            href="{{ route('agenda.index') }}"
            class="rounded-xl px-4 py-3.5 text-sm font-semibold transition
            {{ request()->routeIs('agenda.*')
                ? 'bg-emerald-600 text-white shadow-md shadow-emerald-900/10'
                : 'text-slate-600 hover:bg-emerald-50 hover:text-emerald-700'
            }}"
        >
            Agenda
        </a>


        {{-- Galeri --}}
        <a
            href="{{ route('gallery.index') }}"
            class="rounded-xl px-4 py-3.5 text-sm font-semibold transition
            {{ request()->routeIs('gallery.*')
                ? 'bg-emerald-600 text-white shadow-md shadow-emerald-900/10'
                : 'text-slate-600 hover:bg-emerald-50 hover:text-emerald-700'
            }}"
        >
            Galeri
        </a>


        {{-- Kontak --}}
        <a
            href="{{ route('contact') }}"
            class="rounded-xl px-4 py-3.5 text-sm font-semibold transition
            {{ request()->routeIs('contact')
                ? 'bg-emerald-600 text-white shadow-md shadow-emerald-900/10'
                : 'text-slate-600 hover:bg-emerald-50 hover:text-emerald-700'
            }}"
        >
            Kontak
        </a>


        {{-- PPDB --}}
        <a
            href="{{ route('ppdb.index') }}"
            class="mt-3 inline-flex items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-emerald-600 to-green-700 px-4 py-3.5 text-sm font-bold text-white shadow-lg shadow-emerald-900/20 transition hover:from-emerald-700 hover:to-green-800"
        >
            <span>
                Pendaftaran PPDB
            </span>

            <span>
                →
            </span>
        </a>

    </nav>

</div>

</header>
