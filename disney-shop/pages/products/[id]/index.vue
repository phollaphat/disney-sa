<template>
    <div class="flex content-center justify-center m-7">
        <div class="flex flex-row place-content-start p-10 bg-[#FFFFFECC] w-[1214px] h-[900px] rounded-[20px]">
            <div class="flex flex-col">
                <div class="ml-[100px] mt-[50px] mr-[160px]">
                    <img src="@/assets/b180691f36bd713b8c69519b8637fb8b.png" alt="" class="h-[400px] w-[400px] object-center drop-shadow-lg">
                    
                </div>
                <div class="pt-[250px] pl-[20px]">
                    <a href="/products/">
                        <button class="mt-[50px] text-xl bg-[#5D12D2] w-[80px] h-[50px] rounded-[10px] text-center drop-shadow-sm hover:bg-[#9400FF] text-white">back</button>
                    </a>
                
                </div>
            </div>
            <div class="flex flex-col gap-5 mt-[50px]">
                <div class="text-2xl font-semibold ml-5 mt-5">
                    Name
                </div>
                <div class="text-lg ml-5 text-[#5B5B5B]">
                    {{product.name}}
                </div>
                <div class="text-2xl font-semibold ml-5 mt-5">
                    Category
                </div>
                <div class="text-lg ml-5 text-[#5B5B5B]">
                    {{product.category}}
                </div>
                <div class="text-2xl font-semibold ml-5 mt-5">
                    Model Code
                </div>
                <div class="text-lg ml-5 text-[#5B5B5B]">
                    {{product.model_code}}
                </div>
                <div class="text-2xl font-semibold ml-5">
                    Price
                </div>
                <div class="text-lg ml-5 text-[#5B5B5B]">
                    {{product.price}}
                </div>
                <div class="text-2xl font-semibold ml-5">
                    Available stock
                </div>
                <div class="text-lg ml-5 text-[#5B5B5B]">
                    {{product.stock_quantity}}
                </div>
                <div class="text-2xl font-semibold ml-5">
                    Size
                </div>
                <div class="text-lg ml-5 text-[#5B5B5B]">
                    {{product.size}}
                </div>
            </div>
            <div class="flex flex-col ml-[100px] ">
                <NuxtLink :to="`/products/${product.id}/edit_product`">
                    <img src="@/assets/pen.png" alt="" class=" h-[50px] w-[50px]">
                </NuxtLink>
                       
            </div>
            <div class="text-1xl mt-3 font-bold drop-shadow-md">edit</div>
        </div>
    </div>
</template>

<script setup>
    const route = useRoute()
    const { data:product, error } = await useMyFetch(
    `products/${route.params.id}`, {}
    )
    if (product.value === null) {
    const { statusCode, statusMessage } = error.value
    console.log(statusCode, statusMessage)
    if (statusCode === 404) {
        await navigateTo("/product")
    }
    } else {
    console.log(product.value)
    }
</script>

<style scoped>
#bg {
    background: url("@/assets/bg-pic copy.png"), lightgray 50%;
    background: cover;
    background: no-repeat;
    height: 100%;
    width: 100%;
}

</style>