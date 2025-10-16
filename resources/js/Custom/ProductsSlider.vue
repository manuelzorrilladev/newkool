<script setup>
import { computed, ref } from "vue";
import SliderVue from "./SliderVue.vue";
import { useWindowSize } from "@vueuse/core";
import { Link } from '@inertiajs/vue3';

const counter = ref(0)
const { width, height } = useWindowSize();

const buttons = computed(() => {
    return width.value > 1050 ? false : true;
})

const items = ref([

    { src: "/assets/route-images/slider/aires.png", name: "Aires Acondicinados", link: "/linea-blanca/Aires-acondicionados" },
    { src: "/assets/route-images/slider/audio.png", name: "Audio", link: "/linea-blanca/Audio" },
    { src: "/assets/route-images/slider/campana.png", name: "Campanas", link: "/linea-blanca/Campanas" },
    { src: "/assets/route-images/slider/cocina.png", name: "Cocinas", link: "/linea-blanca/Cocinas" },
    { src: "/assets/route-images/slider/congelador.png", name: "Congeladores", link: "/linea-blanca/Congeladores" },
    { src: "/assets/route-images/slider/dispensador.png", name: "Dispensadores", link: "/linea-blanca/Dispensadores" },
    { src: "/assets/route-images/slider/exibidora.png", name: "Exibidoras comerciales", link: "/linea-blanca/Exibidoras-vitrinas" },
    { src: "/assets/route-images/slider/horno.png", name: "Hornos", link: "/linea-blanca/Hornos" },
    { src: "/assets/route-images/slider/lavadora.png", name: "Lavadoras", link: "/linea-blanca/Lavadoras" },
    { src: "/assets/route-images/slider/refrigerador.png", name: "Refrigeradoras", link: "/linea-blanca/Refrigeradoras" },
    { src: "/assets/route-images/slider/tope.png", name: "Topes", link: "/linea-blanca/Topes" },
    { src: "/assets/route-images/slider/tv.png", name: "Televisores", link: "/linea-blanca/Televisores" }
])


const breakpoints = {
    1280: 5,
    1050: 4,
    850: 3,
    650: 2,
    450: 1,
   
};

function MoveSlider(direction) {
    if (direction == "next") {
        counter.value++;
    } else if (direction == "prev") {
        counter.value--;
    }

}



</script>

<template>
    <main class="duration-200 bg-background">
        <section class="body w-full">

            <SliderVue :breakpoints="breakpoints" main-color="#752d2c" gap="25" navigation="outline-morph-bars" :buttons="true"
                :infinite="true"  animation-type="translateUp">
                <Link v-for="item in items" id="lavadora" :href="item.link" :key="item.name"
                    class="w-[250px] h-[250px] md:w-[200px] md:h-[200px] border shadow  rounded-xl p-4 flex flex-col items-center justify-center gap-4 text-gray-700 cursor-pointer duration-200 hover:scale-110 ">
                <img :src="item.src" :alt="item.name" class="w-1/3 h-1/3 fill-newkool-red">
                <h2 class="font-bold font-newkool text-xl text-newkool-red">{{ item.name }}</h2>
                </Link>





            </SliderVue>

        </section>
    </main>
</template>

<style scoped>
.open-cover {
    display: none !important;
}
</style>
