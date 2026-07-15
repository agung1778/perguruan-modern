@extends('layouts.app')

@section('content')
    <section class="max-w-5xl mx-auto px-6 py-20">
        <h1 class="text-4xl font-bold text-blue-900">Kontak Kami</h1>

        <div class="mt-10 bg-white rounded-2xl shadow p-8">
            <p>Alamat: {{ $setting?->address }}</p>
            <p class="mt-3">Telepon: {{ $setting?->phone }}</p>
            <p class="mt-3">Email: {{ $setting?->email }}</p>
        </div>
    </section>
@endsection