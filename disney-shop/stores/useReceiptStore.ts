import { defineStore } from "pinia";

export const useReceiptStore = defineStore('receipt', {
    state:() => {
        return {
            id: 0
        }
    },
    persist: true
})