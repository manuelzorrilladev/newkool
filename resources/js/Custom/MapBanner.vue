<script setup>
import { computed, ref } from 'vue';
import 'vue3-carousel/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'

const carouselConfig = {
    wrapAround: true,
    dir: 'ttb',
    gap: 15,
    autoplay: 3000,
    pauseAutoplayOnHover: true
}
const breakpoints = {
    700: {
        itemsToShow: 1,
        height:'200'
    },
    1000: {
        itemsToShow: 3,
        height: '550',

    }
}
const counter = ref(0);
const cords = computed(() => {
    return states.value[counter.value].cords;
});
const states = ref([

    { name: 'Anzoátegui', image: '/assets/route-images/estados/ANZOATEGUI.png', cords: 'top-[48%] right-[25%]' },
    { name: 'Aragua', image: '/assets/route-images/estados/ARAGUA.png', cords: ' top-[13%] right-[54%]' },
    { name: 'Barinas', image: '/assets/route-images/estados/BARINAS.png', cords: 'top-[31%] right-[78%]' },
    { name: 'Bolívar', image: '/assets/route-images/estados/BOLIVAR.png', cords: 'top-[50%] right-[32%]' },
    { name: 'Distrito Capital', image: '/assets/route-images/estados/DISTRITO-CAPITAL.png', cords: 'top-[12.5%] right-[57%]' },
    { name: 'Falcón', image: '/assets/route-images/estados/FALCON.png', cords: 'top-[8%] right-[75%]' },
    { name: 'Lara', image: '/assets/route-images/estados/LARA.png', cords: 'top-[16%] right-[75%]' },
    { name: 'Mérida', image: '/assets/route-images/estados/MERIDA.png', cords: 'top-[28%] right-[84%]' },
    { name: 'Miranda', image: '/assets/route-images/estados/MIRANDA.png', cords: 'top-[14%] right-[54%]' },
    { name: 'Monagas', image: '/assets/route-images/estados/MONAGAS.png', cords: 'top-[22%] right-[31.5%]' },
    { name: 'Portuguesa', image: '/assets/route-images/estados/PORTUGUESA.png', cords: 'top-[25%] right-[72%]' },
    { name: 'Sucre', image: '/assets/route-images/estados/SUCRE.png', cords: 'top-[13%] right-[33%] ' },
    { name: 'Táchira', image: '/assets/route-images/estados/TACHIRA.png', cords: 'top-[34%] right-[89.5%]' },
    { name: 'Trujillo', image: '/assets/route-images/estados/TRUJILLO.png', cords: 'top-[22%] right-[80%]' },
    { name: 'Vargas', image: '/assets/route-images/estados/VARGAS.png', cords: 'top-[11.5%] right-[54%]' },
    { name: 'Zulia', image: '/assets/route-images/estados/ZULIA.png', cords: 'top-[18%] right-[92%]' },])
</script>

<template>
    <div class="flex flex-col md:flex-row items-center justify-center h-fit my-10 gap-8 relative">
        <div
            class="flex flex-col md:flex-row justify-center w-11/12  py-10 rounded-xl bg-gray-100 relative md:h-[90vh]">

            <header class="h-fit flex flex-col items-center w-full md:w-1/4 ">
                <h2 class="my-4 text-3xl text-center text-newkool-red">
                    Conoce los estados <br> donde puedes adquirir <br>
                    <strong>nuestros productos.</strong>
                </h2>

            </header>
            <div class="w-full md:w-1/2 relative">

                <font-awesome-icon :icon="['fas', 'location-dot']" :class="cords"
                    class="text-gray-400 text-4xl absolute  duration-500" />
                <img class="w-full" src="/assets/route-images/estados/map.png" alt="mapa-de-venezuela">
            </div>
            <div class="w-full md:w-1/4  h-full py-10 px-6 md:px-0 md:pr-10">

                <Carousel v-bind="carouselConfig" :breakpoints="breakpoints" v-model="counter">

                    <Slide v-for="(state, key) in states"
                        class="relative w-full  border border-black h-fit flex flex-col items-center justify-center rounded-xl bg-white shadow-2xs py-2 cursor-pointer duration-200 "
                        @click="counter = key" :key="state.name"
                        :class="key == counter ? 'border-newkool-red border-4' : ''">
                        <img :src="state.image" alt="" class="w-24  pb-3">
                        <h2 class="font-bold text-newkool-red text-2xl pl-2 w-full">{{ state.name }}</h2>
                    </Slide>

                    <template #addons>
                        <Navigation />
                    </template>
                </Carousel>

            </div>
        </div>

    </div>
</template>
