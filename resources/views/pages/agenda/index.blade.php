@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="bg-gradient-to-r from-blue-950 to-slate-900 py-24">

    <div class="max-w-7xl mx-auto px-6 text-center text-white">

        <h1 class="text-5xl font-bold">
            Agenda Kegiatan
        </h1>

        <p class="mt-5 text-lg text-slate-300">
            Informasi kegiatan dan agenda Perguruan Modern.
        </p>

    </div>

</section>

{{-- Agenda --}}
<section class="bg-slate-50 py-24">

    <div class="max-w-7xl mx-auto px-6">

        @if($agendas->count())

            <div class="space-y-8">

                @foreach($agendas as $item)

                    <article class="bg-white rounded-3xl shadow-lg p-8 flex flex-col md:flex-row gap-8 hover:shadow-xl transition">

                        {{-- Tanggal --}}
                        <div class="flex flex-col items-center justify-center w-full md:w-36 h-36 rounded-2xl bg-blue-900 text-white">

                            <span class="text-5xl font-bold">
                                {{ \Carbon\Carbon::parse($item->date)->format('d') }}
                            </span>

                            <span class="mt-2 text-sm uppercase">
                                {{ \Carbon\Carbon::parse($item->date)->translatedFormat('M Y') }}
                            </span>

                        </div>

                        {{-- Content --}}
                        <div class="flex-1">

                            <h2 class="text-2xl font-bold text-slate-800">
                                {{ $item->title }}
                            </h2>

                            <p class="mt-4 leading-8 text-slate-600">
                                {{ Str::limit(strip_tags($item->description), 200) }}
                            </p>

                            @if(!empty($item->location))

                                <div class="mt-5 text-sm text-slate-500">
                                    📍 {{ $item->location }}
                                </div>

                            @endif

                            <a
                                href="{{ route('agenda.show', ['agenda' => $item]) }}"
                                class="inline-flex items-center mt-6 font-semibold text-blue-900 hover:text-yellow-500 transition"
                            >
                                Lihat Detail
                                <span class="ml-2">→</span>
                            </a>

                        </div>

                    </article>

                @endforeach

            </div>

            <div class="flex justify-center mt-14">

                {{ $agendas->links() }}

            </div>

        @else

            <div class="py-20 text-center">

                <h2 class="text-2xl font-semibold text-slate-700">
                    Belum ada agenda.
                </h2>

                <p class="mt-3 text-slate-500">
                    Agenda kegiatan akan ditampilkan setelah ditambahkan oleh admin.
                </p>

            </div>

        @endif

    </div>

</section>

@endsection