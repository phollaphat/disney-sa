<template>
    <div class="flex justify-center p-20 text-[#232946] text-xl" v-for="WarrantyCard in WarrantyCards" :key="WarrantyCard.id">
        <div class="flex flex-col items-center w-4/12">
            <div class=" place-content-center gap-5 p-10 bg-[#FFFFFECC] w-[900px]  rounded-[20px]">
                <div class="flex flex-col items-center">
                    <div class="font-bold text-3xl">
                        Authenticity Certificate
                    </div>

                    <div class="mt-10 font-bold text-xl">
                        At KLOVES,we take great pride in our commitment to quality and authenticity.
                    </div>

                    <div class="mt-10 text-xl">
                        Our jewelry is desighed and craft with highest attention to detail,ensuring
                    </div>
                    <div class="text-xl ">
                        that each piece is noot only beautiful,but also of tthe utmost quality.
                    </div>

                    <div class="mt-10 text-xl">
                        We guarantee that all of our jewelry is made with 925 sterling silver,a high-quality
                    </div>
                    <div class="text-xl ">
                        meterial that ensures durability and longevity .Our jewelry is also hypoallergenic,
                    </div>
                    <div class="text-xl ">
                        making it an ideal choice for those with sensitive skin.
                    </div>

                    <div class="mt-10 text-xl">
                        We stand behind the authenticity of our jewelry and guarantee that each piece is
                    </div>
                    <div class="text-xl ">
                        stamped witth a 925, indicating that it is made from genuine 925 sterling silver.
                    </div>
                </div>

                <div class="flex flex-row mt-20 ml-20 gap-5">
                    <div class="font-bold text-xl">
                        Reference No.
                    </div>
                    <div class="text-semibold">
                        {{WarrantyCard.id}}
                    </div>
                </div>

                <div class="flex flex-row mt-5 ml-20 gap-5">
                    <div class="font-bold text-xl">
                        Product Name:
                    </div>
                    <div class="text-semibold">
                        {{WarrantyCard.product.name}}
                    </div>
                </div>
                
                <div class="flex flex-row mt-5 ml-20 gap-5">
                    <div class="font-bold text-xl">
                        Start Date.
                    </div>
                    <div class="text-semibold">
                        {{WarrantyCard.state_date}}
                    </div>
                </div>

                <div class="flex flex-row mt-5 ml-20 gap-5">
                    <div class="font-bold text-xl">
                        End Date.
                    </div>
                    <div class="text-semibold">
                        {{WarrantyCard.end_date}}
                    </div>
                </div>
                
                <div class="flex flex-col items-center">
                    <div class="mt-20 font-bold text-xl">
                        MADE WITH
                    </div>
                    <div class="font-bold text-7xl">
                        925
                    </div>
                    <div class="font-bold text-xl">
                        STERLING SILVER
                    </div>

                    <div class="mt-20 text-xl">
                        FOR MORE INFORMATION VISIT US AT
                    </div>
                    <div class="text-xl">
                        KLOVESJEWELRY.COM
                    </div>

                </div>

            </div>
        </div>
    </div>
</template>

<script setup>
    import {ref} from 'vue'

    import {
        useCheckPaymentStore
    } from "~/stores/useCheckPaymentStore"
    import {
        useCustomerStore
    } from "~/stores/useCustomerStore"
    import {
        useCartStore
    } from "~/stores/useCartStore"
    import {
        useOrderStore
    } from "~/stores/useOrderStore"
    import {
        useReceiptStore
    } from "~/stores/useReceiptStore"

    const check_payment = useCheckPaymentStore();
    const customer = useCustomerStore();
    const cart = useCartStore();
    const order = useOrderStore();
    const receipt = useReceiptStore();

    const {
        data: WarrantyCards,
        pending
    } = await useMyFetch(`WarrantyCards/${receipt.id}`, {})

    console.log(WarrantyCards)

</script>