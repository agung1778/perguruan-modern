@extends('layouts.app')


@section('content')


<section class="
max-w-7xl
mx-auto
px-6
py-20
">


<h1 class="text-4xl font-bold text-blue-900">

Galeri Kegiatan

</h1>



<div class="grid md:grid-cols-3 gap-8 mt-10">


@foreach($albums as $album)


@foreach($album->photos as $photo)


<img
src="{{Storage::url($photo->photo)}}"
class="
rounded-2xl
shadow
h-64
w-full
object-cover
">


@endforeach


@endforeach


</div>


</section>


@endsection