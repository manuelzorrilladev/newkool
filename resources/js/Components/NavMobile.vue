<script setup>
import { Link } from "@inertiajs/vue3";

import ApplicationLogo from "../Components/ApplicationLogo.vue";
import { ref } from "vue";

const navActive = ref(false);
const activeAbsoluteClass = ref("left-0");
const subOption = ref(0);

function toggleNav() {
  navActive.value = !navActive.value;
  activeAbsoluteClass.value = "left-0";
}
function activateOptions() {
  if (activeAbsoluteClass.value == "left-0") {
    activeAbsoluteClass.value = "-left-full";
  } else {
    activeAbsoluteClass.value = "left-0";
  }
}

function changeSubOption(pos) {
  if (subOption.value == pos) {
    subOption.value = 0;
  } else {
    subOption.value = pos;
  }
}
</script>

<template>
  <div
    @focusout="toggleNav()"
    class="flex flex-col items-center justify-center h-24 text-newkool-gray lg:hidden absolute top-0 w-full z-20"
  >
    <div class="flex flex-row items-center justify-around w-full bg-white h-full">
      <Link :href="'/'">
        <ApplicationLogo class="w-36" color="fill-newkool-red" />
      </Link>
      <div
        class="border p-2 rounded-md cursor-pointer hover:shadow-md"
        @click="toggleNav"
      >
        <svg
          class="w-5 h-5"
          aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 17 14"
        >
          <path
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15"
          />
        </svg>
      </div>
    </div>
    <Transition
      enter-from-class="transform opacity-0 translate-x-20"
      enter-to-class="opacity-100 translate-x-0"
      enter-active-class="duration-200 ease-out"
      leave-from-class="opacity-100 translate-x-0"
      leave-to-class="transform opacity-0 -translate-x-20"
      leave-active-class="duration-200 ease-in"
    >
      <div
        v-if="navActive"
        class="absolute top-[89px] mt-1 z-10 w-full overflow-hidden py-0 bg-transparent h-lvh"
      >
        <div
          class="w-[200%] flex justify-end relative duration-300"
          :class="activeAbsoluteClass"
        >
          <div class="w-1/2 flex flex-col h-fit bg-gray-100 justify-between items-center">
            <Link :href="'/'" class="w-full text-center border py-4 text-xl font-bold">
              Inicio</Link
            >
            <Link
              :href="'/somos-newkool'"
              class="w-full text-center border py-4 text-xl font-bold"
            >
              Quienes somos</Link
            >

            <div
              @click="activateOptions()"
              class="w-full text-center border py-4 text-xl font-bold cursor-pointer"
            >
              Productos
            </div>

            <Link
              :href="'/atencion-al-cliente'"
              class="w-full text-center border py-4 text-xl font-bold"
            >
              Atención al cliente
            </Link>

            <Link
              :href="'/servicio-tecnico'"
              class="w-full text-center border py-4 text-xl font-bold"
            >
              Servicio Técnico
            </Link>
          </div>

          <div class="w-1/2 flex flex-col h-fit bg-gray-100 justify-between items-center">
            <div class="font-bold py-4 text-xl">Productos</div>

            <div
              @click="changeSubOption(1)"
              class="flex justify-center border space-x-2 items-center py-3 w-full"
            >
              <h2>Aires Acondicionados</h2>
              <font-awesome-icon :icon="['fas', 'chevron-down']" />
            </div>

            <div v-if="subOption == 1" class="bg-neutral-200 rounded-xl flex flex-col">
              <Link
                :href="'/linea-blanca/1-Aires-acondicionados/split'"
                class="flex justify-center border border-neutral-400 h-full items-center py-3 w-screen"
              >
                Split
              </Link>
              <Link
                :href="'/linea-blanca/1-Aires-acondicionados/ventana'"
                class="flex justify-center border border-neutral-400 h-full items-center py-3 w-screen"
              >
                Ventana
              </Link>

              <Link
                :href="'/linea-blanca/1-Aires-acondicionados/piso'"
                class="flex justify-center border border-neutral-400 h-full items-center py-3 w-screen"
              >
                Piso Techo
              </Link>
              <Link
                :href="'/linea-blanca/1-Aires-acondicionados/portatiles'"
                class="flex justify-center border border-neutral-400 h-full items-center py-3 w-screen"
              >
                Portatil
              </Link>
            </div>

            <Link
              href="/linea-blanca/911-Audio"
              class="flex justify-center border space-x-2 items-center py-3 w-full"
            >
              <h2>Audio</h2>
            </Link>

            <!-- <Link
                            :href="'/linea-blanca/Campana'"
                            class="flex justify-center border space-x-2 items-center py-3 w-full"
                        >
                            Campanas
                        </Link> -->

            <Link
              :href="'/linea-blanca/2-Cocinas'"
              class="flex justify-center border space-x-2 items-center py-3 w-full"
            >
              Cocinas
            </Link>

            <div
              @click="changeSubOption(4)"
              class="flex justify-center border space-x-2 items-center py-3 w-full"
            >
              <h2>Congeladores</h2>
              <font-awesome-icon :icon="['fas', 'chevron-down']" />
            </div>

            <div v-if="subOption == 4" class="bg-neutral-200 flex flex-col">
              <Link
                href="/linea-blanca/3-Congeladores/vertical"
                class="flex justify-center border border-neutral-400 h-full items-center py-3 w-screen"
              >
                Verticales
              </Link>
              <Link
                href="/linea-blanca/3-Congeladores/horizontal"
                class="flex justify-center border border-neutral-400 h-full items-center py-3 w-screen"
              >
                Horizontales
              </Link>
            </div>

            <Link
              :href="'/linea-blanca/5-Cortinas-de-aire'"
              class="flex justify-center border space-x-2 items-center py-3 w-full"
            >
              Cortinas de Aire
            </Link>
            <Link
              :href="'/linea-blanca/4-Dispensadores-de-agua'"
              class="flex justify-center border space-x-2 items-center py-3 w-full"
            >
              Dispensadores de Agua
            </Link>

            <Link
              :href="'/linea-blanca/910-Fabricadores-de-hielo'"
              class="flex justify-center border space-x-2 items-center py-3 w-full"
            >
              Fabricadores de Hielo
            </Link>

            <div
              @click="changeSubOption(6)"
              class="flex justify-center border space-x-2 items-center py-3 w-full"
            >
              <h2>Lavadoras</h2>
              <font-awesome-icon :icon="['fas', 'chevron-down']" />
            </div>

            <div v-if="subOption == 6" class="bg-neutral-200 flex flex-col">
              <Link
                :href="'/linea-blanca/6-Lavadoras/doble-tina'"
                class="flex justify-center border border-neutral-400 h-full items-center py-3 w-screen"
              >
                Doble Tina
              </Link>

              <Link
                :href="'/linea-blanca/6-Lavadoras/automatica'"
                class="flex justify-center border border-neutral-400 h-full items-center py-3 w-screen"
              >
                Automáticas
              </Link>
              <Link
                :href="'/linea-blanca/6-Lavadoras/lavadora-secadora'"
                class="flex justify-center border border-neutral-400 h-full items-center py-3 w-screen"
              >
                Lavadora - Secadora
              </Link>
            </div>

            <Link
              :href="'/linea-blanca/7-Microondas'"
              class="flex justify-center border space-x-2 items-center py-3 w-full"
            >
              Microondas
            </Link>
            <Link
              :href="'/linea-blanca/913-Protectores-de-voltaje'"
              class="flex justify-center border space-x-2 items-center py-3 w-full"
            >
              Protectores de Voltaje
            </Link>

            <div
              @click="changeSubOption(7)"
              class="flex justify-center border space-x-2 items-center py-3 w-full cursor-pointer"
            >
              <h2>Neveras</h2>
              <font-awesome-icon :icon="['fas', 'chevron-down']" />
            </div>

            <div v-if="subOption == 7" class="bg-neutral-200 flex flex-col">
              <Link
                :href="'/linea-blanca/8-Neveras/ejecutivas'"
                class="flex justify-center border border-neutral-400 h-full items-center py-3 w-screen"
              >
                Ejecutivas
              </Link>
              <Link
                :href="'/linea-blanca/8-Neveras/top-mount'"
                class="flex justify-center border border-neutral-400 h-full items-center py-3 w-screen"
              >
                Top mount
              </Link>
              <Link
                :href="'/linea-blanca/8-Neveras/side-by-side'"
                class="flex justify-center border border-neutral-400 h-full items-center py-3 w-screen"
              >
                Side by Side
              </Link>
            </div>

            <Link
              :href="'/linea-blanca/912-Televisores'"
              class="flex justify-center border border-neutral-400 h-full items-center py-3 w-screen"
            >
              Televisores
            </Link>

            <Link
              :href="'/linea-blanca/9-Vitrinas-verticales'"
              class="flex justify-center border space-x-2 items-center py-3 w-full"
            >
              Vitrinas Verticales
            </Link>
          </div>
        </div>
      </div>
    </Transition>
    <div class="flex items-center justify-center w-full">
      <hr class="border-black w-11/12 h-1" />
    </div>
  </div>
</template>

<style scoped></style>
