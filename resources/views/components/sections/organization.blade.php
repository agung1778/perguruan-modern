@if(isset($organizations) && $organizations->count())

<section class="bg-slate-50 py-24">
    <div class="max-w-7xl mx-auto px-6">
        {{-- Header --}}
        <div class="text-center">
            <span class="text-yellow-600 font-semibold uppercase tracking-wider">
                Struktur Organisasi
            </span>
            <h2 class="mt-4 text-4xl md:text-5xl font-bold text-slate-900">
                Yayasan
            </h2>
            <p class="mt-4 text-slate-600 max-w-2xl mx-auto">
                Mengenal jajaran organisasi yang mengelola Perguruan Modern.
            </p>
        </div>
        {{-- Organization Card --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mt-16">
            @foreach($organizations as $item)
                <div class="bg-white rounded-3xl shadow-md hover:shadow-xl transition duration-300 p-8 text-center">
                    {{-- Photo --}}
                    @if($item->photo)
                        <img src="{{ asset('storage/'.$item->photo) }}" alt="{{ $item->name }}" class="w-28 h-28 rounded-full object-cover mx-auto border-4 border-white shadow-lg">
                    @else
                        <div class="w-28 h-28 rounded-full bg-blue-900 text-white flex items-center justify-center mx-auto text-3xl font-bold shadow-lg">
                            {{ strtoupper(substr($item->name,0,1)) }}
                        </div>
                    @endif
                    {{-- Content --}}
                    <h3 class="mt-6 text-xl font-bold text-slate-900">
                        {{ $item->name }}
                    </h3>
                    <p class="text-blue-900 font-semibold mt-2">
                        {{ $item->position }}
                    </p>
                    @if($item->description)
                        <p class="mt-4 text-sm text-slate-500 leading-6">
                            {{ Str::limit($item->description,80) }}
                        </p>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif