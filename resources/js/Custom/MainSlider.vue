<script setup>
import { computed, onMounted, ref, useTemplateRef, watch } from 'vue';
import PrimaryButton from '../Components/PrimaryButton.vue'
import { useElementSize, useMouseInElement } from '@vueuse/core'
import ApplicationLogo from '../Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';

const validator = ref(0)
const sliderV = ref([true, false, false, false, false,false])
const target = useTemplateRef('el')

const { x, y, isOutside } = useMouseInElement(target)



function sliderChanged(pos) {

    for (let index = 0; index < sliderV.value.length; index++) {
        index == pos ? sliderV.value[index] = true : sliderV.value[index] = false
    }

}




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
    return sliderV.value[item] == true ? 'translate-x-0' : 'translate-x-full'

}




let interval
const autoPlayInterval = () => {
    interval = setInterval(() => {
        update(1)
    }, 4000)
}

const stopAutoPlay = () => {
    clearInterval(interval)
}
// setInterval(autoPlay,4000)


onMounted(() => {
    validator.value = 0
    autoPlayInterval()
})
watch(isOutside, () => {
    if (isOutside.value == false) {
        stopAutoPlay()
        console.log("Is not outside");
    } else {
        autoPlayInterval()
        console.log("Is outside");
    }
})
</script>

<template>
    <section ref="el">

        <div class=" w-full h-fit relative  shadow-xl">
            <div class="flex relative  justify-start border  h-full overflow-hidden bg-white">


                <div class="bg-newkool-red relative -z-10">
                    <img src="/assets/banner-images/nuevo/banner-lavadora-white.png" alt="lavadora"
                        class="hidden md:block">
                    <img src="/assets/banner-images/nuevo/banner-lavadora-white-mobile.png" alt="lavadora"
                        class="block md:hidden w-full">
                </div>


                   <div class="absolute w-full duration-500" :class="checkSlider3(5)">
                    <img src="/assets/banner-images/nuevo/banner-exibidora.jpg" alt="exibidora-newkool"
                        class="hidden md:block">
                    <img src="/assets/banner-images/nuevo/banner-exibidora-mobile.jpg" alt="exibidora-newkool"
                        class="block md:hidden w-full">
                </div>
                <div class="absolute w-full  duration-500" :class="checkSlider3(4)">
                    <img src="/assets/banner-images/nuevo/banner-televisores.jpg" alt="televisores-banner"
                        class="hidden md:block">
                    <img src="/assets/banner-images/nuevo/banner-televisores-mobile.jpg" alt="televisores-banner"
                        class="block md:hidden w-full">
                </div>
                <div class="absolute w-full  duration-500" :class="checkSlider3(3)">
                    <img src="/assets/banner-images/nuevo/banner-corneta.jpg" alt="corneta-banner"
                        class="hidden md:block">
                    <img src="/assets/banner-images/nuevo/banner-corneta-mobile.jpg" alt="corneta-banner"
                        class="block md:hidden w-full">
                </div>



             

                <div class="absolute w- duration-500" :class="checkSlider3(2)">

                    <img src="/assets/banner-images/nuevo/banner-congelador.jpg" alt="congelador"
                        class="hidden md:block">
                    <img src="/assets/banner-images/nuevo/banner-congelador-mobile.jpg" alt="congelador"
                        class="block md:hidden w-full">



                </div>





                <div class="absolute w-full duration-500" :class="checkSlider3(1)">

                    <img src="/assets/banner-images/nuevo/banner-cocina.jpg" alt="cocina-banner"
                        class="hidden md:block">
                    <img src="/assets/banner-images/nuevo/banner-cocina-mobile.jpg" alt="cocina-banner"
                        class="block md:hidden w-full">
                </div>
                <div class="absolute w-full duration-500" :class="checkSlider3(0)">

                    <img src="/assets/banner-images/nuevo/banner-main.png" alt="banner principal newkool"
                        class="hidden md:block">
                    <img src="/assets/banner-images/nuevo/banner-main-mobile.png" alt="banner princpial newkool"
                        class="block md:hidden w-full">
                </div>






            </div>
            <div class="h-20  absolute z-10 bottom-0 w-full flex justify-center items-center">
                <div class="flex gap-3">
                    <div v-for="(item, index) in sliderV" :key="index"
                        class="w-3 h-3 rounded-full cursor-pointer p-2 border-2 duration-200 hover:bg-white"
                        :class="item == true ? 'bg-white' : 'bg-transparent'" @click="sliderChanged(index)"></div>
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
