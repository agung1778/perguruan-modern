<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            {{-- Text --}}
            <div>
                <span class="text-yellow-600 font-semibold uppercase tracking-wider">
                    Sambutan
                </span>
                <h2 class="mt-4 text-4xl md:text-5xl font-bold text-slate-900 leading-tight">
                    Selamat Datang di
                    <span class="text-blue-900">
                        {{ $website?->site_name ?? 'Perguruan Modern' }}
                    </span>
                </h2>
                @if($website?->welcome_message)
                    <p class="mt-8 text-slate-600 leading-8 text-lg">
                        {{ $website->welcome_message }}
                    </p>
                @else
                    <p class="mt-8 text-slate-500 leading-8">
                        Selamat datang di website resmi Perguruan Modern.
                    </p>
                @endif
            </div>
            {{-- Logo --}}
            <div class="flex justify-center">
                @if($website?->logo)
                    <div class="bg-white rounded-3xl p-8 shadow-xl">
                        <img src="{{ asset('storage/'.$website->logo) }}" alt="{{ $website->site_name }}" class="w-72 h-72 object-contain">
                    </div>
                @else
                    <div class="w-72 h-72 rounded-3xl bg-slate-100 flex items-center justify-center">
                        <span class="text-slate-400">
                            Logo Perguruan
                        </span>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>