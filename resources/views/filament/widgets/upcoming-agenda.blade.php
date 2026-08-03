<x-filament-widgets::widget>
    <x-filament::section>
        {{-- Header --}}
        <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between mb-6">
            <div>
                <h2 class="text-xl font-bold tracking-tight text-gray-950 dark:text-white">
                    Agenda Mendatang
                </h2>

                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Daftar agenda dan kegiatan yang akan datang.
                </p>
            </div>

            <div class="flex items-center gap-2">
                <x-filament::icon
                    icon="heroicon-o-calendar-days"
                    class="w-6 h-6 text-primary-600 dark:text-primary-400"
                />
            </div>
        </div>

        @php
            $agendas = $this->getAgendas();
        @endphp

        @if ($agendas->count())
            <div class="space-y-4">
                @foreach ($agendas as $agenda)
                    <div
                        class="group flex flex-col gap-4 rounded-xl border border-gray-200 bg-white p-4 transition hover:border-primary-300 hover:shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:hover:border-primary-600 sm:flex-row sm:items-center"
                    >
                        {{-- Tanggal --}}
                        <div class="flex h-16 w-16 shrink-0 flex-col items-center justify-center rounded-xl bg-primary-50 text-primary-700 dark:bg-primary-900/30 dark:text-primary-400">
                            <span class="text-xs font-semibold uppercase">
                                {{ \Carbon\Carbon::parse($agenda->date)->translatedFormat('M') }}
                            </span>

                            <span class="text-2xl font-bold leading-none">
                                {{ \Carbon\Carbon::parse($agenda->date)->format('d') }}
                            </span>
                        </div>

                        {{-- Informasi Agenda --}}
                        <div class="min-w-0 flex-1">
                            <h3 class="truncate text-base font-semibold text-gray-950 dark:text-white">
                                {{ $agenda->title }}
                            </h3>

                            <div class="mt-1 flex flex-wrap items-center gap-x-4 gap-y-1 text-sm text-gray-500 dark:text-gray-400">
                                {{-- Tanggal --}}
                                <span class="flex items-center gap-1">
                                    <x-filament::icon
                                        icon="heroicon-m-calendar"
                                        class="h-4 w-4"
                                    />

                                    {{ \Carbon\Carbon::parse($agenda->date)->translatedFormat('d F Y') }}
                                </span>

                                {{-- Waktu --}}
                                @if (!empty($agenda->time))
                                    <span class="flex items-center gap-1">
                                        <x-filament::icon
                                            icon="heroicon-m-clock"
                                            class="h-4 w-4"
                                        />

                                        {{ $agenda->time }}
                                    </span>
                                @endif

                                {{-- Lokasi --}}
                                @if (!empty($agenda->location))
                                    <span class="flex items-center gap-1">
                                        <x-filament::icon
                                            icon="heroicon-m-map-pin"
                                            class="h-4 w-4"
                                        />

                                        {{ $agenda->location }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- Status --}}
                        <div class="shrink-0">
                            <span class="inline-flex items-center rounded-full bg-primary-50 px-3 py-1 text-xs font-medium text-primary-700 dark:bg-primary-900/30 dark:text-primary-400">
                                Mendatang
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            {{-- Empty State --}}
            <div class="flex flex-col items-center justify-center rounded-xl border border-dashed border-gray-300 px-6 py-12 text-center dark:border-gray-700">
                <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-gray-100 dark:bg-gray-800">
                    <x-filament::icon
                        icon="heroicon-o-calendar-days"
                        class="h-7 w-7 text-gray-400"
                    />
                </div>

                <h3 class="text-base font-semibold text-gray-950 dark:text-white">
                    Belum Ada Agenda
                </h3>

                <p class="mt-1 max-w-md text-sm text-gray-500 dark:text-gray-400">
                    Saat ini belum ada agenda atau kegiatan yang akan datang.
                </p>
            </div>
        @endif
    </x-filament::section>
</x-filament-widgets::widget>
