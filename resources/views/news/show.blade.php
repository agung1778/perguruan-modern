@extends('layouts.app')


@section('content')


<section class="
max-w-5xl
mx-auto
px-6
py-20
">


<h1 class="
text-4xl
font-bold
text-blue-900
">

{{$news->title}}

</h1>


<img
src="{{Storage::url($news->thumbnail)}}"
class="
mt-8
rounded-2xl
w-full
"
>



<div class="
mt-10
prose
max-w-none
">

{!!$news->content!!}

</div>



</section>


@endsection