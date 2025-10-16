<script setup>
import { Link } from '@inertiajs/vue3';

// /assets/route-images/slider/cocina.png
// /assets/route-images/home/Featured/cocina-1.webp
// /assets/route-images/slider/congelador.png
</script>

<template>
    <h2 class="font-bold text-center text-4xl text-newkool-red md:pl-20 py-10">Nuestros productos destacados</h2>
    <div class="w-full flex justify-center pb-10">
        <section class="grid grid-cols-1 grid-rows-1 md:grid-cols-2 md:grid-rows-2 gap-3 px-3 w-11/12">

            <!-- Cocina -->
            <Link href="/linea-blanca/Cocinas"
                class="flex flex-col md:flex-row items-center w-full overflow-hidden  rounded-3xl duration-200 hover:shadow-xl">
                <div
                    class="flex flex-col-reverse md:flex-row justify-around items-center p-4 bg-neutral-200 h-full w-full md:w-4/5 group ">
                    <img src="/assets/products-images/NKCG201XU-1.webp" alt=""
                        class="w-64 p-4 group-hover:scale-110 duration-200">
                    <header class="flex flex-col items-center md:items-end text-center md:text-right ">
                        <h2 class="font-bold  text-5xl text-newkool-red font-newkool">Cocinas</h2>
                        <h2 class="  text-2xl ">4 Hornillas</h2>
                        <img src="/assets/route-images/slider/cocina.png" alt="cocina-icono" class="w-10">
                    </header>
                </div>
                <div
                    class="w-full md:w-1/5 py-4 md:py-0 flex md:flex-col items-center gap-8 bg-newkool-red h-full justify-center">
                    <img src="/assets/products-images/NKCG202XU-1.webp" alt=""
                        class="w-20 duration-200 hover:bg-white p-2 rounded-xl">
                    <img src="/assets/products-images/NKCG301XU-1.webp" alt=""
                        class="w-20 duration-200 hover:bg-white p-2 rounded-xl">

                </div>
            </Link>
            <Link href="/linea-blanca/Congeladoras/horizontales"
                class="flex flex-col md:flex-row items-center w-full overflow-hidden  rounded-3xl duration-200 hover:shadow-xl">
                <div
                    class="flex flex-col-reverse md:flex-row justify-around items-center p-4 bg-neutral-200 h-full w-full md:w-4/5 group ">
                    <img src="/assets/products-images/NKCH256CH-1.webp" alt=""
                        class="w-52 p-4 group-hover:scale-110 duration-200">
                    <header class="flex flex-col items-center md:items-end text-center md:text-right ">
                        <h2 class="font-bold  text-5xl text-newkool-red font-newkool">Congeladores</h2>
                        <h2 class="  text-2xl ">Horizontales</h2>
                        <img src="/assets/route-images/slider/congelador.png" alt="congelador-icono" class="w-10">
                    </header>
                </div>
                <div
                    class="w-full md:w-1/5 py-4 md:py-0 flex md:flex-col items-center gap-8 bg-newkool-red h-full justify-center">
                    <img src="/assets/products-images/NKCH336CH-1.webp" alt=""
                        class="w-20 duration-200 hover:bg-white p-2 rounded-xl">
                    <img src="/assets/products-images/NKCF100M-1.webp" alt=""
                        class="w-20 duration-200 hover:bg-white p-2 rounded-xl">

                </div>
            </Link>
            <Link href="/linea-blanca/Audio"
                class="flex flex-col md:flex-row items-center w-full overflow-hidden  rounded-3xl duration-200 hover:shadow-xl">
                <div
                    class="flex flex-col-reverse md:flex-row justify-around items-center p-4 bg-neutral-200 h-full w-full md:w-4/5 group ">
                    <img src="/assets/products-images/NKCO157MI-1.webp" alt=""
                        class="w-64 p-4 group-hover:scale-110 duration-200">
                    <header class="flex flex-col items-center md:items-end text-center md:text-right ">
                        <h2 class="font-bold  text-5xl text-newkool-red font-newkool">Bocinas</h2>
                        <h2 class="  text-2xl "></h2>
                        <img src="/assets/route-images/slider/audio.png" alt="cocina-icono" class="w-10">
                    </header>
                </div>
                <div
                    class="w-full md:w-1/5 py-4 md:py-0 flex md:flex-col items-center gap-8 bg-newkool-red h-full justify-center">
                      <img src="/assets/products-images/NKCO206MI-2.webp" alt=""
                        class="w-20 duration-200 hover:bg-white p-2 rounded-xl">
                    <img src="/assets/products-images/NKCO308BMI-2.webp" alt=""
                        class="w-20 duration-200 hover:bg-white p-2 rounded-xl">

                </div>
            </Link>
            <Link href="/linea-blanca/Televisores"
                class="flex flex-col md:flex-row items-center w-full overflow-hidden  rounded-3xl duration-200 hover:shadow-xl">
                <div
                    class="flex flex-col-reverse md:flex-row justify-around items-center p-4 bg-neutral-200 h-full w-full md:w-4/5 group ">
                    <img src="/assets/products-images/fwdtv43smart-1.webp" alt=""
                        class="w-72 p-4 group-hover:scale-110 duration-200">
                    <header class="flex flex-col items-center md:items-end text-center md:text-right ">
                        <h2 class="font-bold  text-4xl text-newkool-red font-newkool">Televisores</h2>
                        <!-- <h2 class="  text-2xl ">Verticales</h2> -->
                        <img src="/assets/route-images/slider/tv.png" alt="congelador-icono" class="w-10">
                    </header>
                </div>
                <div
                    class="w-full md:w-1/5 py-4 md:py-0 flex md:flex-col items-center gap-8 bg-newkool-red h-full justify-center">
                    <img src="/assets/products-images/fwdtv32smart-3.webp" alt=""
                        class="w-14 duration-200 hover:bg-white p-2 rounded-xl">
                    <img src="/assets/products-images/fwdtv32smart-2.webp" alt=""
                        class="w-14 duration-200 hover:bg-white p-2 rounded-xl">

                </div>
            </Link>
            <!-- Cocina -->

        </section>
    </div>

</template>
