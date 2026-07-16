<x-filament::widget>

<x-filament::section>

<x-slot name="heading">

Berita Terbaru

</x-slot>

<div class="space-y-4">

@foreach(

\App\Models\NewsArticle::latest()

->take(5)

->get()

as $news

)

<div>

<p class="font-semibold">

{{ $news->title }}

</p>

<small>

{{ $news->created_at->format('d M Y') }}

</small>

</div>

@endforeach

</div>

</x-filament::section>

</x-filament::widget>