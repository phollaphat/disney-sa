<template>
    <NuxtLink class="inline-block px-4 py-2 text-white text-2xl" :to="to">
        <slot />
    </NuxtLink>
</template>

<script setup lang="ts">
const props = defineProps([
    'to'
])
</script>