<script setup>
import { Head, usePage, Link, router } from '@inertiajs/vue3';

import { ref } from 'vue';
import MainTemplate from '../Layouts/MainTemplate.vue';


import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
defineProps({
    product: Array,
    slider: Array,
    message: String
});


const mail = ref({
    'name': null,
    'email': null,
    'phone': null,
    'subject': null,
    'message': null
})

const name = ref(null)

function submit() {
    router.post('/contacto/send', mail)
}

</script>

<template>
    <MainTemplate class="bg-gray-100 ">

        <Head>
            <title>Contacto</title>
            <meta name="description" content="Newkoolamerica.com">
        </Head>
        <div>
            {{ message }}
        </div>

        <section class="absolute containerBox w-full z-0">
            <div class="w-full h-full bg-gradient-to-r from-newkool-red/20 to-newkool-red/70 absolute">

            </div>
            <div class="w-full h-[90vh] md:h-[50vw]">
                <img src="/assets/route-images/contacto-desktop.png" alt="contacto-banner" class="hidden md:block">
                <img src="/assets/route-images/contacto-mobile.png" alt="contacto-banner" class="block md:hidden">
            </div>

        </section>


        <div class="flex justify-center w-full pb-10 relative z-10 mt-[30vw]">
            <section class="w-[85%] rounded-xl shadow-lg border-2 bg-gray-100 flex flex-col md:flex-row items-center">
                <div class="w-11/12 lg:w-3/5 xl:w-2/5 pt-5 md:pt-0 flex items-center justify-center  h-full">
                    <div
                        class="rounded-xl bg-newkool-red h-full md:h-[90%] w-full md:w-[82%] text-white flex flex-col justify-center gap-4 pb-4 md:pb-0">
                        <h2 class=" text-3xl xl:text-5xl tracking-tight font-extrabold pt-6 pl-5  ">
                            Contáctanos
                        </h2>
                        <p class=" font-light text-justify lg:text-sm  xl:text-lg w-11/12 pl-5 ">
                            Para atención al cliente, puedes escribir a atencionalcliente@newkoolamerica.com <br> o
                            comunicarte al número de WhatsApp 
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=584148811721&text=Hola%20NewKool,%20me%20gustaria%20saber%20mas%20sobre%20sus%20productos." target="_blank" class="hover:underline pl-5 w-11/12">+584148811721.</a>
                        <p class=" lg:mb-16 font-light  lg:text-sm  xl:text-lg w-10/12 pl-5 ">
                            Estamos ubicados en Caracas, Venezuela.
                        </p>

                    </div>
                </div>
                <div class="w-[0.1px] bg-gray-400 h-[95%]">

                </div>
                <div class="py-8  px-6 md:px-12 md:w-2/3 mx-auto  ">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-newkool-red ">Envía tu
                        mensaje
                    </h2>
                    <p class="mb-8 lg:mb-16 font-light  text-gray-500  sm:text-xl">Envíanos tu mensaje
                        mediante el
                        siguiente formulario. Tu opinión es importante para nosotros.
                    </p>
                    <form class="space-y-8" @submit.prevent="submit">
                        <div class="flex flex-col md:flex-row gap-6 w-full">

                            <div class="w-full md:w-1/2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre
                                    completo:</label>
                                <input type="text" id="name"
                                    class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-newkool-red focus:border-newkool-red block w-full p-2.5"
                                    placeholder="Nombre" required v-model="mail.name">
                            </div>
                            <div class="w-full md:w-1/2">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Dirección de
                                    correo</label>
                                <input type="email" id="email"
                                    class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-newkool-red focus:border-newkool-red block w-full p-2.5"
                                    placeholder="ejemplo@ejemplo.com" required v-model="mail.email">
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row gap-6 w-full">

                            <div class="w-full md:w-1/2">
                                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 ">Número de
                                    Teléfono</label>
                                <input type="tel" id="phone"
                                    class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-newkool-red focus:border-newkool-red block w-full p-2.5"
                                    placeholder="212-000-0000" required v-model="mail.phone">
                            </div>
                            <div class="w-full md:w-1/2">
                                <label for="subject"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Asunto</label>
                                <input type="text" id="subject"
                                    class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-full border border-gray-300 shadow-xs focus:ring-newkool-red focus:border-newkool-red "
                                    placeholder="Dejános saber el motivo de tu mensaje" required v-model="mail.subject">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="message"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tu
                                mensaje</label>
                            <textarea id="message" rows="6"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-xl shadow-xs border border-gray-300 focus:ring-newkool-red focus:border-newkool-red "
                                placeholder="Deja tu comentario..." v-model="mail.message"></textarea>
                        </div>
                        <button type="submit"
                            class="bg-newkool-red py-3 px-5 text-sm font-medium text-center text-white rounded-full bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-hidden focus:ring-primary-300 ">Enviar</button>
                    </form>
                </div>
            </section>
        </div>


    </MainTemplate>
</template>


<style scoped>
.containerBox {
    clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
}
</style>
