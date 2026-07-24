<x-filament-panels::page>

    @if($record)

        <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-900">

            <div class="mb-6">
                <h2 class="text-xl font-bold text-gray-950 dark:text-white">
                    Informasi Tentang Perguruan
                </h2>

                <p class="mt-1 text-sm text-gray-500">
                    Kelola informasi profil, sejarah, visi, dan misi Perguruan.
                </p>
            </div>

            {{ $this->form }}

        </div>

    @else

        <div class="rounded-xl border border-dashed border-gray-300 bg-white p-8 text-center dark:border-gray-700 dark:bg-gray-900">

            <h2 class="text-xl font-bold text-gray-950 dark:text-white">
                Data Tentang Perguruan Belum Ada
            </h2>

            <p class="mx-auto mt-2 max-w-xl text-sm text-gray-500">
                Silakan buat informasi Tentang Perguruan untuk pertama kali.
            </p>

        </div>

    @endif

</x-filament-panels::page>