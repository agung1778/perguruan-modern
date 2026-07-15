<section class="max-w-7xl mx-auto px-6 py-20">


<h2 class="text-3xl font-bold text-blue-900">
Kepala Yayasan
</h2>


<div class="mt-10 bg-white rounded-2xl shadow p-8">


<img
src="{{Storage::url($leader?->photo)}}"
class="h-32 w-32 rounded-full object-cover"
>


<h3 class="mt-5 text-2xl font-bold">

{{$leader?->name}}

</h3>


<p>
{{$leader?->position}}
</p>


<p class="mt-5">
{{$leader?->message}}
</p>


</div>


</section>
<section class="max-w-7xl mx-auto px-6 py-20">


<h2 class="text-3xl font-bold text-blue-900">
Struktur Organisasi Yayasan
</h2>



<div class="grid md:grid-cols-4 gap-6 mt-10">


@foreach($organizations as $org)


<div class="
bg-white
rounded-xl
shadow
p-5
text-center
">


<img
src="{{Storage::url($org->photo)}}"
class="
h-24
w-24
mx-auto
rounded-full
object-cover
">


<h3 class="font-bold mt-4">

{{$org->name}}

</h3>


<p>

{{$org->position}}

</p>


</div>


@endforeach


</div>


</section>