<script setup>
import { computed, onMounted, ref, useTemplateRef, watch } from 'vue';
import PrimaryButton from '../Components/PrimaryButton.vue'
import { useElementSize } from '@vueuse/core'
import ApplicationLogo from '../Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';


const validator = ref(0)
const nestedValidator = ref(0)
const sliderV = ref([true, false, false, false, false])


function sliderChanged(pos) {

    for (let index = 0; index < sliderV.value.length; index++) {
        index == pos ? sliderV.value[index] = true : sliderV.value[index] = false
    }

}

function autoPlay() {

    changeNested()
    if (validator.value < sliderV.value.length - 1) {
        validator.value = validator.value + 1
    } else {
        validator.value = 0
    }


    sliderChanged(validator.value)
}

// setInterval(autoPlay,4000)

function update(type) {
    changeNested()
    if (type == 1) {
        if (validator.value < sliderV.value.length - 1) {
            validator.value = validator.value + 1
        } else {
            validator.value = 0

        }

    } else {
        if (validator.value > 0) {
            validator.value = validator.value - 1
        } else {
            validator.value = sliderV.value.length - 1

        }

    }
    sliderChanged(validator.value)
}


// effect #3: alternate translation

const checkSlider3 = (item) => {
    if (item % 2 == 0) {
        return sliderV.value[item] == true ? 'translate-y-0' : 'translate-y-full'
    } else {
        return sliderV.value[item] == true ? 'translate-x-0' : 'translate-x-full'

    }
}



function changeNested() {
    nestedValidator.value = 0
    console.log("nested");
    const interval = setInterval(() => {
        if (nestedValidator.value < 5) {
            nestedValidator.value++
        } else {
            clearInterval(interval)
        }
    }, 300)
}


onMounted(() => {
    validator.value = 0
    changeNested()
})

</script>

