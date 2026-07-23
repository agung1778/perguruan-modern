<x-filament-widgets::widget>

    <x-filament::section>

        {{-- Header --}}
        <x-slot name="heading">
            Berita Terbaru
        </x-slot>


        {{-- Content --}}
        <div class="divide-y divide-gray-100 dark:divide-gray-800">

            @forelse($this->getLatestNews() as $news)

                <div class="flex items-center justify-between gap-4 py-4 first:pt-0 last:pb-0">

                    {{-- News Information --}}
                    <div class="min-w-0">

                        <h3 class="truncate text-sm font-semibold text-gray-950 dark:text-white">
                            {{ $news->title }}
                        </h3>

                        <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">

                            {{ $news->created_at?->translatedFormat('d F Y') ?? '-' }}

                        </p>

                    </div>


                    {{-- Status / Arrow --}}
                    <div class="shrink-0">

                        <x-heroicon-m-chevron-right
                            class="h-5 w-5 text-gray-400"
                        />

                    </div>

                </div>

            @empty

                <div class="py-8 text-center">

                    <x-heroicon-o-newspaper
                        class="mx-auto h-10 w-10 text-gray-400"
                    />

                    <p class="mt-3 text-sm text-gray-500">
                        Belum ada berita.
                    </p>

                </div>

            @endforelse

        </div>

    </x-filament::section>

</x-filament-widgets::widget>