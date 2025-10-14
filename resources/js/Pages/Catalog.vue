<script setup>
import { Head, Link } from '@inertiajs/vue3';
import MainTemplate from '../Layouts/MainTemplate.vue';

import VideoBanner from '../Custom/VideoBanner.vue';




</script>

<template>
        <MainTemplate class="bg-white relative">

            <Head>
                <title>Cátalogo</title>
                <meta name="description" content="Newkoolamerica.com">
            </Head>
            <section class="w-full flex flex-col items-center py-4">
                <ul class="w-11/12 md:w-1/2 flex flex-col items-center gap-8 ">
                    <li v-for="value in 35">
                        <img :src="`/assets/catalogue-assets/img-${value}.jpg`" :alt="`img-${value}`"  class="shadow-xl"/>
                    </li>
                </ul>

            </section>
            <section class="fixed z-50 button z-50 group">
                <button class="flex  items-center px-10 py-2 shadow-xl rounded bg-newkool-red text-xl text-white gap-4 hover:-translate-y-4 hover:opacity-0 duration-300">
                    <p class="">Descargar</p>
                    <font-awesome-icon icon="fa-solid fa-download" class=""/>
                </button>
               
            </section>
            
        </MainTemplate>
</template>

<style scoped>
.button{
    bottom: 30px;
    right: 30px;
}

</style>

