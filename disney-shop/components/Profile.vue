<template>
    <div class="flex flex-col justify-center gap-1">
        <div class="text-center">
            <div>
                <div class="flex flex-row items-center justify-center w-full">
                    <a href="/profile">
                        <span class="text-white font-extrabold text-4xl text-center">My Account</span>
                    </a>
                </div>
            </div>

            <div class="text-2xl my-4 font-bold text-[#232946] text-center">
                {{ user.name }}
            </div>

        </div>
        <div class="flex justify-center mb-4">
            <a href="/profile">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="" class="h-20 w-20">
            </a>
        </div>

    </div>
</template>

<script setup>
    const {
        data: user,
        pending
    } = await useMyFetch("auth/user-profile", {})
</script>