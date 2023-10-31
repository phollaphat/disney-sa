import { defineStore } from "pinia";

export const useCustomerStore = defineStore('customer', {
    state:() => {
        return {
            tel: "",
            name: ""
        }
    },
    persist: true
})
