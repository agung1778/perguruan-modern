<section class="bg-blue-950 text-white py-24">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16">

            <div>

                <span class="text-yellow-400 font-semibold">

                    Hubungi Kami

                </span>

                <h2 class="text-4xl font-bold mt-4">

                    Informasi Kontak

                </h2>

                <div class="mt-10 space-y-6">

                    <div>

                        <h4 class="font-semibold">

                            Alamat

                        </h4>

                        <p class="text-slate-300">

                            {{ $website?->address }}

                        </p>

                    </div>

                    <div>

                        <h4 class="font-semibold">

                            Telepon

                        </h4>

                        <p class="text-slate-300">

                            {{ $website?->phone }}

                        </p>

                    </div>

                    <div>

                        <h4 class="font-semibold">

                            Email

                        </h4>

                        <p class="text-slate-300">

                            {{ $website?->email }}

                        </p>

                    </div>

                </div>

            </div>

            <div>

                @if(!empty($website?->google_maps))

                    {!! $website->google_maps !!}

                @else

                    <div class="bg-slate-800 rounded-3xl h-96 flex items-center justify-center">

                        <span class="text-slate-400">

                            Google Maps belum tersedia.

                        </span>

                    </div>

                @endif

            </div>

        </div>

    </div>

</section>