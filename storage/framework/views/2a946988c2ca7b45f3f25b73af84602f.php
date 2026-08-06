

<section class="relative overflow-hidden bg-slate-50 py-16 sm:py-20 lg:py-24">

    
    <div class="pointer-events-none absolute -left-40 top-20 h-80 w-80 rounded-full bg-emerald-100/50 blur-3xl"></div>

    <div class="pointer-events-none absolute -right-40 bottom-0 h-96 w-96 rounded-full bg-green-100/40 blur-3xl"></div>


    <div class="relative mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">


        

        <div class="flex flex-col gap-8 md:flex-row md:items-end md:justify-between">


            <div class="max-w-2xl">


                <span
                    class="inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-2 text-xs font-bold uppercase tracking-wider text-emerald-700"
                >

                    <span class="h-2 w-2 rounded-full bg-emerald-600"></span>

                    Galeri

                </span>



                <h2
                    class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl"
                >

                    Dokumentasi Kegiatan

                </h2>



                <div class="mt-5 flex items-center gap-2">

                    <span class="h-1 w-14 rounded-full bg-emerald-600"></span>

                    <span class="h-1 w-5 rounded-full bg-emerald-300"></span>

                </div>



                <p class="mt-5 text-sm leading-7 text-slate-600 sm:text-base">

                    Berbagai dokumentasi kegiatan dan aktivitas
                    <?php echo e($website?->school_name ?? 'Perguruan Amaliah'); ?>.

                </p>


            </div>



            

            <div class="flex items-center gap-3">


                <button
                    id="gallery-prev"
                    class="flex h-11 w-11 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-600 shadow-sm transition hover:border-emerald-200 hover:bg-emerald-50 hover:text-emerald-700"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="h-5 w-5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15.75 19.5 8.25 12l7.5-7.5"
                        />
                    </svg>


                </button>



                <button
                    id="gallery-next"
                    class="flex h-11 w-11 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-600 shadow-sm transition hover:border-emerald-200 hover:bg-emerald-50 hover:text-emerald-700"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="h-5 w-5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m8.25 4.5 7.5 7.5-7.5 7.5"
                        />
                    </svg>

                </button>


            </div>


        </div>



        


        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($gallery) && $gallery->count()): ?>


        <div class="relative mt-12 overflow-hidden">


            <div
                id="gallery-slider"
                class="flex gap-6 transition-transform duration-500 ease-out"
            >


                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>


                <?php
                    $cover = $album->photos->first();
                ?>



                <article
                    class="min-w-[85%] overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-xl sm:min-w-[45%] lg:min-w-[31%]"
                >


                    

                    <div class="relative h-60 overflow-hidden">


                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($cover && filled($cover->photo)): ?>


                        <img
                            src="<?php echo e(Storage::url($cover->photo)); ?>"
                            alt="<?php echo e($album->title); ?>"
                            loading="lazy"
                            class="h-full w-full object-cover transition duration-500 hover:scale-105"
                        >


                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"
                        ></div>



                        <div
                            class="absolute bottom-4 left-4 rounded-lg bg-black/40 px-3 py-2 text-xs font-semibold text-white backdrop-blur"
                        >

                            <?php echo e($album->photos->count()); ?> Foto

                        </div>


                        <?php else: ?>


                        <div
                            class="flex h-full items-center justify-center bg-emerald-50"
                        >

                            <span class="text-sm text-emerald-600">
                                Belum Ada Foto
                            </span>

                        </div>


                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                    </div>




                    

                    <div class="p-6">


                        <h3 class="text-xl font-bold text-slate-900">

                            <?php echo e($album->title); ?>


                        </h3>



                        <p class="mt-3 line-clamp-2 text-sm leading-7 text-slate-600">


                            <?php echo e($album->description 
                                ?? 'Dokumentasi kegiatan Perguruan Amaliah.'); ?>



                        </p>



                        <a
                            href="<?php echo e(route('gallery.show',$album)); ?>"
                            class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-emerald-700 hover:text-emerald-800"
                        >

                            Lihat Galeri


                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                class="h-4 w-4"
                            >

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"
                                />

                            </svg>


                        </a>


                    </div>



                </article>



                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>


            </div>


        </div>


        <?php else: ?>


        

        <div class="mt-12 rounded-3xl border border-dashed border-slate-300 bg-white p-12 text-center">

            <h3 class="text-xl font-bold text-slate-900">
                Belum Ada Galeri
            </h3>


            <p class="mt-3 text-sm text-slate-500">
                Dokumentasi kegiatan akan muncul setelah ditambahkan.
            </p>

        </div>


        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>



    </div>


</section>





<script>

document.addEventListener('DOMContentLoaded',()=>{


const slider =
document.getElementById('gallery-slider');


const next =
document.getElementById('gallery-next');


const prev =
document.getElementById('gallery-prev');



if(!slider) return;



let position = 0;



next.onclick = ()=>{


    const max =
    slider.scrollWidth -
    slider.parentElement.clientWidth;


    position += 350;


    if(position > max)
    {
        position = max;
    }


    slider.style.transform =
    `translateX(-${position}px)`;

}



prev.onclick = ()=>{


    position -= 350;


    if(position < 0)
    {
        position = 0;
    }


    slider.style.transform =
    `translateX(-${position}px)`;

}


});


</script><?php /**PATH C:\Users\PC PPLG 01\perguruan-modern\resources\views/components/sections/gallery.blade.php ENDPATH**/ ?>