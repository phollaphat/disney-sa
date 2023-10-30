import { defineStore } from "pinia";

export const useCartStore = defineStore('cart', {
    state:() => {
        return {
            items: []
        }
    },
    getters: {
        lengthItems: (state) => state.items.reduce((a, b: any) =>(a + b.qty), 0),
        isEmpty: (state) => state.items.length == 0,
        getTotalPrice: (state) => state.items.reduce((a, b: any) =>(a * b.qty), 0)
    },
    persist: true
})
