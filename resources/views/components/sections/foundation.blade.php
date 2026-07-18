@if($leader)

<section class="py-24">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-20 items-center">

            <div class="text-center">

                <img

                    src="{{ Storage::url($leader->foundation) }}"

                    class="w-80 h-80 rounded-full object-cover mx-auto shadow-xl"

                    alt="{{ $leader->name }}"

                >

            </div>

            <div>

                <span class="text-blue-900 font-semibold">

                    Kepala Yayasan

                </span>

                <h2 class="mt-3 text-4xl font-bold">

                    {{ $leader->name }}

                </h2>

                <p class="text-yellow-600 mt-2">

                    {{ $leader->position }}

                </p>

                <div class="mt-8 text-slate-600 leading-8">

                    {{ $leader->message }}

                </div>

            </div>

        </div>

    </div>

</section>

@endif