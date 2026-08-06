@extends('layouts.app')

@section('content')

<section class="bg-emerald-950 py-20">

    <div class="mx-auto max-w-5xl px-6 text-center">

        <span class="text-sm font-bold uppercase tracking-widest text-emerald-300">
            PPDB {{ $ppdb->educationUnit->name }}
        </span>


        <h1 class="mt-5 text-4xl font-extrabold text-white">
            {{ $ppdb->title }}
        </h1>


        <p class="mt-4 text-emerald-100">
            Tahun Ajaran {{ $ppdb->academic_year }}
        </p>

    </div>

</section>



<section class="bg-slate-50 py-16">

<div class="mx-auto max-w-5xl px-6">


<div class="rounded-3xl bg-white p-8 shadow-lg">


<h2 class="text-2xl font-bold text-slate-900">
Informasi PPDB
</h2>


<div class="mt-6 space-y-4">


<div>
<p class="text-sm text-slate-400">
Unit Pendidikan
</p>

<p class="font-bold">
{{ $ppdb->educationUnit->name }}
</p>

</div>



<div>

<p class="text-sm text-slate-400">
Periode Pendaftaran
</p>

<p class="font-bold">

@if($ppdb->registration_start)

{{ $ppdb->registration_start->translatedFormat('d F Y') }}

@endif


-

@if($ppdb->registration_end)

{{ $ppdb->registration_end->translatedFormat('d F Y') }}

@endif


</p>

</div>


</div>


<hr class="my-8">


<div class="prose max-w-none">

{!! $ppdb->description !!}

</div>


@if($ppdb->registration_url)

<a
href="{{ $ppdb->registration_url }}"
target="_blank"
class="mt-8 inline-block rounded-xl bg-emerald-700 px-8 py-3 font-bold text-white"
>
Daftar Sekarang
</a>

@endif


</div>




@if($related->count())

<div class="mt-12">

<h2 class="mb-6 text-2xl font-bold">
PPDB Lainnya
</h2>


<div class="grid gap-6 md:grid-cols-2">


@foreach($related as $item)

<div class="rounded-2xl bg-white p-6 shadow">


<h3 class="font-bold">
{{ $item->title }}
</h3>


<a
href="{{ route('ppdb.show',$item) }}"
class="mt-4 inline-block text-emerald-700"
>
Lihat Detail
</a>


</div>

@endforeach


</div>

</div>

@endif



</div>

</section>


@endsection