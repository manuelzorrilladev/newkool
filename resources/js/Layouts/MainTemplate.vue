<script setup>
import Navbar from '../Custom/Navbar.vue';
import Footer from '../Custom/Footer.vue';
import ChatBot from '../Custom/ChatBot.vue';


</script>

<template>
    <main class="font-roboto ">
        <Navbar/>
        <slot></slot>
        <Footer/> 
        <ChatBot/>
    </main>
</template>

<style scoped>

</style>

