@extends('layouts.app')


@section('content')


<section class="bg-blue-950 py-20">


<div class="max-w-7xl mx-auto px-6 text-white">


<h1 class="text-5xl font-bold">

{{ $album->title }}

</h1>


@if($album->description)

<p class="mt-5 text-slate-300">

{{ $album->description }}

</p>

@endif


</div>


</section>





<section class="py-24">


<div class="max-w-7xl mx-auto px-6">


<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">



@foreach($album->photos as $photo)


<div

class="rounded-2xl overflow-hidden shadow group"

>


<img

src="{{ Storage::url($photo->photo) }}"

class="w-full h-72 object-cover group-hover:scale-110 transition duration-500"

>


</div>



@endforeach



</div>


</div>


</section>



@endsection