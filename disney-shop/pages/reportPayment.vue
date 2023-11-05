<template>
    <div class="flex flex-col justify-start">
        <div class="h-screen py-8">
            <div class="mx-auto px-4">
                <h1 class="text-[48px] text-[#FFFFFF] font-semibold mb-10 mx-auto w-[358px] bg-[#9985BB] text-center rounded-[20px] shadow-md">Payment Report</h1>
                <div class="flex flex-col md:flex-row gap-5">
                    <div class="md:w-full">
                        <div class="bg-white rounded-lg shadow-md p-6 mb-4">
                            <table class="w-full flex rows gap-[132px]">
                                    <tr class="flex rows gap-[115px]">
                                        <th class="font-semibold ">Date </th>
                                        <th class="font-semibold pl-[60px]">Alipay</th>
                                        <th class="font-semibold pl-[15px]">Cash</th>
                                        <th class="font-semibold">Credet/Debit Card</th>
                                        <th class="font-semibold">QR</th>
                                        <th class="font-semibold pl-[30px]">All</th>
                                    </tr>
                        </table>
                        
                        </div>
                        
                        <div class="bg-white rounded-lg shadow-md p-6 mb-4" v-for="i in 5">
                            <table class="w-full">
                                <tbody>
                                    <tr class=" flex rows gap-[125px]">
                                        <td class="py-4">18-10-2023</td>
                                        <td class="py-4 pl-[15px]"> 0.00 </td>
                                        <td class="py-4 pl-[17px]"> 0.00 </td>
                                        <td class="py-4 pl-[25px]"> 3490.00 </td>
                                        <td class="py-4 pl-[35px]">0.00</td>
                                        <td class="py-4">3490.00</td>
                                        
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

<script setup>
  const {
    data: orders,
    pending
  } = await useMyFetch("orders", {});
</script>