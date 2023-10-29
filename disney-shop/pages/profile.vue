<template>
    <div id="bg" class="h-full flex justify-center text-[#232946]">
        <div class="bg-[#FFFFFECC] w-[1214px] h-[986px] rounded-[20px] flex flex-col p-10 gap-5 m-5">
            <div class="flex flex-row items-center">
                <div>
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="" class="h-40 w-40">
                </div>
                <div class="p-10 font-bold text-[48px]">
                    {{ user.name }}
                </div>
            </div>
            <div class="text-[40px] font-bold">
                Phone number
            </div>
            <div class="text-[32px] ">
                {{ user.tel }}
            </div>
            <div class="text-[40px] font-bold ">
                Email
            </div>
            <div class="text-[32px] ">
                {{ user.email }}
            </div>
            <div class="text-[40px] font-bold ">
                Role
            </div>
            <div class="text-[32px] ">
                {{ user.role }}
            </div>
            <div class="flex justify-end pt-[100px]">
                <button class="">Edit Profile</button>
            </div>
        </div>
    </div>
</template>

<script setup>
    const { data: user, pending } = await useMyFetch("auth/user-profile", {})
</script>

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