<template>
    <div class="flex flex-col justify-start">
        <div class="h-full py-8">
            <div class="px-4" style="text-align: -webkit-center;">
                <h1 class="text-[48px] text-[#FFFFFF] font-semibold mb-10 mx-auto w-[358px] bg-[#9985BB] text-center rounded-[20px] shadow-md">
                    Add Claim
                </h1>

                <div class="place-items-center gap-5 p-10 bg-[#FFFFFECC] w-[1120px] h-[630px] rounded-[20px]">
                    <form @submit.prevent="addClaim()" class="mt-16">
                        <h3 class="text-start text-xl font-bold ml-64 mb-2"> Warranty Card No</h3>
                        <input type="text" v-model="formData.warrantyCard_id"
                            class="mb-10 w-2/4 relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"
                            placeholder="Warranty Card No">
                        <h3 class="text-start text-xl font-bold ml-64 mb-2"> Product Name</h3>
                        <input type="text" v-model="formData.product_name"
                            class="mb-10 w-2/4 relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"
                            placeholder=" Model">
    
                        <h3 class="text-start text-xl font-bold ml-64 mb-2"> Customer Telephone Number</h3>
                            <input type="text" v-model="formData.tel"
                                class="mb-10 w-2/4 relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"
                                placeholder="Customer tel.">
    
                        <button class="bg-[#5D12D2] hover:bg-[#9400FF] text-white text-lg w-2/12 py-5 px-10 rounded-lg mt-4 w-1/5 text-center" type="submit">Submit</button>
                    </form>
                </div>
                <a href="/claim" class="w-[1120px] flex justify-start">
                    <button class="bg-[#4D4C7D] w-[100px] h-[45px] rounded-[15px] text-xl hover:bg-[#363062] text-white mt-5">
                        Back
                    </button>
                </a>
            </div>
        </div>

        
    </div>
</template>

<script setup>
    import { ref } from 'vue';
    import { useAuthStore } from "~/stores/useAuthStore"
    import { useRouter } from 'vue-router';
    import { createToast } from 'mosha-vue-toastify';
    import 'mosha-vue-toastify/dist/style.css';

    const auth = useAuthStore();

    const { data: products, error } = await useMyFetch('products', {})
    
    // const product = cart.items.find(row => row.id == item.id)
    

    const formData = ref({
        "warrantyCard_id": "",
        "product_name": "",
        "tel": "",
        "user_name": auth.user.name
    })


    const warningAddProduct = async () => {
        createToast({ title: 'Quantity exceeded amount left in stock'}, {type: 'warning', timeout: 1000, position: 'top-center', showIcon: 'true', hideProgressBar: 'false'})
    }

    const addClaim = async () => {
        const product = products.value.find(product => product.name == formData.value.product_name);
        console.log(product)
        if (product.qty > 1) {
            console.log(formData.value.product_name)
            const {
                data: response,
                error
            } = await useMyFetch('claims', {
                method: 'POST',
                body: formData.value
            })
            reduceProductQTY();
            const router = useRouter();
            router.push('/claim');
        }
        else {
            console.log("no na")
            warningAddProduct();
        }
    }

    

    const reduceProductQTY = async () => {
        const {
            data: response,
            error
        } = useMyFetch('products/reduceItems', {
            method: 'POST',
            body: {
                "product_name": formData.value.product_name,
                "qty": 1,
            }
        })
    }
    
</script>