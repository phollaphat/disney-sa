<template>
    <div id="bg" class="h-full flex justify-center text-[#232946]">
        <div class="bg-[#FFFFFECC] w-[1214px] h-[986px] rounded-[20px] flex flex-col p-10 gap-5 m-5">

        <div class="grid grid-cols-2 gap-6">
            <!-- column 1 -->
            <div> 
                <div class="flex flex-row items-center">
                    <div>
                        <button><img src="../assets/click_to_upload_photo.png" alt="" ></button>
                    </div>
                </div>
                
                <div class="text-[40px] font-bold mt-20">
                    Phone number
                </div>
                <div class="text-[32px] ">
                    <input class="border border-purple-400 p-2 ml-2 rounded-xl"
                    type="text" id="phoneNumber" placeholder="Phone number">
                </div>

                <div class="text-[40px] font-bold mt-5">
                    Email
                </div>
                <div class="text-[32px] ">
                    <input class="border border-purple-400 p-2 ml-2 rounded-xl"
                    type="text" id="email" placeholder="Email">
                </div>
            </div>
            <!-- column 2 -->
            <div class="ml-16">
                <div class="text-[40px] font-bold mt-10">
                        Username
                    </div>
                <div class="text-[32px] ">
                    <input class="border border-purple-400 p-2 ml-2 rounded-xl"
                    type="text" id="username" placeholder="Username">
                </div>

                <div class="text-[40px] font-bold mt-5">
                    Name
                </div>
                <div class="text-[32px]">
                    <input class="border border-purple-400 p-2 ml-2 mb-1 rounded-xl"
                    type="text" id="name" placeholder="Name">
                </div>

                <div class="text-[40px] font-bold mt-24">
                    New Password
                </div>
                <div class="text-[32px] ">
                    <input class="border border-purple-400 p-2 ml-2 rounded-xl"
                    type="text" id="newPassword" placeholder="New Password">
                </div>

                <div class="text-[40px] font-bold mt-5">
                    Confirm Password
                </div>
                <div class="text-[32px] ">
                    <input class="border border-purple-400 p-2 ml-2 rounded-xl"
                    type="text" id="confirmPassword" placeholder="Confirm Password">
                </div>
            </div>

        </div>

    
            <div class="flex justify-center mt-20">
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