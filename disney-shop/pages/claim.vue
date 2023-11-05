<template>
    <div class="flex flex-col justify-start">
        <div class="h-screen py-8">
            <div class="mx-auto px-4">
                <h1 class="text-[48px] text-[#FFFFFF] font-semibold mb-10 mx-auto w-[358px] bg-[#9985BB] text-center rounded-[20px] shadow-md">Claim</h1>

                <MenuLink to="/add_claim" class="bg-[#9985BB] text-white py-2 px-4 rounded-lg mt-4 w-full text-center">
                                Add New Cliam
                </MenuLink>
            
                <div class="flex flex-col md:flex-row mt-5 gap-5">
                    <div class="md:w-full">
                        <div class="bg-white rounded-lg shadow-md p-6 mb-4">
                            <table class="w-full flex rows gap-[132px]">
                                    <tr class="flex rows gap-[115px]">
                                        <th class="font-semibold ">Date </th>
                                        <th class="font-semibold pl-[60px]">Claim No.</th>
                                        <th class="font-semibold pl-[50px]">Waranty No.</th>
                                        <th class="font-semibold pl-[50px]">Model</th>
                                        <th class="font-semibold pl-[50px]">Tel.</th>          
                                    </tr>

                        </table>

                        </div>
                        <div class="bg-white rounded-lg shadow-md p-6 mb-4" v-for="i in 20">
                            <table class="w-full">

                                <tbody>
                                    <tr class=" flex rows gap-[125px]">
                                        <td class="py-4">18-10-2023</td>
                                        <td class="py-4 pl-[20px]"> 0001 </td>
                                        <td class="py-4 pl-[100px]"> 0003 </td>
                                        <td class="py-4 pl-[60px]">APG002</td>
                                        <td class="py-4 ">0841104459</td>
                                    </tr>
                                    <!-- More claim rows -->
                                    
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</template>