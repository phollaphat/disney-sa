import { defineStore } from "pinia";

export const useCheckPaymentStore = defineStore('check_payment', {
    state:() => {
        return {
            payment: ""
        }
    },
    persist: true
})
