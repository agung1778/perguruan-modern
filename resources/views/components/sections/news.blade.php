<section class="bg-slate-50 py-24">
    <div class="max-w-7xl mx-auto px-6">
        {{-- Header --}}
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
            <div>
                <span class="text-yellow-600 font-semibold uppercase tracking-wider">
                    Informasi
                </span>
                <h2 class="text-4xl md:text-5xl font-bold mt-3 text-slate-900">
                    Berita Terbaru
                </h2>
                <p class="mt-4 text-slate-600">
                    Informasi dan kegiatan terbaru Perguruan Amaliah.
                </p>
            </div>
            <a href="{{ route('news.index') }}" class="inline-flex items-center px-6 py-3 rounded-xl bg-blue-900 text-white hover:bg-yellow-500 hover:text-slate-900 transition font-semibold">
                Semua Berita →
            </a>
        </div>
        @if(isset($news) && $news->count())
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10 mt-16">
                @foreach($news as $item)
                    <article class="bg-white rounded-3xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                        {{-- Thumbnail --}}
                        @if($item->thumbnail)
                            <div class="overflow-hidden">
                                <img src="{{ asset('storage/'.$item->thumbnail) }}" alt="{{ $item->title }}" class="h-60 w-full object-cover hover:scale-110 transition duration-500">
                            </div>
                        @else
                            <div class="h-60 bg-slate-200 flex items-center justify-center">
                                <span class="text-slate-500">
                                    Tidak Ada Gambar
                                </span>
                            </div>
                        @endif
                        <div class="p-8">
                            {{-- Category --}}
                            @if($item->category)
                                <span class="text-sm text-blue-900 font-semibold">
                                    {{ $item->category->name }}
                                </span>
                            @endif
                            {{-- Date --}}
                            <p class="mt-2 text-sm text-slate-500">
                                {{ $item->created_at->translatedFormat('d F Y') }}
                            </p>
                            {{-- Title --}}
                            <h3 class="mt-4 text-2xl font-bold leading-snug text-slate-900">
                                {{ $item->title }}
                            </h3>
                            {{-- Content --}}
                            <p class="mt-4 text-slate-600 leading-7">
                                {{ Str::limit(strip_tags($item->content),120) }}
                            </p>
                            {{-- Button --}}
                            <a href="{{ route('news.show',$item->slug) }}" class="inline-flex mt-8 text-blue-900 hover:text-yellow-600 font-semibold transition">
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        @else
            <div class="text-center mt-16 text-slate-500">
                Belum ada berita.
            </div>
        @endif
    </div>
</section>