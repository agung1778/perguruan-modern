@extends('layouts.app')

@section('content')

<section class="bg-blue-950 py-24">
    <div class="max-w-7xl mx-auto px-6 text-center text-white">
        <h1 class="text-5xl font-bold">
            Unit Pendidikan
        </h1>
        <p class="mt-6 text-slate-300">
            Pilih jenjang pendidikan yang tersedia
        </p>
    </div>
</section>
<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach($units as $unit)
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
                <img src="{{ Storage::url($unit->photos) }}" class="h-60 w-full object-cover">
                <div class="p-8 text-center">
                    <img src="{{ Storage::url($unit->logos) }}" class="w-24 h-24 object-contain mx-auto -mt-20 bg-white rounded-full p-3 shadow">
                    <h2 class="mt-8 text-2xl font-bold">
                        {{ $unit->name }}
                    </h2>
                    <p class="mt-4 text-slate-600">
                        {{ Str::limit($unit->description,120) }}
                    </p>
                    <div class="grid grid-cols-2 gap-4 mt-8">
                        <div class="bg-blue-50 rounded-xl p-4">
                            <h3 class="text-2xl font-bold text-blue-900">
                                {{ $unit->students_count }}
                            </h3>
                            <p>
                                Siswa
                            </p>
                        </div>
                        <div class="bg-yellow-50 rounded-xl p-4">
                            <h3 class="text-2xl font-bold text-yellow-600">
                                {{ $unit->teachers_count }}
                            </h3>
                            <p>
                                Guru
                            </p>
                        </div>
                    </div>
                    <a href="{{ route('units.show',$unit) }}" class="block mt-8 bg-blue-900 text-white py-3 rounded-xl">
                    Lihat Detail
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection