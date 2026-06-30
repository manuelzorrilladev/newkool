<script setup>
import { router } from '@inertiajs/vue3';
const actualRoute = router.page.url
console.log(actualRoute);
</script>

<template>
    <footer
        class="h-fit lg:h-24 py-10 gap-6 flex  items-center justify-center md:justify-end bg-neutral-600 text-white relative z-30">
        


        <div class="flex flex-col  md:flex-row justify-around gap-4 md:gap-0  w-1/2 md:w-1/5 items-center">

            <h2 class="font-semibold text-xl">Síguenos en:</h2>
            <div class="flex justify-around  w-full md:w-1/2 items-center">
                <a href="https://www.facebook.com/profile.php?id=100093263747394" target="_blank">
                    <font-awesome-icon :icon="['fab', 'facebook-f']" class="text-2xl text-white hover:text-gray-300" />


                </a>
                <a href="https://www.instagram.com/newkoolamerica/" target="_blank">
                    <font-awesome-icon :icon="['fab', 'instagram']" class="text-2xl text-white hover:text-gray-300" />


                </a>
             
            </div>
        </div>
    </footer>
</template>

<style scoped></style>

