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
          <div class="mb-[50px]">01</div>
          <div class="flex flex-rows ml-[100px] gap-[130px]">
              <div class="text-dairy">22/05/2023</div>
              <div class="text-dairy">1st Store</div>
              <div class="text-dairy">CA20230900058</div>
              <div class="text-dairy">1521.-</div>
          </div>
          <div class="flex flex-rows ml-[100px] gap-[130px]">
              <div class="text-dairy">22/05/2023</div>
              <div class="text-dairy">1st Store</div>
              <div class="text-dairy">CA20230900058</div>
              <div class="text-dairy">1521.-</div>
          </div>
          <div class="flex flex-rows ml-[100px] gap-[130px]">
              <div class="text-dairy">22/05/2023</div>
              <div class="text-dairy">1st Store</div>
              <div class="text-dairy">CA20230900058</div>
              <div class="text-dairy">1521.-</div>
          </div>
          <div class="flex flex-rows ml-[100px] gap-[130px]">
              <div class="text-dairy">22/05/2023</div>
              <div class="text-dairy">1st Store</div>
              <div class="text-dairy">CA20230900058</div>
              <div class="text-dairy">1521.-</div>
          </div>
          <div class="flex flex-rows ml-[100px] gap-[130px]">
              <div class="text-dairy">22/05/2023</div>
              <div class="text-dairy">1st Store</div>
              <div class="text-dairy">CA20230900058</div>
              <div class="text-dairy">1521.-</div>
          </div>
          <div class="flex flex-rows ml-[100px] gap-[130px]">
              <div class="text-dairy">22/05/2023</div>
              <div class="text-dairy">1st Store</div>
              <div class="text-dairy">CA20230900058</div>
              <div class="text-dairy">1521.-</div>
          </div>
          <div class="flex flex-rows ml-[100px] gap-[130px]">
              <div class="text-dairy">22/05/2023</div>
              <div class="text-dairy">1st Store</div>
              <div class="text-dairy">CA20230900058</div>
              <div class="text-dairy">1521.-</div>
          </div>
          <div class="flex flex-rows ml-[100px] gap-[130px]">
              <div class="text-dairy">22/05/2023</div>
              <div class="text-dairy">1st Store</div>
              <div class="text-dairy">CA20230900058</div>
              <div class="text-dairy">1521.-</div>
          </div>
        </div>
    </div>
  </div>
</template>
<script>
export default {
  
}
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
overflow: hidden; /* Change from overflow-y to overflow to hide scrollbars */
  white-space: nowrap; /* Prevent text from wrapping to the next line */
  overflow: hidden;
  text-overflow: ellipsis; /* Add ellipsis (...) for overflowing text */
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