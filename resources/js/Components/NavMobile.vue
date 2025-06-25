<script setup>
import { Link } from '@inertiajs/vue3';

import ApplicationLogo from '../Components/ApplicationLogo.vue';
import { ref } from 'vue';

const navActive = ref(false)
const activeAbsoluteClass = ref("left-0")
const subOption = ref(0)

function toggleNav() {
    navActive.value = !navActive.value
    activeAbsoluteClass.value = "left-0"
}
function activateOptions() {
    if (activeAbsoluteClass.value == "left-0") {
        activeAbsoluteClass.value = "-left-full"
    } else {
        activeAbsoluteClass.value = "left-0"
    }
}

function changeSubOption(pos) {
    if (subOption.value == pos) {
        subOption.value = 0

    } else {

        subOption.value = pos
    }
}
</script>

<template>
    <div @focusout="toggleNav()" class="flex flex-col items-center justify-center h-24   text-gray-600 lg:hidden absolute top-0 w-full  z-20">
        <div class="flex flex-row items-center justify-around w-full bg-white h-full">
            <Link :href="'/'">
              
            <ApplicationLogo class="w-36" color="fill-newkool-red" />
            </Link>
            <div class="border p-2 rounded-md cursor-pointer hover:shadow-md" @click="toggleNav">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </div>
        </div>
        <Transition enter-from-class="transform opacity-0 translate-x-20" enter-to-class="opacity-100 translate-x-0"
            enter-active-class="duration-200 ease-out" leave-from-class="opacity-100 translate-x-0"
            leave-to-class="transform opacity-0 -translate-x-20" leave-active-class="duration-200 ease-in">

            <div v-if="navActive" :class="activeAbsoluteClass"
                class=" absolute  top-[89px] mt-1 z-10 flex justify-end w-[200%]  py-0  duration-300 bg-transparent h-lvh">
                <div class="w-1/2 flex flex-col h-fit  bg-gray-100  justify-between items-center">
                    <Link :href="'/'" class="w-full text-center border py-4 text-xl font-bold">
                    Inicio</Link>
                    <Link :href="'/somos-newkool'" class="w-full text-center border py-4 text-xl font-bold">
                    ¿Quiénes somos?</Link>



                    <div @click="activateOptions()"
                        class=" w-full text-center border py-4 text-xl font-bold cursor-pointer">
                        Productos</div>


                    <Link :href="'/contacto'" class="w-full text-center border py-4 text-xl font-bold">
                    Contacto
                    </Link>

                    <Link :href="'#'" class="w-full text-center border py-4 text-xl font-bold">
                    Servicio Técnico
                    </Link>

                </div>


                <div class="w-1/2 flex flex-col h-fit bg-gray-100 justify-between items-center ">
                    <div class="font-bold py-4 text-xl">
                        Productos</div>






                    <div @click="changeSubOption(1)"
                        class="flex justify-center border space-x-2 items-center py-3 w-full ">
                        <h2>
                            Aires Acondicionados

                        </h2>
                        <font-awesome-icon :icon="['fas', 'chevron-down']" />


                    </div>

                    <div v-if="subOption == 1" class="bg-neutral-200  rounded-xl  flex flex-col">
                        <Link :href="'/linea-blanca/Aires-acondicionados/ventana'"
                            class="flex justify-center border border-neutral-400 h-full  items-center py-3 w-screen">
                        Ventana
                        </Link>
                        <Link :href="'/linea-blanca/Aires-acondicionados/split'"
                            class="flex justify-center border border-neutral-400 h-full  items-center py-3 w-screen">
                        Split
                        </Link>
                        <Link :href="'/linea-blanca/Aires-acondicionados/piso'"
                            class="flex justify-center border border-neutral-400 h-full  items-center py-3 w-screen">
                        Piso Techo
                        </Link>
                        <Link :href="'/linea-blanca/Aires-acondicionados/portatiles'"
                            class="flex justify-center border border-neutral-400 h-full  items-center py-3 w-screen">
                        Portatil
                        </Link>

                    </div>

                    <div @click="changeSubOption(2)"
                        class="flex justify-center border space-x-2 items-center py-3 w-full">
                        <h2>
                            Audio

                        </h2>
                        <font-awesome-icon :icon="['fas', 'chevron-down']" />


                    </div>
                    <div v-if="subOption == 2" class="bg-neutral-200  flex flex-col">
                        <Link :href="'/linea-blanca/Audio/torre-de-sonido'"
                            class="flex justify-center border border-neutral-400 h-full  items-center py-3 w-screen">
                        Torre de Sonido
                        </Link>
                        <Link :href="'/linea-blanca/Audio/portable'"
                            class="flex justify-center border border-neutral-400 h-full  items-center py-3 w-screen">
                        Portables
                        </Link>


                    </div>


                    <Link :href="'/linea-blanca/Campana'"
                        class="flex justify-center border space-x-2 items-center py-3 w-full ">
                    Campanas
                    </Link>

                    <div @click="changeSubOption(3)"
                        class="flex justify-center border space-x-2 items-center py-3 w-full cursor-pointer ">
                        <h2>
                            Cocinas

                        </h2>
                        <font-awesome-icon :icon="['fas', 'chevron-down']" />


                    </div>

                    <div v-if="subOption == 3" class="bg-neutral-200  flex flex-col">
                        <Link :href="'/linea-blanca/Cocinas/cocina-gas'"
                            class="flex justify-center border border-neutral-400 h-full  items-center py-3 w-screen">
                        Cocinas a Gas

                        </Link>




                    </div>

                    <div @click="changeSubOption(4)"
                        class="flex justify-center border space-x-2 items-center py-3 w-full ">
                        <h2>
                            Congeladores

                        </h2>
                        <font-awesome-icon :icon="['fas', 'chevron-down']" />


                    </div>


                    <div v-if="subOption == 4" class="bg-neutral-200  flex flex-col">
                        <Link href="/linea-blanca/Congeladores/verticales"
                            class="flex justify-center border border-neutral-400 h-full  items-center py-3 w-screen">
                        Verticales
                        </Link>
                        <Link href="/linea-blanca/Congeladores/horizontales"
                            class="flex justify-center border border-neutral-400 h-full  items-center py-3 w-screen">
                        Horizontales
                        </Link>




                    </div>

                    <div @click="changeSubOption(5)"
                        class="flex justify-center border space-x-2 items-center py-3 w-full ">
                        <h2>
                            Dispensadores

                        </h2>
                        <font-awesome-icon :icon="['fas', 'chevron-down']" />


                    </div>

                    <div v-if="subOption == 5" ref="target" class="bg-neutral-200  flex flex-col">
                        <Link :href="'/linea-blanca/Dispensadores/carga-superior'"
                            class="flex justify-center border border-neutral-400 h-full  items-center py-3 w-screen">
                        Carga Superior
                        </Link>
                        <Link :href="'/linea-blanca/Dispensadores/carga-interna'"
                            class="flex justify-center border border-neutral-400 h-full  items-center py-3 w-screen">
                        Carga Interna
                        </Link>




                    </div>


                    <Link :href="'/linea-blanca/Exibidoras-vitrinas'"
                        class="flex justify-center border space-x-2 items-center py-3 w-full ">
                    Exibidoras Vitrinas
                    </Link>

                    <Link :href="'/linea-blanca/Hornos'"
                        class="flex justify-center border space-x-2 items-center py-3 w-full ">
                    Hornos
                    </Link>




                    <div @click="changeSubOption(6)"
                        class="flex justify-center border space-x-2 items-center py-3 w-full ">
                        <h2>
                            Lavadoras

                        </h2>
                        <font-awesome-icon :icon="['fas', 'chevron-down']" />


                    </div>

                    <div v-if="subOption == 6" class="bg-neutral-200 flex flex-col">
                        <Link :href="'/linea-blanca/Lavadoras/doble-tina'"
                            class="flex justify-center border border-neutral-400 h-full  items-center py-3 w-screen">
                        Doble Tina
                        </Link>
                        <Link :href="'/linea-blanca/Lavadoras/carga-superior'"
                            class="flex justify-center border border-neutral-400 h-full  items-center py-3 w-screen">
                        Carga Superior
                        </Link>
                        <Link :href="'/linea-blanca/Lavadoras/torre-de-lavado'"
                            class="flex justify-center border border-neutral-400 h-full  items-center py-3 w-screen">
                        Torre de lavado
                        </Link>
                        <Link :href="'/linea-blanca/Lavadoras/lavaseca'"
                            class="flex justify-center border border-neutral-400 h-full  items-center py-3 w-screen">
                        Lavaseca
                        </Link>
                        <Link :href="'/linea-blanca/Lavadoras/secadora'"
                            class="flex justify-center border border-neutral-400 h-full  items-center py-3 w-screen">
                        Secadora
                        </Link>



                    </div>


                    <Link :href="'/linea-blanca/Protectores-de-voltaje'"
                        class="flex justify-center border space-x-2 items-center py-3 w-full ">
                    Protectores de Voltaje
                    </Link>


                    <div @click="changeSubOption(7)"
                        class="flex justify-center border space-x-2 items-center py-3 w-full cursor-pointer ">
                        <h2>
                            Refrigeradoras

                        </h2>
                        <font-awesome-icon :icon="['fas', 'chevron-down']" />


                    </div>


                    <div  v-if="subOption == 7"
                        class="bg-neutral-200  flex flex-col">
                        <Link :href="'/linea-blanca/Refrigeradoras/top-mount'"
                            class="flex justify-center border border-neutral-400 h-full  items-center py-3 w-screen">
                        Top mount (Congelador superior )
                        </Link>
                        <Link :href="'/linea-blanca/Refrigeradoras/side-by-side'"
                            class="flex justify-center border border-neutral-400 h-full  items-center py-3 w-screen">
                        Side by Side (Dos puertas)
                        </Link>
                        <Link :href="'/linea-blanca/Refrigeradoras/tipo-frances'"
                            class="flex justify-center border border-neutral-400 h-full  items-center py-3 w-screen">
                        Tipo Frances
                        </Link>
                        <Link :href="'/linea-blanca/Refrigeradoras/ejecutivas'"
                            class="flex justify-center border border-neutral-400 h-full  items-center py-3 w-screen">
                        Ejecutivas / Mini Bares
                        </Link>



                    </div>


                    <Link :href="'/linea-blanca/Topes'"
                        class="flex justify-center border space-x-2 items-center py-3 w-full ">
                    Topes
                    </Link>



                    <div @click="changeSubOption(8)"
                        class="flex justify-center border space-x-2 items-center py-3 w-full ">
                        <h2>
                            TV y Audio

                        </h2>
                        <font-awesome-icon :icon="['fas', 'chevron-down']" />


                    </div>

                    <div v-if="subOption == 8" 
                        class="bg-neutral-200  flex flex-col">
                        <Link :href="'/linea-blanca/TV-y-audio/32-pulgadas'"
                            class="flex justify-center border border-neutral-400 h-full  items-center py-3 w-screen">
                        32"
                        </Link>
                        <Link :href="'/linea-blanca/TV-y-audio/43-pulgadas'"
                            class="flex justify-center border border-neutral-400 h-full  items-center py-3 w-screen">
                        43"
                        </Link>
                        <Link :href="'/linea-blanca/TV-y-audio/50-pulgadas'"
                            class="flex justify-center border border-neutral-400 h-full  items-center py-3 w-screen">
                        50"
                        </Link>


                    </div>

                      <Link :href="'/linea-blanca/Vineras'"
                        class="flex justify-center border space-x-2 items-center py-3 w-full ">
                    Vineras
                    </Link>







                </div>

            </div>

        </Transition>
        <div class="flex items-center justify-center w-full">
            <hr class="border-black w-11/12 h-1">
        </div>
    </div>
</template>

<style scoped></style>
