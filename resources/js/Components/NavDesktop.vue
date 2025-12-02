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
        class=" hidden lg:flex items-start h-14 justify-between px-36 gap-20 pt-3 text-gray-600 gradient w-full shadow-xl font-main ">
        <Link :href="'/'">
        <ApplicationLogo class="w-44" color="fill-newkool-red" />
        </Link>
        <div class=" flex  justify-between  w-full gap-3 pb-0 pt-1">
            <Link @mouseenter="activateSection('unactive')" :href="'/'"
                class="whitespace-nowrap px-10  rounded-3xl  duration-200">
            Inicio </Link>

            <div class="flex flex-col items-center w-36   group relative">
                <Link href="/linea-blanca" @mouseenter="activateSection('productos')"
                    class="whitespace-nowrap px-10 pb-8 rounded-3xl duration-200">
                Productos
                </Link>
                <div v-if="section !== 'unactive'" class="bg-neutral-200 space-y-2 py-4 rounded-xl  ">

                    <div>
                        <Link href="/linea-blanca/1-Aires-acondicionados"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline "
                            @mouseover="activateSection('aires-acondicionados');">
                        <h2>
                            Aires Acondicionados
                        </h2>
                        <font-awesome-icon :icon="['fas', 'chevron-right']" />
                        </Link>
                    </div>

                    <div>
                        <Link href="/linea-blanca/9-Audio"
                        @mouseover="activateSection('productos')"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline ">
                        <h2>
                            Audio
                        </h2>
                        </Link>
                    </div>

                    <div>
                        <Link :href="'/linea-blanca/Campanas'"
                         @mouseover="activateSection('productos')"
                            class="whitespace-nowrap cursor-pointer px-8  hover:underline  duration-200 h-10  w-full">
                        Campanas
                        </Link>
                    </div>

                    <div>
                        <Link href="/linea-blanca/2-Cocinas"
                         @mouseover="activateSection('productos')"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline ">
                        <h2>
                            Cocinas
                        </h2>
                        <!-- <font-awesome-icon :icon="['fas', 'chevron-right']" /> -->
                        </Link>
                    </div>

                    <div>
                        <Link href="/linea-blanca/3-Congeladores"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline "
                            @mouseover="activateSection('congeladores')">
                        <h2>
                            Congeladores
                        </h2>
                        <font-awesome-icon :icon="['fas', 'chevron-right']" />
                        </Link>
                    </div>
                    <div>
                        <Link href="/linea-blanca/Cortina-de-aire"
                         @mouseover="activateSection('productos')"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline "
                            >
                        <h2>
                            Cortina de Aire
                        </h2>
                        </Link>
                    </div>

                    <div>
                        <Link href="/linea-blanca/4-Dispensadores-de-agua/"
                         @mouseover="activateSection('productos')"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline ">
                        <h2>
                            Dispensadores de Agua
                        </h2>
                        </Link>
                    </div>
                    <div>
                        <Link href="/linea-blanca/8-Fabricador-de-hielo/"
                         @mouseover="activateSection('productos')"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline ">
                        <h2>
                            Fabricador de hielo
                        </h2>
                        </Link>
                    </div>


                    <div>
                        <Link :href="'/linea-blanca/hornos'"
                         @mouseover="activateSection('productos')"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline ">
                        <h2>
                            Hornos
                        </h2>
                        <!-- <font-awesome-icon :icon="['fas', 'chevron-right']" /> -->
                        </Link>
                    </div>

                    <div>
                        <Link href="/linea-blanca/5-Lavadoras"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline "
                            @mouseover="activateSection('lavadoras')">
                        <h2>
                            Lavadoras
                        </h2>
                        <font-awesome-icon :icon="['fas', 'chevron-right']" />
                        </Link>
                    </div>
                    <div>
                        <Link href="/linea-blanca/Microondas"
                         @mouseover="activateSection('productos')"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline "
                           >
                        <h2>
                            Microondas
                        </h2>
                        </Link>
                    </div>

                    <div>
                        <Link :href="'/linea-blanca/911-Protectores-de-voltaje'"
                         @mouseover="activateSection('productos')"
                            class="whitespace-nowrap cursor-pointer px-8  hover:underline  duration-200 h-10  w-full">
                        Protectores de Voltaje
                        </Link>
                    </div>

                    <div>
                        <Link href="/linea-blanca/6-Neveras"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline "
                            @mouseover="activateSection('Neveras')">
                        <h2>
                            Neveras
                        </h2>
                        <font-awesome-icon :icon="['fas', 'chevron-right']" />
                        </Link>
                    </div>

                    <div>
                        <Link :href="'/linea-blanca/Topes'"
                         @mouseover="activateSection('productos')"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline">
                        <h2>
                            Topes
                        </h2>
                        <!-- <font-awesome-icon :icon="['fas', 'chevron-right']" /> -->

                        </Link>
                    </div>

                    <div>
                        <Link href="/linea-blanca/910-Televisores"
                         @mouseover="activateSection('productos')"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline ">
                        <h2>
                            Televisores
                        </h2>
                        <!-- <font-awesome-icon :icon="['fas', 'chevron-right']" /> -->
                        </Link>
                    </div>

                    <div>
                        <Link href="/linea-blanca/7-Vitrinas-verticales"
                         @mouseover="activateSection('productos')"
                            class="whitespace-nowrap cursor-pointer px-8   flex justify-between space-x-2 items-center hover:underline ">
                        <h2>
                            Vitrinas Verticales
                        </h2>
                        <!-- <font-awesome-icon :icon="['fas', 'chevron-right']" /> -->
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
                        class="bg-neutral-200 space-y-6 py-4 rounded-xl absolute top-[57px] left-8 flex flex-col">

                        <Link :href="'/linea-blanca/1-Aires-acondicionados/split'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Split
                        </Link>
                        <Link :href="'/linea-blanca/1-Aires-acondicionados/ventana'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Ventana
                        </Link>
                        <Link :href="'/linea-blanca/1-Aires-acondicionados/piso'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Piso Techo
                        </Link>
                        <Link :href="'/linea-blanca/1-Aires-acondicionados/portatiles'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Portatil
                        </Link>
                    </div>


                    <div v-if="section === 'congeladores'" ref="target"
                        class="bg-neutral-200 space-y-6 py-4 rounded-xl absolute top-[200px] left-8 flex flex-col">
                        <Link href="/linea-blanca/3-Congeladores/horizontal"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Horizontales
                        </Link>
                        <Link href="/linea-blanca/3-Congeladores/vertical"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Verticales
                        </Link>

                    </div>

                    <div v-if="section === 'lavadoras'" ref="target"
                        class="bg-neutral-200 space-y-6 py-4 rounded-xl absolute top-[330px] left-8 flex flex-col">
                        <Link :href="'/linea-blanca/5-Lavadoras/doble-tina'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Doble Tina
                        </Link>
                        <Link :href="'/linea-blanca/5-Lavadoras/automaticas'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Automáticas
                        </Link>

                        <Link :href="'/linea-blanca/5-Lavadoras/lavaseca'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Lavaseca
                        </Link>

                    </div>


                    <div v-if="section === 'Neveras'" ref="target"
                        class="bg-neutral-200 space-y-6 py-4 rounded-xl absolute top-[390px] left-8 flex flex-col">
                        <Link :href="'/linea-blanca/6-Neveras/top-mount'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Top Mount
                        </Link>
                        <Link :href="'/linea-blanca/6-Neveras/side-by-side'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Side by Side
                        </Link>
                    </div>












                </section>

            </div>

            <Link @mouseenter="activateSection('unactive')" :href="'/atencion-al-cliente'"
                class="whitespace-nowrap px-10  rounded-3xl  duration-200 mb-6">
            Atención al cliente
            </Link>


            <Link @mouseenter="activateSection('unactive')" :href="'/servicio-tecnico'"
                class="whitespace-nowrap px-10  rounded-3xl  duration-200">
            Servicio Técnico
            </Link>
        </div>


    </div>


</template>

<style scoped>
.gradient {
    background: linear-gradient(98deg, rgba(202, 202, 202, 1) 0%, rgb(255, 255, 255) 50%, rgba(196, 196, 196, 1) 100%)
}
</style>
