<template>
    <div class="flex flex-col justify-start">
        <div class="h-screen py-8">
            <div class="mx-auto px-4">
                <h1
                    class="text-[48px] text-[#FFFFFF] font-semibold mb-10 mx-auto w-[358px] bg-[#48416C] text-center rounded-[20px] shadow-md">
                    Claim</h1>

                <div class="ml-[2rem] mb-2">
                    <MenuLink to="/add_claim" class="bg-[#5D12D2] text-white py-3 px-4 rounded-lg w-full text-center hover:bg-[#9400FF]">
                        Add New Claim
                    </MenuLink>
                </div>

                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full">
                                    <thead class="bg-[#EDC18D] border-b-[#48416C]">
                                        <tr>
                                            <th scope="col"
                                                class="text-2xl font-bold text-gray-900 px-6 py-4 text-left">
                                                ID
                                            </th>
                                            <th scope="col"
                                                class="text-2xl font-bold text-gray-900 px-6 py-4 text-left">
                                                Date
                                            </th>
                                            <th scope="col"
                                                class="text-2xl font-bold text-gray-900 px-6 py-4 text-left">
                                                Product
                                            </th>
                                            <th scope="col"
                                                class="text-2xl font-bold text-gray-900 px-6 py-4 text-left">
                                                Customer
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody v-if="claims.value" v-for="claim in claims">
                                        <tr class="bg-gray-100 border-b">
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
                                        </tr>
                                    </tbody>
                                    <tbody v-else class="bg-white h-[500px]">
                                        <tr class="bg-gray-100 border-b">
                                            <td class="px-6 py-4 whitespace-nowrap text-lg font-medium text-gray-900">
                                                No Information
                                            </td>
                                            <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                No Information
                                            </td>
                                            <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                No Information
                                            </td>
                                            <td class="text-lg text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                No Information
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

</script>