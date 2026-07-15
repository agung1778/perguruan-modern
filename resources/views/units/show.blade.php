@extends('layouts.app')


@section('content')


<section class="bg-blue-950 py-20 text-white">

<div class="max-w-7xl mx-auto px-6">


<h1 class="text-4xl font-bold">

{{$unit->name}}

</h1>


</div>

</section>



<section class="
max-w-5xl
mx-auto
px-6
py-20
">


<div class="
bg-white
rounded-3xl
shadow
p-10
">


<div class="flex gap-5 items-center">


<img
src="{{Storage::url($unit->logo)}}"
class="h-24"
>


<h2 class="
text-3xl
font-bold
text-blue-900
">

{{$unit->name}}

</h2>


</div>



<p class="
mt-8
text-gray-700
leading-relaxed
">

{{$unit->description}}

</p>



@if($unit->website)

<a
href="{{$unit->website}}"
target="_blank"
class="
inline-block
mt-8
bg-yellow-500
px-6
py-3
rounded-xl
">

Website Unit

</a>

@endif



</div>


</section>


@endsection