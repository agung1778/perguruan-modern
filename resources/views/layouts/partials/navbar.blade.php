<header
    x-data="{ open:false }"
    class="sticky top-0 z-50 bg-white/90 backdrop-blur border-b border-slate-200">

    <div class="max-w-7xl mx-auto">

        <div class="flex items-center justify-between h-20 px-6">

            <a
                href="{{ route('home') }}"
                class="flex items-center gap-4">

                @if($website?->logo)

                    <img
                        src="{{ Storage::url($website->logo) }}"
                        class="h-14"
                        alt="{{ $website->school_name }}"
                    >

                @endif

                <div>

                    <h1 class="font-bold text-lg text-blue-900">

                        {{ $website?->school_name }}

                    </h1>

                    <p class="text-xs text-slate-500">

                        Website Resmi

                    </p>

                </div>

            </a>

            {{-- Desktop Menu --}}
            <nav class="hidden lg:flex items-center gap-8">

                <a href="{{ route('home') }}"
                    class="hover:text-blue-900">

                    Beranda

                </a>

                <a href="{{ route('about') }}"
                    class="hover:text-blue-900">

                    Tentang

                </a>

                <a href="{{ route('units.index') }}"
                    class="hover:text-blue-900">

                    Unit Pendidikan

                </a>

                <a href="{{ route('news.index') }}"
                    class="hover:text-blue-900">

                    Berita

                </a>

                <a href="{{ route('agenda.index') }}"
                    class="hover:text-blue-900">

                    Agenda

                </a>

                <a href="{{ route('gallery.index') }}"
                    class="hover:text-blue-900">

                    Galeri

                </a>

                <a href="{{ route('contact') }}"
                    class="hover:text-blue-900">

                    Kontak

                </a>

            </nav>

            <div class="hidden lg:block">

                <a
                    href="{{ route('login') }}"
                    class="bg-blue-900 text-white px-6 py-3 rounded-xl hover:bg-blue-800">

                    Login

                </a>

            </div>

            {{-- Mobile Button --}}
            <button
                class="lg:hidden"
                @click="open=!open">

                ☰

            </button>

        </div>

    </div>

    {{-- Mobile Menu --}}
    <div
        x-show="open"
        x-transition
        class="lg:hidden bg-white border-t">

        <div class="flex flex-col p-6 gap-4">

            <a href="{{ route('home') }}">Beranda</a>

            <a href="{{ route('about') }}">Tentang</a>

            <a href="{{ route('units.index') }}">Unit Pendidikan</a>

            <a href="{{ route('news.index') }}">Berita</a>

            <a href="{{ route('agenda.index') }}">Agenda</a>

            <a href="{{ route('gallery.index') }}">Galeri</a>

            <a href="{{ route('contact') }}">Kontak</a>

            <a
                href="{{ route('login') }}"
                class="bg-blue-900 text-white rounded-xl py-3 text-center">

                Login

            </a>

        </div>

    </div>

</header>