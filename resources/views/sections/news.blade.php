<section class="bg-slate-50 py-24">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex justify-between items-center">

            <div>

                <span class="text-blue-900 font-semibold">
                    Informasi
                </span>

                <h2 class="text-4xl font-bold mt-3">
                    Berita Terbaru
                </h2>

            </div>

            <a
                href="{{ route('news.index') }}"
                class="font-semibold text-blue-900"
            >
                Semua Berita →
            </a>

        </div>

        <div class="grid lg:grid-cols-3 gap-10 mt-16">

            @foreach($news as $item)

                <article class="bg-white rounded-3xl shadow overflow-hidden">

                    <img
                        src="{{ Storage::url($item->thumbnail) }}"
                        class="h-60 w-full object-cover"
                        alt="{{ $item->title }}"
                    >

                    <div class="p-8">

                        <span class="text-sm text-slate-500">
                            {{ $item->created_at->translatedFormat('d F Y') }}
                        </span>

                        <h3 class="mt-4 text-2xl font-bold leading-snug">
                            {{ $item->title }}
                        </h3>

                        <p class="mt-4 text-slate-600">
                            {{ Str::limit(strip_tags($item->content), 120) }}
                        </p>

                        <a
                            href="{{ route('news.show', $item) }}"
                            class="inline-flex mt-8 text-blue-900 font-semibold"
                        >
                            Baca Selengkapnya →
                        </a>

                    </div>

                </article>

            @endforeach

        </div>

    </div>

</section>