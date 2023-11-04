<template>
    <nav class="">
        <div class="flex flex-col my-6 mx-4 gap-4">
            <Profile></Profile>

            <div class="flex flex-row justify-items-center items-center hover:bg-[#EEBBC3] rounded-lg"
                :class="$route.name == 'cashier' ? 'bg-[#BCA5D4] font-semibold' : ''">
                <MenuLink to="/cashier"><img src="@/assets/Shop.png" alt="" /></MenuLink>
                <MenuLink to="/cashier" class="ml-5 text-xl text-white">Cashier</MenuLink>
            </div>

            <div class="flex flex-row justify-items-center items-center hover:bg-[#EEBBC3] rounded-lg"
                :class="$route.name == 'products' ? 'bg-[#BCA5D4] font-semibold' : ''">
                <MenuLink to="/products"><img src="@/assets/Bag_alt_fill.png" alt="" /></MenuLink>
                <MenuLink to="/products" class="ml-5 text-xl text-white">Products</MenuLink>
            </div>

            <div class="flex flex-row justify-items-center items-center hover:bg-[#EEBBC3] rounded-lg"
                :class="$route.name == 'reportPayment' ? 'bg-[#BCA5D4] font-semibold' : ''">
                <MenuLink to="/reportPayment"><img src="@/assets/Wallet.png" alt="" /></MenuLink>
                <MenuLink to="/reportPayment" class="ml-5 text-xl text-white">Payment Reports</MenuLink>
            </div>

            <div class="flex flex-row justify-items-center items-center hover:bg-[#EEBBC3] rounded-lg"
                :class="$route.name == 'reportDairy' ? 'bg-[#BCA5D4] font-semibold' : ''">
                <MenuLink to="/reportDairy"><img src="@/assets/File_dock_fill.png" alt="" /></MenuLink>
                <MenuLink to="/reportDairy" class="ml-5 text-xl text-white">Order Reports</MenuLink>
            </div>

            <div class="flex flex-row justify-items-center items-center hover:bg-[#EEBBC3] rounded-lg"
                :class="$route.name == 'claim' ? 'bg-[#BCA5D4] font-semibold' : ''">
                <MenuLink to="/claim"><img src="@/assets/File_dock_fill.png" alt="" /></MenuLink>
                <MenuLink to="/claim" class="ml-5 text-xl text-white">Claim</MenuLink>
            </div>
            
            <div class="py-3">
                <hr class="border-black" />
            </div>
            
            <div class="flex flex-row justify-items-center items-center hover:bg-[#EEBBC3] rounded-lg">
                <button @click="onLogout" class="text-xl text-white"><img src="@/assets/logout.svg" alt="" class="ml-5"/></button>
                <button @click="onLogout" class="ml-10 text-xl text-white">Logout</button>
            </div>
        </div>
    </nav>
</template>

<script setup lang="ts">
import { useAuthStore } from "~/stores/useAuthStore";

const auth = useAuthStore()

async function onLogout() {
  const { data: response, error } = await useMyFetch<any>('auth/logout', {
    method: 'POST'
  })
  if (response.value !== null) {
    auth.clear()
    await navigateTo('/')
  }
}
</script>
