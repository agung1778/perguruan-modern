<x-filament-widgets::widget>
    <x-filament::section>

        <div class="flex items-center justify-between">

            <div>
                <h2 class="text-lg font-bold text-gray-950 dark:text-white">
                    Aksi Cepat
                </h2>

                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                    Akses cepat untuk mengelola website.
                </p>
            </div>

        </div>


        <div class="mt-6 grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-4">

            @foreach ($this->getActions() as $action)

                <a
                    href="{{ $action['url'] }}"
                    wire:navigate
                    class="group flex items-center gap-4 rounded-xl border border-gray-200 bg-white p-4 transition duration-200 hover:border-emerald-500 hover:bg-emerald-50 dark:border-gray-700 dark:bg-gray-900 dark:hover:border-emerald-500 dark:hover:bg-emerald-950/20"
                >

                    <div
                        class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-emerald-50 text-emerald-600 dark:bg-emerald-950/40 dark:text-emerald-400"
                    >

                        @svg(
                            $action['icon'],
                            'h-5 w-5'
                        )

                    </div>


                    <div class="min-w-0 flex-1">

                        <div class="text-sm font-semibold text-gray-950 dark:text-white">
                            {{ $action['label'] }}
                        </div>

                        <div class="mt-1 text-xs text-gray-500 dark:text-gray-400">
                            {{ $action['description'] }}
                        </div>

                    </div>

                </a>

            @endforeach

        </div>

    </x-filament::section>
</x-filament-widgets::widget>