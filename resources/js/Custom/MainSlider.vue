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
    // changeNested()
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
        if (nestedValidator.value < 4) {
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
            <div class="flex relative justify-start w-11/12 h-full overflow-hidden bg-newkool-red rounded-xl">
                <div class="absolute top-1/2 z-10 left-4 cursor-pointer" @click="update(-1)">
                    <font-awesome-icon :icon="['fas', 'caret-left']"
                        class="text-3xl text-newkool-red hover:text-white duration-200 hover:bg-newkool-red p-3 rounded-lg" />
                </div>


                <div class="bg-newkool-red relative -z-10">
                    <img src="/assets/banner-images/banner-lavadora-white.png" alt="lavadora" class="hidden md:block">
                    <img src="/assets/banner-images/banner-lavadora-white-mobile.png" alt="lavadora"
                        class="block md:hidden w-full">

                </div>

               

                <div class="absolute w- duration-500" :class="checkSlider3(3)">
                    
                    <img src="/assets/banner-images/banner-congelador.png" alt="congelador" class="hidden md:block">
                    <img src="/assets/banner-images/banner-congelador-mobile.png" alt="congelador"
                        class="block md:hidden w-full">



                </div>

                <div class="absolute w-full duration-500" :class="checkSlider3(2)">
               
                    <img src="/assets/banner-images/banner-cocina.png" alt="cocina-banner" class="hidden md:block">
                    <img src="/assets/banner-images/banner-cocina-mobile.png" alt="cocina-banner"
                        class="block md:hidden w-full">
                </div>

                <div class="absolute w-full duration-500" :class="checkSlider3(1)">
                   
                    <img src="/assets/banner-images/banner-exibidora.png" alt="exibidora-newkool"
                        class="hidden md:block">
                    <img src="/assets/banner-images/banner-exibidora-mobile.png" alt="exibidora-newkool"
                        class="block md:hidden w-full">


                </div>

                <div class="absolute w-full  duration-500" :class="checkSlider3(0)">
                   
                    <img src="/assets/banner-images/banner-bocina.png" alt="bocina-banner" class="hidden md:block">
                    <img src="/assets/banner-images/banner-bocina-mobile.png" alt="bocina-banner"
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
