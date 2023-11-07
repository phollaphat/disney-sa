<template>
    <div class="flex flex-col justify-start">
        <div class="h-screen  py-8">
            <div class=" mx-auto px-4">
                <h1
                    class="text-[48px] text-[#FFFFFF] font-semibold mb-10 mx-auto w-[358px] bg-[#4D4C7D] text-center rounded-[20px] shadow-md">
                    Shopping Cart
                </h1>
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="md:w-3/4">
                        <div v-if="!cart.isEmpty">
                            <div class="flex flex-col justify-start bg-white rounded-lg shadow-md p-6 mb-7"
                                v-for="item in cart.items" :key="item.id">
                                <div class="flex flex-row justify-start gap-5 text-lg items-center">
                                    <div class="flex flex-col w-3/6">
                                        <div class="text-2xl font-bold mb-4">
                                            Product
                                        </div>
                                        <div class="flex flex-row items-center">
                                            <div>
                                                <img src="@/assets/b180691f36bd713b8c69519b8637fb8b.png" alt=""
                                                    class="h-16 w-16 mr-5">
                                            </div>
                                            <div class="text-lg">
                                                {{ item.product.name }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex flex-col w-1/6">
                                        <div class="text-2xl font-bold mb-4">
                                            Model
                                        </div>
                                        <div class="text-lg">
                                            {{ item.product.model_code }}
                                        </div>
                                    </div>

                                    <div class="flex flex-col w-1/6">
                                        <div class="text-2xl font-bold mb-4">
                                            Unit Price
                                        </div>
                                        <div class="text-lg text-center">
                                            {{ item.product.price }}
                                        </div>
                                    </div>

                                    <div class="flex flex-col w-1/6 justify-center mr-12">
                                        <div class="text-center text-2xl font-bold mb-4">
                                            Quantity
                                        </div>
                                        <div class="flex flex-row justify-center gap-3 items-center">
                                            <div class="">
                                                <button @click="removeItemQRT(item)" id="decrement-btn"
                                                    class="border rounded-md w-8">-</button>
                                            </div>
                                            <div class="text-lg">
                                                {{ item.qty }}
                                            </div>
                                            <div class="">
                                                <button @click="addItemQRT(item)" id="increment-btn"
                                                    class="border rounded-md w-8">+</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex flex-col w-1/6">
                                        <div class="text-2xl font-bold mb-4">
                                            Total
                                        </div>
                                        <div class="text-lg">
                                            {{ item.total }} ฿
                                        </div>
                                    </div>

                                    <div class="flex flex-col w-1/6 justify-items-center">
                                        <div class="">
                                            <button @click="removeItem(item)"
                                                class="py-3 px-6 rounded-lg text-sm font-medium bg-[#5D12D2] hover:bg-[#9400FF] text-white">Remove</button>
                                        </div>
                                        <div class="mt-5">
                                            <button @click="DiscountAdd(item)"
                                                class="py-3 px-6 rounded-lg text-sm font-medium bg-[#5D12D2] hover:bg-[#9400FF] text-white">Discount</button>
                                        </div>
                                        <div class="mt-5">
                                            <button @click="DisableDiscountAdd(item)"
                                                class="py-3 px-6 rounded-lg text-sm font-medium bg-[#5D12D2] hover:bg-[#9400FF] text-white">No Discount</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div v-if="cart.isEmpty">
                            <div class="bg-white rounded-lg shadow-md p-6 mb-4">
                                <div class="text-2xl font-bold">
                                    Shopping Cart is Empty
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="md:w-1/4">
                        <div class="bg-white rounded-lg shadow-md p-6">

                            <h2 class="text-lg font-semibold mb-4">Summary</h2>
                            <div class="flex justify-between mb-2">
                                <span>Subtotal</span>
                                <span>{{ cart.getTotalPrice }} ฿</span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span>Discount</span>
                                <span>{{ cart.getSubDiscount }} ฿</span>
                            </div>
                            <hr class="my-2">
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold">Total</span>
                                <span class="font-semibold">{{ cart.getTotalDiscount }} ฿</span>
                            </div>

                            <hr class="my-3">


                            <form @submit.prevent="onSubmit()">

                                <div class="text-lg font-semibold mb-1">
                                    Customer Name:
                                </div>
                                <div v-if="customerShow">
                                    <div class="text-lg my-3 font-semibold text-[#7D7C7C]">
                                        {{ customerShow.name }}
                                    </div>
                                </div>
                                <div v-else>
                                    <div class="text-lg my-2 font-semibold text-[#7D7C7C]">
                                        name
                                    </div>
                                </div>

                                <input type="text"
                                    class="w-full relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"
                                    placeholder="Customer Tel..." v-model="formData.tel">

                                <input type="text"
                                    class="mt-5 w-full relative bg-gray-50ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-[#9BA4B5] text-sm rounded-lg focus:ring-violet-500  focus:border-violet-500 block p-2.5"
                                    placeholder="Customer Name..." v-model="formData.name">
                                <button type="submit"
                                    class="bg-[#5D12D2] hover:bg-[#9400FF] text-white py-2 px-4 rounded-lg mt-4 w-full">Search</button>
                            </form>

                            <hr class="my-3">

                            <select name="" class="bg-[#FFFDFD] w-2/5 h-[60px] rounded-[20px]" v-model="payment_cha">
                                <option value="">Choose Payment</option>
                                <option value="Alipay">Alipay</option>
                                <option value="Cash">Cash</option>
                                <option value="Credit/Debit Card">Credit/Debit Card</option>
                                <option value="Qr thai">Qr thai</option>
                            </select>
                            <MenuLink @click="go2CheckoutPage()"
                                class="bg-[#5D12D2] hover:bg-[#9400FF] text-white w-1/4 py-4 px-4 rounded-lg mt-4 w-full text-center ml-8">
                                checkout
                            </MenuLink>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/cashier">
                <button
                    class="bg-[#4D4C7D] w-[100px] h-[45px] ml-4 rounded-[15px] text-xl hover:bg-[#363062] text-white">Back</button>
            </a>
        </div>

        <div v-for="item in cart.items" :key="item.id">
            
        </div>
    </div>
</template>

<script setup>
    import { useCartStore } from "~/stores/useCartStore"
    import { useCheckPaymentStore } from "~/stores/useCheckPaymentStore"
    import { useCustomerStore } from "~/stores/useCustomerStore"
    import { useAuthStore } from "~/stores/useAuthStore"
    import { useOrderStore } from "~/stores/useOrderStore"

    import { createToast } from 'mosha-vue-toastify';
    import 'mosha-vue-toastify/dist/style.css';

    import { useRouter } from 'vue-router';

    const cart = useCartStore();
    const check_payment = useCheckPaymentStore();
    const customer = useCustomerStore();
    const auth = useAuthStore();
    const order = useOrderStore();

    // api
    const formData = ref({
        tel: "",
        name: ""
    })

    const customerShow = ref(null)
    const payment_cha = ref(null)

    const warningOnCustomerInfo = async () => {
        createToast({ title: 'There is no customer information in the system'}, {type: 'warning', position: 'top-right', showIcon: 'true', hideProgressBar: 'false'})
    }

    const warningNumberFill = async () => {
        createToast({ title: 'Please enter numerical data'}, {type: 'warning', position: 'top-right', showIcon: 'true', hideProgressBar: 'false'})
    }

    const warningAlphaFill = async () => {
        createToast({ title: 'Please enter alphabetic characters'}, {type: 'warning', position: 'top-right', showIcon: 'true', hideProgressBar: 'false'})
    }

    const onSubmit = async () => {
        const {
            data: response,
            error
        } = await useMyFetch('customers', {
            method: 'POST',
            body: formData.value
        })

        if (!response.value) {
            warningOnCustomerInfo();
        }

        customerShow.value = response.value;
        console.log('finding ok')
    }

    // function for Pinia
    const addItemQRT = (item) => {
        const product = cart.items.find(row => row.id == item.id)
        if (product.qty < product.product.stock_quantity) {
            product.qty++
            product.total += product.product.price
        }
        else {
            warningAddProduct();
        }
    }

    const removeItemQRT = (item) => {
        const product = cart.items.find(row => row.id == item.id)
        if (product.qty > 1) {
            product.qty--
            product.total -= product.product.price
        }
        else {
            warningZeroProduct();
        }
    }

    const removeItem = (item) => {
        const index = cart.items.findIndex(existingItem => existingItem === item);
        if (index !== -1) {
            successRemoveProduct();
            cart.items.splice(index, 1);
        }
    }

    const DiscountAdd = (item) => {
        const product = cart.items.find(row => row.id == item.id)
        const oldDiscount = (product.qty * product.product.price) * (10 / 100)
        product.discount = oldDiscount
    }

    const DisableDiscountAdd = (item) => {
        const product = cart.items.find(row => row.id == item.id)
        product.discount = 0.0
    }

    const saveCheckPayment = (Payment) => {
        check_payment.payment =  Payment
    }

    const saveCustomer = (tel, name) => {
        customer.tel =  tel
        customer.name =  name
    }

    const orderShow = ref(null)
    
    const addOrder = async (user_name, customer_name, total) => {
        const { data: response, error } = await useMyFetch('orders', {
            method: 'POST',
            body: {
                "user_name": user_name, 
                "customer_name": customer_name,
                "total": total
            }
        })
        // console.log(response.value.id)
        order.id = response.value.id
    }

    const warningAddProduct = async () => {
        createToast({ title: 'Quantity exceeded amount left in stock'}, {type: 'warning', position: 'top-right', showIcon: 'true', hideProgressBar: 'false'})
    }

    const warningZeroProduct = async () => {
        createToast({ title: 'You cannot decrease the quantity of the product below 0'}, {type: 'warning', position: 'top-right', showIcon: 'true', hideProgressBar: 'false'})
    }

    const successRemoveProduct = async () => {
        createToast({ title: 'Remove Product Success.'}, {type: 'success', position: 'top-right', showIcon: 'true', hideProgressBar: 'false'})
    }

    const router = useRouter();

    const go2CheckoutPage = async () => {
        if (payment_cha.value && cart && customerShow) {
            saveCheckPayment(payment_cha.value);
            saveCustomer(customerShow.value.tel, customerShow.value.name);
            addOrder(auth.user.name, customer.name, cart.getTotalDiscount);
            router.push('/checkout');
        }
        else {
            if (!payment_cha.value && !customerShow.value) {
                warningFillInfo()
            }
            else if (!payment_cha.value) {
                warningPaymentFill()
            }
            else if (!customerShow.value.tel || customerShow.value.name) {
                warningCustomerInfo()
            }
        }
    }

    const warningFillInfo = async () => {
        createToast({ title: 'Please fill in all the fields with the necessary information.'}, {type: 'warning', position: 'top-right', showIcon: 'true', hideProgressBar: 'false', toastBackgroundColor: '#FF6969'})
    }

    const warningPaymentFill = async () => {
        createToast({ title: 'Please select a payment method'}, {type: 'warning', position: 'top-right', showIcon: 'true', hideProgressBar: 'false'})
    }

    const warningCustomerInfo = async () => {
        createToast({ title: 'Please select a payment method'}, {type: 'warning', position: 'top-right', showIcon: 'true', hideProgressBar: 'false'})
    }

</script>

<style>
</style>