<section class="bg-slate-100 py-24">
    <div class="max-w-7xl mx-auto px-6">
        {{-- Header --}}
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
            <div>
                <span class="text-yellow-600 font-semibold uppercase tracking-wider">
                    Galeri
                </span>
                <h2 class="text-4xl md:text-5xl font-bold mt-3 text-slate-900">
                    Dokumentasi Kegiatan
                </h2>
                <p class="mt-4 text-slate-600">
                    Berbagai kegiatan dan aktivitas Perguruan Amaliah.
                </p>
            </div>
            <a href="{{ route('gallery.index') }}"class="inline-flex items-center px-6 py-3 rounded-xl bg-blue-900 text-white hover:bg-yellow-500 hover:text-slate-900 transition font-semibold">
                Lihat Semua →
            </a>
        </div>
        @if(isset($gallery) && $gallery->count())
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-14">
                @foreach($gallery as $album)
                    @php
                        $cover = $album->photos->first();
                    @endphp
                    <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300">
                        {{-- gallery --}}
                        @if($cover && $cover->gallery)
                            <div class="overflow-hidden">
                                <img src="{{ asset('storage/'.$cover->gallery) }}" alt="{{ $album->title }}" class="w-full h-64 object-cover hover:scale-110 transition duration-500">
                            </div>
                        @else
                            <div class="w-full h-64 bg-slate-200 flex items-center justify-center">
                                <span class="text-slate-500">
                                    Belum Ada Foto
                                </span>
                            </div>
                        @endif
                        {{-- Content --}}
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-slate-900">
                                {{ $album->title }}
                            </h3>
                            @if($album->description)
                                <p class="mt-3 text-slate-600 line-clamp-2">
                                    {{ $album->description }}
                                </p>
                            @endif
                            <div class="mt-4 text-sm text-blue-900 font-semibold">
                                {{ $album->photos->count() }} Foto
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="mt-16 text-center">
                <div class="inline-flex px-6 py-4 bg-white rounded-xl text-slate-500 shadow">
                    Belum ada galeri.
                </div>
            </div>
        @endif
    </div>
</section>