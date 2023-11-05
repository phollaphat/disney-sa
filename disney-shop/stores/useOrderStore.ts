import { defineStore } from "pinia";

export const useOrderStore = defineStore('order', {
    state:() => {
        return {
            id: 0
        }
    },
    getters: {
    },
    persist: true
})
