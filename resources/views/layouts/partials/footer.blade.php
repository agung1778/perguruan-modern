<footer class="bg-slate-950 text-white">
    <div class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid gap-12 lg:grid-cols-4">
            {{-- BRAND --}}
            <div class="lg:col-span-1">
                <a href="{{ route('home') }}" class="flex items-center gap-4">
                    @if($website?->logo)
                        <img src="{{ Storage::url($website->logo) }}" class="h-16 w-16 object-contain" alt="{{ $website->school_name }}">
                    @else
                        <div class="h-16 w-16 rounded-full bg-blue-900 flex items-center justify-center font-bold text-xl">
                            PM
                        </div>
                    @endif
                </a>
                <h3 class="mt-5 text-xl font-bold">
                    {{ $website?->school_name ?? 'Perguruan Amaliah' }}
                </h3>
                <p class="mt-5 text-slate-400 leading-7">
                    {{ Str::limit(
                        $website?->about ?? 
                        'Website resmi perguruan Amaliah.',
                        180
                    ) }}
                </p>
            </div>

            {{-- MENU --}}
            <div>
                <h3 class="text-lg font-bold mb-6">
                    Navigasi
                </h3>
                <ul class="space-y-4 text-slate-400">
                    <li>
                        <a href="{{ route('home') }}" class="hover:text-yellow-400 transition">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="hover:text-yellow-400 transition">
                            Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('units.index') }}" class="hover:text-yellow-400 transition">
                            Unit Pendidikan
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('news.index') }}" class="hover:text-yellow-400 transition">
                            Berita
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('gallery.index') }}" class="hover:text-yellow-400 transition">
                            Galeri
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('ppdb.index') }}" class="text-slate-400 hover:text-white transition">
                            PPDB
                        </a>
                    </li>
                </ul>
            </div>
            {{-- CONTACT --}}
            <div>
                <h3 class="text-lg font-bold mb-6">
                    Kontak
                </h3>
                <div class="space-y-5 text-slate-400">
                    @if($website?->address)
                    <div class="flex gap-3">
                        <span>
                            📍
                        </span>
                        <p>
                            {{ $website->address }}
                        </p>
                    </div>
                    @endif
                    @if($website?->phone)
                    <div class="flex gap-3">
                        <span>
                            ☎
                        </span>
                        <p>
                            {{ $website->phone }}
                        </p>
                    </div>
                    @endif

                    @if($website?->email)
                    <div class="flex gap-3">
                        <span>
                            ✉
                        </span>

                        <p>
                            {{ $website->email }}
                        </p>
                    </div>
                    @endif
                </div>
            </div>
            {{-- SOCIAL MEDIA --}}
            <div>
                <h3 class="text-lg font-bold mb-6">
                    Ikuti Kami
                </h3>
                <div class="flex flex-wrap gap-3">
                    @if($website?->facebook)
                    <a href="{{ $website->facebook }}" target="_blank"class="px-4 py-2 rounded-xl bg-white/10 hover:bg-blue-600 transition">
                        Facebook
                    </a>
                    @endif
                    @if($website?->instagram)
                    <a href="{{ $website->instagram }}" target="_blank" class="px-4 py-2 rounded-xl bg-white/10 hover:bg-pink-600 transition">
                        Instagram
                    </a>
                    @endif
                    @if($website?->youtube)
                    <a href="{{ $website->youtube }}" target="_blank" class="px-4 py-2 rounded-xl bg-white/10 hover:bg-red-600 transition">
                        YouTube
                    </a>
                    @endif
                </div>
            </div>
        </div>

        {{-- COPYRIGHT --}}
        <div class="border-t border-slate-800 mt-16 pt-8 flex flex-col md:flex-row justify-between gap-4 text-sm text-slate-500">
            <p>
                © {{ date('Y') }}
                {{ $website?->school_name ?? 'Perguruan Amaliah' }}
                . All Rights Reserved.
            </p>
            <p>
                Developed with Laravel & Tailwind CSS
            </p>
        </div>
    </div>
</footer>