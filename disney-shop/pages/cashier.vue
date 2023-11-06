<template>
    <div>
        <div class="flex flex-row justify-items-center items-center gap-5 m-10">
            <div class="flex flex-row w-3/6">
                <div class="">
                    <img src="@/assets/Search.png" alt="" />
                </div>

                <div class="w-full ml-6">
                    <input required="" placeholder="   Searching..." type="text"
                        class="h-[60px] w-full bg-[#FFFDFD] rounded-[20px] pl-4" v-model="searchInput"/>
                </div>
            </div>

            <div class="w-1/6">
                <label class="popup">
                    <input type="checkbox" />
                    <div class="burger" tabindex="0">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <nav class="popup-window">
                        <legend>เรียงตามลำดับ</legend>
                        <ul>
                            <li>
                                <button @click="disableSoft()">
                                    <span>ทั้งหมด</span>
                                </button>
                            </li>
                            <li>
                                <button @click="enableExpen2Cheap()">
                                    <span>แพงที่สุด -> ถูกที่สุด</span>
                                </button>
                            </li>
                            <li>
                                <button @click="enableCheap2Expen()">
                                    <span>ถูกที่สุด -> แพงที่สุด</span>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </label>
            </div>

            <div class="w-1/6">
                <select class="bg-[#FFFDFD] h-[60px] w-full rounded-[20px] pl-4" id="categorySelect" v-model="selectedCategory">
                    <option value="All">All</option>
                    <option value="Scented Candle">Scented Candle</option>
                    <option value="Jewelry">Jewelry</option>
                </select>
            </div>

            <div class="flex flex-row w-1/6 justify-end mr-7">
                <div>
                    <a href="/shoping-cart">
                        <img src="@/assets/Basket_alt_3.png" alt="" class="">
                    </a>
                </div>
                <div
                    class="relative rounded-full bg-red-600 w-[30px] h-[30px] absolute left-1 top-1 text-center font-bold">
                    <div class="mt-1" style="color: white;">
                        {{ cart.lengthItems }}
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-3 justify-items-center h-full m-5 gap-12 mt-16 text-[#232946]">
            <template v-for="product in filteredProducts" :key="product.id">
                <div class="bg-white w-5/6 rounded-[37px] p-[5%]" v-if="product.stock_quantity > 0">
                    <div class="flex justify-center flex-col relative items-center">
                        <div class="card-image flex justify-center mt-3">
                            <img src="@/assets/b180691f36bd713b8c69519b8637fb8b.png" alt=""
                                class="justify-items-center h-4/5 w-4/5">
                        </div>
                        <div class="text-center mt-3 text-xs text-[#7D7C7C]">{{ product.category }}</div>
                        <div class="text-center font-bold pt-1 text-2xl">{{ product.name }}</div>
                        <div class="text-xl pt-1 text-center">{{ product.price }} Baht</div>
                        <div class="flex justify-center items-center pt-2 w-full">
                            <button @click="addItem(product)" onclick="openModal('modelConfirm')"
                                class="bg-[#5D12D2] h-[40px] w-5/6 rounded-[11px] text-[14px] text-center drop-shadow-sm hover:bg-[#9400FF] text-white">
                                ADD TO ORDER
                            </button>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</template>

<script setup>
    import {
        useCartStore
    } from "~/stores/useCartStore"
    import { computed } from 'vue';
    import { ref } from 'vue';

    import { createToast } from 'mosha-vue-toastify';
    import 'mosha-vue-toastify/dist/style.css';

    const {
        data: products,
        pending
    } = await useMyFetch("products", {});
    
    const selectedCategory = ref('All');
    const searchInput = ref('');

    const sortExpen2Cheap = ref(false);
    const sortCheap2Expen = ref(false);

    const enableExpen2Cheap = () => {
        sortExpen2Cheap.value = true;
        sortCheap2Expen.value = false;
        console.log(sortExpen2Cheap.value);
        console.log(sortCheap2Expen.value);
    }

    const enableCheap2Expen = () => {
        sortExpen2Cheap.value = false;
        sortCheap2Expen.value = true;
        console.log(sortExpen2Cheap.value);
        console.log(sortCheap2Expen.value);
    }

    const disableSoft = () => {
        sortExpen2Cheap.value = false;
        sortCheap2Expen.value = false;
        console.log(sortExpen2Cheap.value);
        console.log(sortCheap2Expen.value);
    }

    const filteredProducts = computed(() => {
        if (selectedCategory.value === 'All') {
            if (sortExpen2Cheap.value) {
                return products.value.filter(product=> product.name.toLowerCase().indexOf(searchInput.value.toLowerCase()) != -1).sort((a,b) => {
                    let fa = a.price, fb = b.price;
                    if (fa > fb) {
                        return -1
                    }
                    if (fa < fb) {
                        return 1
                    }
                    return 0
                });
            }
            if (sortCheap2Expen.value) {
                return products.value.filter(product=> product.name.toLowerCase().indexOf(searchInput.value.toLowerCase()) != -1).sort((a,b) => {
                    let fa = a.price, fb = b.price;
                    if (fa < fb) {
                        return -1
                    }
                    if (fa > fb) {
                        return 1
                    }
                    return 0
                });
            }
            else {
                return products.value.filter(product=> product.name.toLowerCase().indexOf(searchInput.value.toLowerCase()) != -1).sort((a,b) => {
                    let fa = a.name.toLowerCase(), fb = b.name.toLowerCase();
                    if (fa < fb) {
                        return -1
                    }
                    if (fa > fb) {
                        return 1
                    }
                        return 0
                });
            }
        } else {
            if (sortExpen2Cheap.value) {
                return products.value.filter(product => product.category === selectedCategory.value && product.name.toLowerCase().indexOf(searchInput.value.toLowerCase()) != -1).sort((a,b) => {
                    let fa = a.price, fb = b.price;
                    if (fa > fb) {
                        return -1
                    }
                    if (fa < fb) {
                        return 1
                    }
                    return 0
                });
            }
            if (sortCheap2Expen.value) {
                return products.value.filter(product => product.category === selectedCategory.value && product.name.toLowerCase().indexOf(searchInput.value.toLowerCase()) != -1).sort((a,b) => {
                    let fa = a.price, fb = b.price;
                    if (fa < fb) {
                        return -1
                    }
                    if (fa > fb) {
                        return 1
                    }
                    return 0
                });
            }
            else {
                return products.value.filter(product => product.category === selectedCategory.value && product.name.toLowerCase().indexOf(searchInput.value.toLowerCase()) != -1).sort((a,b) => {
                    let fa = a.name.toLowerCase(), fb = b.name.toLowerCase();
                    if (fa < fb) {
                        return -1
                    }
                    if (fa > fb) {
                        return 1
                    }
                        return 0
                });
            }
        }
    });

    const warningAddProduct = async () => {
        createToast({ title: 'Quantity exceeded amount left in stock'}, {type: 'warning', timeout: 1000, position: 'top-center', showIcon: 'true', hideProgressBar: 'false'})
    }

    const successAddProduct = async () => {
        createToast({ title: 'Add product success.'}, {type: 'success', timeout: 1000, position: 'top-center', showIcon: 'true', hideProgressBar: 'false'})
    }

    const cart = useCartStore();
    const addItem = async (item) => {
        const product = cart.items.find(row => row.id == item.id)
        if (product) {
            if (product.qty < item.stock_quantity) {
                const price = item.price;
                product.qty++
                product.total += price
                successAddProduct();
            }
            else {
                warningAddProduct();
            }
        } else {
            const price = item.price;
            cart.items.push({
                id: item.id,
                product: item,
                qty: 1,
                total: price,
                discount: 0.0
            })
        }
    }
</script>


<style>
    /* The design is inspired from the mockapi.io */

    .popup {
        --burger-line-width: 1.125em;
        --burger-line-height: 0.125em;
        --burger-offset: 0.625em;
        --burger-bg: rgba(0, 0, 0, 0.15);
        --burger-color: #333;
        --burger-line-border-radius: 0.1875em;
        --burger-diameter: 2.125em;
        --burger-btn-border-radius: calc(var(--burger-diameter) / 2);
        --burger-line-transition: 0.3s;
        --burger-transition: all 0.1s ease-in-out;
        --burger-hover-scale: 1.1;
        --burger-active-scale: 0.95;
        --burger-enable-outline-color: var(--burger-bg);
        --burger-enable-outline-width: 0.125em;
        --burger-enable-outline-offset: var(--burger-enable-outline-width);
        /* nav */
        --nav-padding-x: 0.25em;
        --nav-padding-y: 0.625em;
        --nav-border-radius: 0.375em;
        --nav-border-color: #ccc;
        --nav-border-width: 0.0625em;
        --nav-shadow-color: rgba(0, 0, 0, 0.2);
        --nav-shadow-width: 0 1px 5px;
        --nav-bg: #eee;
        --nav-font-family: Menlo, Roboto Mono, monospace;
        --nav-default-scale: 0.8;
        --nav-active-scale: 1;
        --nav-position-left: 0;
        --nav-position-right: unset;
        /* if you want to change sides just switch one property */
        /* from properties to "unset" and the other to 0 */
        /* title */
        --nav-title-size: 0.625em;
        --nav-title-color: #777;
        --nav-title-padding-x: 1rem;
        --nav-title-padding-y: 0.25em;
        /* nav button */
        --nav-button-padding-x: 1rem;
        --nav-button-padding-y: 0.375em;
        --nav-button-border-radius: 0.375em;
        --nav-button-font-size: 12px;
        --nav-button-hover-bg: #6495ed;
        --nav-button-hover-text-color: #fff;
        --nav-button-distance: 0.875em;
        /* underline */
        --underline-border-width: 0.0625em;
        --underline-border-color: #ccc;
        --underline-margin-y: 0.3125em;
    }

    /* popup settings 👆 */

    .popup {
        display: inline-block;
        text-rendering: optimizeLegibility;
        position: relative;
    }

    .popup input {
        display: none;
    }

    .burger {
        display: flex;
        position: relative;
        align-items: center;
        justify-content: center;
        background: var(--burger-bg);
        width: var(--burger-diameter);
        height: var(--burger-diameter);
        border-radius: var(--burger-btn-border-radius);
        border: none;
        cursor: pointer;
        overflow: hidden;
        transition: var(--burger-transition);
        outline: var(--burger-enable-outline-width) solid transparent;
        outline-offset: 0;
    }

    .burger span {
        height: var(--burger-line-height);
        width: var(--burger-line-width);
        background: var(--burger-color);
        border-radius: var(--burger-line-border-radius);
        position: absolute;
        transition: var(--burger-line-transition);
    }

    .burger span:nth-child(1) {
        top: var(--burger-offset);
    }

    .burger span:nth-child(2) {
        bottom: var(--burger-offset);
    }

    .burger span:nth-child(3) {
        top: 50%;
        transform: translateY(-50%);
    }

    .popup-window {
        z-index: 9999;
        transform: scale(var(--nav-default-scale));
        visibility: hidden;
        opacity: 0;
        position: absolute;
        padding: var(--nav-padding-y) var(--nav-padding-x);
        background: var(--nav-bg);
        font-family: var(--nav-font-family);
        color: var(--nav-text-color);
        border-radius: var(--nav-border-radius);
        box-shadow: var(--nav-shadow-width) var(--nav-shadow-color);
        border: var(--nav-border-width) solid var(--nav-border-color);
        top: calc(var(--burger-diameter) + var(--burger-enable-outline-width) + var(--burger-enable-outline-offset));
        left: var(--nav-position-left);
        right: var(--nav-position-right);
        transition: var(--burger-transition);
        flex-shrink: 0;
    }

    .popup-window legend {
        padding: var(--nav-title-padding-y) var(--nav-title-padding-x);
        margin: 0;
        color: var(--nav-title-color);
        font-size: var(--nav-title-size);
        text-transform: uppercase;
    }

    .popup-window ul {
        margin: 0;
        padding: 0;
        list-style-type: none;
    }

    .popup-window ul button {
        outline: none;
        width: 100%;
        border: none;
        background: none;
        display: flex;
        align-items: center;
        color: var(--burger-color);
        font-size: var(--nav-button-font-size);
        padding: var(--nav-button-padding-y) var(--nav-button-padding-x);
        white-space: nowrap;
        border-radius: var(--nav-button-border-radius);
        cursor: pointer;
        column-gap: var(--nav-button-distance);
    }

    .popup-window ul li:nth-child(1) svg,
    .popup-window ul li:nth-child(2) svg {
        color: cornflowerblue;
    }

    .popup-window ul li:nth-child(4) svg,
    .popup-window ul li:nth-child(5) svg {
        color: rgb(153, 153, 153);
    }

    .popup-window ul li:nth-child(7) svg {
        color: red;
    }

    .popup-window hr {
        margin: var(--underline-margin-y) 0;
        border: none;
        border-bottom: var(--underline-border-width) solid var(--underline-border-color);
    }

    /* actions */

    .popup-window ul button:hover,
    .popup-window ul button:focus-visible,
    .popup-window ul button:hover svg,
    .popup-window ul button:focus-visible svg {
        color: var(--nav-button-hover-text-color);
        background: var(--nav-button-hover-bg);
    }

    .burger:hover {
        transform: scale(var(--burger-hover-scale));
    }

    .burger:active {
        transform: scale(var(--burger-active-scale));
    }

    .burger:focus:not(:hover) {
        outline-color: var(--burger-enable-outline-color);
        outline-offset: var(--burger-enable-outline-offset);
    }

    .popup input:checked+.burger span:nth-child(1) {
        top: 50%;
        transform: translateY(-50%) rotate(45deg);
    }

    .popup input:checked+.burger span:nth-child(2) {
        bottom: 50%;
        transform: translateY(50%) rotate(-45deg);
    }

    .popup input:checked+.burger span:nth-child(3) {
        transform: translateX(calc(var(--burger-diameter) * -1 - var(--burger-line-width)));
    }

    .popup input:checked~nav {
        transform: scale(var(--nav-active-scale));
        visibility: visible;
        opacity: 1;
    }

    /* Hide the default checkbox */
    .container input {
        display: none;
    }

    .container {
        display: block;
        position: relative;
        cursor: pointer;
        font-size: 20px;
        user-select: none;
        -webkit-tap-highlight-color: transparent;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: relative;
        top: 0;
        left: 0;
        height: 1.3em;
        width: 1.3em;
        background-color: #2196f300;
        border-radius: 0.25em;
        transition: all 0.25s;
    }

    /* When the checkbox is checked, add a blue background */
    .container input:checked~.checkmark {
        background-color: #2196f3;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        transform: rotate(0deg);
        border: 0.1em solid black;
        left: 0;
        top: 0;
        width: 1.05em;
        height: 1.05em;
        border-radius: 0.25em;
        transition: all 0.25s, border-width 0.1s;
    }

    /* Show the checkmark when checked */
    .container input:checked~.checkmark:after {
        left: 0.45em;
        top: 0.25em;
        width: 0.25em;
        height: 0.5em;
        border-color: #fff0 white white #fff0;
        border-width: 0 0.15em 0.15em 0;
        border-radius: 0em;
        transform: rotate(45deg);
    }

    /* .card-image {
        background-color: rgb(236, 236, 236);
        width: 290px;
        height: 290px;
        border-radius: 6px 6px 0 0;
        display: block;
    } */
</style>