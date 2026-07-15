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

Agenda Kegiatan

</h1>



<div class="mt-10 space-y-5">


@foreach($agendas as $agenda)


<div class="
bg-white
shadow
rounded-xl
p-6
">


<h2 class="font-bold text-xl">

{{$agenda->title}}

</h2>


<p class="text-gray-500">

{{\Carbon\Carbon::parse($agenda->date)->format('d M Y')}}

</p>


<p class="mt-3">

{{$agenda->description}}

</p>


</div>


@endforeach


</div>


</section>


@endsection