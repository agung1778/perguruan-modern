@extends('layouts.app')

@section('content')

    {{-- Hero --}}
    <section class="bg-gradient-to-r from-blue-950 to-slate-900 py-24">
        <div class="max-w-7xl mx-auto px-6 text-center text-white">
            <span class="text-yellow-400 font-semibold uppercase tracking-widest">
                Testimoni
            </span>

            <h1 class="mt-4 text-5xl font-bold">
                Apa Kata Mereka?
            </h1>

            <p class="mt-6 max-w-3xl mx-auto text-lg text-slate-300">
                Berbagai pengalaman dan kesan dari siswa, alumni, orang tua, maupun
                masyarakat terhadap Perguruan Modern.
            </p>
        </div>
    </section>

    {{-- Testimonials --}}
    <section class="bg-slate-50 py-24">
        <div class="max-w-7xl mx-auto px-6">

            @if($testimonials->count())

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

                    @foreach($testimonials as $item)

                        <div
                            class="group bg-white rounded-3xl p-8 shadow-lg border border-slate-100 transition duration-300 hover:-translate-y-2 hover:shadow-2xl">

                            <div class="flex items-center gap-5">

                                @if($item->photo)

                                    <img
                                        src="{{ Storage::url($item->photo) }}"
                                        alt="{{ $item->name }}"
                                        class="w-20 h-20 rounded-full object-cover ring-4 ring-blue-100"
                                    >

                                @else

                                    <div class="flex items-center justify-center w-20 h-20 rounded-full bg-blue-100">

                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-10 h-10 text-blue-700"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor">

                                            <path stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M5.121 17.804A9 9 0 1118.879 17.8M15 11a3 3 0 11-6 0 3 3 0 016 0z" />

                                        </svg>

                                    </div>

                                @endif

                                <div>

                                    <h3 class="text-xl font-bold text-slate-800">
                                        {{ $item->name }}
                                    </h3>

                                    @if(!empty($item->position))
                                        <p class="text-sm text-blue-900">
                                            {{ $item->position }}
                                        </p>
                                    @endif

                                </div>

                            </div>

                            <div class="mt-8">

                                <svg class="w-10 h-10 text-yellow-400 mb-4"
                                    fill="currentColor"
                                    viewBox="0 0 24 24">

                                    <path
                                        d="M7.17 6A5.001 5.001 0 002 11v7h7v-7H5.08A3.001 3.001 0 017.17 6zM19.17 6A5.001 5.001 0 0014 11v7h7v-7h-3.92A3.001 3.001 0 0119.17 6z" />

                                </svg>

                                <p class="leading-8 text-slate-600 italic">
                                    "{{ $item->message }}"
                                </p>

                            </div>

                        </div>

                    @endforeach

                </div>

                <div class="flex justify-center mt-16">
                    {{ $testimonials->links() }}
                </div>

            @else

                <div class="py-20 text-center">

                    <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-blue-100">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10 text-blue-900"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M8 10h.01M16 10h.01M9 16h6M12 3C7.03 3 3 6.582 3 11c0 2.17.972 4.136 2.55 5.595L5 21l4.75-1.585A10.09 10.09 0 0012 19c4.97 0 9-3.582 9-8s-4.03-8-9-8z" />

                        </svg>

                    </div>

                    <h2 class="mt-6 text-2xl font-bold text-slate-800">
                        Belum Ada Testimoni
                    </h2>

                    <p class="mt-3 text-slate-500">
                        Testimoni akan ditampilkan setelah ditambahkan melalui dashboard administrator.
                    </p>

                </div>

            @endif

        </div>
    </section>

@endsection