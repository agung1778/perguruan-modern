<footer class="bg-slate-950 text-white">

    <div class="max-w-7xl mx-auto px-6 py-20">

        <div class="grid lg:grid-cols-4 gap-10">

            <div>

                @if($website?->logo)

                    <img
                        src="{{ Storage::url($website->logo) }}"
                        class="h-16 mb-5"
                        alt="{{ $website->school_name }}"
                    >

                @endif

                <p class="text-slate-400">

                    {{ $website?->about }}

                </p>

            </div>

            <div>

                <h3 class="font-bold mb-5">

                    Menu

                </h3>

                <ul class="space-y-3">

                    <li><a href="{{ route('home') }}">Beranda</a></li>

                    <li><a href="{{ route('about') }}">Tentang</a></li>

                    <li><a href="{{ route('news.index') }}">Berita</a></li>

                    <li><a href="{{ route('gallery.index') }}">Galeri</a></li>

                </ul>

            </div>

            <div>

                <h3 class="font-bold mb-5">

                    Kontak

                </h3>

                <p>{{ $website?->address }}</p>

                <p>{{ $website?->phone }}</p>

                <p>{{ $website?->email }}</p>

            </div>

            <div>

                <h3 class="font-bold mb-5">

                    Media Sosial

                </h3>

                <div class="space-y-2">

                    @if($website?->facebook)

                        <a href="{{ $website->facebook }}">
                            Facebook
                        </a>

                    @endif

                    @if($website?->instagram)

                        <a href="{{ $website->instagram }}">
                            Instagram
                        </a>

                    @endif

                    @if($website?->youtube)

                        <a href="{{ $website->youtube }}">
                            YouTube
                        </a>

                    @endif

                </div>

            </div>

        </div>

        <div class="border-t border-slate-800 mt-16 pt-8 text-center text-slate-500">

            © {{ date('Y') }}

            {{ $website?->school_name }}

            All Rights Reserved.

        </div>

    </div>

</footer>