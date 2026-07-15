<section class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <div>

                <span class="text-blue-900 font-semibold">

                    Sambutan

                </span>

                <h2 class="mt-3 text-4xl font-bold text-slate-900">

                    Selamat Datang di

                    {{ $website?->school_name }}

                </h2>

                <p class="mt-8 text-slate-600 leading-8">

                    {{ $website?->welcome_message }}

                </p>

            </div>

            <div>

                @if($website?->logo)

                    <img

                        src="{{ Storage::url($website->logo) }}"

                        class="w-72 mx-auto"

                    >

                @endif

            </div>

        </div>

    </div>

</section>