<x-filament-panels::page>

    {{-- =====================================================
        HEADER DASHBOARD
    ====================================================== --}}

    <div class="mb-8">

        <h1 class="text-3xl font-bold tracking-tight text-emerald-900">
            Selamat Datang di Dashboard
        </h1>

        <p class="mt-2 text-sm text-gray-500">
            Kelola website, berita, galeri, agenda, dan data
            Perguruan Amaliah melalui panel administrasi.
        </p>

    </div>


    {{-- =====================================================
        DASHBOARD WIDGETS
    ====================================================== --}}

    <div class="space-y-8">

        {{ $this->getHeaderWidgets() }}

        {{ $this->getFooterWidgets() }}

    </div>

</x-filament-panels::page>