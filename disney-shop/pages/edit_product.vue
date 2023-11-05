<template>
    <div id="bg" class="h-full flex justify-center text-[#232946]">
        <div class="bg-[#FFFFFECC] w-[1214px] h-[986px] rounded-[20px] flex flex-col p-10 gap-5 m-5">

        <div class="flex justify-center">
                <div>
                    <div class="bg-gray-300 card-product">
                            <img src="@/assets/b180691f36bd713b8c69519b8637fb8b.png" alt=""
                            class="justify-items-center h-[290px] w-[290px] mt-10 ml-2">
                    </div>
                </div>


        </div>

            <div class="flex justify-center mt-5">
            <div class="grid grid-cols-2 gap-10">
                
                <!-- column 1 -->
                <div> 
                    <div>
                    <div class="text-[40px] font-bold ">
                        Prices :
                    </div>

                    
                </div>

                <div class="text-[40px] font-bold mt-5">
                    Quantitys :
                </div>


            </div>
            </div>

            <!-- column 2 -->
            <div class="">
                <div class="text-[32px] ">
                    <input class="border border-purple-400 p-2 ml-2 rounded-xl"
                    type="integer" id="price" placeholder="Prices">
                </div>

                <div class="text-[32px] mt-5">
                    <input class="border border-purple-400 p-2 ml-2 rounded-xl"
                    type="integer" id="quantity" placeholder="Quantitys">
                </div>
                
            </div>
        </div>

        <div class="flex justify-center ">
                    <button class=""><img src="../assets/click_to_upload_photo.png" alt="" 
                        class="justify-items-center h-[150px] w-[200px] pt-2"></button>
        </div>

        <div class="flex justify-end">
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