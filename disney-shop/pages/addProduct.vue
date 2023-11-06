<template>
    <!-- อันเก่านะ -->
    <div id="bg" class="h-full flex justify-center text-[#232946]">
        <div class="bg-[#FFFFFECC] w-[1214px] h-[986px] rounded-[20px] flex flex-col p-10 gap-5 m-5">

            <div class="flex justify-center mt-5">
                    <button class=""><img src="../assets/click_to_upload_photo.png" alt="" 
                        class="justify-items-center h-[290px] w-[400px] pt-2"></button>
            </div>

            <div class="grid grid-cols-2 gap-6">
                
                <!-- column 1 -->
                <div> 
                    <div>
                    <div class="text-[40px] font-bold mt-20">
                        Product Name
                    </div>
                    <div class="text-[32px] ">
                    <input class="border border-purple-400 p-2 ml-2 rounded-xl"
                    type="text" id="product_name" placeholder="Product Name">
                    </div>
                    
                </div>

                <div class="text-[40px] font-bold mt-5">
                    Prices
                </div>
                <div class="text-[32px] ">
                    <input class="border border-purple-400 p-2 ml-2 rounded-xl"
                    type="integer" id="price" placeholder="Prices">
                </div>

            </div>

            <!-- column 2 -->
            <div class="ml-16">

                <div class="text-[40px] font-bold mt-20">
                    Type
                </div>
                <div>
                    <select name="" id="" class="border border-purple-400 p-2 ml-2 rounded-xl w-[236px] h-[60px] rounded-[20px] pl-4">
                    <div>
                        <option value="">Scented Candle</option>
                        <option value="">Jewelry</option>
                        <option value="">Other</option>
                    </div>
                </select>
                </div>

                <div class="text-[40px] font-bold mt-10">
                    Quantitys
                    </div>
                <div class="text-[32px] ">
                    <input class="border border-purple-400 p-2 ml-2 rounded-xl"
                    type="integer" id="quantitys" placeholder="Quantitys">
                </div>
                
            </div>
        </div>


        <div class="flex justify-center mt-10">
                <button class="">Submit</button>
        </div>
        </div>
    </div>
</template>

<style scoped>
#bg {
    background: url("@/assets/bg-pic copy.png"), lightgray 50%;
    background: cover;
    background: no-repeat;
    height: 100%;
    width: 100%;
}

button {
    padding: 17px 40px;
    border-radius: 10px;
    border: 0;
    background-color: #B8C1EC;
    letter-spacing: 1.5px;
    font-size: 26px;
    font-weight: bold;
    transition: all .3s ease;
    box-shadow: #232946 0px 10px 0px 0px;
    color: hsl(0, 0%, 100%);
}

button:hover {
    box-shadow: #232946 0px 7px 0px 0px;
}

button:active {
    background-color: #232946;
    /*50, 168, 80*/
    box-shadow: #232946 0px 0px 0px 0px;
    transform: translateY(5px);
    transition: 200ms;
}
</style>