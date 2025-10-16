<script setup>
import { Head, usePage, Link, router } from '@inertiajs/vue3';
import { useElementVisibility } from '@vueuse/core'
import { ref, useTemplateRef } from 'vue';
import MainTemplate from '../Layouts/MainTemplate.vue';


import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
defineProps({
    product: Array,
    slider: Array,
    message: String
});

const target1 = useTemplateRef('target1')
const target2 = useTemplateRef('target2')
const target3 = useTemplateRef('target3')
const target4 = useTemplateRef('target4')
const target5 = useTemplateRef('target5')
const target1IsVisible = useElementVisibility(target1)
const target2IsVisible = useElementVisibility(target2)
const target3IsVisible = useElementVisibility(target3)
const target4IsVisible = useElementVisibility(target4)
const target5IsVisible = useElementVisibility(target5)

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




        <section class="relative containerBox w-3/5 mb-20">

            <img src="/assets/route-images/service/banner-service.png" alt="contacto-banner" class=" w-full">

        </section>
        <section class="absolute top-0 containerBox h-fit w-full">
            <div class="w-full h-full bg-gradient-to-r from-newkool-red/20 to-newkool-red/70 absolute z-10">

            </div>

            <div class="w-full h-[35vh] md:h-[40vw] flex items-start justify-center relative">
                <img src="/assets/route-images/service/banner-service.png" alt="contacto-banner" class=" w-full">

            </div>


        </section>

        <main class="w-full overflow-hidden">
            <div class="flex justify-center w-full">
                <header class="w-10/12 space-y-4">
                    <h2 class="text-newkool-red text-5xl font-bold">Garantía de productos</h2>
                    <hr class="h-2 bg-newkool-red w-14">
                    <p class="text-2xl text-gray-700 font-light">Nuestro personal garantiza a todos sus usuarios
                        finales, en
                        el marco del uso apropiado y respectivo periodo de garantía, que todos sus productos están
                        libres de
                        defectos tanto físicos como técnicos.</p>
                </header>
            </div>

            <section ref="target1"
                :class="target1IsVisible ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-full'"
                class="flex justify-center py-20 duration-700">
                <div class="w-10/12 flex flex-col-reverse md:flex-row items-center">

                    <div class="flex gap-3 items-start md:w-1/2 ">
                        <div class="hidden md:flex flex-col items-center justify-center space-y-4">
                            <div
                                class="space-x-0.5  text-4xl bg-newkool-red border border-newkool-red text-white duration-200 hover:bg-white hover:text-newkool-red rounded-full p-2">
                                <font-awesome-icon :icon="['fas', 'ellipsis-vertical']" />
                                <font-awesome-icon :icon="['fas', 'bars']" />
                            </div>
                            <hr class="w-0.5 h-[32vh] bg-newkool-red rounded-full hidden md:block">
                        </div>


                        <header class="flex flex-col text-gray-700 pt-4 md:w-2/3 gap-4">
                            <h3 class="text-newkool-red font-semibold text-4xl">Condiciones</h3>
                            <h4 class="text-xl w-full">La garantía está sujeta a las siguientes condiciones y
                                limitaciones:</h4>

                            <ul class="text-xl">
                                <li class="list-disc ml-6">Instalación inapropiada, accidental y por negligencia.</li>
                                <li class="list-disc ml-6">Uso inapropiado, abuso, desensamblado, reparaciones y
                                    modificaciones no autorizadas.
                                </li>
                                <li class="list-disc ml-6">Anomalías energéticas, incendios, desastres naturales y
                                    motivos
                                    de fuerza mayor.</li>
                                <li class="list-disc ml-6">Daños o alteraciones al sello de garantía.</li>
                                <li class="list-disc ml-6">Daños y modificaciones al número de serie.</li>
                                <li class="list-disc ml-6">Compras a vendedores y distribuidores no autorizados.</li>

                            </ul>
                            <a href="https://api.whatsapp.com/send?phone=584148811719&text=Hola%20NewKool,%20me%20gustaria%20saber%20mas%20sobre%20sus%20productos." class=" py-4 text-center  w-sm border border-newkool-red bg-newkool-red text-2xl text-white rounded-xl duration-200 hover:text-newkool-red hover:bg-white">Contactar</a>
                        </header>
                    </div>
                    <img src="/assets/route-images/service/service-1.png" alt=""
                        class="md:w-1/2 rounded-2xl border border-newkool-red">
                </div>
            </section>



            <div ref="target2" :class="target2IsVisible ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-full'"
                class="flex justify-center w-full  duration-700">
                <header class="w-10/12 space-y-4">
                    <h2 class="text-newkool-red text-4xl font-bold">Requisitos para reclamar la garantía</h2>
                    <hr class="h-2 bg-newkool-red w-14">

                </header>
            </div>


            <section ref="target3"
                :class="target3IsVisible ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-full'"
                class="flex  justify-center py-20  duration-700">
                <div class="w-10/12 flex gap-8 flex-col-reverse md:flex-row-reverse items-center">

                    <div class="flex gap-3 items-start md:w-1/2 ">
                        <div class=" hidden md:flex flex-col items-center justify-center space-y-4">
                            <div
                                class="space-x-0.5  text-4xl bg-newkool-red border border-newkool-red text-white duration-200 hover:bg-white hover:text-newkool-red rounded-full p-2">
                                <font-awesome-icon :icon="['fas', 'ellipsis-vertical']" />
                                <font-awesome-icon :icon="['fas', 'bars']" />
                            </div>
                            <hr class="w-0.5 h-[25vh] bg-newkool-red rounded-full hidden md:block">
                        </div>
                        <header class="space-y-4 text-gray-700 pt-4 md:w-2/3">
                            <h3 class="text-newkool-red font-semibold text-4xl">Requisitos</h3>
                            <h4 class="text-xl">Los productos que deseen aplicar para la garantía deben cumplir con los
                                siguientes requerimientos:</h4>

                            <ul class="text-xl">
                                <li class="list-disc ml-6">Prueba de lugar y fecha de compra; registro del producto en
                                    línea
                                </li>
                                <li class="list-disc ml-6">El producto deberá llevar la etiqueta de garantía Newkool.
                                </li>
                                <li class="list-disc ml-6">Apariencia externa en buen estado.</li>



                            </ul>
                        </header>
                    </div>

                    <img src="/assets/route-images/service/service-2.png" alt=""
                        class="md:w-1/2 rounded-2xl border border-newkool-red">
                </div>
            </section>

            <section ref="target4"
                :class="target4IsVisible ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-full'"
                class="w-full bg-newkool-red text-white flex flex-col md:flex-row gap-6 md:gap-0 justify-around items-center py-14 px-8 duration-700">
                <div>
                    <h2 class=" text-3xl font-bold">Servicio Técnico</h2>
                    <h3 class="   sm:text-xl w-10/12">Nuestras operadoras estan disponibles para atender todas las solicitudes a
                        través
                        de los canales pertinentes. Atención 24/7</h3>
                </div>

                <ul class=" bg-white rounded-xl p-6  text-newkool-red shadow-newkool-red shadow-2xl sm:text-xl">
                    <li>
                        WhatsApp de Servicio Técnico: <a href="https://wa.me/584148811721" target="_blank"
                            class="underline">+58-414-881-1721</a>
                    </li>
                    <li>
                        Correo Electrónico: <a href="mailto:atencionalcliente@newkoolamerica.com"
                            class="underline">atencionalcliente@newkoolamerica.com</a>
                    </li>


                </ul>
            </section>



            <div ref="target5" :class="target5IsVisible ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-full'"
                class="py-8  px-6 md:px-12 md:w-2/3 mx-auto   duration-700">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-newkool-red ">Reporte de
                    Garantía
                </h2>

                <form class="space-y-8" @submit.prevent="submit">

                    <div class="w-full">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre
                            completo:</label>
                        <input type="text" id="name"
                            class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-newkool-red focus:border-newkool-red block w-full p-4"
                            placeholder="Nombre" required v-model="mail.name">
                    </div>
                    <div class="w-full">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Dirección de
                            correo</label>
                        <input type="email" id="email"
                            class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-newkool-red focus:border-newkool-red block w-full p-4"
                            placeholder="ejemplo@ejemplo.com" required v-model="mail.email">
                    </div>


                    <div class="w-full">
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 ">Número de
                            Teléfono</label>
                        <input type="tel" id="phone"
                            class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-newkool-red focus:border-newkool-red block w-full p-4"
                            placeholder="212-000-0000" required v-model="mail.phone">
                    </div>
                    <div class="w-full">
                        <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 ">Asunto</label>
                        <input type="text" id="subject"
                            class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded border border-gray-300 shadow-xs focus:ring-newkool-red focus:border-newkool-red "
                            placeholder="Dejános saber el motivo de tu mensaje" required v-model="mail.subject">
                    </div>

                    <div class="sm:col-span-2">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tu
                            mensaje</label>
                        <textarea id="message" rows="6"
                            class="block p-4 w-full text-sm text-gray-900 bg-gray-50 rounded-xl shadow-xs border border-gray-300 focus:ring-newkool-red focus:border-newkool-red "
                            placeholder="Deja tu comentario..." v-model="mail.message"></textarea>
                    </div>
                    <button type="submit"
                        class="bg-newkool-red py-3 px-5 text-sm font-medium text-center text-white rounded bg-primary-700 sm:w-fit hover:bg-white hover:text-newkool-red duration-200 border border-newkool-red focus:ring-4 focus:outline-hidden focus:ring-primary-300 ">Enviar</button>
                </form>
            </div>
        </main>

    </MainTemplate>
</template>


<style scoped>
.containerBox {
    clip-path: polygon(0 0, 100% 0, 100% 95%, 0 100%);
}
</style>
