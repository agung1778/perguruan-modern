@extends('layouts.app')


@section('content')


<section class="bg-blue-950 py-24">


<div class="max-w-7xl mx-auto px-6 text-center text-white">


<h1 class="text-5xl font-bold">

Agenda Kegiatan

</h1>


<p class="mt-5 text-slate-300">

Informasi kegiatan dan agenda perguruan

</p>


</div>


</section>





<section class="py-24 bg-slate-50">


<div class="max-w-7xl mx-auto px-6">


<div class="space-y-8">



@foreach($agendas as $item)



<div class="bg-white rounded-3xl shadow p-8 flex flex-col md:flex-row gap-8">



{{-- Tanggal --}}

<div class="bg-blue-900 text-white rounded-2xl w-full md:w-36 h-36 flex flex-col justify-center items-center">


<span class="text-4xl font-bold">

{{ $item->date->format('d') }}

</span>


<span>

{{ $item->date->translatedFormat('M Y') }}

</span>


</div>





<div class="flex-1">


<h2 class="text-2xl font-bold">

{{ $item->title }}

</h2>



<p class="mt-4 text-slate-600">

{{ Str::limit($item->description,200) }}

</p>




<div class="mt-6 flex gap-5 text-sm text-slate-500">


@if($item->location)

<span>

📍 {{ $item->location }}

</span>

@endif


</div>




<a

href="{{ route('agenda.show',$item) }}"

class="inline-block mt-6 text-blue-900 font-semibold"

>

Lihat Detail →

</a>



</div>


</div>



@endforeach



</div>



<div class="mt-12">

{{ $agendas->links() }}

</div>



</div>


</section>



@endsection