<header x-data="{ open:false }" class="sticky top-0 z-50 bg-white/90 backdrop-blur border-b border-slate-200">
<div class="max-w-7xl mx-auto">
    {{-- TOP NAV --}}
    <div class="flex items-center justify-between h-20 px-6">
        {{-- BRAND --}}
        <a href="{{ route('home') }}" class="flex items-center gap-4">
            @if($website?->logo)
                <img src="{{ Storage::url($website->logo) }}" class="h-14 w-14 object-contain" alt="{{ $website->school_name }}">
            @else
                <div class="h-14 w-14 rounded-full bg-blue-900 flex items-center justify-center text-white font-bold">
                    PM
                </div>
            @endif
            <div>
                <h1 class="font-bold text-lg text-blue-900">
                    {{ $website?->school_name ?? 'Perguruan Modern' }}
                </h1>
                <p class="text-xs text-slate-500">
                    Website Resmi
                </p>
            </div>
        </a>
        {{-- DESKTOP MENU --}}
        <nav class="hidden lg:flex items-center gap-8">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-blue-900 font-semibold' : 'hover:text-blue-900' }}">
                Beranda
            </a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-blue-900 font-semibold' : 'hover:text-blue-900' }}">
                Tentang
            </a>
            <a href="{{ route('units.index') }}" class="{{ request()->routeIs('units.*') ? 'text-blue-900 font-semibold' : 'hover:text-blue-900' }}">
                Unit Pendidikan
            </a>
            <a href="{{ route('news.index') }}" class="{{ request()->routeIs('news.*') ? 'text-blue-900 font-semibold'  : 'hover:text-blue-900' }}">
                Berita
            </a>
            <a href="{{ route('agenda.index') }}" class="{{ request()->routeIs('agenda.*') ? 'text-blue-900 font-semibold' : 'hover:text-blue-900' }}">
                Agenda
            </a>
            <a href="{{ route('gallery.index') }}" class="{{ request()->routeIs('gallery.*') ? 'text-blue-900 font-semibold' : 'hover:text-blue-900' }}">
                Galeri
            </a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-blue-900 font-semibold'  : 'hover:text-blue-900' }}">
                Kontak
            </a>
        </nav>
        {{-- MOBILE BUTTON --}}
        <button class="lg:hidden text-2xl" @click="open=!open">
            ☰
        </button>
    </div>
</div>
{{-- MOBILE MENU --}}
<div x-show="open" x-transition @click.outside="open=false" class="lg:hidden border-t bg-white">
<div class="flex flex-col p-6 gap-5">
<a href="{{ route('home') }}">
    Beranda
</a>
<a href="{{ route('about') }}">
    Tentang
</a>
<a href="{{ route('units.index') }}">
    Unit Pendidikan
</a>
<a href="{{ route('news.index') }}">
    Berita
</a>
<a href="{{ route('agenda.index') }}">
    Agenda
</a>
<a href="{{ route('gallery.index') }}">
    Galeri
</a>
<a href="{{ route('contact') }}">
    Kontak
</a>
</div>
</div>
</header>