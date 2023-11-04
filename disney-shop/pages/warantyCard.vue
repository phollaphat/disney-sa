<template>
    <div class="flex flex-row">
        <div>
            ใบประกันสินค้า
        </div>
        <div v-for="warantyCard in warantyShow">
            <div class="mx-5">
                {{warantyCard.id}}
            </div>
            <div class="mx-5">
                {{warantyCard.product_id}}
            </div>
            <div class="mx-5">
                {{warantyCard.state_date}}
            </div>
            <div class="mx-5">
                {{warantyCard.end_date}}
            </div>
        </div>
    </div>
</template>

<script setup>
    import { useCheckPaymentStore } from "~/stores/useCheckPaymentStore"
    import { useCustomerStore } from "~/stores/useCustomerStore"
    import { useCartStore } from "~/stores/useCartStore"
    import { useOrderStore } from "~/stores/useOrderStore"
    import { useReceiptStore } from "~/stores/useReceiptStore"

    const check_payment = useCheckPaymentStore();
    const customer = useCustomerStore();
    const cart = useCartStore();
    const order = useOrderStore();
    const receipt = useReceiptStore();

    const {
        data: warantyShow,
        pending
    } = await useMyFetch(`warantyCards/${receipt.id}`, {})
</script>