<template>
    <div class="flex flex-col justify-center w-full">
        <div class="h-screen py-8 text-center w-full">
            <h1
                class="text-[48px] text-[#FFFFFF] font-semibold mb-10 mx-auto w-[358px] bg-[#9985BB] text-center rounded-[20px] shadow-md">
                Edit Profile
            </h1>
            <div class="flex flex-row w-full gap-5 ml-6">
                <div class="w-2/4">
                    <form class="bg-white py-10 px-10 rounded-[15px]">
                        <div>
                            <label for="email" class="block font-semibold text-start">Email</label>
                            <div class="mt-1">
                                <input type="text" name="email" id="email" autofocus="autofocus"
                                    v-model="formDataEP.email"
                                    class="bg-white shadow-sm ring-0 block w-full text-lg focus:outline-none focus:border-tan-500 border-tan-300 p-2 border-2">
                            </div>
                        </div>

                        <div class="mt-6">
                            <div class="flex justify-between">
                                <label for="password" class="block font-semibold">Password</label>
                            </div>
                            <div class="mt-1">
                                <input type="password" name="password" id="password" v-model="formDataEP.password"
                                    class="bg-white shadow-sm ring-0 block w-full text-lg focus:outline-none focus:border-tan-500 border-tan-300 p-2 border-2">
                            </div>
                        </div>

                        <div class="mt-6">
                            <div class="flex justify-between">
                                <label for="password" class="block font-semibold">Confirm Password</label>
                            </div>
                            <div class="mt-1">
                                <input type="password" name="password" id="password"
                                    v-model="formDataEP.password_confirmation"
                                    class="bg-white shadow-sm ring-0 block w-full text-lg focus:outline-none focus:border-tan-500 border-tan-300 p-2 border-2">
                            </div>
                        </div>

                        <button type="submit" @click="onSubmitEP"
                            class="flex flex-no-wrap mt-6 border-2 border-black bg-yellow-500 py-2 px-4 rounded-lg">
                            <span class="text-lg">Submit</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="ml-2 w-6 h-6">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </span>
                        </button>
                    </form>
                </div>

                <div class="w-2/4">
                    <form class="bg-white py-10 px-10 mx-10 rounded-[15px]">
                        <div class="">
                            <div class="flex justify-between">
                                <label for="name" class="block font-semibold">Name</label>
                            </div>
                            <div class="mt-1">
                                <input type="text" name="name" id="name" v-model="formDataNT.name"
                                    class="bg-white shadow-sm ring-0 block w-full text-lg focus:outline-none focus:border-tan-500 border-tan-300 p-2 border-2">
                            </div>
                        </div>

                        <div class="mt-6">
                            <div class="flex justify-between">
                                <label for="name" class="block font-semibold">Telephone</label>
                            </div>
                            <div class="mt-1">
                                <input type="text" name="tel" id="tel" v-model="formDataNT.tel"
                                    class="bg-white shadow-sm ring-0 block w-full text-lg focus:outline-none focus:border-tan-500 border-tan-300 p-2 border-2">
                            </div>
                        </div>
                        <button type="submit" @click="onSubmitNT" class="flex flex-no-wrap mt-6 border-2 border-black bg-yellow-500 py-2 px-4 rounded-lg">
                            <span class="text-lg">Submit</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="ml-2 w-6 h-6">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </span>
                        </button>
                    </form>
                </div>

            </div>

        </div>

        <a href="/profile" class="mb-10">
            <button
                class="bg-[#4D4C7D] w-[100px] h-[45px] ml-4 rounded-[15px] text-xl hover:bg-[#363062] text-white">Back</button>
        </a>
    </div>
</template>

<script setup>
    import {
        useAuthStore
    } from "~/stores/useAuthStore"
    import {
        useRouter
    } from 'vue-router';
    const auth = useAuthStore();

    const route = useRoute()

    const formDataEP = ref({
        email: "",
        password: "",
        password_confirmation: "",
        user_name: auth.user.name
    })

    const formDataNT = ref({
        name: "",
        tel: "",
        user_name: auth.user.name
    })

    const customerShow = ref(null)

    const onSubmitEP = async () => {
        const {
            data: response,
            error
        } = await useMyFetch("auth/userProfileEdit", {
            method: 'PUT',
            body: formDataEP.value
        })

        auth.user.email = response.value.user.email
    }

    const onSubmitNT = async () => {
        const {
            data: response,
            error
        } = await useMyFetch("auth/userProfileEditName", {
            method: 'PUT',
            body: formDataNT.value
        })
        auth.user.name = response.value.user.name
    }   
    
</script>