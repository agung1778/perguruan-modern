@extends('layouts.app')


@section('content')


<section class="bg-blue-950 py-24">


<div class="max-w-7xl mx-auto px-6 text-center text-white">


<h1 class="text-5xl font-bold">

Berita Perguruan

</h1>


<p class="mt-5 text-slate-300">

Informasi dan kegiatan terbaru

</p>


</div>


</section>





<section class="py-24 bg-slate-50">


<div class="max-w-7xl mx-auto px-6">



<div class="grid lg:grid-cols-4 gap-10">



<div class="lg:col-span-3">


<div class="grid md:grid-cols-2 gap-8">



@foreach($news as $item)


<article class="bg-white rounded-3xl shadow overflow-hidden">


<img

src="{{ Storage::url($item->thumbnail) }}"

class="w-full h-56 object-cover"

>



<div class="p-7">


<p class="text-sm text-slate-500">

{{ $item->created_at->translatedFormat('d F Y') }}

</p>



<h2 class="mt-3 text-xl font-bold">


{{ $item->title }}


</h2>



<p class="mt-4 text-slate-600">


{{ Str::limit(strip_tags($item->content),120) }}


</p>



<a

href="{{ route('news.show',$item) }}"

class="inline-block mt-6 text-blue-900 font-semibold"

>

Baca Selengkapnya →

</a>



</div>


</article>


@endforeach



</div>


<div class="mt-12">

{{ $news->links() }}

</div>



</div>





{{-- Sidebar --}}

<div>


<div class="bg-white rounded-3xl p-8 shadow">


<h3 class="font-bold text-xl">

Kategori

</h3>


<ul class="mt-6 space-y-3">


@foreach($categories as $category)


<li>

<a

href="#"

class="text-slate-600 hover:text-blue-900"

>

{{ $category->name }}

</a>

</li>


@endforeach


</ul>


</div>


</div>



</div>


</div>


</section>



@endsection