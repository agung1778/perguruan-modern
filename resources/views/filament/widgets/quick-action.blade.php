<x-filament::widget>
    <x-filament::section>
        <x-slot name="heading">
            Quick Actions
        </x-slot>

        <x-slot name="description">
            Kelola konten utama website perguruan dengan cepat.
        </x-slot>

        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5">
            {{-- Berita --}}
            <x-filament::button
                tag="a"
                href="{{ route('filament.' . filament()->getCurrentPanel()->getId() . '.resources.news-articles.create') }}"
                color="primary"
                icon="heroicon-o-newspaper"
                size="lg"
                class="justify-center"
            >
                <div class="flex flex-col text-left">
                    <span class="font-semibold">
                        Tambah Berita
                    </span>
                    <span class="text-xs opacity-80">
                        Buat artikel baru
                    </span>
                </div>
            </x-filament::button>

            {{-- Agenda --}}
            <x-filament::button
                tag="a"
                href="{{ route('filament.' . filament()->getCurrentPanel()->getId() . '.resources.agendas.create') }}"
                color="success"
                icon="heroicon-o-calendar-days"
                size="lg"
                class="justify-center"
            >
                <div class="flex flex-col text-left">
                    <span class="font-semibold">
                        Tambah Agenda
                    </span>
                    <span class="text-xs opacity-80">
                        Kelola kegiatan
                    </span>
                </div>
            </x-filament::button>
            {{-- Unit Pendidikan --}}
            <x-filament::button
                tag="a"
                href="{{ route('filament.' . filament()->getCurrentPanel()->getId() . '.resources.education-units.create') }}"
                color="warning"
                icon="heroicon-o-building-office"
                size="lg"
                class="justify-center"
            >
                <div class="flex flex-col text-left">
                    <span class="font-semibold">
                        Tambah Unit
                    </span>
                    <span class="text-xs opacity-80">
                        Sekolah / jenjang
                    </span>
                </div>
            </x-filament::button>
            {{-- Guru --}}
            <x-filament::button
                tag="a"
                href="{{ route('filament.' . filament()->getCurrentPanel()->getId() . '.resources.teachers.create') }}"
                color="danger"
                icon="heroicon-o-user-plus"
                size="lg"
                class="justify-center"
            >
                <div class="flex kolom text-left">
                    <span class="font-semibold">
                        Tambah Guru
                    </span>
                    <span class="text-xs opacity-80">
                        Data pengajar
                    </span>
                </div>
            </x-filament::button>
        </div>
    </x-filament::section>
</x-filament::widget>