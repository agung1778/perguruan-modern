<section class="py-24">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center">

            <span class="text-blue-900 font-semibold">
                Agenda
            </span>

            <h2 class="text-4xl font-bold mt-4">
                Kegiatan Mendatang
            </h2>

        </div>

        <div class="space-y-6 mt-16">

            @foreach($agendas as $agenda)

                <div class="bg-white rounded-2xl shadow p-8 flex justify-between items-center">

                    <div>

                        <h3 class="font-bold text-xl">

                            {{ $agenda->title }}

                        </h3>

                        <p class="mt-3 text-slate-500">

                            {{ \Carbon\Carbon::parse($agenda->date)->translatedFormat('d F Y') }}

                        </p>

                    </div>

                    <a
                        href="{{ route('agenda.index') }}"
                        class="bg-blue-900 text-white px-5 py-3 rounded-xl"
                    >
                        Detail
                    </a>

                </div>

            @endforeach

        </div>

    </div>

</section>