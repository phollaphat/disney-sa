<template>
    <div class="flex flex-col justify-start">
        <div class="h-screen py-8">
            <div class="mx-auto px-4">
                <h1
                    class="text-[48px] text-[#FFFFFF] font-semibold mb-10 mx-auto w-[358px] bg-[#48416C] text-center rounded-[20px] shadow-md">
                    Claim</h1>

                <div class="ml-[2rem] mb-2">
                    <MenuLink to="/add_claim" class="bg-[#3C2973] text-white py-3 px-4 rounded-lg w-full text-center hover:bg-[#9400FF]">
                        Add New Claim
                    </MenuLink>
                </div>

                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden rounded-[15px] border-[0.2px] border-black">
                                <table class="min-w-full">
                                    <thead class="bg-[#EDC18D]">
                                        <tr class="border-b-[#48416C] border-t-0 border-l-0 border-r-0 border-[0.2px]">
                                            <th scope="col"
                                                class="text-2xl font-bold text-gray-900 px-6 py-4">
                                                ID
                                            </th>
                                            <th scope="col"
                                                class="text-2xl font-bold text-gray-900 px-6 py-4">
                                                Date
                                            </th>
                                            <th scope="col"
                                                class="text-2xl font-bold text-gray-900 px-6 py-4">
                                                Product Name
                                            </th>
                                            <th scope="col"
                                                class="text-2xl font-bold text-gray-900 px-6 py-4">
                                                Customer
                                            </th>
                                            <th scope="col"
                                                class="text-2xl font-bold text-gray-900 px-6 py-4">
                                                Warranty Card No
                                            </th>
                                            <th scope="col"
                                                class="text-2xl font-bold text-gray-900 px-6 py-4">
                                                Employee
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody v-if="myArrayLength == 0">
                                        <tr class="bg-gray-100 border-b text-center">
                                            <td class="px-6 py-4 whitespace-nowrap text-lg font-medium text-gray-900">
                                                ไม่มีข้อมูล
                                            </td>
                                            <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                ไม่มีข้อมูล
                                            </td>
                                            <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                ไม่มีข้อมูล
                                            </td>
                                            <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                ไม่มีข้อมูล
                                            </td>
                                            <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                ไม่มีข้อมูล
                                            </td>
                                            <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                ไม่มีข้อมูล
                                            </td>
                                        </tr>
                                    </tbody>

                                    <tbody v-else v-for="claim in claims" :key="claim.id">
                                        <tr class="bg-gray-100 border-b text-center">
                                            <td class="px-6 py-4 whitespace-nowrap text-lg font-medium text-gray-900">
                                                {{claim.id}}
                                            </td>
                                            <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                {{claim.date}}
                                            </td>
                                            <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                {{claim.product.name}}
                                            </td>
                                            <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                {{claim.customer.name}}
                                            </td>
                                            <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                {{claim.warranty_card_id}}
                                            </td>
                                            <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                {{claim.user.name}}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { computed } from 'vue';
    import { ref } from 'vue';

    
    const {
        data: claims,
        pending
    } = await useMyFetch("claims", {});

    const myArrayLength = ref(claims.value.length)
    console.log(myArrayLength.value)

</script>