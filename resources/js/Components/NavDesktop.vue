<script setup>
import { Link } from '@inertiajs/vue3';

import { onClickOutside } from '@vueuse/core';
import { ref, useTemplateRef } from 'vue';
import ApplicationLogo from '../Components/ApplicationLogo.vue';


const target = useTemplateRef('target')
const target2 = useTemplateRef('target2')
const section = ref('unactive')

function activateSection(sectionVal) {
    section.value = sectionVal;
}

onClickOutside(target2, event => activateSection('unactive'))

</script>

<template>

    <div ref="target2"
        class=" hidden lg:flex items-start h-14 justify-between px-36 gap-20 pt-3 text-gray-500 bg-linear-to-r from-[#ededed] via-[#eeeeee] to-[#d8d8d8] w-full ">
        <Link :href="'/'" class="">
        <ApplicationLogo class="w-44" color="fill-newkool-red" />
        </Link>
        <div class=" flex  justify-between  w-full gap-3 pb-0 pt-1">
            <Link @mouseenter="activateSection('unactive')" :href="'/'"
                class="whitespace-nowrap px-10  rounded-3xl  duration-200">
            Inicio </Link>

            <div class="flex flex-col items-center w-36   group relative">
                <div @mouseenter="activateSection('productos')"
                    class="whitespace-nowrap px-10 pb-8 rounded-3xl duration-200">
                    Productos
                </div>
                <div v-if="section !== 'unactive'" class="bg-neutral-200 space-y-2 py-4 rounded-xl  ">

                    <div class="">
                        <Link href="/linea-blanca/Aires-acondicionados"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline "
                            @mouseover="activateSection('aires-acondicionados');">
                        <h2>
                            Aires Acondicionados
                        </h2>
                        <font-awesome-icon :icon="['fas', 'chevron-right']" />
                        </Link>
                    </div>

                    <div class="">
                        <Link href="/linea-blanca/Audio"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline ">
                        <h2>
                            Audio
                        </h2>
                        </Link>
                    </div>

                    <div class="">
                        <Link @mouseover="activateSection('campanas')" :href="'/linea-blanca/Campanas'"
                            class="whitespace-nowrap cursor-pointer px-8  hover:underline  duration-200 h-10  w-full">
                        Campanas
                        </Link>
                    </div>

                    <div class="">
                        <Link href="/linea-blanca/Cocinas"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline "
                            @mouseover="activateSection('cocinas')">
                        <h2>
                            Cocinas
                        </h2>
                        <font-awesome-icon :icon="['fas', 'chevron-right']" />
                        </Link>
                    </div>

                    <div class="">
                        <Link href="/linea-blanca/Congeladores"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline "
                            @mouseover="activateSection('congeladores')">
                        <h2>
                            Congeladores
                        </h2>
                        <font-awesome-icon :icon="['fas', 'chevron-right']" />
                        </Link>
                    </div>

                    <div class="">
                        <Link href="/linea-blanca/Dispensadores/"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline ">
                        <h2>
                            Dispensadores
                        </h2>
                        <!-- <font-awesome-icon :icon="['fas', 'chevron-right']" /> -->
                        </Link>
                    </div>

                    <div class="">
                        <Link @mouseover="activateSection('exibidoras-vitrinas')"
                            :href="'/linea-blanca/Exibidoras-vitrinas'"
                            class="whitespace-nowrap cursor-pointer px-8  hover:underline  duration-200 h-10  w-full">
                        Exibidoras Vitrinas
                        </Link>
                    </div>

                    <div class="">
                        <Link @mouseover="activateSection('hornos')" :href="'/linea-blanca/hornos'"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline ">
                        <h2>
                            Hornos
                        </h2>
                        <font-awesome-icon :icon="['fas', 'chevron-right']" />
                        </Link>
                    </div>

                    <div class="">
                        <Link href="/linea-blanca/Lavadoras"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline "
                            @mouseover="activateSection('lavadoras')">
                        <h2>
                            Lavadoras
                        </h2>
                        <font-awesome-icon :icon="['fas', 'chevron-right']" />
                        </Link>
                    </div>

                    <div class="">
                        <Link @mouseover="activateSection('protectores-de-voltaje')"
                            :href="'/linea-blanca/Protectores-de-voltaje'"
                            class="whitespace-nowrap cursor-pointer px-8  hover:underline  duration-200 h-10  w-full">
                        Protectores de Voltaje
                        </Link>
                    </div>

                    <div class="">
                        <Link href="/linea-blanca/Refrigeradoras"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline "
                            @mouseover="activateSection('refrigeradoras')">
                        <h2>
                            Refrigeradoras
                        </h2>
                        <font-awesome-icon :icon="['fas', 'chevron-right']" />
                        </Link>
                    </div>

                    <div class="">
                        <Link @mouseover="activateSection('topes')" :href="'/linea-blanca/Topes'"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline">
                        <h2>
                            Topes
                        </h2>
                        <font-awesome-icon :icon="['fas', 'chevron-right']" />

                        </Link>
                    </div>

                    <div class="">
                        <Link href="/linea-blanca/Televisores"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline "
                            @mouseover="activateSection('televisores')">
                        <h2>
                            Televisores
                        </h2>
                        <font-awesome-icon :icon="['fas', 'chevron-right']" />
                        </Link>
                    </div>

                </div>

            </div>






            <div class="flex flex-col items-center   relative">
                <Link @mouseenter="activateSection('unactive')" :href="'/somos-newkool'"
                    class="whitespace-nowrap px-10  rounded-3xl  duration-200">
                Quienes somos</Link>





                <section v-if="section !== 'unactive'">

                    <div v-if="section === 'aires-acondicionados'" ref="target"
                        class="bg-neutral-200 space-y-6 py-4 rounded-xl absolute top-[57px] left-2 flex flex-col">

                        <Link :href="'/linea-blanca/Aires-acondicionados/ventana'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Ventana
                        </Link>
                        <Link :href="'/linea-blanca/Aires-acondicionados/split'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Split
                        </Link>
                        <Link :href="'/linea-blanca/Aires-acondicionados/piso'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Piso Techo
                        </Link>
                        <Link :href="'/linea-blanca/Aires-acondicionados/portatiles'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Portatil
                        </Link>
                    </div>

                    <div v-if="section === 'cocinas'" ref="target"
                        class="bg-neutral-200 space-y-6 py-4 rounded-xl absolute top-[165px] left-2 flex flex-col">
                        <Link :href="'/linea-blanca/Cocinas/cocina-gas'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Gas
                        </Link>
                        <Link :href="'/linea-blanca/Cocinas/cocina-electrica'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Eléctricas
                        </Link>
                    </div>

                    <div v-if="section === 'congeladores'" ref="target"
                        class="bg-neutral-200 space-y-6 py-4 rounded-xl absolute top-[200px] left-2 flex flex-col">
                        <Link href="/linea-blanca/Congeladores/verticales"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Verticales
                        </Link>
                        <Link href="/linea-blanca/Congeladores/horizontales"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Horizontales
                        </Link>
                    </div>

                    <div v-if="section === 'hornos'" ref="target"
                        class="bg-neutral-200 space-y-6 py-4 rounded-xl absolute top-[295px] left-2 flex flex-col">
                        <Link :href="'/linea-blanca/Hornos/hornos-a-gas'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Gas
                        </Link>
                        <Link :href="'/linea-blanca/Hornos/hornos-electricos'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Eléctrico
                        </Link>
                    </div>

                    <div v-if="section === 'lavadoras'" ref="target"
                        class="bg-neutral-200 space-y-6 py-4 rounded-xl absolute top-[330px] left-2 flex flex-col">
                        <Link :href="'/linea-blanca/Lavadoras/doble-tina'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Doble Tina
                        </Link>
                        <Link :href="'/linea-blanca/Lavadoras/carga-superior'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Carga Superior
                        </Link>
                        <Link :href="'/linea-blanca/Lavadoras/torre-de-lavado'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Torre de lavado
                        </Link>
                        <Link :href="'/linea-blanca/Lavadoras/lavaseca'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Lavaseca
                        </Link>
                        <Link :href="'/linea-blanca/Lavadoras/secadora'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Secadora
                        </Link>
                    </div>


                    <div v-if="section === 'refrigeradoras'" ref="target"
                        class="bg-neutral-200 space-y-6 py-4 rounded-xl absolute top-[390px] left-2 flex flex-col">
                        <Link :href="'/linea-blanca/Refrigeradoras/sin-escarcha'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Sin Escarcha
                        </Link>
                        <Link :href="'/linea-blanca/Refrigeradoras/semi-escarcha'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Semi Escarcha
                        </Link>
                        <Link :href="'/linea-blanca/Refrigeradoras/side-by-side'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Side by Side (Dos puertas)
                        </Link>
                        <Link :href="'/linea-blanca/Refrigeradoras/ejecutivas'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Ejecutivas / Mini Bares
                        </Link>
                    </div>

                    <div v-if="section === 'topes'" ref="target"
                        class="bg-neutral-200 space-y-6 py-4 rounded-xl absolute top-[420px] left-2 flex flex-col">
                        <Link :href="'/linea-blanca/Refrigeradoras/topes-a-gas'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Gas
                        </Link>
                        <Link :href="'/linea-blanca/Refrigeradoras/topes-electricos'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Eléctricos
                        </Link>
                    </div>

                    <div v-if="section === 'televisores'" ref="target"
                        class="bg-neutral-200 space-y-6 py-4 rounded-xl absolute top-[450px] left-2 flex flex-col">
                        <Link :href="'/linea-blanca/Televisores/bases-Televisores'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Bases para Televisores
                        </Link>
                        <Link :href="'/linea-blanca/Televisores'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Televisores
                        </Link>
                    </div>












                </section>

            </div>

            <Link @mouseenter="activateSection('unactive')" :href="'/contacto'"
                class="whitespace-nowrap px-10  rounded-3xl  duration-200 mb-6">
            Contacto
            </Link>


            <Link @mouseenter="activateSection('unactive')" :href="'/servicio-tecnico'"
                class="whitespace-nowrap px-10  rounded-3xl  duration-200">
            Servicio Técnico
            </Link>
        </div>


    </div>


</template>

<style scoped></style>
