<template>
    <div>
        <div class="flex flex-row justify-items-center items-center gap-5 m-10">
            <div class="flex flex-row w-3/6">
                <div class="">
                    <img src="@/assets/Search.png" alt="" />
                </div>

                <div class="w-full ml-6">
                    <input required="" placeholder="   Searching..." type="text"
                        class="h-[60px] w-full bg-[#FFFDFD] rounded-[20px] pl-5" v-model="searchInput"/>
                </div>
            </div>

            <div class="w-1/6">
                <div class="w-full">
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
                                <button @click="enableZeroItems()">
                                    <span>ไม่มีสินค้าในคลัง</span>
                                </button>
                            </li>
                            <li>
                                <button @click="enableLeast2Most()">
                                    <span>สินค้าน้อยที่สุด -> สินค้าเยอะที่สุด</span>
                                </button>
                            </li>
                            <li>
                                <button @click="enableMost2Least()">
                                    <span>สินค้าเยอะที่สุด -> สินค้าน้อยที่สุด</span>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </label>
                </div>
            </div>

            <div class="w-1/6">
                <select name="" id="categorySelect" v-model="selectedCategory"
                    class="bg-[#FFFDFD] h-[60px] w-full rounded-[20px] pl-4">
                    <option value="All">All</option>
                    <option value="Scented Candle">Scented Candle</option>
                    <option value="Jewelry">Jewelry</option>
                </select>
            </div>

            <div class="w-1/6 ml-4">
                <a href="/addProduct">
                        <button class=" text-xl ml-[50px] bg-[#5D12D2] w-[150px] h-[50px] rounded-[10px] text-center drop-shadow-sm hover:bg-[#9400FF] text-white">Add Product</button>
                    </a>
            </div>
        </div>

        <div class="grid grid-cols-3 justify-items-center h-full m-5 mt-16 gap-12">
            <div class="bg-[#fffffe] w-5/6 rounded-[37px] p-[5%] text-[#232946] drop-shadow-xl" v-for="product in filteredProducts" :key="product.id">
                <NuxtLink :to="`/products/${product.id}`">
                    <div class="flex justify-center flex-col relative items-center">
                        <div class="card-image flex justify-center mt-3">
                            <img :src="`http://localhost/images/${product.image_path}`" alt=""
                                class="justify-items-center h-4/5 w-4/5">
                        </div>
                        <div class="text-center mt-3 text-xs text-[#7D7C7C]">{{ product.category }}</div>
                        <div class="text-center font-bold pt-1 text-2xl">{{ product.name }}</div>
                        <div class="flex flex-row gap-5 mt-2 ml-14 justify-start w-full">
                            <div class="text-xl font-medium text-center">{{ product.stock_quantity }} ชิ้น</div>
                            <div v-if="product.stock_quantity > 0"
                                :class="['bg-[#5D9C59]', 'rounded-full', 'w-[18px]', 'h-[18px]', 'text-center', 'mt-1']">
                            </div>
                            <div v-else
                                :class="['bg-[#DF2E38]', 'rounded-full', 'w-[18px]', 'h-[18px]', 'text-center', 'mt-1']">
                            </div>
                        </div>
                    </div>
                </NuxtLink>
            </div>
        </div>


    </div>
</template>

<script setup>
    import { computed } from 'vue';
    import { ref } from 'vue';

    const {
        data: products,
        pending
    } = await useMyFetch("products", {})

    const selectedCategory = ref('All');
    const searchInput = ref('');

    const sortMost2Least = ref(false);
    const sortLeast2Most = ref(false);
    const sortZeroItems = ref(false);

    const enableMost2Least = () => {
        sortMost2Least.value = true;
        sortLeast2Most.value = false;
        sortZeroItems.value = false;
    }

    const enableLeast2Most = () => {
        sortMost2Least.value = false;
        sortLeast2Most.value = true;
        sortZeroItems.value = false;
    }

    const enableZeroItems = () => {
        sortMost2Least.value = false;
        sortLeast2Most.value = false;
        sortZeroItems.value = true;
    }

    const disableSoft = () => {
        sortMost2Least.value = false;
        sortLeast2Most.value = false;
        sortZeroItems.value = false;
    }

    const filteredProducts = computed(() => {
        if (selectedCategory.value === 'All') {
            if (sortMost2Least.value) {
                return products.value.filter(product=> product.name.toLowerCase().indexOf(searchInput.value.toLowerCase()) != -1).sort((a,b) => {
                    let fa = a.stock_quantity, fb = b.stock_quantity;
                    if (fa > fb) {
                        return -1
                    }
                    if (fa < fb) {
                        return 1
                    }
                    return 0
                });
            }
            if (sortLeast2Most.value) {
                return products.value.filter(product=> product.name.toLowerCase().indexOf(searchInput.value.toLowerCase()) != -1).sort((a,b) => {
                    let fa = a.stock_quantity, fb = b.stock_quantity;
                    if (fa < fb) {
                        return -1
                    }
                    if (fa > fb) {
                        return 1
                    }
                    return 0
                });
            }
            if (sortZeroItems.value) {
                return products.value.filter(product=> product.name.toLowerCase().indexOf(searchInput.value.toLowerCase()) != -1 && product.stock_quantity === 0);
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
            if (sortMost2Least.value) {
                return products.value.filter(product => product.category === selectedCategory.value && product.name.toLowerCase().indexOf(searchInput.value.toLowerCase()) != -1).sort((a,b) => {
                    let fa = a.stock_quantity, fb = b.stock_quantity;
                    if (fa > fb) {
                        return -1
                    }
                    if (fa < fb) {
                        return 1
                    }
                    return 0
                });
            }
            if (sortLeast2Most.value) {
                return products.value.filter(product => product.category === selectedCategory.value && product.name.toLowerCase().indexOf(searchInput.value.toLowerCase()) != -1).sort((a,b) => {
                    let fa = a.stock_quantity, fb = b.stock_quantity;
                    if (fa < fb) {
                        return -1
                    }
                    if (fa > fb) {
                        return 1
                    }
                    return 0
                });
            }
            if (sortZeroItems.value) {
                return products.value.filter(product=> product.category === selectedCategory.value && product.name.toLowerCase().indexOf(searchInput.value.toLowerCase()) != -1 && product.stock_quantity === 0 && product.stock_quantity === 0);
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
</script>

<style>

</style>