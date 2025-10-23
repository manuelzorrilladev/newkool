<script setup>
import { Head, Link } from '@inertiajs/vue3';
import MainTemplate from '../Layouts/MainTemplate.vue';

import VideoBanner from '../Custom/VideoBanner.vue';
import axios from 'axios';
import { onMounted, ref } from 'vue';
const props = defineProps({
    pages: Array,

})
const notification = ref('-right-full')
const pagesCount = ref(props.pages)



function download() {
    axios.get('/api/download-catalogue', { responseType: 'blob' })
        .then((response) => {
            const url = window.URL.createObjectURL(new Blob([response.data]));
            const link = document.createElement('a');
            link.href = url;
            link.setAttribute('download', 'catalogo-newkool-2025.pdf');
            document.body.appendChild(link);
            link.click();
            notification.value = 'right-8'
            setTimeout(() => {
                notification.value = '-right-full'
            }, 3000);
        })
    
        .catch((error) => {
            console.error('Error downloading file:', error);
        });
}

</script>

<template>
        <MainTemplate class="bg-white relative">

            <Head>
                <title>Cátalogo</title>
                <meta name="description" content="Newkoolamerica.com">
            </Head>
            <section class="w-full flex flex-col items-center py-4">
                <ul class="w-11/12 md:w-1/2 flex flex-col items-center gap-8 ">
                    <li v-for="value in pagesCount" :key="value" >
                        <img :src="`/assets/catalogue-assets/img-${value}.jpg`" :alt="`img-${value}`"  class="shadow-xl"/>
                    </li>
                </ul>

            </section>
            <section :class="notification" class="fixed  top-28 duration-300 z-50">
                <div  class="flex cursor-pointer  border border-newkool-red items-center px-10 py-2 shadow-xl rounded-l bg-newkool-red text-xl text-white gap-4 duration-300 ">
                    Cátalogo descargado!
                </div>
                
            </section>
            <section class="fixed  bottom-8 right-8 z-50">
                <button @click="download()" class="flex cursor-pointer  border border-newkool-red items-center px-10 py-2 shadow-xl rounded bg-newkool-red text-xl text-white gap-4 duration-300 hover:bg-white hover:text-newkool-red">
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

