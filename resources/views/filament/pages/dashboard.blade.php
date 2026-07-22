<x-filament-panels::page>

    <div class="mb-8">

        <h1 class="text-3xl font-bold text-blue-900">
            Selamat Datang di Dashboard Perguruan Amaliah
        </h1>

        <p class="mt-2 text-gray-500">
            Kelola website, berita, galeri, agenda, dan data sekolah.
        </p>

    </div>


    {{ $this->getColumns() }}


</x-filament-panels::page>