@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="bg-gradient-to-r from-blue-950 to-slate-900 py-24">

    <div class="max-w-7xl mx-auto px-6 text-center text-white">

        <span class="uppercase tracking-widest text-yellow-400 font-semibold">
            Kontak
        </span>

        <h1 class="mt-4 text-5xl font-bold">
            Hubungi Kami
        </h1>

        <p class="mt-6 text-lg text-slate-300 max-w-2xl mx-auto">
            Jangan ragu menghubungi Perguruan Modern apabila membutuhkan
            informasi mengenai sekolah, pendaftaran, ataupun kerja sama.
        </p>

    </div>

</section>

{{-- Contact Information --}}
<section class="bg-slate-50 py-24">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-12">

            {{-- Informasi --}}
            <div class="bg-white rounded-3xl shadow-lg p-10">

                <h2 class="text-3xl font-bold text-slate-900">
                    Informasi Kontak
                </h2>

                <div class="mt-10 space-y-8">

                    <div>

                        <h3 class="font-semibold text-blue-900">
                            📍 Alamat
                        </h3>

                        <p class="mt-2 text-slate-600 leading-7">
                            {{ $website?->address ?? 'Alamat belum tersedia.' }}
                        </p>

                    </div>

                    <div>

                        <h3 class="font-semibold text-blue-900">
                            ☎ Telepon
                        </h3>

                        <p class="mt-2 text-slate-600">
                            {{ $website?->phone ?? '-' }}
                        </p>

                    </div>

                    <div>

                        <h3 class="font-semibold text-blue-900">
                            ✉ Email
                        </h3>

                        <p class="mt-2 text-slate-600">
                            {{ $website?->email ?? '-' }}
                        </p>

                    </div>

                </div>

            </div>

            {{-- Google Maps --}}
            <div class="overflow-hidden bg-white rounded-3xl shadow-lg">

                @if(!empty($website?->google_maps))

                    {!! $website->google_maps !!}

                @else

                    <div class="flex items-center justify-center h-full min-h-[420px] bg-slate-200">

                        <div class="text-center">

                            <h3 class="text-xl font-semibold text-slate-700">
                                Google Maps
                            </h3>

                            <p class="mt-3 text-slate-500">
                                Lokasi belum tersedia.
                            </p>

                        </div>

                    </div>

                @endif

            </div>

        </div>

    </div>

</section>

@endsection