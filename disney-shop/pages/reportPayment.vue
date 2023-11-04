<template>
    <div class="flex flex-col justify-start">
        <div class="h-screen py-8">
            <div class="container mx-auto px-4">
                <h1 class="text-[48px] text-[#FFFFFF] font-semibold mb-10 mx-auto w-[358px] bg-[#9985BB] text-center rounded-[20px] shadow-md">Payment Report</h1>
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="md:w-3/4">
                        <table class="w-full">
                            
                                    <tr>
                                        <th class="text-left font-semibold">Date </th>
                                        <th class="text-left font-semibold">Alipay</th>
                                        <th class="text-left font-semibold">Cash</th>
                                        <th class="text-left font-semibold">Credet/Debit Card </th>
                                        <th class="text-left font-semibold">QR</th>
                                        <th class="text-left font-semibold">All</th>
                                    </tr>
                                
                        </table>
                        <div class="bg-white rounded-lg shadow-md p-6 mb-4" v-for="i in 5">
                            <table class="w-full">
                                
                                <tbody>
                                    <tr>
                                        <td class="py-4">
                                            <div class="flex items-center">
                                                <span class="font-semibold">Lord of the Ring</span>
                                            </div>
                                        </td>
                                        <td class="py-4">APG5654457054</td>
                                        <td class="py-4">$19.99</td>
                                        <td class="py-4">
                                            <div class="flex items-center">
                                                <button class="border rounded-md py-2 px-4 mr-2">-</button>
                                                <span class="text-center w-8">1</span>
                                                <button class="border rounded-md py-2 px-4 ml-2">+</button>
                                            </div>
                                        </td>
                                        <td class="py-4">$19.99</td>
                                        
                                    </tr>
                                    <!-- More product rows -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>