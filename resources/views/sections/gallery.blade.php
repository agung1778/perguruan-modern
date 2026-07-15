<section class="bg-slate-100 py-24">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex justify-between items-center">

            <div>

                <span class="text-blue-900 font-semibold">
                    Galeri
                </span>

                <h2 class="text-4xl font-bold mt-3">
                    Dokumentasi Kegiatan
                </h2>

            </div>

            <a
                href="{{ route('gallery.index') }}"
                class="text-blue-900 font-semibold hover:text-yellow-500 transition"
            >
                Lihat Semua →
            </a>

        </div>

        @if($gallery->count())

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-14">

                @foreach($gallery as $album)

                    <div class="bg-white rounded-3xl overflow-hidden shadow hover:shadow-xl transition duration-300">

                        @php
                            $cover = $album->photos->first();
                        @endphp

                        @if($cover)

                            <img
                                src="{{ Storage::url($cover->photo) }}"
                                alt="{{ $album->title }}"
                                class="w-full h-64 object-cover hover:scale-105 transition duration-500"
                            >

                        @else

                            <div class="w-full h-64 bg-slate-200 flex items-center justify-center">

                                <span class="text-slate-500">
                                    Belum Ada Foto
                                </span>

                            </div>

                        @endif

                        <div class="p-6">

                            <h3 class="text-xl font-bold">

                                {{ $album->title }}

                            </h3>

                            <p class="mt-3 text-slate-600">

                                {{ $album->photos->count() }} Foto

                            </p>

                        </div>

                    </div>

                @endforeach

            </div>

        @else

            <div class="text-center mt-16 text-slate-500">

                Belum ada galeri.

            </div>

        @endif

    </div>

</section>