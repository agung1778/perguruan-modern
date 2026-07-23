<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            Agenda Mendatang
        </x-slot>

        @php
            $agendas = $this->getAgendas();
        @endphp

        @if ($agendas->isNotEmpty())

            <div class="divide-y divide-gray-200 dark:divide-gray-700">

                @foreach ($agendas as $agenda)

                    <div class="flex items-center justify-between gap-6 py-4 first:pt-0 last:pb-0">

                        {{-- Informasi Agenda --}}
                        <div class="min-w-0">

                            <h3 class="font-semibold text-gray-950 dark:text-white truncate">
                                {{ $agenda->title }}
                            </h3>

                            @if ($agenda->location)
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                    📍 {{ $agenda->location }}
                                </p>
                            @endif

                        </div>

                        {{-- Tanggal --}}
                        <div class="shrink-0 text-right">

                            <p class="text-sm font-semibold text-primary-600 dark:text-primary-400">
                                {{ $agenda->date->translatedFormat('d M Y') }}
                            </p>

                        </div>

                    </div>

                @endforeach

            </div>

        @else

            <div class="py-8 text-center">

                <div class="text-4xl mb-3">
                    📅
                </div>

                <p class="text-sm font-medium text-gray-950 dark:text-white">
                    Tidak ada agenda mendatang
                </p>

                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                    Belum ada kegiatan yang dijadwalkan.
                </p>

            </div>

        @endif

    </x-filament::section>
</x-filament-widgets::widget>