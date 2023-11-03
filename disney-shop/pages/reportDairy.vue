<template lang="">
  <div class="flex flex-row justify-center">
      <div class="centered-box-dairy">
          <div class="flex-rows grid-flow-col">
            <div class="centered-box-topic">
              <div class="flex flex-rows ml-[50px] gap-[155px]">
                 <div class="text-dairy-topic">Date/Time</div>
                 <div class="text-dairy-topic">Store</div>
                 <div class="text-dairy-topic">Order number</div>
                 <div class="text-dairy-topic">amount</div>
              </div>
            </div>
          <div class="flex flex-cols ml-[100px] gap-[130px] mb-[px]">
            
            <div v-for="order in orders" >
                    <div class="text-dairy">{{ order.date }}</div>
                    <div class="text-dairy">Store 1st</div>
                    <div class="text-dairy">{{ order.id }}</div>
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
width: 1150px;
height: 912px;
background-color: #ffffff;
text-align: center;
line-height: 100px;
position: absolute;
justify-items:top;
margin-top: 35px;
border-radius: 30px;
overflow-y: auto;
}
.centered-box-topic {
width: 1050px;
height:100px;
background-color: #D4D8F0;
text-align: center;
line-height: 100px;
position: absolute;
justify-items:top;
margin-top: 35px;
margin-left: 50px;
margin-bottom: 20px;
border-radius: 20px;
overflow-y: auto;
}
.text-dairy-topic{
color: #FFFFFE;
font-size: 32px;
font-family: Inria Serif;
font-weight: 400;
word-wrap: break-word;
text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
}
.text-dairy{
color: #808080;
font-size: 32px;
font-family: Inria Serif;
font-weight: 400;
word-wrap: break-word
}


  
</style>