<template>
    <div class="flex flex-col justify-start">
        <div class="h-screen py-8">
            <div class="mx-auto px-4">
                <h1
                    class="text-[48px] text-[#FFFFFF] font-semibold mb-10 mx-auto w-[358px] bg-[#9985BB] text-center rounded-[20px] shadow-md">
                    Payment Report
                </h1>

                <div class="block w-full overflow-x-auto border border-[#48416C] rounded-[15px]">
                    <table class="items-center w-full bg-transparent border-collapse">
                        <thead>
                            <tr class="bg-[#EDC18D] h-[80px] border-b-[0.2px] border-[#48416C]">
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
                                    class="border-t-0 px-4 align-middle text-lg font-normal whitespace-nowrap p-4 text-left">
                                    {{currentDateWithFormat}}
                                </th>
                                <td
                                    class="border-t-0 px-4 align-middle text-lg font-medium text-gray-900 whitespace-nowrap p-4">
                                    Alipay
                                </td>
                                <td class="border-t-0 px-4 align-middle text-lg whitespace-nowrap p-4">
                                    <div class="flex items-center">
                                        <span class="mr-2 text-lg font-medium">
                                            {{ Alipay }}
                                        </span>
                                        <div class="relative w-full">
                                            <div class="w-full bg-gray-200 rounded-sm h-2">
                                                <div class="bg-[#9AC1ED] h-2 rounded-sm"
                                                    :style="{ width: PerAlipay + '%' }"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr class="text-gray-500">
                                <th
                                    class="border-t-0 px-4 align-middle text-lg font-normal whitespace-nowrap p-4 text-left">
                                    {{currentDateWithFormat}}
                                </th>
                                <td
                                    class="border-t-0 px-4 align-middle text-lg font-medium text-gray-900 whitespace-nowrap p-4">
                                    Cash
                                </td>
                                <td class="border-t-0 px-4 align-middle text-lg whitespace-nowrap p-4">
                                    <div class="flex items-center">
                                        <span class="mr-2 text-lg font-medium">
                                            {{ Cash }}
                                        </span>
                                        <div class="relative w-full">
                                            <div class="w-full bg-gray-200 rounded-sm h-2">
                                                <div class="bg-[#B79BF2] h-2 rounded-sm"
                                                    :style="{ width: PerCash + '%' }"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr class="text-gray-500">
                                <th
                                    class="border-t-0 px-4 align-middle text-lg font-normal whitespace-nowrap p-4 text-left">
                                    {{currentDateWithFormat}}
                                </th>
                                <td
                                    class="border-t-0 px-4 align-middle text-lg font-medium text-gray-900 whitespace-nowrap p-4">
                                    CreditDebitCard
                                </td>
                                <td class="border-t-0 px-4 align-middle text-lg whitespace-nowrap p-4">
                                    <div class="flex items-center">
                                        <span class="mr-2 text-lg font-medium">
                                            {{ CreditDebitCard }}
                                        </span>
                                        <div class="relative w-full">
                                            <div class="w-full bg-gray-200 rounded-sm h-2">
                                                <div class="bg-[#EFAB9C] h-2 rounded-sm"
                                                    :style="{ width: PerCreditDebitCard + '%' }"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr class="text-gray-500">
                                <th
                                    class="border-t-0 px-4 align-middle text-lg font-normal whitespace-nowrap p-4 text-left">
                                    {{currentDateWithFormat}}
                                </th>
                                <td
                                    class="border-t-0 px-4 align-middle text-lg font-medium text-gray-900 whitespace-nowrap p-4">
                                    QrThai
                                </td>
                                <td class="border-t-0 px-4 align-middle text-lg whitespace-nowrap p-4">
                                    <div class="flex items-center">
                                        <span class="mr-2 text-lg font-medium">
                                            {{ QrThai }}
                                        </span>
                                        <div class="relative w-full">
                                            <div class="w-full bg-gray-200 rounded-sm h-2">
                                                <div class="bg-[#48416C] h-2 rounded-sm"
                                                    :style="{ width: PerQrThai + '%' }"></div>
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
    import {
        ref
    } from 'vue';

    const {
        data: orders,
        pending
    } = await useMyFetch("orders/report", {});

    const Alipay = ref(0.00);
    const Cash = ref(0.00);
    const CreditDebitCard = ref(0.00);
    const QrThai = ref(0.00);

    var currentDate = new Date();
    var currentDateWithFormat = new Date().toJSON().slice(0, 10).replace(/-/g, '-');
    console.log(currentDateWithFormat);

    if (orders.value) {
        orders.value.map(order => {
            switch (order.receipt.payment_channel) {
                case 'Alipay':
                    if (order.receipt.date === currentDateWithFormat) {
                        Alipay.value += order.total_price;
    
                        break;
                    }
                    case 'Cash':
                        if (order.receipt.date === currentDateWithFormat) {
                            Cash.value += order.total_price;
                            break;
                        }
                        case 'Credit/Debit Card':
                            if (order.receipt.date === currentDateWithFormat) {
                                CreditDebitCard.value += order.total_price;
                                break;
                            }
                            case 'Qr thai':
                                if (order.receipt.date === currentDateWithFormat) {
                                    QrThai.value += order.total_price;
                                    break;
                                }
                                default:
                                    break;
            }
        });
    }

    const PerAlipay = ref(Alipay.value / 100);
    const PerCash = ref(Cash.value / 100);
    const PerCreditDebitCard = ref(CreditDebitCard.value / 100);
    const PerQrThai = ref(QrThai.value / 100);
</script>