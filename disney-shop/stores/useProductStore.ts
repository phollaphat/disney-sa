import { defineStore } from "pinia";

export const useProductStore = defineStore('product', {
    state: () => {
        return {
            id: "",
            name: "",
            price: "",
            image_path: "",
        }
    },
    getters: {
        isProductSet: (state) => state.name !== ""
    },
    actions: {
        setProductID(id: string) {
            this.id = id
        },
        setProductName(name: string) {
            this.name = name
        },
        setProductPrice(price: string) {
            this.price = price
        },
        setProductImg_Path(img_path: string) {
            this.image_path = img_path
        },
    },
    persist: true
})