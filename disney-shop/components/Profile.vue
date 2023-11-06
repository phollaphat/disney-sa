<template>
    <div class="flex flex-col justify-center gap-5">
        <div class="text-center">
            <div v-if="user.role == 'manager'">
                <div class="flex flex-row items-center justify-center">
                    <a href="/profile">
                        <span class="text-white font-extrabold text-5xl">My Account</span>
                    </a>
    
                    <div class="m-4 text-white font-extrabold text-lg">
                        <a href="/register">
                            <button class="group cursor-pointer outline-none hover:rotate-90 duration-300" title="Add New">
                                <svg class="stroke-yellow-400 fill-none group-hover:fill-yellow-800 group-active:stroke-yellow-200 group-active:fill-yellow-600 group-active:duration-0 duration-300"
                                    viewBox="0 0 24 24" height="30px" width="30px" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-width="1.5"
                                        d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z">
                                    </path>
                                    <path stroke-width="1.5" d="M8 12H16"></path>
                                    <path stroke-width="1.5" d="M12 16V8"></path>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div v-else>
                <a href="/profile">
                    <span class="text-white font-extrabold text-5xl">My Account</span>
                </a>
            </div>

            <div class="text-xl my-4 font-bold text-[#232946]">
                {{ user.name }}
            </div>

        </div>
        <div class="flex justify-center mb-4">
            <a href="/profile">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="" class="h-40 w-40">
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