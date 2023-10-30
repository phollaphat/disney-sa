<template>
    <div class="flex flex-col justify-start">
        <div class="h-screen overflow-y-auto py-8">
            <div class=" mx-auto px-4">
                <h1
                    class="text-[48px] text-[#FFFFFF] font-semibold mb-10 mx-auto w-[358px] bg-[#9985BB] text-center rounded-[20px] shadow-md">
                    Shopping Cart</h1>
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="md:w-3/4">
                        <div v-if="!cart.isEmpty">
                            <div class="bg-white rounded-lg shadow-md p-6 mb-4" v-for="item in cart.items" :key="item.id">
                                <table class="w-full">
                                    <thead>
                                        <tr>
                                            <th class="text-left font-semibold text-2xl">Product</th>
                                            <th class="text-left font-semibold text-2xl">Model</th>
                                            <th class="text-left font-semibold text-2xl">Price</th>
                                            <th class="text-left font-semibold text-2xl">Quantity</th>
                                            <th class="text-left font-semibold text-2xl">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="py-4">
                                                <div class="flex items-center">
                                                    <img src="@/assets/b180691f36bd713b8c69519b8637fb8b.png" alt=""
                                                        class="h-16 w-16 mr-4">
                                                    <span class="font-semibold text-lg">{{ item.product.name }}</span>
                                                </div>
                                            </td>
                                            <td class="py-4 text-lg">{{ item.product.model_code }}</td>
                                            <td class="py-4 text-lg">{{ item.product.price }}</td>
                                            <td class="py-4">
                                                <div class="flex items-center">
                                                    <button @click="removeItemQRT(item)" id="decrement-btn" class="border rounded-md py-2 px-4 mr-2">-</button>
                                                    <span id="counter" class="text-center w-8 text-lg"> {{ item.qty }} </span>
                                                    <button @click="addItemQRT(item)" id="increment-btn" class="border rounded-md py-2 px-4 ml-2">+</button>
                                                </div>
                                            </td>
                                            <td class="py-4 text-lg">total</td>
                                            <td class="py-4">
                                                <button @click="removeItem(item)"
                                                    class="py-2.5 px-6 ml-10 rounded-lg text-sm font-medium bg-[#5D12D2] hover:bg-[#9400FF] text-white">Remove</button>
                                            </td>
                                        </tr>
                                        <!-- More product rows -->
                                    </tbody>
                                </table>
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
                                <span>$19.99</span>
                            </div>
                            <hr class="my-2">
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold">Total</span>
                                <span class="font-semibold">$21.98</span>
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
                <button class="bg-[#4D4C7D] w-[100px] h-[45px] ml-4 rounded-[15px] text-xl hover:bg-[#363062] text-white">Back</button>
            </a>
        </div>
    </div>
</template>

<script setup>
    import { useCartStore } from "~/stores/useCartStore"
    const cart = useCartStore();
    const addItemQRT = (item) => {
        const product = cart.items.find(row => row.id == item.id)
        product.qty++
    }
    const removeItemQRT = (item) => {
        const product = cart.items.find(row => row.id == item.id)
        if (product.qty > 1) {
            product.qty--
        }
    }

    const removeItem = (item) => {
        const index = cart.items.findIndex(existingItem => existingItem === item);
        if (index !== -1) {
            cart.items.splice(index, 1);
        }
    }

    const props = defineProps(['name'])
    const counter = ref(0)
    const objectCounter = ref({ count: 0 })

    function up() {
        counter.value++
        objectCounter.value.count++
        console.log(props.name, counter)
        console.log(props.name, objectCounter)
    }

    function down() {
        counter.value--
        objectCounter.value.count--
        console.log(props.name, counter)
        console.log(props.name, objectCounter)
    }


</script>