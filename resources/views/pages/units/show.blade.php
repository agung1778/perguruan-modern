@extends('layouts.app')


@section('content')


<section class="bg-blue-950 py-24">

<div class="max-w-7xl mx-auto px-6 text-white">


<h1 class="text-5xl font-bold">

{{ $unit->name }}

</h1>


<p class="mt-5 text-slate-300">

{{ $unit->description }}

</p>


</div>

</section>




<section class="py-20">


<div class="max-w-7xl mx-auto px-6">


<div class="grid lg:grid-cols-2 gap-16">



<div>


<img

src="{{ Storage::url($unit->photo) }}"

class="rounded-3xl shadow-xl"

>



</div>



<div>



<img

src="{{ Storage::url($unit->logo) }}"

class="h-28"

>



<h2 class="mt-8 text-3xl font-bold">

{{ $unit->name }}

</h2>



<p class="mt-6 text-slate-600 leading-8">

{{ $unit->description }}

</p>



<div class="grid grid-cols-2 gap-5 mt-10">


<div class="bg-blue-50 rounded-xl p-6 text-center">


<h3 class="text-4xl font-bold text-blue-900">

{{ $unit->students_count }}

</h3>


<p>

Jumlah Siswa

</p>


</div>



<div class="bg-yellow-50 rounded-xl p-6 text-center">


<h3 class="text-4xl font-bold text-yellow-600">

{{ $unit->teachers_count }}

</h3>


<p>

Jumlah Guru

</p>


</div>



</div>




@if($unit->website)


<a

href="{{ $unit->website }}"

target="_blank"

class="inline-block mt-10 bg-blue-900 text-white px-8 py-4 rounded-xl"

>

Kunjungi Website Sekolah

</a>


@endif



</div>


</div>


</div>


</section>


@endsection