<script setup>

import NavDesktop from '../Components/NavDesktop.vue'
import NavMobile from '../Components/NavMobile.vue'

</script>

<template>
    <nav class="relative  z-40 bg-white">
        <NavDesktop />
        <NavMobile />
        <div class="flex justify-center md:hidden h-24">
            <hr class="w-11/12">
        </div>
    </nav>
</template>

