<template>
    <div class="flex flex-col justify-start">
        <div class="h-screen py-8">
            <div class="container mx-auto px-4">
                <h1 class="text-[48px] text-[#FFFFFF] font-semibold mb-10 mx-auto w-[358px] bg-[#9985BB] text-center rounded-[20px] shadow-md">Shopping Cart</h1>
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="md:w-3/4">
                        <div class="bg-white rounded-lg shadow-md p-6 mb-4" v-for="i in 4">
                            <table class="w-full">
                                <thead>
                                    <tr>
                                        <th class="text-left font-semibold">Product</th>
                                        <th class="text-left font-semibold">Model</th>
                                        <th class="text-left font-semibold">Price</th>
                                        <th class="text-left font-semibold">Quantity</th>
                                        <th class="text-left font-semibold">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-4">
                                            <div class="flex items-center">
                                                <img src="@/assets/b180691f36bd713b8c69519b8637fb8b.png" alt="" class="h-16 w-16 mr-4">
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
                                        <td class="py-4">
                                            <button class="py-2.5 px-6 rounded-lg text-sm font-medium bg-[#9985BB] text-white">Remove</button>
                                        </td>
                                    </tr>
                                    <!-- More product rows -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="md:w-1/4">
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h2 class="text-lg font-semibold mb-4">Summary</h2>
                            <div class="flex justify-between mb-2">
                                <span>Subtotal</span>
                                <span>$19.99</span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span>Taxes</span>
                                <span>$1.99</span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span>Shipping</span>
                                <span>$0.00</span>
                            </div>
                            <hr class="my-2">
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold">Total</span>
                                <span class="font-semibold">$21.98</span>
                            </div>
                            <button class="bg-[#9985BB] text-white py-2 px-4 rounded-lg mt-4 w-full">Add Coupon</button>
                            <MenuLink to="/checkout" class="bg-[#9985BB] text-white py-2 px-4 rounded-lg mt-4 w-full text-center">
                                checkout
                            </MenuLink>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>