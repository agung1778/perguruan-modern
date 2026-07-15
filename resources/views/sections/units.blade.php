<section class="py-24 bg-slate-50">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center">

            <span class="text-blue-900 font-semibold">

                Unit Pendidikan

            </span>

            <h2 class="text-4xl font-bold mt-3">

                Pilih Jenjang Pendidikan

            </h2>

        </div>

        <div class="grid lg:grid-cols-3 gap-10 mt-16">

            @foreach($units as $unit)

                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-lg hover:-translate-y-2 transition duration-300">

                    {{-- Foto Sekolah --}}
                    <img
                        src="{{ Storage::url($unit->photo) }}"
                        class="h-56 w-full object-cover"
                    >

                    <div class="p-8">

                        {{-- Logo --}}
                        <img
                            src="{{ Storage::url($unit->logo) }}"
                            class="h-20 mx-auto -mt-20 bg-white rounded-full p-2 shadow-xl"
                        >

                        <div class="text-center mt-6">

                            <h3 class="text-2xl font-bold">

                                {{ $unit->name }}

                            </h3>

                            <p class="mt-3 text-slate-500">

                                {{ Str::limit($unit->description,90) }}

                            </p>

                        </div>

                        {{-- Statistik --}}

                        <div class="grid grid-cols-2 gap-4 mt-8">

                            <div
                                class="rounded-xl bg-blue-50 p-5 text-center">

                                <h4 class="text-3xl font-bold text-blue-900">

                                    {{ $unit->students_count }}

                                </h4>

                                <p class="text-sm">

                                    Siswa

                                </p>

                            </div>

                            <div
                                class="rounded-xl bg-yellow-50 p-5 text-center">

                                <h4 class="text-3xl font-bold text-yellow-600">

                                    {{ $unit->teachers_count }}

                                </h4>

                                <p class="text-sm">

                                    Guru

                                </p>

                            </div>

                        </div>

                        {{-- Tombol --}}

                        <div class="mt-8">

                            <a

                                href="{{ $unit->website }}"

                                target="_blank"

                                class="w-full inline-flex justify-center items-center rounded-xl bg-blue-900 hover:bg-blue-800 text-white py-4 transition"

                            >

                                Kunjungi Website

                            </a>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>