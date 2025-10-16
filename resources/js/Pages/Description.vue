<script setup>
import { Head, usePage, Link } from '@inertiajs/vue3';

import { onMounted, ref } from 'vue';
import PrimaryButton from '../Components/PrimaryButton.vue';
import MainTemplate from '../Layouts/MainTemplate.vue';
import ShareSocialsButton from '../Components/ShareSocialsButton.vue'


import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
defineProps({
    product: Array,
    slider: Array
});
const counter = ref(0)

const carouselConfig = {
    itemsToShow: 1,
    snapAlign: 'center',
    height: '400px',
    gap: 5,
     autoplay: 3000,
  pauseAutoplayOnHover: true,
}
const breakpoints = {
    // 700px and up
    700: {
        itemsToShow: 2,
        snapAlign: 'center',
    },
    // 1024 and up
    1024: {
        itemsToShow: 3,
        snapAlign: 'start',
    },
}




function getTableContent(item, char) {
    return item.split(char)
}

</script>

<template>
    <MainTemplate class="bg-gray-100 ">

        <Head>

            <title>{{ product[0].name }}</title>
            <meta name="description" content="Newkoolamerica.com">
        </Head>
        <section class="min-h-screen">
            <div class="h-fit flex justify-center border my-8">
                <div
                    class=" rounded-md border-2 bg-white p-4  w-11/12 h-fit lg:h-2/5 flex flex-col lg:flex-row items-center   ">
                    <div class="w-3/5">
                        <div v-if="product[0].imageCount == 1"
                            class="  overflow-hidden w-full lg:w- flex flex-col items-center justify-center group">
                            <img :src="`/assets/products-images/${product[0].code}-1.webp`" :alt="product.type"
                                class="w-1/3 rounded-lg duration-200 hover:scale-110 relative z-0">

                        </div>
                        <div v-else
                            class=" overflow-hidden w-full lg:w- flex flex-col items-center justify-center group gap-3">
                            <Carousel v-model="counter" v-bind="carouselConfig" class=" w-1/2">
                                <Slide v-for="img in parseInt(product[0].imageCount)" :key="img.id">
                                    <img :src="`/assets/products-images/${product[0].code}-${img}.webp`"
                                        class="w-[300px]" />
                                </Slide>


                            </Carousel>
                            <div class="flex gap-4">
                                <button @click="counter = img - 1" v-for="img in parseInt(product[0].imageCount)"
                                    class="border p-2 rounded hover:border-newkool-red py-2 cursor-pointer">
                                    <img :src="`/assets/products-images/${product[0].code}-${img}.webp`" class="w-16" />

                                </button>
                            </div>
                        </div>

                    </div>
                    <aside class="h-[75vh] rounded-md w-full  lg:w-2/5 flex flex-col items-center justify-center  mx-4">
                        <header class=" sm:w-1/2 md:w-1/2  lg:w-10/12">
                            <h2
                                class="font-newkool rounded-md border border-black p-2  text-xl md:text-3xl text-newkool-red text-center">
                                {{ product[0].name }}</h2>
                            <p class="font-light text-gray-500 text-sm py-4">Modelo: {{ product[0].code }}</p>
                            <ul class=" border border-black rounded-md overflow-hidden">

                                <h2 class="text-newkool-red font-bold px-4 py-2">Características</h2>
                                <li v-for="(item, index) in getTableContent(product[0].description, ';')" :key="item"
                                    class=" w-full text-sm   ">
                                    <p :class="[index % 2 == 0 ? 'bg-slate-100' : 'bg-slate-50']"
                                        class="w-full px-6 py-1 ">
                                        {{ item }}</p>
                                </li>


                            </ul>
                            <a href="https://wa.me/584148811719" target="_blank"
                                class="text-white bg-newkool-red w-full h-fit border border-newkool-red flex items-center gap-2 justify-center rounded-md py-2 duration-200 hover:bg-white hover:text-newkool-red my-4">
                                <font-awesome-icon :icon="['fab', 'whatsapp']" class="text-2xl" />
                                Contáctanos
                            </a>
                            <h2 class="font-bold text-center relative z-10">Compartir en:</h2>
                            <div class="space-y-2">

                                <ShareSocialsButton social="facebook" />
                                <!-- <ShareSocialsButton social="instagram" /> -->
                            </div>
                            <div class="flex flex-col md:flex-row justify-center items-center gap-4 mt-2 relative z-20">
                            </div>
                        </header>

                    </aside>
                </div>
            </div>
            <div class="h-fit flex justify-center">
                <div class=" bg-white  w-11/12 h-2/5 flex flex-col items-center justify-center  rounded-xl pb-8">
                    <h2 class=" font-bold text-4xl pt-10 mb-10 text-newkool-red font-newkool ">Productos relacionados
                    </h2>
                    <Carousel :breakpoints="breakpoints">
                        <Slide v-for="slide in slider" :key="slide" class="bg-white py-4 px-4">
                            <div
                                class="flex flex-col w-10/12 rounded-xl  items-center gap-4 border border-gray-400 hover:scale-110 duration-200 shadow-lg py-4">
                                <img :src="`/assets/products-images/${slide.code}-1.webp`" :alt="slide.type"
                                    class="w-1/2 ">
                                <h2 class="">{{ slide.name }}</h2>
                                <Link :href="`/productos/${slide.name}`"
                                    class=" text-lg px-5   border-newkool-red border bg-newkool-red text-white hover:text-newkool-red hover:bg-white duration-300 rounded-3xl  text-center">
                                Ver más
                                </Link>

                            </div>

                        </Slide>

                        <template #addons>

                            <Navigation />
                        </template>
                    </Carousel>
                </div>
            </div>


        </section>

        <div class="h-10 mt-2"></div>
    </MainTemplate>
</template>


<style scoped></style>
