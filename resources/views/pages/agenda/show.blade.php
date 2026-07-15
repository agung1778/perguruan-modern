@extends('layouts.app')


@section('content')


<section class="bg-blue-950 py-20">


<div class="max-w-5xl mx-auto px-6 text-white">


<h1 class="text-4xl font-bold">

{{ $agenda->title }}

</h1>


<p class="mt-5 text-slate-300">

{{ $agenda->date->translatedFormat('d F Y') }}

</p>


</div>


</section>





<section class="py-20">


<div class="max-w-5xl mx-auto px-6">


<div class="bg-white rounded-3xl shadow p-10">


<div class="grid md:grid-cols-2 gap-8 mb-10">


<div>


<h3 class="font-bold text-blue-900">

Tanggal

</h3>


<p>

{{ $agenda->date->translatedFormat('d F Y') }}

</p>


</div>




<div>


<h3 class="font-bold text-blue-900">

Lokasi

</h3>


<p>

{{ $agenda->location ?? '-' }}

</p>


</div>


</div>




<div class="prose max-w-none">


{!! $agenda->description !!}


</div>



</div>


</div>


</section>



@endsection