<script setup>
// /assets/route-images/slider/cocina.png
// /assets/route-images/home/Featured/cocina-1.webp
// /assets/route-images/slider/congelador.png
</script>

<template>
    <h2 class="font-bold  text-5xl text-newkool-red pl-20 pt-10">Nuestros productos destacados</h2>
    <section class="flex justify-around items-center h-[500px]">
        
        <!-- Cocina -->
       <div class="flex items-center border border-black  w-2/5 overflow-hidden  rounded-3xl h-4/5 duration-200 hover:shadow-xl">
            <div class="flex justify-around items-center p-4 bg-neutral-200 h-full w-4/5 group ">
                <img src="/assets/route-images/home/Featured/cocina-1.webp" alt="" class="w-52 p-4 group-hover:scale-110 duration-200">
                <header class="flex flex-col items-end text-right">
                    <h2 class="font-bold  text-5xl text-newkool-red">Cocinas</h2>
                    <h2 class="  text-2xl ">4 Hornillas</h2>
                    <img src="/assets/route-images/slider/cocina.png" alt="cocina-icono" class="w-10">
                </header>
            </div>
            <div class="w-1/5 flex flex-col items-center gap-8 bg-newkool-red h-full justify-center">
                <img src="/assets/route-images/home/Featured/cocina-2.webp" alt=""  class="w-14 duration-200 hover:bg-white p-2 rounded-xl">
                <img src="/assets/route-images/home/Featured/cocina-3.webp" alt=""  class="w-14 duration-200 hover:bg-white p-2 rounded-xl">

            </div>
       </div> 
        <!-- Cocina -->
       <div class="flex items-center border border-black  w-2/5 overflow-hidden  rounded-3xl h-4/5 duration-200 hover:shadow-2xl">
            <div class="flex justify-around items-center p-4 bg-neutral-200 h-full w-4/5 px-4 group ">
                <img src="/assets/route-images/home/Featured/congelador-1.webp" alt="" class="w-52 p-4 group-hover:scale-110 duration-200">
                <header class="flex flex-col items-end text-right">
                    <h2 class="font-bold  text-4xl text-newkool-red">Congeladores</h2>
                    <h2 class="  text-2xl ">Horizontales</h2>
                    <img src="/assets/route-images/slider/congelador.png" alt="congelador-icono" class="w-10 ">
                </header>
            </div>
            <div class="w-1/5 flex flex-col items-center gap-8 bg-newkool-red h-full justify-center">
                <img src="/assets/route-images/home/Featured/congelador-2.webp" alt=""  class="w-14 duration-200 hover:bg-white p-2 rounded-xl">
                <img src="/assets/route-images/home/Featured/congelador-3.webp" alt=""  class="w-14 duration-200 hover:bg-white p-2 rounded-xl">

            </div>
       </div> 
    </section>
</template>
