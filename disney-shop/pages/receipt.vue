<template>
    <div class="bg-[#F5F7F8] m-10 rounded-[20px] h-[850px]">
        <div class="p-16">
            <div class="font-bold text-5xl">
                checkout
            </div>
            <div class="text-xl pt-2">
                Thank you. Your order has been received.
            </div>
            <div class="pt-5 flex flex-row gap-5">
                <div class="flex flex-col border-dashed border-[#7D7C7C] border-r-2 w-[160px]">
                    <div class="">
                        ORDER NUMBER:
                    </div>
                    <div class="font-bold">
                        {{ order.id }}
                    </div>
                </div>
    
                <div class="flex flex-col border-dashed border-[#7D7C7C] border-r-2 w-[160px]">
                    <div class="">
                        DATE:
                    </div>
                    <div class="font-bold">
                        Today
                    </div>
                </div>
    
                <div class="flex flex-col border-dashed border-[#7D7C7C] border-r-2 w-[130px]">
                    <div class="pr-5">
                        TOTAL:
                    </div>
                    <div class="font-bold">
                        {{ cart.getTotalDiscount }}
                    </div>
                </div>
                <div class="flex flex-col w-[200px]">
                    <div class="pr-5">
                        PAYMENT METHOD:
                    </div>
                    <div class="font-bold">
                        {{ check_payment.payment }}
                    </div>
                </div>
            </div>
    
            <div class="">
                <table class="border-collapse border border-[#191717] mt-10 w-full">
                    <thead>
                        <tr class="bg-[#61677A] text-white text-3xl h-[80px] border-b border-[#191717]">
                            <th class="py-2 px-4 text-left font-semibold">Product</th>
                            <th class="py-2 px-4 text-left font-semibold">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-[#D8D9DA] border-b border-r border-[#191717] h-[50px] text-[#213555]" v-for="item in cart.items" :key="item.id">
                            <td class="py-2 px-4 text-lg">{{ item.product.name }}: {{ item.qty }}x</td>
                            <td class="py-2 px-4 text-lg">{{ item.total }}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr class="bg-[#D8D9DA] border-b border-[#191717] h-[50px]">
                            <td class="py-2 px-4 text-lg font-semibold">Subtotal:	</td>
                            <td class="py-2 px-4 text-lg">{{ cart.getTotalPrice }}</td>
                        </tr>
                        <tr class="bg-[#D8D9DA] border-b border-[#191717] h-[50px]">
                            <td class="py-2 px-4 text-lg font-semibold">Payment method:</td>
                            <td class="py-2 px-4 text-lg">{{ check_payment.payment }}</td>
                        </tr>
                        <tr class="bg-[#D8D9DA] border-b border-[#191717] h-[50px]">
                            <td class="py-2 px-4 text-lg font-semibold">Total:</td>
                            <td class="py-2 px-4 text-lg">{{ cart.getTotalDiscount }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    
            <a href="/cashier">
                <button class="mt-10 bg-[#4D4C7D] w-[115px] h-[50px] rounded-[20px] text-white text-xl hover:bg-[#363062]" @click="endSell()">
                    Print
                </button>
            </a>
        </div>
    </div>
</template>

<script setup>
    import { getActivePinia } from "pinia"
    import { useCheckPaymentStore } from "~/stores/useCheckPaymentStore"
    import { useCustomerStore } from "~/stores/useCustomerStore"
    import { useCartStore } from "~/stores/useCartStore"
    import { useOrderStore } from "~/stores/useOrderStore"

    const check_payment = useCheckPaymentStore();
    const customer = useCustomerStore();
    const cart = useCartStore();
    const order = useOrderStore();

    const endSell = () => {
        check_payment.$reset()
        customer.$reset()
        cart.$reset()
        order.$reset()
    }

</script>