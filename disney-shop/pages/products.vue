<template>
    <div>
        <div class="flex flex-row justify-items-center items-center gap-5">
            <div class="p-10">
                <img src="@/assets/Search.png" alt="" />
            </div>
            <div>
                <input required="" placeholder="   Searching..." type="text"
                    class="h-[60px] w-[405px] bg-[#FFFDFD] rounded-[20px]" />
            </div>

            <div class="p-5">
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

            <div class="pl-[100px]">
                <select name="" id="" class="bg-[#FFFDFD] w-[236px] h-[60px] rounded-[20px] pl-4">
                    <div>
                        <option value="">All</option>
                        <option value="">Scented Candle</option>
                        <option value="">Jewelry</option>
                    </div>
                </select>
            </div>

            <div class="pl-16">
                <button
                    class="bg-[#4D4C7D] hover:bg-[#363062] w-[10px] h-[60px] text-white rounded-[15px]">
                    <div class="font-bold text-xl">Add Product</div>
                </button>
            </div>
        </div>


        <div class="flex justify-center">
            <a href="product_detail">
                <div class="flex flex-row justify-center">
                    <div class="grid grid-cols-3 justify-items-center h-screen pt-1 gap-[90px]">
                        <div class="card-product h-[400px]" v-for="i in 9">
                            <div class="flex justify-center flex-col relative items-center">
                                <div class="card-image">
                                    <img src="@/assets/b180691f36bd713b8c69519b8637fb8b.png" alt=""
                                        class="justify-items-center h-[290px] w-[290px] pt-2">
                                </div>
                                <div class="text-center mt-3 text-xs text-[#7D7C7C]">Scented Candle</div>
                                <div class="text-center font-bold pt-2 text-2xl">Lord of the ring</div>
                                <div class="text-xl pt-1 font-medium text-center">1032 Baht</div>
                            </div>
                        </div>
                    </div>
                </div>

            </a>
        </div>
    </div>
</template>

<script>
    export default {};
</script>

<style>
    /* The design is inspired from the mockapi.io */

    /* .card {
        width: 350px;
        height: 400px;
        background: white;
        border-radius: 37px;
        padding: 7% 7% 7% 6%;
    }
    .card-image {
        background-color: rgb(236, 236, 236);
        width: 290px;
        height: 290px;
        border-radius: 6px 6px 0 0;
        display: block;
    }

    .card-image:hover {
        transform: scale(0.98);
    } */

    /* 
    .category {
        text-transform: uppercase;
        font-size: 0.7em;
        font-weight: 600;
        color: rgb(63, 121, 230);
        padding: 10px 7px 0;
    }

    .category:hover {
        cursor: pointer;
    }

    .heading {
        font-weight: 600;
        color: rgb(88, 87, 87);
        padding: 7px;
    }

    .heading:hover {
        cursor: pointer;
    }

    .author {
        color: gray;
        font-weight: 400;
        font-size: 11px;
        padding-top: 20px;
    }

    .name {
        font-weight: 600;
    }

    .name:hover {
        cursor: pointer;
    } */
</style>