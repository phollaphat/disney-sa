<template>
    <div class="flex flex-col my-6 mx-4 gap-2">
        <Profile></Profile>

        <div v-if="user.role == 'manager'" class="flex flex-row justify-items-center items-center hover:bg-[#EEBBC3] rounded-lg h-[60px]"
            :class="$route.name == 'register' ? 'bg-[#BCA5D4] font-semibold' : ''">
            <MenuLink to="/register"><img src="@/assets/add-user.png" alt="" class="ml-1 w-[40px] h-[40px]" /></MenuLink>
            <MenuLink to="/register" class="ml-6 text-lg text-white">Add User</MenuLink>
        </div>

        <div class="flex flex-row justify-items-center items-center hover:bg-[#EEBBC3] rounded-lg h-[60px]"
            :class="$route.name == 'cashier' ? 'bg-[#BCA5D4] font-semibold' : ''">
            <MenuLink to="/cashier"><img src="@/assets/store.png" alt="" class="w-[40px] h-[40px]" /></MenuLink>
            <MenuLink to="/cashier" class="ml-7 text-lg text-white">Cashier</MenuLink>
        </div>

        <div class="flex flex-row justify-items-center items-center hover:bg-[#EEBBC3] rounded-lg h-[60px]"
            :class="$route.name == 'products' ? 'bg-[#BCA5D4] font-semibold' : ''">
            <MenuLink to="/products"><img src="@/assets/box.png" alt="" class="w-[40px] h-[40px] ml-1" /></MenuLink>
            <MenuLink to="/products" class="ml-7 text-lg text-white">Products</MenuLink>
        </div>

        <div class="flex flex-row justify-items-center items-center hover:bg-[#EEBBC3] rounded-lg h-[60px]"
            :class="$route.name == 'reportPayment' ? 'bg-[#BCA5D4] font-semibold' : ''">
            <MenuLink to="/reportPayment"><img src="@/assets/walletPayment.png" alt="" class="ml-1 w-[38px] h-[38px]" /></MenuLink>
            <MenuLink to="/reportPayment" class="ml-8 text-lg text-white">Payment Reports</MenuLink>
        </div>

        <div class="flex flex-row justify-items-center items-center hover:bg-[#EEBBC3] rounded-lg h-[60px]"
            :class="$route.name == 'orders' ? 'bg-[#BCA5D4] font-semibold' : ''">
            <MenuLink to="/orders"><img src="@/assets/File_dock_fill.png" alt="" class="w-[50px] h-[50px]" /></MenuLink>
            <MenuLink to="/orders" class="ml-5 text-lg text-white">Order Reports</MenuLink>
        </div>

        <div class="flex flex-row justify-items-center items-center hover:bg-[#EEBBC3] rounded-lg h-[60px]"
            :class="$route.name == 'claim' ? 'bg-[#BCA5D4] font-semibold' : ''">
            <MenuLink to="/claim"><img src="@/assets/claim_icon.png" alt="" class="ml-3 w-[45px] h-[45px]" /></MenuLink>
            <MenuLink to="/claim" class="ml-4 text-lg text-white">Claim</MenuLink>
        </div>

        <div class="py-1">
            <hr class="border-black" />
        </div>

        <div class="flex flex-row justify-items-center items-center hover:bg-[#EEBBC3] rounded-lg h-[60px]">
            <button @click="onLogout" class="text-lg text-white"><img src="@/assets/logout.svg" alt=""
                    class="ml-3 w-[40px] h-[40px]" /></button>
            <button @click="onLogout" class="ml-7 text-lg text-white">Logout</button>
        </div>
    </div>
</template>

<script setup lang="ts">
    import {
        useAuthStore
    } from "~/stores/useAuthStore";

    const auth = useAuthStore()

    const { data: user, pending} = await useMyFetch('auth/user-profile', {})

    console.log(user)

    async function onLogout() {
        const {
            data: response,
            error
        } = await useMyFetch < any > ('auth/logout', {
            method: 'POST'
        })
        if (response.value !== null) {
            auth.clear()
            await navigateTo('/')
        }
    }
    

</script>