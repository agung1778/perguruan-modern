<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        {{-- Header --}}
        <div class="text-center">
            <span class="text-yellow-600 font-semibold uppercase tracking-wider">
                Unit Pendidikan
            </span>
            <h2 class="text-4xl md:text-5xl font-bold mt-3 text-slate-900">
                Pilih Jenjang Pendidikan
            </h2>
            <p class="mt-4 text-slate-600 max-w-2xl mx-auto">
                Kenali unit pendidikan kami dari tingkat TK hingga Kampus.
            </p>
        </div>
        @if(isset($units) && $units->count())
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10 mt-16">
                @foreach($units as $unit)
                    <div class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-2 transition duration-300">
                        {{-- Foto Sekolah --}}
                        @if($unit->photo)
                            <img src="{{ asset('storage/'.$unit->photo) }}" alt="{{ $unit->name }}" class="h-56 w-full object-cover">
                        @else
                            <div class="h-56 bg-slate-200 flex items-center justify-center">
                                <span class="text-slate-500">
                                    Foto Belum Tersedia
                                </span>
                            </div>
                        @endif
                        <div class="p-8 relative">
                            {{-- Logo --}}
                            <div class="flex justify-center -mt-20">
                                @if($unit->logo)
                                    <img src="{{ asset('storage/'.$unit->logo) }}" alt="{{ $unit->name }}" class="h-24 w-24 rounded-full object-cover bg-white p-2 shadow-xl border-4 border-white">
                                @else
                                    <div class="h-24 w-24 rounded-full bg-blue-900 flex items-center justify-center text-white text-3xl font-bold shadow-xl">
                                        {{ strtoupper(substr($unit->short_name ?? $unit->name,0,1)) }}
                                    </div>
                                @endif
                            </div>
                            <div class="text-center mt-6">
                                <h3 class="text-2xl font-bold text-slate-900">
                                    {{ $unit->name }}
                                </h3>
                                @if($unit->short_name)
                                    <span class="text-sm text-blue-900 font-semibold">
                                        {{ $unit->short_name }}
                                    </span>
                                @endif
                                <p class="mt-3 text-slate-500 leading-7">
                                    {{ Str::limit($unit->description,90) }}
                                </p>
                            </div>
                            {{-- Statistik --}}
                            <div class="grid grid-cols-2 gap-4 mt-8">
                                <div class="rounded-xl bg-blue-50 p-5 text-center">
                                    <h4 class="text-3xl font-bold text-blue-900">
                                        {{ $unit->students_count ?? 0 }}
                                    </h4>
                                    <p class="text-sm text-slate-600">
                                        Siswa
                                    </p>
                                </div>
                                <div class="rounded-xl bg-yellow-50 p-5 text-center">
                                    <h4 class="text-3xl font-bold text-yellow-600">
                                        {{ $unit->teachers_count ?? 0 }}
                                    </h4>
                                    <p class="text-sm text-slate-600">
                                        Guru
                                    </p>
                                </div>
                            </div>
                            {{-- Button --}}
                            @if($unit->website)
                                <div class="mt-8">
                                    <a href="{{ $unit->website }}"target="_blank" class="w-full inline-flex justify-center items-center rounded-xl bg-blue-900 hover:bg-yellow-500 hover:text-slate-900 text-white py-4 transition font-semibold">
                                        Kunjungi Website
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center mt-16 text-slate-500">
                Belum ada unit pendidikan.
            </div>
        @endif
    </div>
</section>