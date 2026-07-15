@extends('layouts.app')


@section('content')


<section class="bg-blue-950 py-20 text-white">

<div class="max-w-7xl mx-auto px-6">

<h1 class="text-4xl font-bold">
Unit Pendidikan
</h1>

<p class="mt-3 text-gray-300">
Pilihan jenjang pendidikan Perguruan Modern
</p>

</div>

</section>



<section class="max-w-7xl mx-auto px-6 py-20">


<div class="grid md:grid-cols-3 gap-8">


@foreach($units as $unit)


<div class="
bg-white
rounded-2xl
shadow
overflow-hidden
hover:-translate-y-2
transition
">


<img
src="{{Storage::url($unit->photo)}}"
class="
w-full
h-56
object-cover
">


<div class="p-6">


<img
src="{{Storage::url($unit->logo)}}"
class="
h-16
mb-4
">


<h2 class="
text-xl
font-bold
text-blue-900
">

{{$unit->name}}

</h2>


<p class="
mt-3
text-gray-600
line-clamp-3
">

{{$unit->description}}

</p>



<a
href="/unit/{{$unit->id}}"
class="
inline-block
mt-5
bg-blue-900
text-white
px-5
py-2
rounded-xl
">

Detail

</a>


</div>


</div>


@endforeach


</div>


</section>


@endsection