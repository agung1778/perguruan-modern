<section class="bg-blue-950 text-white py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            {{-- Contact Information --}}
            <div>
                <span class="text-yellow-400 font-semibold uppercase tracking-wider">
                    Hubungi Kami
                </span>
                <h2 class="text-4xl md:text-5xl font-bold mt-4">
                    Informasi Kontak
                </h2>
                <p class="mt-6 text-slate-300 leading-8">
                    Silahkan hubungi kami untuk informasi lebih lanjut mengenai
                    Perguruan Modern.
                </p>
                <div class="mt-10 space-y-8">
                    {{-- Address --}}
                    <div class="flex gap-5">
                        <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center">
                            📍
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg">
                                Alamat
                            </h4>
                            <p class="text-slate-300 mt-1">
                                {{ $website?->address ?? 'Alamat belum tersedia' }}
                            </p>
                        </div>
                    </div>
                    {{-- Phone --}}
                    <div class="flex gap-5">
                        <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center">
                            ☎️
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg">
                                Telepon
                            </h4>
                            @if($website?->phone)
                                <a href="tel:{{ $website->phone }}" class="text-slate-300 hover:text-yellow-400 transition">
                                    {{ $website->phone }}
                                </a>
                            @else
                                <p class="text-slate-300">
                                    Belum tersedia
                                </p>
                            @endif
                        </div>
                    </div>
                    {{-- Email --}}
                    <div class="flex gap-5">
                        <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center">
                            ✉️
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg">
                                Email
                            </h4>
                            @if($website?->email)
                                <a href="mailto:{{ $website->email }}" class="text-slate-300 hover:text-yellow-400 transition">
                                    {{ $website->email }}
                                </a>
                            @else
                                <p class="text-slate-300">
                                    Belum tersedia
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            {{-- Google Maps --}}
            <div>
                @if($website?->google_maps)
                    <div class="rounded-3xl overflow-hidden shadow-2xl bg-white">
                        {!! $website->google_maps !!}
                    </div>
                @else
                    <div class="bg-slate-800 rounded-3xl h-96 flex items-center justify-center">
                        <span class="text-slate-400">
                            Google Maps belum tersedia.
                        </span>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>