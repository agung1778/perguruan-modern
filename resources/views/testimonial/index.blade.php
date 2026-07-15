@extends('layouts.app')


@section('content')


<section class="
max-w-7xl
mx-auto
px-6
py-20
">


<h1 class="
text-4xl
font-bold
text-blue-900
">

Testimoni

</h1>


<div class="
grid
md:grid-cols-3
gap-8
mt-10
">


@foreach($testimonials as $item)


<div class="
bg-white
rounded-2xl
shadow
p-6
">


<img
src="{{Storage::url($item->photo)}}"
class="
h-20
w-20
rounded-full
object-cover
">


<p class="mt-5">

{{$item->message}}

</p>



<h3 class="mt-5 font-bold">

{{$item->name}}

</h3>


</div>


@endforeach


</div>


</section>


@endsection