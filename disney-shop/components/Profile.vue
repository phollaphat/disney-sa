<template>
    <div class="flex flex-col justify-center gap-5">
        <div class="text-center">
            <a href="/profile">
                <span class="text-white font-extrabold text-5xl">My Account</span>
            </a>
            <div class= "text-xl my-4 font-bold text-[#232946]">
                {{ user.name }}
            </div>
        </div>
        <div class="flex justify-center mb-4">
            <a href="/profile">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="" class="h-40 w-40" >
            </a>
        </div>
    </div>
</template>

<script setup>
    const { data: user, pending } = await useMyFetch("auth/user-profile", {})
</script>
