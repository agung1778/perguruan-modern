@extends('layouts.app')


@section('content')


<section class="bg-blue-950 py-24">

    <div class="max-w-7xl mx-auto px-6 text-center text-white">


        <h1 class="text-5xl font-bold">

            Tentang Kami

        </h1>


        <p class="mt-6 text-slate-300">

            Mengenal lebih dekat perjalanan dan komitmen perguruan kami

        </p>


    </div>

</section>



<section class="py-24 bg-white">


    <div class="max-w-7xl mx-auto px-6">


        <div class="grid lg:grid-cols-2 gap-16">


            <div>


                <span class="text-blue-900 font-semibold">

                    Sejarah

                </span>


                <h2 class="text-4xl font-bold mt-3">

                    Perjalanan Perguruan

                </h2>


                <p class="mt-8 text-slate-600 leading-8">

                    {{ $website?->history }}

                </p>


            </div>



            <div class="space-y-8">


                <div>

                    <h3 class="text-2xl font-bold text-blue-900">

                        Visi

                    </h3>


                    <p class="mt-3 text-slate-600">

                        {{ $website?->vision }}

                    </p>


                </div>



                <div>

                    <h3 class="text-2xl font-bold text-blue-900">

                        Misi

                    </h3>


                    <p class="mt-3 text-slate-600">

                        {{ $website?->mission }}

                    </p>


                </div>


            </div>


        </div>


    </div>


</section>



@include('sections.foundation')


@include('sections.organization')



@endsection