
<template>

    <a   href="https://api.whatsapp.com/send?phone=584148811721&text=Hola%20NewKool,%20me%20gustaria%20saber%20mas%20sobre%20sus%20productos."
      class="w-16 h-16 fixed bottom-10 right-6 text-white bg-green-600 cursor-pointer border border-green-600 duration-200 hover:text-green-600 hover:bg-white rounded-full text-3xl z-10 flex items-center justify-center"
      target="_blank"
      @click="">
      <font-awesome-icon :icon="['fab', 'whatsapp']" class="" />
    </a>
    <a
      class="w-16 h-16 animate-ping fixed bottom-10 right-6 text-white bg-green-600 cursor-pointer border border-green-600 duration-200 hover:text-green-600 hover:bg-white rounded-full text-3xl z-0 flex items-center justify-center"
      target="_blank"
    
      @click="">
      <font-awesome-icon :icon="['fab', 'whatsapp']" class="" />
    </a>
</template>