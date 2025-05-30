<script setup>
import { computed, ref, watch } from 'vue';
import PrimaryButton from '../Components/PrimaryButton.vue'

import ApplicationLogo from '../Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';


const validator = ref(0)
const sliderV = ref([true, false, false, false, false])


function sliderChanged(pos) {

    for (let index = 0; index < sliderV.value.length; index++) {
        index == pos ? sliderV.value[index] = true : sliderV.value[index] = false
    }

}

function autoPlay() {

    if (validator.value < sliderV.value.length - 1) {
        validator.value = validator.value + 1
    } else {
        validator.value = 0
    }


    sliderChanged(validator.value)
}

// setInterval(autoPlay,4000)

function update(type) {
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







</script>

<template>
    <section>


        <div class=" w-full h-fit flex items-center justify-center mt-10">
            <div class="flex relative  justify-start border w-11/12 border-black h-full overflow-hidden bg-newkool-red">
                <div class="absolute top-1/2 z-10 left-4 cursor-pointer" @click="update(-1)">
                    <font-awesome-icon :icon="['fas', 'caret-left']"
                        class="text-3xl text-newkool-red hover:text-white duration-200 hover:bg-newkool-red p-3 rounded-lg" />
                </div>
                <div class="bg-newkool-red relative -z-10">
                    <img src="/assets/banner-images/banner-lavadora-white.png" alt="lavadora" class="hidden md:block">
                    <img src="/assets/banner-images/banner-lavadora-white-mobile.png" alt="lavadora"
                        class="block md:hidden w-full">

                </div>

                    <div class="absolute w- duration-500" :class="checkSlider3(4)">
                        <div class="absolute z-0 flex flex-col w-full h-full items-center md:items-start md:justify-center md:left-20 mt-10 md:mt-0">
                            <h2 class="text-gray-600 font-light text-2xl md:text-4xl lg:text-5xl pl-2">Productos de última</h2>
                            <h2 class="text-newkool-red text-5xl  md:text-7xl lg:text-8xl font-extrabold ">Generacíon</h2>
                            <p class="w-1/3 text-gray-600 pl-2  mt-2 hidden md:block">Con tecnología <strong>NO FROST</strong>, tus alimentos
                                estarán hidratados y jugosos por más tiempo, refrigeracion que te brindará la tranquilidad que
                                necesitas.</p>
                            <PrimaryButton path="/" class="mt-4 md:mt-10">
                                VER MÁS
                            </PrimaryButton>
                        </div>
                        <img src="/assets/banner-images/banner-nevera-white.png" alt="lavadora" class="hidden md:block">
                        <img src="/assets/banner-images/banner-nevera-white-mobile.png" alt="lavadora" class="block md:hidden">
                    </div>

                <div class="absolute w- duration-500" :class="checkSlider3(3)">
                    <div class="absolute z-0 flex flex-col w-full h-full   items-center text-center md:text-right md:justify-center md:right-20 mt-5 md:mt-0">
                        <h2 class="text-gray-600 font-light text-2xl md:text-4xl  md:w-1/3 ">Nuestras</h2>
                        <h2 class="text-gray-700 text-[8vw] md:text-[6vw] font-extrabold md:w-1/3 leading-none">Lavadoras</h2>
                        <p class="w-1/3 text-gray-600  text-md lg:text-xl text-right hidden md:block">Dile adios a las manchas y hola a la frescura con
                            nuestras lavadoras de alto rendimiento.</p>
                        <div class="w-1/3 md:py-4 md:h-32 flex  flex-col lg:justify-end items-center">
                            <Link path="/"
                                class=" text-lg px-5 lg:mt-4 rounded-xl bg-white text-neutral-600 border-neutral-600 hover:bg-newkool-red hover:text-white w-fit">
                                VER MÁS
                            </Link>
                        </div>
                    </div>
                    <img src="/assets/banner-images/banner-lavadora-black.png" alt="contacto" class="hidden md:block">
                    <img src="/assets/banner-images/banner-lavadora-black-mobile.png" alt="contacto" class="block md:hidden w-full">



                </div>

                <div class="absolute w-full duration-500" :class="checkSlider3(2)">
                    <div class="absolute z-0 flex flex-col w-full h-full items-center md:items-end md:justify-center mt-5 md:mt-0 md:right-20">
                        <h2 class="text-gray-600 font-light md:text-4xl lg:text-5xl">Nuestras</h2>
                        <h2 class="text-white text-5xl  md:text-7xl lg:text-8xl font-extrabold ">Neveras</h2>
                        <p class="w-1/3 text-white text-xl text-right hidden md:block">Tienen un diseño elegante y funcional, que
                            encajará a la perfección en tu cocina.</p>
                        <PrimaryButton path="/" class="md:mt-5 bg-[#d2bca6] text-neutral-600 border-neutral-600">
                            VER MÁS
                        </PrimaryButton>
                    </div>
                         <img src="/assets/banner-images/banner-nevera-black.png" alt="contacto" class="hidden md:block">
                    <img src="/assets/banner-images/banner-nevera-black-mobile.png" alt="contacto" class="block md:hidden w-full">
                </div>

                <div class="absolute w-full duration-500" :class="checkSlider3(1)">
                    <div class="absolute z-0 flex flex-col w-full h-full items-center md:justify-center">
                        <h2 class="text-newkool-red text-[8vw] md:text-[5vw] font-extrabold  mt-4 mb-0 md:mb-4">Electrodomesticos</h2>
                        <p class="w-1/3 text-gray-600 text-center hidden md:block">Que hacen de tu hogar un espacio acogedor y
                            confortable, donde disfrutarás de momentos inolvidables con tu familia y amigos.
                        </p>
                        <PrimaryButton path="/">
                            CONTACTANOS
                        </PrimaryButton>
                    </div>
                    <img src="/assets/banner-images/banner-marca-newkool.png" alt="neveras-newkool" class="hidden md:block">
                    <img src="/assets/banner-images/banner-marca-newkool-mobile.png" alt="neveras-newkool" class="block md:hidden w-full">

                    
                </div>

                <div class="absolute w-full  duration-500" :class="checkSlider3(0)">
                    <div class="absolute z-0 flex flex-col w-full h-full items-center md:items-end md:justify-center pt-4 md:pt-0 md:right-16">
                        <h2 class="text-gray-600 font-light md:text-4xl lg:text-5xl">Hacemos de tu</h2>
                        <h2 class="text-newkool-red text-3xl md:text-7xl lg:text-8xl font-extrabold md:my-2">Hogar</h2>
                        <h2 class="text-gray-600 font-light md:text-4xl lg:text-5xl">Tu lugar favorito</h2>
                        <p class="w-1/3 text-gray-600 text-right mt-2 hidden md:block">Dile adios a las manchas y hola a la frescura
                            con
                            nuestras lavadoras de alto rendimiento</p>
                        <PrimaryButton path="/" class="md:mt-5">
                            VER MÁS
                        </PrimaryButton>
                    </div>
                    <img src="/assets/banner-images/banner-lavadora-white.png" alt="lavadora" class="hidden md:block">
                    <img src="/assets/banner-images/banner-lavadora-white-mobile.png" alt="lavadora"
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
