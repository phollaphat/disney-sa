<template>
    <NuxtLink class="" :to="to">
        <slot />
    </NuxtLink>
</template>

<script setup lang="ts">
const props = defineProps([
    'to'
])
</script>