<template>
    <div class="flex flex-col justify-start">
        <div class="h-screen overflow-y-auto py-8">
            <div class=" mx-auto px-4">
                <h1 class="text-[48px] text-[#FFFFFF] font-semibold mb-10 mx-auto w-[358px] bg-[#4D4C7D] text-center rounded-[20px] shadow-md">
                    Shopping Cart
                </h1>
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="md:w-3/4">
                        <div v-if="!cart.isEmpty">
                            <div class="flex flex-col justify-start bg-white rounded-lg shadow-md p-6 mb-7" v-for="item in cart.items" :key="item.id">
                                <div class="flex flex-row justify-start gap-5 text-lg items-center">
                                    <div class="flex flex-col w-3/6">
                                        <div class="text-2xl font-bold mb-4">
                                            Product
                                        </div>
                                        <div class="flex flex-row items-center">
                                            <div>
                                                <img src="@/assets/b180691f36bd713b8c69519b8637fb8b.png" alt="" class="h-16 w-16 mr-5">  
                                            </div>
                                            <div class="text-lg">
                                                {{ item.product.name }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex flex-col w-1/6">
                                        <div class="text-2xl font-bold mb-4">
                                            Model
                                        </div>
                                        <div class="text-lg">
                                            {{ item.product.model_code }}
                                        </div>
                                    </div>

                                    <div class="flex flex-col w-1/6">
                                        <div class="text-2xl font-bold mb-4">
                                            Unit Price
                                        </div>
                                        <div class="text-lg">
                                            {{ item.product.price }}
                                        </div>
                                    </div>

                                    <div class="flex flex-col w-1/6 justify-center mr-12">
                                        <div class="text-center text-2xl font-bold mb-4">
                                            Quantity
                                        </div>
                                        <div class="flex flex-row justify-center gap-3 items-center">
                                            <div class="">
                                                <button @click="removeItemQRT(item)" id="decrement-btn"
                                                    class="border rounded-md w-8">-</button>
                                            </div>
                                            <div class="text-lg">
                                                {{ item.qty }}
                                            </div>
                                            <div class="">
                                                <button @click="addItemQRT(item)" id="increment-btn"
                                                    class="border rounded-md w-8">+</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex flex-col w-1/6">
                                        <div class="text-2xl font-bold mb-4">
                                            Total
                                        </div>
                                        <div class="text-lg">
                                            {{ item.total }}
                                        </div>
                                    </div>

                                    <div class="flex flex-col w-1/6 justify-items-center">
                                        <div></div>
                                        <div class="">
                                            <button @click="removeItem(item)" class="py-3 px-6 rounded-lg text-sm font-medium bg-[#5D12D2] hover:bg-[#9400FF] text-white">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div v-if="cart.isEmpty">
                            <div class="bg-white rounded-lg shadow-md p-6 mb-4">
                                <div class="text-2xl font-bold">
                                    Shopping Cart is Empty
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="md:w-1/4">
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h2 class="text-lg font-semibold mb-4">Summary</h2>
                            <div class="flex justify-between mb-2">
                                <span>Subtotal</span>
                                <span>{{ cart.getTotalPrice }}</span>
                            </div>
                            <hr class="my-2">
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold">Total</span>
                                <span class="font-semibold">{{ cart.getTotalPrice }}</span>
                            </div>
                            <div class="">
                                <input type="text"
                                    class="w-full relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"
                                    placeholder="Coupon Core...">
                                <button
                                    class="bg-[#5D12D2] hover:bg-[#9400FF] text-white py-2 px-4 rounded-lg mt-4 w-full">Add
                                    Coupon</button>
                            </div>
                            <hr class="my-3">
                            <MenuLink to="/checkout"
                                class="bg-[#5D12D2] hover:bg-[#9400FF] text-white py-2 px-4 rounded-lg mt-4 w-full text-center">
                                checkout
                            </MenuLink>
                        </div>
                    </div>
                </div>
            </div>
            <a href="cashier">
                <button
                    class="bg-[#4D4C7D] w-[100px] h-[45px] ml-4 rounded-[15px] text-xl hover:bg-[#363062] text-white">Back</button>
            </a>
        </div>
    </div>
</template>

<script setup>
    import {
        useCartStore
    } from "~/stores/useCartStore"
    const cart = useCartStore();

    const addItemQRT = (item) => {
        const product = cart.items.find(row => row.id == item.id)
        product.qty++
        product.total += product.product.price
    }
    const removeItemQRT = (item) => {
        const product = cart.items.find(row => row.id == item.id)
        if (product.qty > 1) {
            product.qty--
            product.total -= product.product.price
        }
    }

    const removeItem = (item) => {
        const index = cart.items.findIndex(existingItem => existingItem === item);
        if (index !== -1) {
            cart.items.splice(index, 1);
        }
    }


</script>

<style>
</style>