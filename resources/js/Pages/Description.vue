<script setup>
import { Head, usePage, Link } from '@inertiajs/vue3';

import { computed, onMounted, ref } from 'vue';
import PrimaryButton from '../Components/PrimaryButton.vue';
import MainTemplate from '../Layouts/MainTemplate.vue';
import ShareSocialsButton from '../Components/ShareSocialsButton.vue'


import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
const props = defineProps({
    product: Array,
    slider: Array
});
const counter = ref(0)
const validator = ref(false)
const message = ref('')

function validatorHandle(){
    if (props.product.length == 0){
        message.value = 'No hay productos que encajen con tu busqueda'
        validator.value= true
    }else{
        if(props.product[0].toggle == 0){
            message.value = 'Este producto no está disponible'
            validator.value= true
        }

    }
}
validatorHandle()

const carouselConfig = {
    itemsToShow: 1,
    snapAlign: 'center',
    height: '400px',
    gap: 5,
    autoplay: 3000,
    pauseAutoplayOnHover: true,
}
const breakpoints = {
    300:{
        itemsToShow: 1,
        snapAlign: 'start',
    },
    // 700px and up
    700: {
        itemsToShow: 2,
        snapAlign: 'start',
    },
    // 1024 and up
    1024: {
        itemsToShow: 3,
        snapAlign: 'start',
    },
}

const cleanString = (string) => string.replace(/[-0-9]/g, ' ')

function replaceLine(string){
    return string.replaceAll("-"," ")
}

function getTableContent(item, char) {
    return item.split(char)
}


</script>

<template>
    <MainTemplate class="bg-gray-100 ">

        <div v-if="validator" class=" h-screen w-full flex items-center justify-center">
            <header class="flex flex-col items-center text-newkool-red gap-6 ">
                <font-awesome-icon :icon="['fas', 'circle-xmark']" class="text-9xl " />
                <h2 class="font-bold text-2xl md:text-5xl text-center w-10/12">{{ message }}</h2>
                <Link href="/linea-blanca"
                    class=" text-white bg-newkool-red cursor-pointer border border-newkool-red duration-200 hover:text-newkool-red hover:bg-white  rounded text-2xl py-3 px-6">
                Volver
                </Link>
            </header>
        </div>
        <section v-else>

            <Head>
    
                <title>{{ product[0].name }}</title>
                <meta name="description" content="Newkoolamerica.com">
            </Head>
    
            <h2 class="text-neutral-600 font-bold tracking-widest text-center text-2xl md:text-6xl uppercase pt-8 font-main">
                {{ cleanString(product[0].tag)}}
            </h2>
            <section class="min-h-screen font-main">
                <div class=" flex justify-center  my-8">
                    <div
                        class=" rounded-3xl md:rounded-[80px] border-2 border-newkool-gray  bg-white p-4  w-[95%] h-fit lg:h-2/5 flex flex-col lg:flex-row items-center   ">
                        <div class="md:w-3/5">
                            <div v-if="product[0].imageCount == 1"
                                class="  overflow-hidden w-full  flex flex-col items-center justify-center group">
                                <img :src="`/assets/products-images/${product[0].code}-1.webp`" :alt="product.type"
                                    class="w-1/3 rounded-lg duration-200 hover:scale-110 relative z-0 ">
    
                            </div>
                            <div v-else
                                class=" overflow-hidden w-full  flex flex-col items-center justify-center group gap-3">
                                <Carousel v-model="counter" v-bind="carouselConfig" class=" md:w-1/2">
                                    <Slide v-for="img in parseInt(product[0].imageCount)" :key="img.id">
                                        <img :src="`/assets/products-images/${product[0].code}-${img}.webp`"
                                            class="w-full md:w-[300px]" />
                                    </Slide>
    
    
                                </Carousel>
                                <div class="flex gap-4">
                                    <button @click="counter = img - 1" v-for="img in parseInt(product[0].imageCount)"
                                        class="border border-transparent shadow p-2 rounded hover:border-newkool-gray py-2 cursor-pointer duration-200">
                                        <img :src="`/assets/products-images/${product[0].code}-${img}.webp`"
                                            class=" w-auto object-cover h-16" />
    
                                    </button>
                                </div>
                            </div>
    
                        </div>
                        <aside class="md:min-h-[75vh] h-fit rounded-md w-full  lg:w-2/5 flex flex-col items-center md:justify-center pt-8 md:pt-0  mx-4">
                            <header class=" w-11/12 md:w-1/2  lg:w-10/12">
                                <h2 v-if="product[0].tag !='Audio'" class="font-main uppercase font-black rounded-md  text-xl md:text-5xl text-neutral-600">
                                   </h2>
                                <!--<h2 v-else class="font-main uppercase font-black rounded-md  text-xl md:text-5xl text-neutral-600">
                                   Corneta</h2> -->
                                <p class=" text-neutral-600 text-2xl">Modelo: {{ product[0].code }}</p>
                                <ul class="  rounded-md text-neutral-600 ">
    
                                    <li v-for="(item, index) in getTableContent(product[0].description, ';')" :key="item"
                                        class=" w-full text-sm   flex items-center gap-2">
                                        <span class="w-1 h-1 block rounded-full bg-neutral-600"></span>
                                        <p class="w-full  py-1 text-lg">
                                            {{ item }}</p>
                                    </li>
    
    
                                </ul>
    
                            </header>
    
                        </aside>
                    </div>
                </div>
                <div class="w-full overflow-hidden h-fit flex justify-center">
                    <div class="   w-11/12 h-2/5 flex flex-col items-center justify-center  rounded-xl pb-8">
    
                        <h2 class="text-neutral-600 font-bold tracking-widest text-center w-full text-4xl  md:text-6xl uppercase pt-8">Productos
                            relacionados </h2>
                        <Carousel :breakpoints="breakpoints">
                            <Slide v-for="slide in slider" :key="slide" class="py-4">   
                                <div
                                    class="flex flex-col w-1/4 md:w-10/12 rounded-xl  items-center gap-2 border-2 border-neutral-600 hover:scale-105 duration-200 shadow-lg py-4 bg-white mt-4">
                                    <img :src="`/assets/products-images/${slide.code}-1.webp`" :alt="slide.type"
                                        class=" w-auto object-cover h-60 ">
                                    <h2 class="w-full text-center text-neutral-600  py-1 text-xl uppercase">modelo:{{
                                        slide.code }}</h2>
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
        </section>
    </MainTemplate>
</template>


<style scoped></style>
