<section class="relative overflow-hidden">
    @if(isset($banners) && $banners->count())
        <div x-data="{active: 0,total: {{ $banners->count() }},init() {setInterval(() => {this.active = (this.active + 1) % this.total}, 6000)}}" class="relative h-[650px]">
            @foreach($banners as $index => $banner)
                <div x-show="active === {{ $index }}"x-cloak x-transition.opacity.duration.700m class="absolute inset-0">
                    {{-- Background Image --}}
                    @if($banner->image)
                        <img src="{{ asset('storage/'.$banner->image) }}"alt="{{ $banner->title }}"class="absolute inset-0 w-full h-full object-cover">
                    @else
                        <div
                            class="absolute inset-0 bg-slate-900"
                        ></div>
                    @endif
                    {{-- Overlay --}}
                    <div
                        class="absolute inset-0 bg-slate-950/70"
                    ></div>
                    {{-- Content --}}
                    <div class="relative h-full flex items-center">
                        <div class="max-w-7xl mx-auto px-6 w-full">
                            <div class="max-w-3xl text-white">
                                <span class="text-yellow-400 font-semibold uppercase tracking-widest">
                                    Perguruan Modern
                                </span>
                                <h1 class="mt-5 text-5xl md:text-6xl font-bold leading-tight">
                                    {{ $banner->title }}
                                </h1>
                                @if($banner->description)
                                    <p class="mt-8 text-lg text-slate-200 leading-8">
                                        {{ $banner->description }}
                                    </p>
                                @endif
                                @if($banner->button_text)
                                    <a href="{{ $banner->button_link ?? '#' }}"class="inline-flex mt-10 bg-yellow-500 hover:bg-yellow-400 transition px-8 py-4 rounded-xl font-semibold text-slate-900">
                                        {{ $banner->button_text }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- Indicator --}}
            <div
                class="absolute bottom-8 left-0 right-0 flex justify-center gap-3"
            >
                @foreach($banners as $index => $banner)
                    <button
                        @click="active={{ $index }}"
                        class="w-3 h-3 rounded-full bg-white/70 hover:bg-yellow-400 transition"
                    ></button>
                @endforeach
            </div>
        </div>
    @endif
</section>