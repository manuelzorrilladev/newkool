<script setup>
import { Head, Link } from '@inertiajs/vue3';
import MainTemplate from '../Layouts/MainTemplate.vue';
import { useTemplateRef } from 'vue';
import { useElementVisibility } from '@vueuse/core';

const target1 = useTemplateRef("target1")
const border1 = useTemplateRef("border1")
const isTarget1Visible = useElementVisibility(target1)
const isBorder1Visible = useElementVisibility(border1)
const target2 = useTemplateRef("target2")
const border2 = useTemplateRef("border2")
const isTarget2Visible = useElementVisibility(target2)
const isBorder2Visible = useElementVisibility(border2)
const target3 = useTemplateRef("target3")
const border3 = useTemplateRef("border3")
const isTarget3Visible = useElementVisibility(target3)
const isBorder3Visible = useElementVisibility(border3)
const target4 = useTemplateRef("target4")
const border4 = useTemplateRef("border4")
const isTarget4Visible = useElementVisibility(target4)
const isBorder4Visible = useElementVisibility(border4)


</script>

<template>
    <MainTemplate class="bg-white">

        <Head>
            <title>Somos Newkool</title>
            <meta name="description" content="Newkoolamerica.com">
        </Head>

        <section class="relative flex justify-center w-full rounded-xl mt-4 mb-8">
            <img src="/assets/route-images/somos-newkool/banner-somos-newkool.jpg" alt=""
            class="w-11/12 hidden md:block rounded-xl">
            <img src="/assets/route-images/somos-newkool/banner-somos-newkool-mobile.jpg" alt=""
            class="w-11/12  block md:hidden rounded-xl">
            <header
            class="absolute md:inset-y-0 md:left-10 flex flex-col justify-center rounded-xl p-6 md:p-10 space-y-4 md:w-1/2"
            :class="[
                'w-full left-0 top-0 items-center text-center',
                'md:items-start md:text-left md:rounded-l-xl',
                'md:bg-gradient-to-r md:from-white/95 md:to-white/0',
                'bg-white/80 md:bg-none'
            ]"
            style="background: linear-gradient(to right, rgba(255,255,255,0.95) 15%, rgba(255,255,255,0.0) 100%);"
        >
                <h1 class="text-newkool-red text-xl  md:text-3xl lg:text-5xl font-bold">Somos Newkool</h1>
                <p class="md:text-xl font-light">Calidad Innovadora a tu Alcance.</p>
            </header>
        </section>

        <section class="flex items-center justify-center">
            <hr class="border-black w-11/12">
        </section>
        
        <main class="w-full overflow-hidden">
            <section 
                ref="target1"
                :class="isTarget1Visible ? 'opacity-100 translate-x-0':'opacity-0 -translate-x-full'"
                class="flex justify-center py-20 duration-700">
                <div
                
                class="flex flex-col md:flex-row items-center w-11/12">
                    <div ref="border1" class="h-full w-0.5"></div>
                    <header class="md:w-1/2 space-y-5 mb-10 md:mr-15">
                        <h2 class="font-bold text-newkool-red text-5xl md:text-right">Quienes somos</h2>
                        <p class="font-light md:w-3/3 text-gray-700 md:text-right">En Newkool, somos más que una marca de
                            electrodomésticos; somos un compromiso con la mejora de la vida en cada hogar venezolano.
                            Nos dedicamos a ofrecer productos que no solo cumplen, sino que superan las expectativas en
                            términos de durabilidad, eficiencia y facilidad de uso. Nuestro enfoque en la calidad es
                            inquebrantable, asegurando que cada artículo Newkool sea una inversión duradera para tu
                            bienestar y comodidad. Creemos firmemente que la excelencia en cada detalle hace la
                            diferencia en tu día a día.</p>
                    </header>
                    <div 
                    :class="isBorder1Visible ? 'opacity-100 scale-100':'opacity-0 scale-0'"
                    class="flex justify-center duration-500">
                        <div class="space-y-4">
                            <img src="/assets/route-images/somos-newkool/1-desktop.jpg" alt=""
                                class="bg-neutral-200 p-4 rounded-xl duration-500 delay-200 hidden md:block border-2 border-newkool-red">
                            <img
                                src="/assets/route-images/somos-newkool/1-mobile.jpg" alt=""
                                class="bg-neutral-200 p-4 h-fit rounded-xl duration-500 delay-300 block md:hidden border-2 border-newkool-red">
                        </div>
                    </div>
                </div>
            </section>

            <section class="flex items-center justify-center">
                <hr class="border-black w-11/12">
            </section>

            <section 
                ref="target2"
                :class="isTarget2Visible ? 'opacity-100 translate-x-0':'opacity-0 translate-x-full'" 
                class=" flex justify-center py-20 duration-700 md:h-screen">
                <div
                class="flex flex-col md:flex-row-reverse items-center w-11/12">
                    <div ref="border2" class="h-full w-0.5"></div>
                    <header class="md:w-1/2 space-y-5 mb-10 md:ml-15">
                        <div
                            class="flex flex-row-reverse md:flex-row items-center text-newkool-red gap-5 w-11/12">
                            <h2 class="font-bold text-5xl md:text-left">Nuestra Misión</h2><svg
                                class="svg-inline--fa fa-bullseye text-5xl p-3 rounded-full bg-gray-200"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bullseye" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path class="" fill="currentColor"
                                    d="M448 256A192 192 0 1 0 64 256a192 192 0 1 0 384 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 80a80 80 0 1 0 0-160 80 80 0 1 0 0 160zm0-224a144 144 0 1 1 0 288 144 144 0 1 1 0-288zM224 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z">
                                </path>
                            </svg>
                        </div>
                        <p class="font-light md:w-12/12 text-gray-700 md:text-left"> Nuestra misión es enriquecer la vida de nuestros
                            clientes a través de electrodomésticos innovadores y de la más alta calidad. Nos esforzamos
                            por ofrecer soluciones que simplifiquen las tareas del hogar y mejoren la experiencia de
                            vida. Complementamos esto con un servicio al cliente excepcional, garantizando la
                            satisfacción y fomentando una lealtad duradera hacia nuestra marca. </p>
                    </header>
                    <div 
                    :class="isBorder2Visible ? 'opacity-100 scale-100':'opacity-0 scale-0'"
                    class="flex justify-center duration-500">
                        <div class="space-y-4">
                            <img src="/assets/route-images/somos-newkool/2-desktop.jpg" alt=""
                                class="bg-neutral-200 p-4 rounded-xl duration-500 delay-200 hidden md:block border-2 border-newkool-red">
                            <img
                                src="/assets/route-images/somos-newkool/2-mobile.jpg" alt=""
                                class="bg-neutral-200 p-4 h-fit rounded-xl duration-500 delay-300 block md:hidden border-2 border-newkool-red">
                        </div>
                    </div>
                </div>
            </section>

            <section class="flex items-center justify-center">
                <hr class="border-black w-11/12">
            </section>

            <section 
                ref="target3"
                :class="isTarget3Visible ? 'opacity-100 translate-x-0':'opacity-0 -translate-x-full'" 
                class=" flex justify-center py-20 duration-700 md:h-screen">
                <div
                
                class="flex flex-col md:flex-row items-center w-11/12">
                    <div ref="border3" class="h-full w-0.5"></div>
                    <header class="md:w-1/2 space-y-5 mb-10 md:mr-15">
                        <div
                            class="flex flex-row-reverse md:flex-row justify-end items-center text-newkool-red gap-5 w-12/12">
                            <h2 class="font-bold text-5xl md:text-right">Nuestra Visión</h2>
                            <svg
                                class="svg-inline--fa fa-lightbulb text-5xl py-3 px-4 rounded-full bg-gray-200"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="lightbulb" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                            >
                                <path class="" fill="currentColor"
                                    d="M272 384c9.6-31.9 29.5-59.1 49.2-86.2l0 0c5.2-7.1 10.4-14.2 15.4-21.4c19.8-28.5 31.4-63 31.4-100.3C368 78.8 289.2 0 192 0S16 78.8 16 176c0 37.3 11.6 71.9 31.4 100.3c5 7.2 10.2 14.3 15.4 21.4l0 0c19.8 27.1 39.7 54.4 49.2 86.2H272zM192 512c44.2 0 80-35.8 80-80V416H112v16c0 44.2 35.8 80 80 80zM112 176c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-61.9 50.1-112 112-112c8.8 0 16 7.2 16 16s-7.2 16-16 16c-44.2 0-80 35.8-80 80z">
                                </path>
                            </svg>
                        </div>
                        <p class="font-light text-gray-700 md:text-right"> Aspiramos a ser la marca líder en el mercado de
                            electrodomésticos, reconocida no solo por la innovación y el diseño vanguardista de nuestros
                            productos, sino, fundamentalmente, por la calidad superior que nos distingue. Visualizamos
                            un futuro donde Newkool sea sinónimo de confianza y excelencia, apoyando el bienestar de las
                            familias venezolanas a través de tecnología confiable y duradera. </p>
                    </header>
                    <div 
                    :class="isBorder3Visible ? 'opacity-100 scale-100':'opacity-0 scale-0'"
                    class="flex justify-center duration-500">
                        <div class="space-y-4">
                            <img src="/assets/route-images/somos-newkool/3-desktop.jpg" alt=""
                                class="bg-neutral-200 p-4 rounded-xl duration-500 delay-200 hidden md:block border-2 border-newkool-red">
                            <img src="/assets/route-images/somos-newkool/3-mobile.jpg" alt=""
                                class="bg-neutral-200 p-4 h-fit rounded-xl duration-500 delay-300 block md:hidden border-2 border-newkool-red">
                        </div>
                    </div>
                </div>
            </section>

            <section class="flex items-center justify-center">
                <hr class="border-black w-11/12">
            </section>

            <section 
                ref="target4"
                :class="isTarget4Visible ? 'opacity-100 translate-x-0':'opacity-0 translate-x-full'" 
                class=" flex justify-center py-20 duration-700 md:h-screen">
                <div
                
                class="flex flex-col md:flex-row-reverse items-center w-11/12 gap-4">
                    <div ref="border4" class="h-full w-0.5"></div>
                    <header class="md:w-1/2 space-y-5 mb-10 md:ml-15">
                        <h2 class="font-bold text-newkool-red text-5xl w-10/12">Nuestros Valores</h2>
                        <p class="font-light md:w-10/12 text-gray-700 text-left"><strong
                                class="font-bold">Calidad:</strong><br> Es el pilar de todo lo que hacemos. Nos
                            comprometemos a ofrecer productos que no solo sean funcionales y eficientes, sino que
                            también estén construidos para perdurar, superando los más altos estándares de calidad en
                            cada etapa. <br><br><strong class="font-bold">Innovación:</strong><br> Buscamos
                            constantemente nuevas formas de mejorar y simplificar la vida de nuestros clientes a través
                            de tecnología de vanguardia y diseños inteligentes. <br><br><strong
                                class="font-bold">Compromiso:</strong><br> Estamos profundamente comprometidos con
                            nuestros clientes y con la comunidad venezolana, esforzándonos por superar sus expectativas
                            en cada interacción. <br><br><strong class="font-bold">Excelencia en el Servicio:
                            </strong><br> Brindamos una atención al cliente excepcional, asegurando que cada experiencia
                            con Newkool sea positiva y satisfactoria. <br><br><strong
                                class="font-bold">Integridad:</strong><br> Actuamos con honestidad y transparencia en
                            todas nuestras operaciones, construyendo relaciones basadas en la confianza y el respeto
                            mutuo. </p>
                    </header>
                    <div 
                    :class="isBorder4Visible ? 'opacity-100 scale-100':'opacity-0 scale-0'"
                    class="flex justify-center duration-500">
                        <div class="space-y-4">
                            <img src="/assets/route-images/somos-newkool/4-desktop.jpg" alt=""
                                class="bg-neutral-200 p-4 rounded-xl duration-500 delay-200 hidden md:block border-2 border-newkool-red">
                            <img src="/assets/route-images/somos-newkool/4-mobile.jpg" alt=""
                                class="bg-neutral-200 p-4 h-fit rounded-xl duration-500 delay-300 block md:hidden border-2 border-newkool-red">
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </MainTemplate>
</template>

<style scoped></style>
