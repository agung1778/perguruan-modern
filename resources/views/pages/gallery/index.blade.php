@extends('layouts.app')


@section('content')


<section class="bg-blue-950 py-24">


<div class="max-w-7xl mx-auto px-6 text-center text-white">


<h1 class="text-5xl font-bold">

Galeri Perguruan

</h1>


<p class="mt-5 text-slate-300">

Dokumentasi kegiatan dan aktivitas perguruan

</p>


</div>


</section>





<section class="py-24 bg-slate-50">


<div class="max-w-7xl mx-auto px-6">


<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">


@foreach($albums as $album)



<div class="bg-white rounded-3xl shadow overflow-hidden">


@php

$cover = $album->photos->first();

@endphp



@if($cover)


<img

src="{{ Storage::url($cover->photo) }}"

class="w-full h-64 object-cover"

alt="{{ $album->title }}"

>


@else


<div class="h-64 bg-slate-200 flex items-center justify-center">

Belum ada foto

</div>


@endif




<div class="p-8">


<h2 class="text-2xl font-bold">

{{ $album->title }}

</h2>


<p class="mt-3 text-slate-500">

{{ $album->photos_count }} Foto

</p>




<a

href="{{ route('gallery.show',$album) }}"

class="inline-block mt-6 text-blue-900 font-semibold"

>

Lihat Galeri →

</a>


</div>


</div>



@endforeach


</div>



<div class="mt-12">

{{ $albums->links() }}

</div>


</div>


</section>


@endsection