<template>
    <div class="flex flex-col justify-start">
        <div class="h-screen py-8">
            <div class="mx-auto px-4">
                <h1
                    class="text-[48px] text-[#FFFFFF] font-semibold mb-10 mx-auto w-[358px] bg-[#9985BB] text-center rounded-[20px] shadow-md">
                    Payment Report
                </h1>
                
                <div class="block w-full overflow-x-auto border">
                    <table class="items-center w-full bg-transparent border-collapse">
                        <thead>
                            <tr class="bg-gray-50 h-[80px]">
                                <th
                                    class="px-4 text-gray-700 w-2/5 align-middle py-3 text-xl font-bold text-left border-l-0 border-r-0">
                                    Date    
                                </th>
                                <th
                                    class="px-4 text-gray-700 w-2/5 align-middle py-3 text-xl font-bold text-left border-l-0 border-r-0">
                                    Payment Channel
                                </th>
                                <th
                                    class="px-4 text-gray-700 w-1/5 align-middle py-3 text-xl font-bold text-left border-l-0 border-r-0">
                                    Total of Payment Channel
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 bg-white">
                            <tr class="text-gray-500">
                                <th
                                    class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">
                                    Organic
                                    Search</th>
                                <td
                                    class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">
                                    5,649</td>
                                <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                    <div class="flex items-center">
                                        <span class="mr-2 text-xs font-medium">30%</span>
                                        <div class="relative w-full">
                                            <div class="w-full bg-gray-200 rounded-sm h-2">
                                                <div class="bg-cyan-600 h-2 rounded-sm" style="width: 30%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { ref } from 'vue';

    const {
        data: orders,
        pending
    } = await useMyFetch("orders/report", {});

    const Alipay = ref();
    const Cash = ref();
    const CreditDebitCard = ref();
    const QrThai = ref();
    
</script>