<template>
    <div class="flex flex-row justify-center text-center text-3xl font-bold rounded-[15px] w-full my-10 h-20">
        <div class="bg-[#FF93A9] w-1/4 h-full p-5 rounded-[20px]">
            Order Reports
        </div>
    </div>
    <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10 border-[#2B1D49] border-[0.5px]">
        <table class="w-full table-fixed">
            <thead>
                <tr class="bg-[#FFAA8B] text-xl border-[#2B1D49] border-b-[0.1px]">
                    <th class="w-1/4 py-4 px-6 text-left text-[#4A4453] font-bold uppercase">Order</th>
                    <th class="w-1/4 py-4 px-6 text-left text-[#4A4453] font-bold uppercase">Employee</th>
                    <th class="w-1/4 py-4 px-6 text-left text-[#4A4453] font-bold uppercase">Date</th>
                    <th class="w-1/4 py-4 px-6 text-left text-[#4A4453] font-bold uppercase">Amount</th>
                    <th class="w-1/4 py-4 px-6 text-left text-[#4A4453] font-bold uppercase">Status</th>
                </tr>
            </thead>
            <tbody v-if="orders" class="bg-white text-lg" v-for="order in orders">
                <tr v-if="order.status == 'ชำระเงินแล้ว'">
                    <td class="py-4 px-6 border-b border-gray-200">{{order.id}}</td>
                    <td class="py-4 px-6 border-b border-gray-200 truncate">{{order.user.name}}</td>
                    <td class="py-4 px-6 border-b border-gray-200 truncate">{{order.date}}</td>
                    <td class="py-4 px-6 border-b border-gray-200">{{order.total_price}}</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-lg">Paid</span>
                    </td>
                </tr>
                <tr v-else>
                    <td class="py-4 px-6 border-b border-gray-200">{{order.id}}</td>
                    <td class="py-4 px-6 border-b border-gray-200 truncate">{{order.user.name}}</td>
                    <td class="py-4 px-6 border-b border-gray-200 truncate">{{order.date}}</td>
                    <td class="py-4 px-6 border-b border-gray-200">{{order.total_price}}</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-red-500 text-white py-1 px-2 rounded-full text-lg">Not yet paid</span>
                    </td>
                </tr>
            </tbody>
            <tbody v-else class="bg-white text-lg" v-for="order in orders">
                <tr>
                    <td class="py-4 px-6 border-b border-gray-200">no info</td>
                    <td class="py-4 px-6 border-b border-gray-200 truncate">no info</td>
                    <td class="py-4 px-6 border-b border-gray-200">no info</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        no info
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script setup>
    const {
        data: orders,
        error
    } = await useMyFetch('orders', {})

    console.log(orders)
</script>