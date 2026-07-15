@extends('layouts.app')

@section('content')
    <section class="bg-blue-950 text-white py-28">
        <div class="max-w-7xl mx-auto px-6">
            <h1 class="text-5xl font-bold">
                {{ $setting?->school_name ?? 'Perguruan Modern' }}
            </h1>
            <p class="mt-5 text-xl text-gray-300">
                Membangun pendidikan berkualitas untuk generasi masa depan.
            </p>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-20">
        <h2 class="text-3xl font-bold text-blue-900">Statistik</h2>

        <div class="grid md:grid-cols-4 gap-6 mt-10">
            @foreach ($stats as $key => $value)
                <div class="bg-white rounded-2xl shadow p-8 text-center">
                    <h3 class="text-4xl font-bold text-blue-900">
                        {{ $value }}
                    </h3>
                    <p class="mt-2 capitalize">{{ $key }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-20">
        <h2 class="text-3xl font-bold text-blue-900">Unit Pendidikan</h2>

        <div class="grid md:grid-cols-5 gap-6 mt-10">
            @foreach ($units as $unit)
                <div class="bg-white rounded-2xl shadow p-6 text-center">
                    <img src="{{ Storage::url($unit->logo) }}" class="h-20 mx-auto object-contain" alt="{{ $unit->name }}">
                    <h3 class="font-bold mt-5">{{ $unit->name }}</h3>
                </div>
            @endforeach
        </div>
    </section>
@endsection
