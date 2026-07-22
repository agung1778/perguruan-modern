<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        {{-- Header --}}
        <div class="text-center">
            <span class="text-yellow-600 font-semibold uppercase tracking-wider">
                Agenda
            </span>
            <h2 class="text-4xl md:text-5xl font-bold mt-4 text-slate-900">
                Kegiatan Mendatang
            </h2>
            <p class="mt-4 text-slate-600">
                Informasi kegiatan terbaru Perguruan Amaliah.
            </p>
        </div>
        @if(isset($agendas) && $agendas->count())
            <div class="space-y-6 mt-16">
                @foreach($agendas as $agenda)
                    <div class="bg-slate-50 rounded-3xl shadow-sm hover:shadow-lg transition p-8 flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                        <div>
                            <h3 class="font-bold text-xl text-slate-900">
                                {{ $agenda->title }}
                            </h3>
                            @if($agenda->date)
                                <p class="mt-3 text-slate-500 flex items-center gap-2">
                                    <span>
                                        📅
                                    </span>
                                    {{ \Carbon\Carbon::parse($agenda->date)->translatedFormat('d F Y') }}
                                </p>
                            @endif
                            @if($agenda->description)
                                <p class="mt-3 text-slate-600">
                                    {{ Str::limit($agenda->description,120) }}
                                </p>
                            @endif
                        </div>
                        <a href="{{ route('agenda.show',$agenda->slug ?? $agenda->id) }}"class="inline-flex items-center bg-blue-900 hover:bg-yellow-500 hover:text-slate-900 text-white px-6 py-3 rounded-xl font-semibold transition">
                            Detail →
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <div class="mt-16 text-center text-slate-500">
                Belum ada agenda.
            </div>
        @endif
    </div>
</section>