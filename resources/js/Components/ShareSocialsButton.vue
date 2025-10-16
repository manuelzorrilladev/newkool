<script setup>
const { social } = defineProps(["social"])

const currentUrl = window.location.href

const socialsLinks = {
    "facebook": {
        "link": "https://www.facebook.com/sharer.php?u=",

        "icon": "facebook-f"


    },
    "x": {
        "link": "https://x.com/share?url=",

        "icon": "x-twitter"


    },
    "pinterest": {
        "link": "http://pinterest.com/pin/create/button/?url=",

        "icon": "pinterest"

    },
    "instagram": {
        "link": "https://www.instagram.com/?url=",

        "icon": "instagram"

    },


}


</script>

<template>
    <a :href="`${socialsLinks[social].link}${currentUrl}`" target="_blank"
        class="text-md  flex items-center h-7 text-white bg-newkool-red border border-newkool-red duration-200  hover:bg-white hover:text-newkool-red rounded-md">
        <font-awesome-icon :icon="['fab', socialsLinks[social].icon]" class="px-4 py-1 rounded-xs text-xl " />
        <h2>
            {{ social.charAt(0).toUpperCase() + social.slice(1) }}

        </h2>
    </a>
</template>
