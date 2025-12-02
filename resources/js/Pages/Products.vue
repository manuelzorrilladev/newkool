<script setup>
import { Head, usePage, Link,router } from '@inertiajs/vue3';

import { ref } from 'vue';
import MainTemplate from '../Layouts/MainTemplate.vue';
const currentPage = ref(1)
const totalPages = ref(1)
const countPerPage = ref(12)
totalPages.value = Math.ceil(usePage().props.products.length / countPerPage.value)

const productsInPage = ref(usePage().props.products)

const name = usePage().props.name
const type = usePage().props.type


console.log(router);
console.log(usePage().props)

function setShow(item) {
    if (
        item > ((currentPage.value - 1) * countPerPage.value) &&
        item <= (currentPage.value * countPerPage.value)
    ) {
        return true
    }

    return false
}



function pageHandler(page) {
    if (page == -1) {
        if (currentPage.value > 1) {
            currentPage.value = currentPage.value - 1
            console.log(currentPage.value)
        }

    } else {

        if (currentPage.value < totalPages.value) {
            currentPage.value = currentPage.value + 1
            console.log(currentPage.value)
        }

    }
}
const cleanString = (string) => string.replace(/[-0-9]/g, ' ')

function replaceLine(string){
    return string.replaceAll("-"," ")
}

function capitalize(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}
</script>

<template>
    <MainTemplate class="bg-gray-100 ">

        <Head>
            <title>Productos</title>
            <meta name="description" content="Newkoolamerica.com">
        </Head>
        

        <section class="min-h-screen mt-10 font-main">

            <div class="flex items-center justify-center flex-col pb-8 ">
                <div class="text-3xl md:text-5xl font-bold text-neutral-600">
                    {{ cleanString(name)}}
                </div>
                <div v-if="type" class="text-xl md:text-4xl font-bold text-neutral-600 capitalize">
                    {{ capitalize(cleanString(type))}}
                </div>

                <div v-if="productsInPage.length > 0"
                    class="grid rounded-lg bg-white my-8 grid-cols-1  md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 place-items-center place-content-center gap-2 w-11/12">
                    <Link :href="`/productos/${item.name}`" v-for="(item, index) in productsInPage" :key="index">
                        <div v-if="setShow(index + 1)"
                            class=" py-10  flex flex-col items-center border border-white rounded-md hover:border-newkool-gray px-10 group duration-200 ">
                            <img :src="`/assets/products-images/${item.code}-1.webp`" :alt="item.type"
                                class=" group-hover:scale-110 duration-200 pb-6 w-auto object-cover h-72 ">
                            <h2 class="relative z-10 text-center text-sm font-light">{{ item.name }}</h2>
                            <div 
                                class=" text-lg px-5 mt-4  border-newkool-red border bg-newkool-red text-white hover:text-newkool-red hover:bg-white duration-300 rounded-3xl ">
                            Ver más
                            </div>
                        </div>



                    </Link>
                </div>
                <div v-else class=" h-screen w-full flex items-center justify-center">
                    <header class="flex flex-col items-center text-newkool-red gap-6 ">
                        <font-awesome-icon :icon="['fas', 'circle-xmark']" class="text-9xl "/>
                        <h2 class="font-bold text-2xl md:text-5xl text-center w-10/12">No hay productos que encajen con tu busqueda</h2>
                        <Link href="/linea-blanca" class=" text-white bg-newkool-red cursor-pointer border border-newkool-red duration-200 hover:text-newkool-red hover:bg-white  rounded text-2xl py-3 px-6">
                            Volver 
                        </Link>
                    </header>
                </div>

                <div v-if="totalPages >0" class="flex items-center gap-4">
                    <font-awesome-icon :icon="['fas', 'chevron-left']"
                        class="text-black hover:text-newkool-red duration-200 cursor-pointer "
                        @click="pageHandler(-1)" />
                    <p>{{ currentPage }}/{{ totalPages }}</p>
                    <font-awesome-icon :icon="['fas', 'chevron-right']"
                        class="text-black hover:text-newkool-red duration-200 cursor-pointer "
                        @click="pageHandler(1)" />

                </div>
            </div>
        </section>

        <div class="  overflow-hidden h-[20vw] flex items-center justify-center relative">

            <img src="/assets/banner-images/banner-fondo-productos-desktop.png" alt="" class="hidden md:block">
            <img src="/assets/banner-images/banner-fondo-productos-mobile.png" alt="" class="block md:hidden w-full">
        </div>


    </MainTemplate>
</template>

<style scoped></style>
