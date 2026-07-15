@if($organizations->count())

<section class="bg-slate-50 py-24">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center">

            <span class="text-blue-900 font-semibold">

                Struktur Organisasi

            </span>

            <h2 class="mt-4 text-4xl font-bold">

                Yayasan

            </h2>

        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mt-16">

            @foreach($organizations as $item)

                <div class="bg-white rounded-3xl shadow-lg p-8 text-center">

                    <img

                        src="{{ Storage::url($item->photo) }}"

                        class="w-28 h-28 rounded-full object-cover mx-auto"

                        alt="{{ $item->name }}"

                    >

                    <h3 class="mt-6 text-xl font-semibold">

                        {{ $item->name }}

                    </h3>

                    <p class="text-slate-500 mt-2">

                        {{ $item->position }}

                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>

@endif