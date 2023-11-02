<template>
    <div class="flex justify-center p-20 text-[#232946] text-xl">
        <div class="flex flex-col items-center w-1/5">
            <div class="flex flex-col items-center">
                <div class="font-bold text-3xl">
                    APG Wholeness Co., Ltd.
                </div>
                <div class="text-center w-3/5 mb-2">
                    499/265 หมู่ 2 ตำบลศิลา อำเภอเมือง ขอนแก่น จังหวัดขอนแก่น 40000
                </div>
                <div class="flex flex-row border-b-2 border-[#53505C] w-full justify-center pb-3">
                    <div class="mr-1 font-bold">
                        โทร.
                    </div>
                    <div>
                        0845966949
                    </div>
                </div>
            </div>

            <div class="flex flex-row self-start gap-10 border-b-2 border-[#53505C] w-full py-2">
                <div class="flex flex-col font-bold">
                    <div class="">
                        พนักงาน
                    </div>
                    <div>
                        วันที่
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="">
                        พนักงานขาย
                    </div>
                    <div>
                        {{ receiptShow.date }}
                    </div>
                </div>
            </div>
            
            <div class="flex flex-row justify-between gap-10 border-dashed border-b-2 border-[#53505C] w-full py-2" v-for="item in cart.items" :key="item.id">
                <div class="flex flex-col">
                    <div class="">
                        {{ item.qty }}
                    </div>
                </div>
                <div class="flex flex-col">
                    <div>
                        {{ item.product.name }}
                    </div>
                </div>
                <div class="flex flex-col">
                    <div>
                        {{ item.total }}
                    </div>
                </div>
            </div>

            <div class="flex flex-row self-start">
                จำนวนชิ้น
            </div>

            <div class="">
                จำนวนชิ้น
            </div>

            <div class="flex justify-center w-full border-b-2 border-[#53505C]">
                จำนวนชิ้น
            </div>

            <div class="flex justify-center w-full border-double border-b-2 border-[#53505C] py-3">
                จำนวนทั้งหมด
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
        data: receiptShow,
        pending
    } = await useMyFetch(`receipts/${receipt.id}`, {})

    

</script>