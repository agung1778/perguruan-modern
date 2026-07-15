@extends('layouts.app')


@section('content')


<section class="max-w-7xl mx-auto px-6 py-20">


<h1 class="
text-4xl
font-bold
text-blue-900
">

Berita Terbaru

</h1>



<div class="
grid
md:grid-cols-3
gap-8
mt-10
">


@foreach($news as $item)


<div class="
bg-white
rounded-2xl
shadow
overflow-hidden
">


<img
src="{{Storage::url($item->thumbnail)}}"
class="
h-52
w-full
object-cover
">


<div class="p-6">


<h2 class="
font-bold
text-xl
">

{{$item->title}}

</h2>



<a
href="/berita/{{$item->id}}"
class="
text-blue-900
mt-5
inline-block
">

Baca selengkapnya →

</a>


</div>


</div>


@endforeach


</div>


<div class="mt-10">

{{$news->links()}}

</div>


</section>


@endsection