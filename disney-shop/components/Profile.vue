<template lang="">
    <div class="flex flex-col justify-center gap-5">
        <div class="text-center">
            <a href="">
                <span class="text-white font-bold text-3xl">My Account</span>
            </a>
            <div>
                {{ user.name }}
            </div>
        </div>
        <div class="flex justify-center">
            <a href="/profile">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="" class="h-40 w-40" >
            </a>
        </div>
    </div>
</template>

<script setup>
    const { data: user, pending } = await useMyFetch("auth/user-profile", {})
</script>
