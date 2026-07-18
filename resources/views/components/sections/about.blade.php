<section class="bg-slate-100 py-24">
    <div class="max-w-7xl mx-auto px-6">
        {{-- Header --}}
        <div class="text-center">
            <span class="text-yellow-600 font-semibold uppercase tracking-wider">
                Tentang Perguruan
            </span>
            <h2 class="text-4xl md:text-5xl font-bold mt-4 text-slate-900">
                Pendidikan Berkualitas
            </h2>
            <p class="mt-4 text-slate-600">
                Mengenal lebih dekat Perguruan Modern.
            </p>
        </div>
        {{-- Content --}}
        <div class="mt-12 max-w-4xl mx-auto">
            <div class="bg-white rounded-3xl shadow-sm p-10 md:p-14">
                @if($website?->about)
                    <p class="text-center text-slate-600 leading-8 text-lg whitespace-pre-line">
                        {{ $website->about }}
                    </p>
                @else
                    <p class="text-center text-slate-500 leading-8">
                        Informasi tentang perguruan belum tersedia.
                    </p>
                @endif
            </div>
        </div>
    </div>
</section>