<section class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16 items-center">


            <div>

                <span class="text-blue-900 font-semibold">
                    Tentang Kami
                </span>


                <h2 class="text-4xl font-bold mt-4 text-slate-900">

                    {{ $website?->school_name }}

                </h2>


                <p class="mt-8 text-slate-600 leading-8">

                    {{ $website?->about ?? 'Informasi tentang perguruan belum tersedia.' }}

                </p>


            </div>



            <div class="bg-slate-50 rounded-3xl p-10 shadow">


                <h3 class="text-2xl font-bold text-blue-900">

                    Visi

                </h3>


                <p class="mt-4 text-slate-600">

                    {{ $website?->vision ?? '-' }}

                </p>



                <h3 class="text-2xl font-bold text-blue-900 mt-8">

                    Misi

                </h3>


                <p class="mt-4 text-slate-600">

                    {{ $website?->mission ?? '-' }}

                </p>


            </div>


        </div>

    </div>

</section>