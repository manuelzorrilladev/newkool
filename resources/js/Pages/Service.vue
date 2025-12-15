<script setup>
import { Head, usePage, Link, router } from "@inertiajs/vue3";
import { useElementVisibility } from "@vueuse/core";
import { ref, useTemplateRef,computed } from "vue";
import MainTemplate from "../Layouts/MainTemplate.vue";

import "vue3-carousel/dist/carousel.css";
import { Carousel, Slide, Pagination, Navigation } from "vue3-carousel";
defineProps({
    product: Array,
    slider: Array,
    message: String,
});

const target1 = useTemplateRef("target1");
const target2 = useTemplateRef("target2");
const target3 = useTemplateRef("target3");
const target4 = useTemplateRef("target4");
const target5 = useTemplateRef("target5");
const target1IsVisible = useElementVisibility(target1);
const target2IsVisible = useElementVisibility(target2);
const target3IsVisible = useElementVisibility(target3);
const target4IsVisible = useElementVisibility(target4);
const target5IsVisible = useElementVisibility(target5);
// const mainRoute = 'http://127.0.0.1:8000'
const mainRoute = "https://testing.newkoolamerica.com";
const status = ref({
    isError: false,
    isCurrentlySending: false,
});

const mail = ref({
    name: null,
    email: null,
    phone: null,
    location: null,
    issue: null,
    comments: "",
    message:null,
    toSend: "serviciotecnico@newkoolamerica.net",
});
const name = ref(null);
const message = ref("");
function submit() {
    status.value.isCurrentlySending = true;
    if(mail.value.comments === ""){
        mail.value.comments = "No hay comentarios adicionales."
    }

    const formData = new FormData();

    for (const key in mail.value) {
        if (Object.hasOwnProperty.call(mail.value, key)) {

            formData.append(key, mail.value[key]);
        }
    }

    if (selectedFile.value) {
        formData.append('file', selectedFile.value); 
    }
    axios
        .post(`${mainRoute}/api/servicio-tecnico/send`, formData)
        .then((d) => {
            status.value.isCurrentlySending = false;
            message.value = "Mensaje enviado!";
            setTimeout((message.value = ""), 3000);
        })
        .catch((e) => {
            status.value.isCurrentlySending = false;
        });
}

// 1. Estados Reactivos
// Ref para acceder al elemento DOM del input file (opcional, pero útil para limpiar)
const fileInputRef = ref(null); 
// Ref para almacenar el archivo seleccionado
const selectedFile = ref(null); 

// 2. Lógica de Manejo de Archivo (Evento @change)
/**
 * Captura el evento de cambio del input file y actualiza el estado.
 * @param {Event} event - El objeto de evento nativo.
 */
const handleFileChange = (event) => {
  const files = event.target.files;
  if (files.length > 0) {
    // Almacena el primer archivo seleccionado en el estado reactivo
    selectedFile.value = files[0];
    console.log('Archivo seleccionado:', selectedFile.value.name);
  } else {
    selectedFile.value = null;
    console.log('Ningún archivo seleccionado');
  }
};


const fileName = computed(() => {
  if (selectedFile.value) {
    return {
      text: selectedFile.value.name,
      textClasses: 'text-gray-900 font-semibold',
    };
  }
  return {
    text: 'Selecciona un archivo...',
    textClasses: 'text-gray-600',
  };
});

const labelClasses = computed(() => {
  const baseClasses = 'bg-gray-300 border-gray-300 focus:outline-none focus:ring-neutral-600 focus:border-neutral-600';
  const hoverClasses = 'hover:bg-gray-400';
  
  if (selectedFile.value) {
    return `${baseClasses} ${hoverClasses}`;
  } else {
    return `${baseClasses} ${hoverClasses}`;
  }
});
</script>

