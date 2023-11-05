<template>

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
</style>