import { defineStore } from "pinia";

export const useTotalStore = defineStore('total', {
    state:() => {
        return {
            Alipay: 0,
            Cash: 0,
            CreditDebitCard: 0,
            QrThai: 0
        }
    },
    getters: {
        
        // lengthItems: (state) => state.items.reduce((a, b: any) =>(a + b.qty), 0),
        // isEmpty: (state) => state.items.length == 0,
        // getTotalPrice: (state) => state.items.reduce((total, item: any) => total + item.total, 0).toFixed(2),
        // getTotalDiscount: (state) => state.items.reduce((total, item: any) => total + (item.total - item.discount), 0).toFixed(2),
        // getSubDiscount: (state) => state.items.reduce((discount, item: any) => discount + item.discount, 0).toFixed(2),
    },
    persist: true
})