<template>
    <section>

        <div ref="el" class=" w-full h-fit flex items-center justify-center mt-10">
            <div class="flex relative  justify-start border w-11/12 rounded-xl h-full overflow-hidden bg-newkool-red">
                <div class="absolute top-1/2 z-10 left-4 cursor-pointer" @click="update(-1)">
                    <font-awesome-icon :icon="['fas', 'caret-left']"
                        class="text-3xl text-newkool-red hover:text-white duration-200 hover:bg-newkool-red p-3 rounded-lg" />
                </div>


                <div class="bg-newkool-red relative -z-10">
                    <img src="/assets/banner-images/banner-lavadora-white.png" alt="lavadora" class="hidden md:block">
                    <img src="/assets/banner-images/banner-lavadora-white-mobile.png" alt="lavadora"
                        class="block md:hidden w-full">

                </div>

                <div class="absolute w-full  duration-500" :class="checkSlider3(4)">
                    <Transition name="slide-fade">

                        <div v-if="validator == 4"
                            class="absolute z-0 flex flex-col w-full h-full items-center md:items-start md:justify-center pt-4 md:pt-0 md:left-16 mt-4">

                            <h2 :class="nestedValidator >= 1 ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                                class="text-gray-600 font-light md:text-4xl lg:text-5xl  duration-300  ">Sonido Claro
                            </h2>

                            <h2 :class="nestedValidator >= 2 ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                                class="text-newkool-red text-2xl md:text-7xl lg:text-8xl font-extrabold md:my-2  duration-300  ">
                                Potencia Pura</h2>

                            <h2 :class="nestedValidator >= 3 ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                                class="text-gray-600 font-light text-center md:text-left text-xs md:text-xl duration-300  w-2/3 md:w-full">
                                Bocinas con tecnología avanzada para una experiencia auditiva única. <br><strong>¡No te
                                    lo puedes perder!</strong></h2>

                            <p :class="nestedValidator >= 4 ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                                class="w-1/3 text-gray-600  mt-2 hidden md:block  duration-300  text-xl"></p>

                            <PrimaryButton
                                :class="nestedValidator >= 5 ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                                path="/linea-blanca/Audio" class="md:mt-5 nested5 duration-300 ">VER MÁS
                            </PrimaryButton>
                        </div>
                    </Transition>
                    <img src="/assets/banner-images/banner-bocina.png" alt="bocina-banner" class="hidden md:block">
                    <img src="/assets/banner-images/banner-bocina-mobile.png" alt="bocina-banner"
                        class="block md:hidden w-full">

                </div>
                <div class="absolute w-full  duration-500" :class="checkSlider3(3)">
                    <Transition name="slide-fade">

                        <div v-if="validator == 3"
                            class="absolute z-0 flex flex-col md:w-1/2 h-full items-center md:items-start md:justify-center pt-4 md:pt-0 md:left-16 mt-4">

                            <h2 :class="nestedValidator >= 1 ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                                class="text-newkool-red text-xl md:text-4xl lg:text-6xl font-extrabold md:my-2  duration-300  ">
                                Diseño Sofisticado y Práctico
                            </h2>
                            <h2 :class="nestedValidator >= 2 ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                                class="text-gray-600 font-light md:text-2xl lg:text-4xl  duration-300  ">

                                para Realzar tu Hogar sin Esfuerzo
                            </h2>


                            <h2 :class="nestedValidator >= 3 ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                                class="text-gray-600 font-light text-justify md:text-left text-xs md:text-xl duration-300  w-10/12 md:w-2/3">
                                Disfruta de una experiencia visual envolvente con marcos frame design y un diseño
                                ergonómico que combina a la perfección con cualquier espacio. <br>Tecnología, estética y
                                comodidad en un solo equipo.</h2>


                            <PrimaryButton
                                :class="nestedValidator >= 4 ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                                path="/linea-blanca/Televisores" class="md:mt-5 nested5 duration-300 ">VER MÁS
                            </PrimaryButton>
                        </div>
                    </Transition>
                    <img src="/assets/banner-images/banner-televisores.png" alt="televisores-banner"
                        class="hidden md:block">
                    <img src="/assets/banner-images/banner-televisores-mobile.png" alt="televisores-banner"
                        class="block md:hidden w-full">

                </div>

                <div class="absolute w-full duration-500" :class="checkSlider3(2)">
                    <Transition name="slide-fade">

                        <div v-if="validator == 2"
                            class="absolute z-0 flex flex-col w-full h-full items-start md:justify-center pt-4 md:pt-0 left-4 md:left-16 mt-4">

                            <h2 :class="nestedValidator >= 1 ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                                class="text-gray-600 font-light md:text-4xl lg:text-5xl  duration-300  ">Tu producto
                            </h2>

                            <h2 :class="nestedValidator >= 2 ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                                class="text-newkool-red text-3xl md:text-7xl lg:text-8xl font-extrabold md:my-2  duration-300  ">
                                Siempre Fresco</h2>

                            <h2 :class="nestedValidator >= 3 ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                                class="text-gray-600 font-light  text-sm md:text-xl duration-300  w-1/2 md:w-full  ">
                                Exhibidoras refrigeradas para helados y jugos, con diseño atractivo y tecnología de
                                enfriamiento eficiente. <br><strong>¡Mantén tus productos frescos y al alcance de
                                    todos!.</strong> </h2>



                            <PrimaryButton
                                :class="nestedValidator >= 4 ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                                path="/linea-blanca/Exhibidoras-vitrinas" class="md:mt-5 nested5 duration-300 ">VER MÁS
                            </PrimaryButton>
                        </div>

                    </Transition>
                    <img src="/assets/banner-images/banner-exibidora.png" alt="exibidora-newkool"
                        class="hidden md:block">
                    <img src="/assets/banner-images/banner-exibidora-mobile.png" alt="exibidora-newkool"
                        class="block md:hidden w-full">



                </div>

                <div class="absolute w- duration-500" :class="checkSlider3(1)">
                    <Transition name="slide-fade">

                        <div v-if="validator == 1"
                            class="absolute z-0 flex flex-col w-full h-full items-center md:items-start md:justify-center pt-4 md:pt-0 md:left-16 mt-4">

                            <h2 :class="nestedValidator >= 1 ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                                class="text-gray-600 font-light md:text-4xl lg:text-5xl  duration-300  ">Almacenamiento
                                Inteligente
                            </h2>

                            <h2 :class="nestedValidator >= 2 ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                                class="text-newkool-red text-center md:text-left text-3xl md:text-7xl lg:text-8xl font-extrabold md:my-2  duration-300  ">
                                Frescura <br> Garantizada
                            </h2>

                            <h2 :class="nestedValidator >= 3 ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                                class="text-gray-600 font-light text-center md:text-left text-sm md:text-xl duration-300  w-10/12 md:w-2/5  ">
                                Elige uno de nuestros congeladores, con tecnología avanzada y un diseño que optimiza el
                                espacio, para mantener tus alimentos en perfectas condiciones por más tiempo.</h2>



                            <PrimaryButton
                                :class="nestedValidator >= 4 ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                                path="/linea-blanca/Cocinas" class="md:mt-5 nested5 duration-300 ">VER MÁS
                            </PrimaryButton>
                        </div>

                    </Transition>
                    <img src="/assets/banner-images/banner-congelador.png" alt="congelador" class="hidden md:block">
                    <img src="/assets/banner-images/banner-congelador-mobile.png" alt="congelador"
                        class="block md:hidden w-full">



                </div>





                <div class="absolute w-full duration-500" :class="checkSlider3(0)">
                    <Transition name="slide-fade">

                        <div v-if="validator == 0"
                            class="absolute z-0 flex flex-col w-full h-full items-center md:items-start md:justify-center pt-4 md:pt-0 md:left-16 mt-4">

                            <h2 :class="nestedValidator >= 1 ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                                class="text-gray-600 font-light md:text-4xl lg:text-5xl  duration-300  ">Comodidad y
                                Diseño
                            </h2>

                            <h2 :class="nestedValidator >= 2 ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                                class="text-newkool-red text-3xl md:text-7xl lg:text-8xl font-extrabold md:my-2  duration-300  ">
                                En un Solo Lugar
                            </h2>

                            <h2 :class="nestedValidator >= 3 ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                                class="text-gray-600 font-light text-center md:text-left  md:text-xl duration-300  w-2/3 md:w-md  ">
                                Elegí entre nuestras cocinas. <br>Pensadas para ofrecerte la mejor experiencia,
                                eficiencia y estilo que mejoran tu calidad de vida.</h2>



                            <PrimaryButton
                                :class="nestedValidator >= 4 ? 'opacity-100 -translate-y-6' : 'opacity-0 translate-y-0'"
                                path="/linea-blanca/Cocinas" class="md:mt-5 nested5 duration-300 ">VER MÁS
                            </PrimaryButton>
                        </div>

                    </Transition>
                    <img src="/assets/banner-images/banner-cocina.png" alt="cocina-banner" class="hidden md:block">
                    <img src="/assets/banner-images/banner-cocina-mobile.png" alt="cocina-banner"
                        class="block md:hidden w-full">
                </div>




                <div class="absolute z-10 top-1/2 right-3 cursor-pointer" @click="update(1)">
                    <font-awesome-icon :icon="['fas', 'caret-right']"
                        class="text-3xl text-newkool-red hover:text-white duration-200 hover:bg-newkool-red p-3 rounded-lg" />
                </div>


            </div>
        </div>



    </section>
</template>

<style scoped>
.slide-fade-enter-active {
    transition: all 0.3s ease-out;
}

.slide-fade-leave-active {
    transition: all 0.8s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-fade-enter-from,
.slide-fade-leave-to {
    transform: translateY(40px);
    opacity: 0;
}
</style>
