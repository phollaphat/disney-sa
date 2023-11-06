<template>
    <div class="flex flex-col justify-start">
        <div class="h-screen py-8">
            <div class="mx-auto px-4">
                <h1 class="text-[48px] text-[#FFFFFF] font-semibold mb-10 mx-auto w-[358px] bg-[#9985BB] text-center rounded-[20px] shadow-md">Add New Product</h1>    
                <div class=" place-content-center gap-5 p-10 bg-[#FFFFFECC] w-[1120px] h-[650px] rounded-[20px]" >
                    <form @submit.prevent="onSubmit()">
                    <table class="w-full flex rows gap-[80px]">
                        <tr>
                            <div>
                            <img src="@/assets/b180691f36bd713b8c69519b8637fb8b.png" alt="" class="h-[500px] w-[500px] object-center drop-shadow-lg">
                            </div>
                         
                        </tr>
                        
                        <tr>
                            <h3 class=""> Product No.</h3>
                            <input type="text"
                                    class="mb-3 w-4/4 relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"
                                    placeholder="Product No." v-model="formData.model_code">

                            <h3 class=""> Product Name</h3> 
                            <input type="text"
                                    class="mb-3 w-4/4 relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"
                                    placeholder=" Product Name" v-model="formData.name">
                            

                            <h3 class=""> Category</h3>
                            <select class="ml-[45px] rounded rounded-full" id="category" v-model="formData.category">
                                <option value="Jewelry">Jewelry</option>
                                <option value="Scented Candle">Scented Candle</option>
                            </select>

                            <h3 class=""> Size</h3> 
                            <input type="text"
                                    class="mb-3 w-4/4 relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"
                                    placeholder=" Size" v-model="formData.size">

                                    <h3 class=""> Price</h3> 
                            <input type="price"
                                    class="mb-3 w-4/4 relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"
                                    placeholder=" Price" v-model="formData.price">

                                    <h3 class=""> Quantity</h3> 
                            <input type="text"
                                    class="mb-3 w-4/4 relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"
                                    placeholder="Quantity" v-model="formData.quantity">

                            <div class="mt-10"> 
                                <a href="products">
                                    <button type="submit" class=" text-xl bg-[#5D12D2] w-[80px] h-[50px] rounded-[10px] text-center drop-shadow-sm hover:bg-[#9400FF] text-white">Submit</button>
                                </a>
                            </div>
                                
                        </tr>
                    
                    </table>
                </form>
                </div>
            </div>
        </div>
        <a href="products">
                <button
                    class="bg-[#4D4C7D] w-[100px] h-[45px] ml-4 rounded-[15px] text-xl hover:bg-[#363062] text-white">Back</button>
            </a>
    </div>
</template>

<script setup>
    const route = useRoute()
    const formData = ref({
        name: "",
        price:"",
        model_code:"",
        category:"",
        size:"",
        quantity: "",
    })

    const customerShow = ref(null)

    const onSubmit = async () => {
        const {
            data: response,
            error
        } = await useMyFetch(`products/`, {
            method: 'POST',
            body: formData.value
        })
    }

</script>