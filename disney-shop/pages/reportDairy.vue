<template>
  <div class="flex flex-row justify-center items-center w-full">
    <div class="centered-box-dairy w-3/4 h-4/5 content-center">
      <div class="centered-box-topic w-11/12">
        <div class="flex flex-rows gap-[155px] place-content-center">
          <div class="text-dairy-topic">Date/Time</div>
          <div class="text-dairy-topic">Store</div>
          <div class="text-dairy-topic">Order number</div>
          <div class="text-dairy-topic">Amount</div>
        </div>
      </div>
      <div class="w-full mt-5">
        <div class="orders-container">
          <div class="order-item" v-for="order in orders" :key="order.id">
            <div class="text-dairy pr-24">{{ order.date }}</div>
            <div class="text-dairy pr-44">Store 1st</div>
            <div class="text-dairy pr-52">{{ order.id }}</div>
            <div class="text-dairy">{{ order.total_price }}.-</div>
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

<style>
  .centered-box-dairy {
    background-color: #ffffff;
    text-align: center;
    line-height: 100px;
    position: absolute;
    justify-items: top;
    margin-top: 900px;
    border-radius: 30px;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .centered-box-topic {
    background-color: #D4D8F0;
    text-align: center;
    line-height: 100px;
    position: absolute;
    justify-items: top;
    justify-content: center;
    margin-top: 35px;
    margin-left: 50px;
    margin-bottom: 20px;
    border-radius: 20px;
    overflow-y: auto;
  }

  .text-dairy-topic {
    color: #FFFFFE;
    font-size: 32px;
    font-family: Inria Serif;
    font-weight: 400;
    word-wrap: break-word;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
  }

  .text-dairy {
    color: #808080;
    font-size: 32px;
    font-family: Inria Serif;
    font-weight: 400;
    word-wrap: break-word
  }

  .orders-container {
    margin-top: 130px; 
    padding-bottom: 20px;
  }

  .order-item {
    display: flex;
    flex-direction: row;
    gap: 32px;
    justify-content: center;
  }
<<<<<<< HEAD
</style>
=======
</style>
>>>>>>> origin/arty
