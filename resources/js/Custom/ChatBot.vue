<script setup>
import { text } from '@fortawesome/fontawesome-svg-core';
import ApplicationLogo from '../Components/ApplicationLogo.vue';
import { computed, ref, useTemplateRef, watch } from 'vue';
import { useScroll, useElementSize } from '@vueuse/core'
import { router } from '@inertiajs/vue3';

const checkRoute = computed(()=>{
  if(actualRoute == '/contacto'){
    return false
  }else{
    if( actualRoute == '/servicio-tecnico'){
      return false
    }
    return  true
  }
})
const actualRoute = router.page.url

const el = useTemplateRef('chat')
const logo = ref(null)
const { x, y, isScrolling, arrivedState, directions } = useScroll(el,{ behavior: 'smooth' })

const containerSize = ref([0, ' w-0 h-16']);
const messages = ref([
  { text: '¡Hola! ¿En qué podemos ayudarte hoy?', sender: 'bot' },
  { text: 'Para brindarte la mejor asistencia, por favor elige una de las siguientes opciones: <br> <strong>1:Información General / Ventas </strong><br> <strong>2: Soporte Técnico </strong> ', sender: 'bot' },
])
const currentMessage = ref()

const botMessages = ref([
  { text: 'Para brindarte la mejor asistencia, por favor elige una de las siguientes opciones: <br> <strong>1:Información General / Ventas </strong><br> <strong>2: Soporte Técnico </strong> ', sender: 'bot' },
  { text: '¿Estás buscando ponerte en contacto con nosotros para información general o ventas? <br> Escribe a nuestro WhatsApp: 0414 881 1719. Envía un correo electrónico a: atencionalcliente@newkoolamerica.com', sender: 'bot' },
  { text: '¿Necesitas solicitar soporte técnico para tus electrodomésticos? Escribe a nuestro WhatsApp de servicio técnico: 0414-881-1721', sender: 'bot' }
])

function sendMessage() {
  messages.value.push({ text: currentMessage.value, sender: 'user' });
  if (currentMessage.value == 1) {

    messages.value.push(botMessages.value[1]);
  } else if (currentMessage.value == 2) {
    messages.value.push(botMessages.value[2]);

  }
 
  messages.value.push(botMessages.value[0]);
  currentMessage.value = '';
  setTimeout(() => {
    scrollToBottom();
  }, 100);
  
}

function scrollToBottom() {
  logo.value.click()
  logo.value.click()
}

function testClick() {
  if (containerSize.value[0] === 1) {
    containerSize.value[0] = 0;
    containerSize.value[1] = 'w-full h-16';
    setTimeout(() => {
      containerSize.value[1] = 'w-0 h-16';

    }, 300);

  } else {
    containerSize.value[0] = 1;
    containerSize.value[1] = 'w-full h-16';
    setTimeout(() => {
      containerSize.value[1] = 'w-full h-[500px]';

    }, 300);
  }

  messages.value = [
  { text: '¡Hola! ¿En qué podemos ayudarte hoy?', sender: 'bot' },
  { text: 'Para brindarte la mejor asistencia, por favor elige una de las siguientes opciones: <br> <strong>1:Información General / Ventas </strong><br> <strong>2: Soporte Técnico </strong> ', sender: 'bot' },
]
}



</script>

<template>
  <section v-if="checkRoute" class="fixed bottom-10 left-10  z-50 flex flex-col  w-11/12  gap-2 md:w-1/4  ">
    <div :class="[containerSize]" class=" inverted-radius bg-newkool-red duration-200 relative z-40">
      <div ref="logo" class="h-[64px] w-full flex justify-center" @click="y += 1000 ">
        <ApplicationLogo  color="fill-white" class="w-1/3"  />
      </div>
      <div ref="chat" class="h-[360px] w-full  overflow-y-scroll bg-gray-100 px-4 pb-4">
        <div v-for="item in messages" class="mt-4 flex items-center w-full justify-start " :key="item"
          :class="item.sender == 'bot' ? 'flex-row ' : ' flex-row-reverse gap-4'">
          <img src="/assets/favicon.png" alt="" class="w-10 h-10  rounded-full bg-white">
          <div class="ml-4 bg-white p-4 rounded-xl">
            <p class="text-lg font-semibold text-gray-800">NewKool Comercial</p>
            <p class="text-sm text-gray-600" v-html="item.text"></p>
          </div>
        </div>
      </div>
      <div class="h-[72px] flex items-center ">
        <div class="flex items-center w-full px-4 relative">
          <div class="w-[80px] block"></div>
          <input type="number" v-model="currentMessage"
            class="w-full h-full px-4 mx-2 text-lg  bg-white border border-gray-300 rounded-[30px] focus:outline-none focus:ring-2 focus:ring-newkool-red"
            placeholder="Que necesitas..." />
          <button
            class=" text-white bg-newkool-red cursor-pointer border border-newkool-red duration-200 hover:text-newkool-red hover:bg-white rounded-full  absolute right-8 w-8 h-8"
            @click="sendMessage()">
            <font-awesome-icon :icon="['fas', 'paper-plane']" class="" />
          </button>
        </div>
      </div>

    </div>


    <button
      class="w-16 h-16 absolute z-50 bottom-1 left-1 text-white bg-newkool-red cursor-pointer border border-newkool-red duration-200 hover:text-newkool-red hover:bg-white rounded-full text-3xl"
      @click="testClick()">
      <font-awesome-icon :icon="['fas', 'paper-plane']" class="" />
    </button>
    <h2 class="absolute bottom-1 font-newkool text-[#808080] left-20 text-2xl z-30">Comercial</h2>

  </section>
</template>

<style scoped>
/* HTML: <div class="inverted-radius"></div> */
.inverted-radius {
  --r: 25px;
  /* the radius */
  --s: 30px;
  /* size of inner curve */
  --x: 20px;
  /* horizontal offset (no percentage) */
  --y: 20px;
  /* vertical offset (no percentage) */

  aspect-ratio: 1;
  border-radius: var(--r);
  --_m: /calc(2*var(--r)) calc(2*var(--r)) radial-gradient(#000 70%, #0000 72%);
  --_g: conic-gradient(from 180deg at var(--r) calc(100% - var(--r)), #0000 25%, #000 0);
  --_d: (var(--s) + var(--r));
  mask:
    calc(var(--_d) + var(--x)) 100% var(--_m),
    0 calc(100% - var(--_d) - var(--y)) var(--_m),
    radial-gradient(var(--s) at 0 100%, #0000 99%, #000 calc(100% + 1px)) calc(var(--r) + var(--x)) calc(-1*var(--r) - var(--y)),
    var(--_g) calc(var(--_d) + var(--x)) 0,
    var(--_g) 0 calc(-1*var(--_d) - var(--y));
  mask-repeat: no-repeat;
}
</style>