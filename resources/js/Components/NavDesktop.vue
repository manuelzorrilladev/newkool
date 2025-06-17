<script setup>
import { Link } from '@inertiajs/vue3';

import ApplicationLogo from '../Components/ApplicationLogo.vue';
import { ref } from 'vue';
import { useMouseInElement, onClickOutside } from '@vueuse/core'
import { useTemplateRef } from 'vue'


const target = useTemplateRef('target')
const target2 = useTemplateRef('target2')
const section = ref(-1)

function activateSection(sectionNumber) {
    section.value = sectionNumber;
}

onClickOutside(target2, event => activateSection(-1))

</script>

<template>

    <div ref="target2" class=" hidden lg:flex items-start h-20 justify-evenly px-36 gap-20  pt-6 text-gray-600">
        <Link :href="'/'">
        <ApplicationLogo class="w-36" color="fill-newkool-red" />
        </Link>
        <div class=" flex  justify-between  w-fit gap-3 py-0">
            <Link @mouseenter="activateSection(-1)" :href="'/'"
                class="whitespace-nowrap px-10 py-2 rounded-3xl  duration-200">
            Inicio </Link>
            <Link @mouseenter="activateSection(-1)" :href="'/somos-newkool'"
                class="whitespace-nowrap px-10 py-2 rounded-3xl  duration-200">
            ¿Quiénes somos?</Link>




            <div class="flex flex-col items-center w-36   group relative">
                <div @mouseenter="activateSection(0)"
                    class="whitespace-nowrap px-10 pt-2 pb-8 rounded-3xl duration-200">
                    Productos</div>
                <div v-if="section >= 0" class="bg-neutral-200 space-y-2 py-4 rounded-xl   group-hover:block">
                    <Link href="/linea-blanca/Aires-acondicionados"
                        class="whitespace-nowrap cursor-pointer px-8 py-2  flex justify-between space-x-2 items-center hover:underline "
                        @mouseover="activateSection(1)">
                    <h2>
                        Aires Acondicionados

                    </h2>
                    <font-awesome-icon :icon="['fas', 'chevron-right']" />


                    </Link>
                    <Link href="/linea-blanca/Audio"
                        class="whitespace-nowrap cursor-pointer px-8 py-2  flex justify-between space-x-2 items-center hover:underline "
                        @mouseover="activateSection(2)">
                    <h2>
                        Audio

                    </h2>
                    <font-awesome-icon :icon="['fas', 'chevron-right']" />


                    </Link>

                    <div class="py-2">

                        <Link @mouseover="activateSection(0)" :href="'/linea-blanca/Campanas'"
                            class="whitespace-nowrap cursor-pointer px-8 py-2 hover:underline  duration-200 h-10  w-full">
                        Campanas
                        </Link>
                    </div>

                    <Link href="/linea-blanca/Cocinas"
                        class="whitespace-nowrap cursor-pointer px-8 py-2  flex justify-between space-x-2 items-center hover:underline "
                        @mouseover="activateSection(8)">
                    <h2>
                        Cocinas

                    </h2>
                    <font-awesome-icon :icon="['fas', 'chevron-right']" />


                    </Link>

                    <Link href="/linea-blanca/Congeladores"
                        class="whitespace-nowrap cursor-pointer px-8 py-2  flex justify-between space-x-2 items-center hover:underline "
                        @mouseover="activateSection(6)">
                    <h2>
                        Congeladores

                    </h2>
                    <font-awesome-icon :icon="['fas', 'chevron-right']" />


                    </Link>


                    <Link href="/linea-blanca/Dispensadores/"
                        class="whitespace-nowrap cursor-pointer px-8 py-2  flex justify-between space-x-2 items-center hover:underline "
                        @mouseover="activateSection(7)">
                    <h2>
                        Dispensadores

                    </h2>
                    <font-awesome-icon :icon="['fas', 'chevron-right']" />


                    </Link>
                    <div class="py-2">

                        <Link @mouseover="activateSection(0)" :href="'/linea-blanca/Exibidoras-vitrinas'"
                            class="whitespace-nowrap cursor-pointer px-8 py-2 hover:underline  duration-200 h-10  w-full">
                        Exibidoras Vitrinas
                        </Link>
                    </div>

                    <div class="py-2">

                        <Link @mouseover="activateSection(0)" :href="'#'"
                            class="whitespace-nowrap cursor-pointer px-8 py-2 hover:underline  duration-200 h-10  w-full">
                        Hornos</Link>
                    </div>

                    <Link href="/linea-blanca/Lavadoras"
                        class="whitespace-nowrap cursor-pointer px-8 py-2  flex justify-between space-x-2 items-center hover:underline "
                        @mouseover="activateSection(4)">
                    <h2>
                        Lavadoras

                    </h2>
                    <font-awesome-icon :icon="['fas', 'chevron-right']" />


                    </Link>

                    <div class="py-2">

                        <Link @mouseover="activateSection(0)" :href="'/linea-blanca/Protectores-de-voltaje'"
                            class="whitespace-nowrap cursor-pointer px-8 py-2 hover:underline  duration-200 h-10  w-full">
                        Protectores de Voltaje</Link>
                    </div>

                    <Link href="/linea-blanca/Refrigeradoras"
                        class="whitespace-nowrap cursor-pointer px-8 py-2  flex justify-between space-x-2 items-center hover:underline "
                        @mouseover="activateSection(5)">
                    <h2>
                        Refrigeradoras

                    </h2>
                    <font-awesome-icon :icon="['fas', 'chevron-right']" />


                    </Link>

                    <div class="py-2">

                        <Link @mouseover="activateSection(0)" :href="'/linea-blanca/Topes'"
                            class="whitespace-nowrap cursor-pointer px-8 py-2 hover:underline  duration-200 h-10  w-full">
                        Topes</Link>
                    </div>



                    <Link href="/linea-blanca/TV-y-audio"
                        class="whitespace-nowrap cursor-pointer px-8 py-2  flex justify-between space-x-2 items-center hover:underline "
                        @mouseover="activateSection(3)">
                    <h2>
                        TV y Audio

                    </h2>
                    <font-awesome-icon :icon="['fas', 'chevron-right']" />


                    </Link>




                </div>



            </div>


            <div class="flex flex-col items-center   relative">

                <Link @mouseenter="activateSection(-1)" :href="'/contacto'"
                    class="whitespace-nowrap px-10 py-2 rounded-3xl  duration-200 mb-6">
                Contacto
                </Link>
                <section v-if="section != 0">



                    <div v-if="section == 1" ref="target"
                        class="bg-neutral-200 space-y-6 py-4 rounded-xl absolute top-16 left-10 flex flex-col">
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


                    <div v-if="section == 2" ref="target"
                        class="bg-neutral-200 space-y-6 py-4 rounded-xl absolute top-32 left-10 flex flex-col">
                        <Link :href="'/linea-blanca/Audio/torre-de-sonido'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Torre de Sonido
                        </Link>
                        <Link :href="'/linea-blanca/Audio/portable'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Portables
                        </Link>


                    </div>


                    <div v-if="section == 3" ref="target"
                        class="bg-neutral-200 space-y-6 py-4 rounded-xl absolute top-[650px] left-10 flex flex-col">
                        <Link :href="'/linea-blanca/TV-y-audio/32-pulgadas'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        32"
                        </Link>
                        <Link :href="'/linea-blanca/TV-y-audio/43-pulgadas'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        43"
                        </Link>
                        <Link :href="'/linea-blanca/TV-y-audio/50-pulgadas'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        50"
                        </Link>


                    </div>


                    <div v-if="section == 4" ref="target"
                        class="bg-neutral-200 space-y-6 py-4 rounded-xl absolute top-[465px] left-10 flex flex-col">
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


                    <div v-if="section == 5" ref="target"
                        class="bg-neutral-200 space-y-6 py-4 rounded-xl absolute top-[550px] left-10 flex flex-col">
                        <Link :href="'/linea-blanca/Refrigeradoras/top-mount'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Top mount (Congelador superior )
                        </Link>
                        <Link :href="'/linea-blanca/Refrigeradoras/side-by-side'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Side by Side (Dos puertas)
                        </Link>
                        <Link :href="'/linea-blanca/Refrigeradoras/tipo-frances'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Tipo Frances
                        </Link>
                        <Link :href="'/linea-blanca/Refrigeradoras/ejecutivas'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Ejecutivas / Mini Bares
                        </Link>



                    </div>


                    <div v-if="section == 6" ref="target"
                        class="bg-neutral-200 space-y-6 py-4 rounded-xl absolute top-[275px] left-10 flex flex-col">
                        <Link href="/linea-blanca/Congeladores/verticales"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Verticales
                        </Link>
                        <Link href="/linea-blanca/Congeladores/horizontales"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Horizontales
                        </Link>




                    </div>


                    <div v-if="section == 7" ref="target"
                        class="bg-neutral-200 space-y-6 py-4 rounded-xl absolute top-[320px] left-10 flex flex-col">
                        <Link :href="'/linea-blanca/Dispensadores/carga-superior'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Carga Superior
                        </Link>
                        <Link :href="'/linea-blanca/Dispensadores/carga-interna'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Carga Interna
                        </Link>




                    </div>


                    <div v-if="section == 8" ref="target"
                        class="bg-neutral-200 space-y-6 py-4 rounded-xl absolute top-56 left-10 flex flex-col">
                        <Link :href="'/linea-blanca/Cocinas/cocina-gas'"
                            class="whitespace-nowrap px-10  rounded-3xl  duration-200 hover:underline">
                        Cocinas a Gas

                        </Link>




                    </div>
                </section>

            </div>
            <Link @mouseenter="activateSection(-1)" :href="'/servicio-tecnico'"
                class="whitespace-nowrap px-10 py-2 rounded-3xl  duration-200">
            Servicio Técnico
            </Link>
        </div>


    </div>
    <div class="flex items-center justify-center">
        <hr class="border-black w-11/12">
    </div>
</template>

<style scoped></style>
