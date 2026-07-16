<x-filament::widget>

    <x-filament::section>

        <x-slot name="heading">

            Agenda Mendatang

        </x-slot>

        <div class="space-y-4">

            @foreach(
                \App\Models\Agenda::orderBy('date')
                ->take(5)
                ->get()
                as $agenda
            )

                <div class="flex justify-between">

                    <div>

                        <p class="font-semibold">

                            {{ $agenda->title }}

                        </p>

                        <small>

                            {{ $agenda->location }}

                        </small>

                    </div>

                    <div>

                        {{ $agenda->date->format('d M') }}

                    </div>

                </div>

            @endforeach

        </div>

    </x-filament::section>

</x-filament::widget>