<script setup>
import { computed, onMounted, ref, useTemplateRef, watch } from 'vue';
import PrimaryButton from '../Components/PrimaryButton.vue'
import { useElementSize } from '@vueuse/core'
import ApplicationLogo from '../Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';


const validator = ref(0)
const nestedValidator = ref(0)
const sliderV = ref([true, false, false, false])


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
    return sliderV.value[item] == true ? 'translate-x-0' : 'translate-x-full'
    
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
    update()
})

</script>

<template>
    <section>

        <div ref="el" class=" w-full h-fit relative  ">
            <div class="flex relative  justify-start border  h-full overflow-hidden bg-white">
               

                <div class="bg-newkool-red relative -z-10">
                    <img src="/assets/banner-images/nuevo/banner-lavadora-white.png" alt="lavadora"
                        class="hidden md:block">
                    <img src="/assets/banner-images/nuevo/banner-lavadora-white-mobile.png" alt="lavadora"
                        class="block md:hidden w-full">
                </div>

                <div class="absolute w-full  duration-500" :class="checkSlider3(3)">
                    <img src="/assets/banner-images/nuevo/banner-bocina.jpg" alt="bocina-banner"
                        class="hidden md:block">
                    <img src="/assets/banner-images/nuevo/banner-bocina-mobile.jpg" alt="bocina-banner"
                        class="block md:hidden w-full">
                </div>

                <!-- <div class="absolute w-full  duration-500" :class="checkSlider3(3)">
                   
                    <img src="/assets/banner-images/nuevo/banner-televisores.jpg" alt="televisores-banner"
                        class="hidden md:block">
                    <img src="/assets/banner-images/nuevo/banner-televisores-mobile.jpg" alt="televisores-banner"
                        class="block md:hidden w-full">

                </div> -->

                <div class="absolute w-full duration-500" :class="checkSlider3(2)">
                    <img src="/assets/banner-images/nuevo/banner-exibidora.jpg" alt="exibidora-newkool"
                        class="hidden md:block">
                    <img src="/assets/banner-images/nuevo/banner-exibidora-mobile.jpg" alt="exibidora-newkool"
                        class="block md:hidden w-full">
                </div>

                <div class="absolute w- duration-500" :class="checkSlider3(1)">
                    
                    <img src="/assets/banner-images/nuevo/banner-congelador.jpg" alt="congelador"
                        class="hidden md:block">
                    <img src="/assets/banner-images/nuevo/banner-congelador-mobile.jpg" alt="congelador"
                        class="block md:hidden w-full">



                </div>





                <div class="absolute w-full duration-500" :class="checkSlider3(0)">
                    
                    <img src="/assets/banner-images/nuevo/banner-cocina.jpg" alt="cocina-banner"
                        class="hidden md:block">
                    <img src="/assets/banner-images/nuevo/banner-cocina-mobile.jpg" alt="cocina-banner"
                        class="block md:hidden w-full">
                </div>
                <!-- <div class="absolute w-full duration-500" :class="checkSlider3(0)">
                    
                    <img src="/assets/banner-images/nuevo/banner.jpg" alt="cocina-banner"
                        class="hidden md:block">
                    <img src="/assets/banner-images/nuevo/banner.jpg" alt="cocina-banner"
                        class="block md:hidden w-full">
                </div> -->




             

            </div>
            <div class="h-20  absolute z-10 bottom-0 w-full flex justify-center items-center">
                <div class="flex gap-3">
                    <div v-for="(item, index) in sliderV" :key="index"
                        class="w-3 h-3 rounded-full cursor-pointer p-2 border-2 duration-200 hover:bg-white"
                        :class="item == true ? 'bg-white' : 'bg-transparent'"
                        @click="sliderChanged(index)"></div>
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
