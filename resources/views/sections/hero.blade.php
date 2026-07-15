<section class="relative overflow-hidden">

    @if($banners->count())

        <div
            x-data="{
                active: 0,
                total: {{ $banners->count() }},
                init() {
                    setInterval(() => {
                        this.active = (this.active + 1) % this.total
                    }, 6000)
                }
            }"
            class="relative h-[650px]"
        >

            @foreach($banners as $index => $banner)

                <div
                    x-show="active === {{ $index }}"
                    x-transition.opacity.duration.700ms
                    class="absolute inset-0"
                >

                    <img
                        src="{{ Storage::url($banner->image) }}"
                        class="absolute inset-0 w-full h-full object-cover"
                        alt="{{ $banner->title }}"
                    >

                    <div class="absolute inset-0 bg-slate-950/70"></div>

                    <div class="relative h-full flex items-center">

                        <div class="max-w-7xl mx-auto px-6">

                            <div class="max-w-2xl text-white">

                                <h1 class="text-5xl md:text-6xl font-bold leading-tight">

                                    {{ $banner->title }}

                                </h1>

                                <p class="mt-8 text-lg text-slate-200 leading-8">

                                    {{ $banner->description }}

                                </p>

                                @if($banner->button_text)

                                    <a
                                        href="{{ $banner->button_link }}"
                                        class="inline-flex mt-10 bg-yellow-500 hover:bg-yellow-400 transition px-8 py-4 rounded-xl font-semibold text-slate-900"
                                    >

                                        {{ $banner->button_text }}

                                    </a>

                                @endif

                            </div>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    @endif

</section>