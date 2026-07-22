<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        {{-- Header --}}
        <div class="text-center">
            <span class="text-yellow-600 font-semibold uppercase tracking-wider">
                Testimoni
            </span>
            <h2 class="text-4xl md:text-5xl font-bold mt-4 text-slate-900">
                Apa Kata Mereka?
            </h2>
            <p class="mt-4 text-slate-600 max-w-2xl mx-auto">
                Pengalaman dan kesan dari siswa, orang tua, dan masyarakat
                terhadap Perguruan Amaliah.
            </p>
        </div>
        @if(isset($testimonials) && $testimonials->count())
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">
                @foreach($testimonials as $testimonial)
                    <div  class="bg-slate-50 rounded-3xl p-8 shadow-sm hover:shadow-xl transition duration-300">
                        {{-- Profile --}}
                        <div class="flex items-center gap-4">
                            @if(!empty($testimonial->photo))
                                <img src="{{ asset('storage/'.$testimonial->photo) }}"  alt="{{ $testimonial->name }}" class="w-16 h-16 rounded-full object-cover border-4 border-white shadow">
                            @else
                                <div class="w-16 h-16 rounded-full bg-blue-900 flex items-center justify-center text-white text-xl font-bold">
                                    {{ strtoupper(substr($testimonial->name,0,1)) }}
                                </div>
                            @endif
                            <div>
                                <h3 class="font-bold text-lg text-slate-900">
                                    {{ $testimonial->name }}
                                </h3>
                                @if(isset($testimonial->position))
                                    <p class="text-sm text-slate-500">
                                        {{ $testimonial->position }}
                                    </p>
                                @endif
                            </div>
                        </div>
                        {{-- Message --}}
                        <div class="mt-6">
                            <svg class="w-8 h-8 text-yellow-500 mb-3" fill="currentColor"viewBox="0 0 24 24">
                                <path d="M7.17 6A5.17 5.17 0 0 0 2 11.17V18h7v-6H6.83A2.83 2.83 0 0 1 9.66 9V6H7.17zM17.17 6A5.17 5.17 0 0 0 12 11.17V18h7v-6h-2.17A2.83 2.83 0 0 1 19.66 9V6h-2.49z"/>
                            </svg>
                            <p class="text-slate-600 leading-8 italic">
                                "{{ $testimonial->message }}"
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="mt-16 text-center">
                <div class="inline-flex items-center px-6 py-4 rounded-xl bg-slate-100 text-slate-500">
                    Belum ada testimoni.
                </div>
            </div>
        @endif
    </div>
</section>