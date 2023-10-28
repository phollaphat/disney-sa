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
                <button class="drop-shadow-lg bg-[#5D12D2] h-[60px] w-5/6 rounded-[11px] text-lg font-semibold text-center hover:bg-[#9400FF] text-white">
                    Add Product
                </button>
            </div>
        </div>

        <div class="grid grid-cols-3 justify-items-center h-screen m-5 mt-20 gap-5">
            <div class="bg-white w-5/6 rounded-[37px] p-[5%]" v-for="i in 9">
                <a href="product_detail">
                    <div class="flex justify-center flex-col relative items-center">
                        <div class="card-image flex justify-center mt-3">
                            <img src="@/assets/b180691f36bd713b8c69519b8637fb8b.png" alt=""
                                class="justify-items-center h-4/5 w-4/5">
                        </div>
                        <div class="text-center mt-3 text-xs text-[#7D7C7C]">Scented Candle</div>
                        <div class="text-center font-bold pt-1 text-2xl">Lord of the ring</div>
                        <div class="flex flex-row gap-5 mt-2 ml-14 justify-start w-full">
                            <div class="text-xl font-medium text-center">10 ชิ้น</div>
                            <div class="bg-[#5D9C59] rounded-full w-[18px] h-[18px] text-center mt-1"></div>
                        </div>
                    </div>
                </a>
            </div>
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