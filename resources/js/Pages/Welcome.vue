<script setup>
import { Head } from '@inertiajs/vue3';

import MainTemplate from '../Layouts/MainTemplate.vue';
import { Link } from '@inertiajs/vue3';

import { useElementVisibility } from '@vueuse/core';
import { onMounted, ref, useTemplateRef } from 'vue';
import MainSlider from '../Custom/MainSlider.vue';
import ProductsSlider from '../Custom/ProductsSlider.vue';
import Featured from '../Custom/Featured.vue';
import axios from 'axios';
const target = useTemplateRef('target')
const targetIsVisible = useElementVisibility(target)
defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});

const items = ref([

    { src: "/assets/route-images/slider/aires.png", name: "Aires Acondicionados", link: "/linea-blanca/Aires-acondicionados" },
    { src: "/assets/route-images/slider/audio.png", name: "Audio", link: "/linea-blanca/Audio" },
    // { src: "/assets/route-images/slider/campana.png", name: "Campanas", link: "/linea-blanca/Campanas" },
    { src: "/assets/route-images/slider/cocina.png", name: "Cocinas", link: "/linea-blanca/Cocinas" },
    { src: "/assets/route-images/slider/congelador.png", name: "Congeladores", link: "/linea-blanca/Congeladores" },
    { src: "/assets/route-images/slider/dispensador.png", name: "Dispensadores", link: "/linea-blanca/Dispensadores-de-agua" },
    { src: "/assets/route-images/slider/fabricador-de-hielo.png", name: "Fabricador de Hielo", link: "/linea-blanca/Fabricador-de-hielos" },

    // { src: "/assets/route-images/slider/horno.png", name: "Hornos", link: "/linea-blanca/Hornos" },
    { src: "/assets/route-images/slider/lavadora.png", name: "Lavadoras", link: "/linea-blanca/Lavadoras" },
    { src: "/assets/route-images/slider/microondas.png", name: "Microondas", link: "/linea-blanca/Microondas" },
    { src: "/assets/route-images/slider/nevera.png", name: "Neveras", link: "/linea-blanca/Neveras" },
    // { src: "/assets/route-images/slider/tope.png", name: "Topes", link: "/linea-blanca/Topes" },
    { src: "/assets/route-images/slider/protector.png", name: "Protectores de voltaje", link: "/linea-blanca/Protectores-de-voltaje" },
    { src: "/assets/route-images/slider/tv.png", name: "Televisores", link: "/linea-blanca/Televisores" },
    { src: "/assets/route-images/slider/vitrinas.png", name: "Vitrinas verticales", link: "/linea-blanca/Vitrinas-verticales" }
])



</script>

<template>
    <MainTemplate>

        <Head>
            <title>Newkool America</title>
            <meta name="description" content="Newkoolamerica.com">
        </Head>


        <MainSlider class="" />

        <div class="font-main h-fit flex flex-col items-center" ref="target">
            <h2
                class="text-center bg-newkool-gray mt-10 font-bold text-3xl sm:text-3xl md:text-5xl text-white uppercase px-3 md:px-20 tracking-widest shadow-2xl rounded-full py-5 w-10/12 md:w-2/3">
                nuestros Productos</h2>
            <div class="h-full my-16 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 w-full">
                <Link v-for="value in items" :key="value.name" :href="value.link" class="group">
                <div
                    class=" p-4 flex flex-col items-center justify-center gap-4 text-gray-700 cursor-pointer duration-200  ">
                    <img :src="value.src" :alt="value.name"
                        class="bg-neutral-400 rounded-full p-2 h-20 group-hover:scale-110 duration-200">
                    <h2 class=" text-xl text-newkool-gray duration-200 group-hover:text-newkool-red">{{ value.name }}
                    </h2>
                </div>
                </Link>

            </div>

        </div>

        <div class="font-main flex justify-center">
            <hr class="border-black w-11/12">
        </div>


    
        <div class="font-main h-fit flex flex-col items-center" ref="target">
            <h2
                class="text-center  mt-10 font-bold text-3xl sm:text-3xl md:text-6xl text-neutral-600 uppercase px-3 md:px-20 tracking-widest  rounded-full py-5 w-10/12 md:w-2/3">
                nuestro Catálogo</h2>
            <div class=" w-full flex items-center justify-center">
                <h3 class="text-3xl text-neutral-600 w-1/5 font-light">Para descargar nuestro catálogo de productos, por favor hacer click en el icono</h3>
                <Link href="/catalogo" class="w-1/4">
                    <img src="/assets/route-images/home/catalogo-icon-2.png" alt="catalogo-newkool" class=" ml-4 cursor-pointer hover:scale-110 duration-200">
               
                </Link>

            </div>

        </div>

        <div class="flex justify-center pt-10">
            <hr class="border-black w-11/12">
        </div>



        <div class="font-main h-24 flex items-center justify-center text-gray-400 font-light text-center">
            <h2 class="w-11/12">Newkool - Todos los derechos reservados 2024</h2>

        </div>


    </MainTemplate>
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}

@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}



.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.5s ease;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>
