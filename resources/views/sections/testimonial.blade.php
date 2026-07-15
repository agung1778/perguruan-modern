<section class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center">

            <span class="text-blue-900 font-semibold">

                Testimoni

            </span>

            <h2 class="text-4xl font-bold mt-4">

                Apa Kata Mereka?

            </h2>

        </div>

        @if($testimonials->count())

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">

                @foreach($testimonials as $testimonial)

                    <div class="bg-slate-50 rounded-3xl p-8 shadow hover:shadow-lg transition">

                        <div class="flex items-center gap-4">

                            @if($testimonial->photo)

                                <img
                                    src="{{ Storage::url($testimonial->photo) }}"
                                    class="w-16 h-16 rounded-full object-cover"
                                    alt="{{ $testimonial->name }}"
                                >

                            @else

                                <div class="w-16 h-16 rounded-full bg-slate-300"></div>

                            @endif

                            <div>

                                <h3 class="font-bold">

                                    {{ $testimonial->name }}

                                </h3>

                            </div>

                        </div>

                        <p class="mt-6 text-slate-600 leading-8">

                            "{{ $testimonial->message }}"

                        </p>

                    </div>

                @endforeach

            </div>

        @else

            <div class="text-center mt-16 text-slate-500">

                Belum ada testimoni.

            </div>

        @endif

    </div>

</section>