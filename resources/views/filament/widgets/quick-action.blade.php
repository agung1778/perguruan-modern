<x-filament-widgets::widget>

    <x-filament::section>

        {{-- =====================================================
            HEADER
        ====================================================== --}}

        <x-slot name="heading">
            Quick Actions
        </x-slot>

        <x-slot name="description">
            Kelola konten utama website Perguruan Amaliah dengan cepat.
        </x-slot>


        {{-- =====================================================
            ACTIONS
        ====================================================== --}}

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">

            @foreach($this->getActions() as $action)

                <a
                    href="{{ $action['url'] }}"
                    class="group flex items-center gap-4 rounded-2xl border border-gray-200 bg-white p-5 transition duration-200 hover:-translate-y-0.5 hover:border-emerald-300 hover:bg-emerald-50/50 hover:shadow-md dark:border-gray-700 dark:bg-gray-900 dark:hover:border-emerald-700 dark:hover:bg-emerald-950/20"
                >

                    {{-- Icon --}}

                    <div
                        class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700 transition group-hover:bg-emerald-600 group-hover:text-white dark:bg-emerald-950 dark:text-emerald-400"
                    >

                        <x-dynamic-component
                            :component="$action['icon']"
                            class="h-6 w-6"
                        />

                    </div>


                    {{-- Text --}}

                    <div class="min-w-0">

                        <h3
                            class="truncate text-sm font-semibold text-gray-950 dark:text-white"
                        >
                            {{ $action['label'] }}
                        </h3>

                        <p
                            class="mt-1 text-xs text-gray-500 dark:text-gray-400"
                        >
                            {{ $action['description'] }}
                        </p>

                    </div>


                    {{-- Arrow --}}

                    <x-heroicon-m-chevron-right
                        class="ml-auto h-5 w-5 shrink-0 text-gray-400 transition group-hover:translate-x-1 group-hover:text-emerald-600"
                    />

                </a>

            @endforeach

        </div>

    </x-filament::section>

</x-filament-widgets::widget>