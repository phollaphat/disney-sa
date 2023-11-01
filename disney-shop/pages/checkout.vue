<template>
    <div class="flex flex-col justify-start">
        <div class="h-screen py-8">
            <div class="mx-auto px-4">
                <h1 class="text-[48px] text-[#FFFFFF] font-semibold mb-10 mx-auto w-[358px] bg-[#9985BB] text-center rounded-[20px] shadow-md">Checkout</h1>
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="md:w-3/4">
                        <div v-if="!cart.isEmpty">
                            <div class="flex flex-col justify-start bg-white rounded-lg shadow-md p-6 mb-7"
                                v-for="item in cart.items" :key="item.id" >
                                <div class="flex flex-row justify-start gap-5 text-lg items-center">
                                    <div class="flex flex-col w-3/6">
                                        <div class="text-2xl font-bold mb-4">
                                            Product
                                        </div>
                                        <div class="flex flex-row items-center">
                                            <div>
                                                <img src="@/assets/b180691f36bd713b8c69519b8637fb8b.png" alt=""
                                                    class="h-16 w-16 mr-5">
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
                                        <div class="text-lg text-center">
                                            {{ item.product.price }}
                                        </div>
                                    </div>

                                    <div class="flex flex-col w-1/6 justify-center mr-12">
                                        <div class="text-center text-2xl font-bold mb-4">
                                            Quantity
                                        </div>
                                        <div class="flex flex-row justify-center gap-3 items-center">
                                            <div class="text-lg">
                                                {{ item.qty }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex flex-col w-1/6">
                                        <div class="text-2xl font-bold mb-4">
                                            Total
                                        </div>
                                        <div class="text-lg">
                                            {{ item.total }} ฿
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
                        <!-- <div class="mb-4">
                            <div class="bg-white rounded-lg shadow-md p-6">

                            </div>
                        </div>  -->
                        <div class="bg-white rounded-lg shadow-md p-6">

                            <h2 class="text-lg font-semibold mb-4">Summary</h2>
                            <div class="flex justify-between mb-2">
                                <span>Subtotal</span>
                                <span>{{ cart.getTotalPrice }} ฿</span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span>Discount</span>
                                <span>{{ cart.getSubDiscount }} ฿</span>
                            </div>

                            <hr class="my-2">
                            
                            <div class="flex justify-between mb-2 text-lg">
                                <span class="font-semibold">Total</span>
                                <span class="font-semibold">{{ cart.getTotalDiscount }} ฿</span>
                            </div>
                            
                            <hr class="my-2">

                            <div class="text-lg font-semibold mb-1">
                                Customer Name:
                            </div>
                            <div class="text-lg mb-3 text-[#7D7C7C]">
                                {{ customer.name }}
                            </div>
                            <div class="text-lg font-semibold mb-1">
                                Payment Channel:
                            </div>
                            <div class="text-lg text-[#7D7C7C]">
                                {{ check_payment.payment }}
                            </div>
                        </div>

                        <div class="mt-4">
                            <div class="bg-white rounded-lg shadow-md p-6">
                                <a href="/show_order">
                                    <button @click="addProductList()"
                                        class="bg-[#5D12D2] hover:bg-[#9400FF] text-white py-2 px-4 rounded-lg w-full">Place Order</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { useCheckPaymentStore } from "~/stores/useCheckPaymentStore"
    import { useCustomerStore } from "~/stores/useCustomerStore"
    import { useCartStore } from "~/stores/useCartStore"
    import { useOrderStore } from "~/stores/useOrderStore"


    const check_payment = useCheckPaymentStore();
    const customer = useCustomerStore();
    const cart = useCartStore();
    const order = useOrderStore();

    const products = cart.items

    const addProductList = async () => {
        products.forEach(item=> {
            const product = cart.items.find(row => row.id == item.id)
            console.log(product.qty)
            const { data: response, error } = useMyFetch('productLists', {
                method: 'POST',
                body: {
                    "product_name": product.product.name, 
                    "order_id": order.id,
                    "qty": product.qty,
                    "subtotal": product.total - (product.total * (10 / 100))
                }
            })
        })
    }

</script>