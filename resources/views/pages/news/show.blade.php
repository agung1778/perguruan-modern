@extends('layouts.app')


@section('content')


<section class="bg-blue-950 py-20">


<div class="max-w-5xl mx-auto px-6 text-white">


<h1 class="text-4xl md:text-5xl font-bold">

{{ $news->title }}

</h1>


<p class="mt-5 text-slate-300">

{{ $news->created_at->translatedFormat('d F Y') }}

</p>


</div>


</section>





<section class="py-20">


<div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-3 gap-12">



<article class="lg:col-span-2">


<img

src="{{ Storage::url($news->thumbnail) }}"

class="rounded-3xl w-full"

>



<div class="mt-10 prose max-w-none">


{!! $news->content !!}


</div>



</article>





<aside>


<div class="bg-slate-50 rounded-3xl p-8">


<h3 class="text-xl font-bold">

Berita Terbaru

</h3>



<div class="mt-6 space-y-5">


@foreach($latest as $item)


<a

href="{{ route('news.show',$item) }}"

class="block"

>


<p class="font-semibold">

{{ $item->title }}

</p>


<small class="text-slate-500">

{{ $item->created_at->format('d M Y') }}

</small>


</a>


@endforeach



</div>


</div>


</aside>



</div>


</section>


@endsection