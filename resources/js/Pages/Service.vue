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
            <title>Servicio Tecnico</title>
            <meta name="description" content="Newkoolamerica.com">
        </Head>

        <section class="relative containerBox w-full bg-white">
            <div class="w-full h-full bg-gradient-to-r from-newkool-red/20 to-newkool-red/70 absolute z-10">

            </div>
            <div class="w-full h-[60vh] md:h-[40vw] flex items-start justify-center">
                <img src="/assets/route-images/soporte-desktop.png" alt="contacto-banner" class="hidden md:block w-1/2">
                <img src="/assets/route-images/soporte-mobile.png" alt="contacto-banner" class="block md:hidden">
            </div>


        </section>


        <div class="flex justify-center w-full pb-10 h-1">
            <section
                class="w-10/12 rounded-xl shadow-lg border-2 bg-gray-100 flex flex-col md:flex-row items-center -translate-y-36 h-36">

                <div class="py-8  px-6 md:px-12 md:w-full mx-auto  ">
                    <h2 class="mb-4 text-[7vw] md:text-7xl tracking-tight font-bold text-center text-newkool-red ">
                        Soporte Técnico
                    </h2>

                </div>
            </section>
        </div>



        <div class="flex justify-center w-full pb-10 ">
            <section class="w-10/12 rounded-xl shadow-lg border-2 bg-gray-100 flex flex-col items-start">

                <div class="py-8  px-6 md:px-12 md:w-full mx-auto  ">

                    <p class="mb-8 font-extrabold  text-gray-500  sm:text-3xl group">

                        <font-awesome-icon :icon="['fas', 'gear']" class="group-hover:animate-spin" />
                        Soporte Técnico para tus Electrodomésticos Newkool America
                    </p>
                    <p class="mb-8 font-light  text-gray-500  sm:text-xl">

                        En Newkool America, entendemos la importancia de tus electrodomésticos en el día a día. Nuestro
                        equipo de soporte técnico está listo para ayudarte con mantenimiento, reparación y asesoría
                        especializada. Garantizamos un servicio rápido y eficiente para que tus equipos sigan
                        funcionando como nuevos. ¡Confía en nosotros para cuidar tu inversión!

                    </p>
                    <p class="mb-2 font-light  text-gray-500  sm:text-xl">

                        Para solicitar soporte técnico, puedes contactarnos a través de los siguientes canales:
                    </p>


                    <ul class="mb-8 font-light  text-gray-500  sm:text-xl">
                        <li>
                            <font-awesome-icon :icon="['fab', 'whatsapp']" />
                            WhatsApp de Servicio Técnico: <a href="https://wa.me/584148811721" target="_blank"
                                class="text-newkool-red">+1-800-123-4567</a>
                        </li>
                        <li>
                            <font-awesome-icon :icon="['fas', 'envelope']" />
                            Correo Electrónico: <a href="mailto:atencionalcliente@newkoolamerica.com"
                                class="text-newkool-red">atencionalcliente@newkoolamerica.com</a>
                        </li>


                    </ul>
                    <p class="mb-2 font-light  text-gray-500  sm:text-xl">

                        Estamos comprometidos a brindarte el mejor servicio postventa para que sigas disfrutando de
                        tus electrodomésticos Newkool America por mucho tiempo.
                    </p>



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
