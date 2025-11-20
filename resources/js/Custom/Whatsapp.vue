<script setup>
import { computed } from 'vue';
import { router } from '@inertiajs/vue3';

const checkRoute = computed(()=>{
  if(actualRoute == '/contacto'){
    return "https://api.whatsapp.com/send?phone=584148811719&text=Hola%20NewKool,%20me%20gustaria%20saber%20mas%20sobre%20sus%20productos."
  }else{
  
    return  "https://api.whatsapp.com/send?phone=584148811721&text=Hola%20NewKool,%20me%20gustaria%20saber%20mas%20sobre%20sus%20productos."
  }
})
const actualRoute = router.page.url

const goTo = computed(()=>{
  return actualRoute == '/contacto'
})


</script>
<template>

    <a v-if="goTo"  :href="checkRoute"
      class="w-16 h-16 fixed bottom-10 right-6 text-white bg-green-600 cursor-pointer border border-green-600 duration-200 hover:text-green-600 hover:bg-white rounded-full text-3xl z-50 flex items-center justify-center"
      target="_blank"
      @click="">
      <font-awesome-icon :icon="['fab', 'whatsapp']" class="" />
    </a>
    
</template>