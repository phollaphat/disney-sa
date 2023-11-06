<template>
    <div class="flex flex-col justify-center">
        <div class="h-screen py-8 text-center w-full" style=" text-align: -webkit-center; ">
            <h1
                class="text-[48px] text-[#FFFFFF] font-semibold mb-10 mx-auto w-[358px] bg-[#9985BB] text-center rounded-[20px] shadow-md">
                Edit Profile
            </h1>
            <form class="bg-white w-8/12 py-10 px-10 mx-10 rounded-[15px]">
                <div>
                    <label for="email" class="block font-semibold text-start">Email</label>
                    <div class="mt-1"><input type="text" name="email" id="email" value="" autofocus="autofocus"
                            class="bg-white shadow-sm ring-0 block w-full text-lg focus:outline-none focus:border-tan-500 border-tan-300 p-2 border-2">
                    </div>
                </div>

                <div class="mt-6">
                    <div class="flex justify-between">
                        <label for="password" class="block font-semibold">Password</label> <a href="" tabindex="-1"
                            class="branded-link text-sm font-semibold">Forgot your password?</a>
                    </div>
                    <div class="mt-1">
                        <input type="password" name="password" id="password"
                            class="bg-white shadow-sm ring-0 block w-full text-lg focus:outline-none focus:border-tan-500 border-tan-300 p-2 border-2">
                    </div>
                </div>

                <div class="mt-6">
                    <div class="flex justify-between">
                        <label for="password" class="block font-semibold">Password</label> <a href="" tabindex="-1"
                            class="branded-link text-sm font-semibold">Forgot your password?</a>
                    </div>
                    <div class="mt-1">
                        <input type="password" name="password" id="password"
                            class="bg-white shadow-sm ring-0 block w-full text-lg focus:outline-none focus:border-tan-500 border-tan-300 p-2 border-2">
                    </div>
                </div>

                <div>
                    <button class="flex flex-no-wrap mt-6 border-2 border-black bg-yellow-500 py-2 px-4">
                        <span>Sign In</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="ml-2 w-6 h-6">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </span>
                    </button>
                </div>
            </form>
        </div>

        <a href="/profile">
            <button
                class="bg-[#4D4C7D] w-[100px] h-[45px] ml-4 rounded-[15px] text-xl hover:bg-[#363062] text-white">Back</button>
        </a>
    </div>
</template>

<script setup>
    const route = useRoute()
    const formData = ref({
        name: "",
        email: "",
        phonenum: "",
        password: "",
    })

    const customerShow = ref(null)

    const onSubmit = async () => {
        const {
            data: response,
            error
        } = await useMyFetch(`customers/${customer.id}`, {
            method: 'PUT',
            body: formData.value
        })
    }
</script>