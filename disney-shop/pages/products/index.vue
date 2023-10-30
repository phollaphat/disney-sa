<template>
    <div>
        <div class="flex flex-row justify-items-center items-center gap-5 m-10">
            <div class="w-1/7">
                <img src="@/assets/Search.png" alt="" />
            </div>

            <div class="w-1/3">
                <input required="" placeholder="   Searching..." type="text"
                    class="h-[60px] w-full bg-[#FFFDFD] rounded-[20px]" />
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
                                    <button>
                                        <span>น้อยไปมาก</span>
                                    </button>
                                </li>
                                <li>
                                    <button>
                                        <span>มากไปน้อย</span>
                                    </button>
                                </li>
                                <li>
                                    <button>
                                        <span>ไม่มีสินค้า</span>
                                    </button>
                                </li>
                            </ul>
                        </nav>
                    </label>
                </div>
            </div>

            <div class="w-1/5">
                <select name="" id="" class="bg-[#FFFDFD] h-[60px] w-full rounded-[20px] pl-4">
                    <div>
                        <option value="">All</option>
                        <option value="">Scented Candle</option>
                        <option value="">Jewelry</option>
                    </div>
                </select>
            </div>

            <div class="w-1/6 ml-4">
                <button
                    class="drop-shadow-lg bg-[#5D12D2] h-[60px] w-5/6 rounded-[11px] text-lg font-semibold text-center hover:bg-[#9400FF] text-white">
                    Add Product
                </button>
            </div>
        </div>

        <div class="grid grid-cols-3 justify-items-center h-screen m-5 mt-20 gap-5">
            <div class="bg-white w-5/6 rounded-[37px] p-[5%]" v-for="product in products">
                <NuxtLink :to="`/products/${product.id}`">
                    <div class="flex justify-center flex-col relative items-center">
                        <div class="card-image flex justify-center mt-3">
                            <img src="@/assets/b180691f36bd713b8c69519b8637fb8b.png" alt=""
                                class="justify-items-center h-4/5 w-4/5">
                        </div>
                        <div class="text-center mt-3 text-xs text-[#7D7C7C]">{{ product.category }}</div>
                        <div class="text-center font-bold pt-1 text-lg">{{ product.name }}</div>
                        <div class="flex flex-row gap-5 mt-2 ml-14 justify-start w-full">
                            <div class="text-xl font-medium text-center">{{ product.stock_quantity }} ชิ้น</div>
                            <div v-if="product.stock_quantity > 0" :class="['bg-[#5D9C59]', 'rounded-full', 'w-[18px]', 'h-[18px]', 'text-center', 'mt-1']"></div>
                            <div v-else :class="['bg-[#DF2E38]', 'rounded-full', 'w-[18px]', 'h-[18px]', 'text-center', 'mt-1']"></div>
                        </div>
                    </div>
                </NuxtLink>
            </div>
        </div>


    </div>
</template>

<script setup lang="ts">
    const { data: products, pending } = await useMyFetch("products", {})
</script>

<style>

</style>