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

    { src: "/assets/route-images/slider/aires.png", name: "Aires Acondicinados", link: "#" },
    { src: "/assets/route-images/slider/audio.png", name: "Audio", link: "#" },
    { src: "/assets/route-images/slider/campana.png", name: "Campanas", link: "#" },
    { src: "/assets/route-images/slider/cocina.png", name: "Cocinas", link: "#" },
    { src: "/assets/route-images/slider/congelador.png", name: "Congeladores", link: "#" },
    { src: "/assets/route-images/slider/dispensador.png", name: "Dispensadores", link: "#" },
    { src: "/assets/route-images/slider/exibidora.png", name: "Exibidoras comerciales", link: "#" },
    { src: "/assets/route-images/slider/horno.png", name: "Hornos", link: "#" },
    { src: "/assets/route-images/slider/lavadora.png", name: "Lavadoras", link: "/linea-blanca/Lavadoras" },
    { src: "/assets/route-images/slider/refrigerador.png", name: "Refrigeradoras", link: "/linea-blanca/Refrigeracion" },
    { src: "/assets/route-images/slider/tope.png", name: "Topes", link: "#" },
    { src: "/assets/route-images/slider/tv.png", name: "TV y Audio", link: "#" }
])


const breakpoints = {
    1050: 5,
    850: 4,
    650: 3,
    450: 2,
    200: 1,
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
                :infinite="true" :auto-play="3000" animation-type="translateUp">
                <Link v-for="item in items" id="lavadora" :href="item.link" :key="item.name"
                    class="w-[170px] h-[170px] lg:w-[250px] lg:h-[250px] border shadow  rounded-xl p-4 flex flex-col items-center justify-center gap-4 text-gray-700 cursor-pointer duration-200 hover:scale-110 ">
                <img :src="item.src" :alt="item.name" class="w-2/3 h-2/3 fill-newkool-red">
                <h2 class="font-bold text-xl text-newkool-red">{{ item.name }}</h2>
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
