<x-filament::widget>

<x-filament::section>

<x-slot name="heading">

Quick Action

</x-slot>

<div class="grid grid-cols-2 gap-4">

<x-filament::button
tag="a"
href="{{ route('filament.admin.resources.news-articles.create') }}"
>

Tambah Berita

</x-filament::button>

<x-filament::button
tag="a"
href="{{ route('filament.admin.resources.agendas.create') }}"
>

Tambah Agenda

</x-filament::button>

<x-filament::button
tag="a"
href="{{ route('filament.admin.resources.education-units.create') }}"
>

Tambah Unit

</x-filament::button>

<x-filament::button
tag="a"
href="{{ route('filament.admin.resources.teachers.create') }}"
>

Tambah Guru

</x-filament::button>

</div>

</x-filament::section>

</x-filament::widget>