<template>
    <MainTemplate class="bg-gray-100">
        <Head>
            <title>Servicio técnico</title>
            <meta name="description" content="Newkoolamerica.com" />
        </Head>

        <div>
            <img
                src="/assets/route-images/service/banner-service.jpg"
                alt=""
                class="hidden md:block"
            />
            <img
                src="/assets/route-images/service/banner-service-mobile.jpg"
                alt=""
                class="block md:hidden w-full"
            />
        </div>

        <div
            class="text-3xl md:text-5xl font-bold text-neutral-600 uppercase font-main text-shadow text-center py-14 tracking-widest"
        >
            Servicio técnico
        </div>

        <main
            class="w-full overflow-hidden font-main flex flex-col items-center"
        >
            <div
                class="flex items-center w-10/12 gap-4 bg-white p-4 rounded-3xl shadow shadow-gray-300"
            >
                <div class="w-14 h-14 flex items-center justify-center">
                    <img
                        src="/assets/route-images/service/icon-1.png"
                        alt=""
                        class="w-full"
                    />
                </div>
                <header class="w-11/12 space-y-2">
                    <h2 class="text-neutral-600 text-4xl font-bold underline">
                        Garantía de productos Newkool
                    </h2>
                    <p class="text-lg text-gray-700">
                        En Newkool nos comprometemos con la calidad y
                        durabilidad de nuestros productos. Todos los equipos
                        cuentan con garantia ante defectos de fabricacion,
                        siempre que se utilicen de acuerdo con las instrucciones
                        de uso y dentro del periodo de cobertura establecido.
                    </p>
                </header>
            </div>

            <section
                ref="target1"
                :class="
                    target1IsVisible
                        ? 'opacity-100 translate-x-0'
                        : 'opacity-0 -translate-x-full'
                "
                class="flex justify-center py-10 duration-700"
            >
                <div
                    class="w-10/12 flex flex-col-reverse md:flex-row items-center gap-5 md:h-[350px]"
                >
                    <div
                        class="flex gap-3 items-center md:w-1/2 h-full rounded-3xl shadow shadow-gray-300 bg-white p-4"
                    >
                        <div class="w-14 h-14 flex items-center justify-center">
                            <img
                                src="/assets/route-images/service/icon-2.png"
                            />
                        </div>

                        <header
                            class="flex flex-col text-gray-700 pt-4 md:w-2/3 gap-4 py-4"
                        >
                            <h3
                                class="text-neutral-600 font-semibold text-3xl underline"
                            >
                                Canales de contacto
                            </h3>
                            <h4 class="w-full">
                                Todo servicio técnico debe ser solicitado por el
                                consumidor final y/o distribuidor comercial
                                llamando por call center o escribiendo al o
                                electrónico.
                            </h4>
                            <div class="flex items-center w-full gap-2">
                                <a
                                    href="https://api.whatsapp.com/send?phone=584148811719&text=Hola%20NewKool,%20me%20gustaria%20saber%20mas%20sobre%20sus%20productos."
                                    class="flex items-center rounded-xl bg-newkool-red border border-newkool-red text-white px-3 py-1 duration-200 hover:bg-white hover:text-newkool-red gap-2 w-1/2"
                                >
                                    <font-awesome-icon
                                        :icon="['fas', 'phone']"
                                    />
                                    <p>0414-8811721</p>
                                </a>
                                <a
                                    href="mailto:serviciotecnico@newkoolamerica.net"
                                    class="flex items-center rounded-xl bg-newkool-red border border-newkool-red text-white px-3 py-1 duration-200 hover:bg-white hover:text-newkool-red gap-2 w-1/2"
                                >
                                    <font-awesome-icon
                                        :icon="['fas', 'envelope']"
                                    />
                                    <p>serviciotecnico</p>
                                </a>
                            </div>
                            <h4 class="w-full">
                                Nuestro taller se comunicará con el cliente o
                                distribuidor en un lapso de 24 a 72 horas
                                hábiles para su servicio.
                            </h4>
                        </header>
                    </div>
                    <div class="md:w-1/2 h-full">
                        <img
                            src="/assets/route-images/service/img-1.png"
                            alt=""
                            class="h-full"
                        />
                    </div>
                </div>
            </section>

            <div
                ref="target2"
                :class="
                    target2IsVisible
                        ? 'opacity-100 translate-x-0'
                        : 'opacity-0 translate-x-full'
                "
                class="flex justify-center w-full duration-700"
            >
                <div
                    class="flex items-center w-10/12 gap-4 bg-white p-4 rounded-3xl shadow shadow-gray-300"
                >
                    <div class="w-14 h-14 flex items-center justify-center">
                        <img src="/assets/route-images/service/icon-3.png" />
                    </div>
                    <header class="w-11/12 space-y-2">
                        <h3
                            class="text-neutral-600 text-3xl font-semibold underline"
                        >
                            ¿Qué cubre la garantía?
                        </h3>
                        <p class="text-gray-700">
                            La garantía aplica para defectos de fabricación o
                            fallas técnicas que aparezcan durante el período de
                            cobertura, siempre y cuando el producto haya sido
                            utilizado según las instrucciones del manual.
                        </p>
                    </header>
                </div>
            </div>

            <section
                ref="target3"
                :class="
                    target3IsVisible
                        ? 'opacity-100 translate-x-0'
                        : 'opacity-0 translate-x-full'
                "
                class="flex justify-center py-10 duration-700"
            >
                <div
                    class="w-10/12 flex flex-col-reverse md:flex-row items-center gap-5"
                >
                    <div class="md:w-1/2 rounded-2xl overflow-hidden py-4">
                        <img
                            src="/assets/route-images/service/img-2.png"
                            alt=""
                            class="w-full scale-125"
                        />
                    </div>

                    <div
                        class="flex gap-3 items-center md:w-1/2 rounded-xl shadow shadow-gray-300 bg-white py-8 md:py-2 p-2 md:h-full"
                    >
                        <div class="w-20 h-20 flex items-center justify-center">
                            <img
                                src="/assets/route-images/service/icon-4.png"
                            />
                        </div>

                        <header
                            class="flex flex-col text-gray-700 pt-4 md:w-3/4 gap-4"
                        >
                            <h3
                                class="text-neutral-600 font-semibold text-3xl underline"
                            >
                                ¿Qué NO cubre la garantía?
                            </h3>

                            <ul class="space-y-3">
                                <li class="flex items-start gap-2">
                                    <img
                                        src="/assets/route-images/service/icon-5.png"
                                        class="w-4 h-4 mt-1"
                                    />
                                    <p class="">
                                        Instalacion incorrecta, negligencia o
                                        uso inadecuado.
                                    </p>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img
                                        src="/assets/route-images/service/icon-5.png"
                                        class="w-4 h-4 mt-1"
                                    />
                                    <p class="">
                                        Daños por accidentes, variaciones de
                                        voltaje, desastres naturales o fuerza
                                        mayor.
                                    </p>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img
                                        src="/assets/route-images/service/icon-5.png"
                                        class="w-4 h-4 mt-1"
                                    />
                                    <p class="">
                                        Reparaciones o modificaciones de
                                        terceros no autorizados.
                                    </p>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img
                                        src="/assets/route-images/service/icon-5.png"
                                        class="w-4 h-4 mt-1"
                                    />
                                    <p class="">
                                        Desgaste normal, obstrucciones por
                                        tierra/sedimentos, o fallas por
                                        configuración inadecuada.
                                    </p>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img
                                        src="/assets/route-images/service/icon-5.png"
                                        class="w-4 h-4 mt-1"
                                    />
                                    <p class="">
                                        Accesorios o Partes no cubiertos:
                                        baterías, controles remotos, piezas
                                        plasticas o cosmeticas, pantallas de TV
                                        rotas, vidrio porcelana.
                                    </p>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img
                                        src="/assets/route-images/service/icon-5.png"
                                        class="w-4 h-4 mt-1"
                                    />
                                    <p class="">
                                        Equipos destinados a alquiler.
                                    </p>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img
                                        src="/assets/route-images/service/icon-5.png"
                                        class="w-4 h-4 mt-1"
                                    />
                                    <p class="">
                                        Costos de revisión por fallas no
                                        atribuibles al producto, ni de limpieza
                                        o mantenimiento.
                                    </p>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img
                                        src="/assets/route-images/service/icon-5.png"
                                        class="w-4 h-4 mt-1"
                                    />
                                    <p class="">
                                        Daños o alteraciones en la etiqueta de
                                        garantía o número de serie.
                                    </p>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img
                                        src="/assets/route-images/service/icon-5.png"
                                        class="w-4 h-4 mt-1"
                                    />
                                    <p class="">
                                        Productos adquiridos a distribuidores no
                                        autorizados.
                                    </p>
                                </li>
                            </ul>
                        </header>
                    </div>
                </div>
            </section>

            <section
                :class="
                    target4IsVisible
                        ? 'opacity-100 translate-x-0'
                        : 'opacity-0 translate-x-full'
                "
                class="flex justify-center w-full duration-700"
            >
                <div
                    class="flex items-center w-10/12 gap-4 bg-white p-4 rounded-3xl shadow shadow-gray-300"
                >
                    <div class="w-14 h-14 flex items-center justify-center">
                        <img
                            src="/assets/route-images/service/icon-6.png"
                            alt=""
                            class="w-full"
                        />
                    </div>
                    <header class="w-11/12 space-y-2">
                        <h2
                            class="text-neutral-600 text-2xl font-bold underline"
                        >
                            Cobertura de servicio
                        </h2>
                        <p class="text-gray-700">
                            A nivel nacional en las ciudades donde se encuentren
                            nuestros Centros de Servicio Autorizados Newkool.
                        </p>
                    </header>
                </div>
            </section>
            <section
                ref="target4"
                :class="
                    target4IsVisible
                        ? 'opacity-100 translate-x-0'
                        : 'opacity-0 translate-x-full'
                "
                class="flex justify-center w-full py-10 duration-700"
            >
                <div
                    class="w-10/12 flex flex-col-reverse md:flex-row items-center gap-5 md:h-[350px]"
                >
                    <div
                        class="flex gap-3 items-center md:w-1/2 h-full rounded-3xl shadow shadow-gray-300 bg-white p-4"
                    >
                        <div class="w-14 h-14 flex items-center justify-center">
                            <img
                                src="/assets/route-images/service/icon-7.png"
                            />
                        </div>

                        <header
                            class="flex flex-col text-gray-700 pt-4 md:w-full gap-4 py-4"
                        >
                            <h3
                                class="text-neutral-600 font-semibold text-3xl underline"
                            >
                                Requisitos para solicitar garantía
                            </h3>
                            <h4 class="w-full space-y-3">
                                Para realizar la solicitud, necesitarás:
                                <p>
                                    1. Factura de compra original (copia legible
                                    con fecha y nombre del distribuidor).
                                </p>
                                <p>
                                    2. Producto registrado en nuestro sistema.
                                </p>
                                <p>
                                    3. Etiqueta de garantia Newkool intacta y
                                    visible.
                                </p>
                                <p>
                                    4. Equipo completo, con accesorios y empaque
                                    original en buen estado.
                                </p>
                            </h4>
                        </header>
                    </div>
                    <div class="md:w-1/2 h-full">
                        <img
                            src="/assets/route-images/service/img-3.png"
                            alt=""
                            class="h-full"
                        />
                    </div>
                </div>
            </section>

            <section
                v-if="status.isCurrentlySending"
                class="fixed h-screen w-full bg-newkool-gray/60 top-0 z-999 flex items-center justify-center"
            >
                <font-awesome-icon
                    :icon="['fas', 'spinner']"
                    class="text-8xl text-newkool-red animate-spin"
                />
            </section>

            <div
                ref="target5"
                :class="
                    target5IsVisible || target4IsVisible
                        ? 'opacity-100 translate-x-0'
                        : 'opacity-0 -translate-x-full'
                "
                class="py-8 px-6 md:px-12 w-full flex justify-center mx-auto duration-700"
            >
              <div class="w-11/12 bg-white rounded-2xl shadow shadow-gray-300 p-6">
               <h2
                    class="mb-4 text-4xl tracking-tight font-extrabold text-center text-neutral-600"
                >
                    Reporte de Garantía
                </h2>

                <form
                    class="flex flex-col items-center gap-2"
                    @submit.prevent="submit"
                >
                    <div class="w-full">
                        <input
                            type="text"
                            id="name"
                            class="shadow-xs bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-neutral-600 focus:border-neutral-600 block w-full p-4"
                            placeholder="NOMBRE COMPLETO *"
                            required
                            v-model="mail.name"
                        />
                    </div>
                    <div class="w-full">
                        <input
                            type="text"
                            id="location"
                            class="shadow-xs bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-neutral-600 focus:border-neutral-600 block w-full p-4"
                            placeholder="DIRECCIÓN COMPLETA (EJEMPLO: AV. O CALLE/URBANIZACIÓN/MUNICIPIO/CIUDAD/ESTADO)*"
                            required
                            v-model="mail.location"
                        />
                    </div>

                    <div class="w-full">
                        <input
                            type="tel"
                            id="phone"
                            class="shadow-xs bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-neutral-600 focus:border-neutral-600 block w-full p-4"
                            placeholder="TELÉFONO *"
                            required
                            v-model="mail.phone"
                        />
                    </div>
                    <div class="w-full">
                        <input
                            type="email"
                            id="email"
                            class="shadow-xs bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-neutral-600 focus:border-neutral-600 block w-full p-4"
                            placeholder="CORREO ELECTRÓNICO *"
                            required
                            v-model="mail.email"
                        />
                    </div>
                    <div class="w-full">
                        <input
                            type="text"
                            id="issue"
                            class="shadow-xs bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-neutral-600 focus:border-neutral-600 block w-full p-4"
                            placeholder="FALLA (DÉJANOS SABER EL MOTIVO DE LA FALLA) *"
                            required
                            v-model="mail.issue"
                        />
                    </div>
                    <div class="w-full">
                        <input
                            type="file"
                            name="file"
                            id="styled_file_input"
                            class="sr-only"
                            @change="handleFileChange"
                            ref="fileInputRef"
                        />

                        <label
                            for="styled_file_input"
                            class="block w-full text-sm rounded-3xl border cursor-pointer p-4 transition duration-150 ease-in-out"
                            :class="labelClasses"
                        >
                            <span class="flex items-center">
                                <svg
                                    class="w-5 h-5 mr-3"
                                    :class="fileName.textClasses"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"
                                    ></path>
                                </svg>

                                <span
                                    :class="fileName.textClasses"
                                    class="font-medium"
                                >
                                    {{ fileName.text }}
                                </span>
                            </span>
                        </label>
                    </div>

                    <div class="w-full">
                        <input
                            type="text"
                            id="issue"
                            class="shadow-xs bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-neutral-600 focus:border-neutral-600 block w-full p-4"
                            placeholder="COMENTARIOS ADICIONALES (DÉJANOS TUS COMENTARIOS)"
                            v-model="mail.comments"
                        />
                    </div>

                    <button
                        type="submit"
                        class="bg-newkool-red py-1 px-6 text-sm font-medium text-center text-white rounded-2xl bg-primary-700 sm:w-fit hover:bg-white hover:text-newkool-red duration-200 border border-newkool-red focus:ring-4 focus:outline-hidden focus:ring-primary-300"
                    >
                        Enviar Solicitud
                    </button>
                </form>
                </div> 
            </div>


            <section
                class="bg-gray-200 flex items-center justify-center w-full"
            >
                <div class="flex items-center justify-center w-10/12 gap-4 p-4">
                    <div class="w-14 h-14 flex items-center justify-center">
                        <img
                            src="/assets/route-images/service/icon-8.png"
                            alt=""
                            class="w-full"
                        />
                    </div>
                    <header class="w-full space-y-2">
                        <h2 class="text-neutral-600 text-2xl font-bold">
                            Aviso importante
                        </h2>
                        <p class="text-gray-700">
                            &#8226; La empresa no se responsabiliza por
                            mercancía golpeada después de 24 horas de entregada
                            <br />
                            &#8226; Cualquier costo derivado de revisiones por
                            fallas no cubiertas deberá ser asumido por el
                            cliente.
                        </p>
                    </header>
                </div>
            </section>
        </main>
    </MainTemplate>
</template>

<style scoped>
.containerBox {
    clip-path: polygon(0 0, 100% 0, 100% 95%, 0 100%);
}
</style>
