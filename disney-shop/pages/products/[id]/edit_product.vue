<template>
  <div class="w-full flex flex-row justify-center mt-10 ">
    <div class="text-3xl font-bold rounded-[15px] text-center bg-[#9985BB] w-2/4 h-[50px]">Edit Product</div>
  </div>
  <div class="image-container centered-form mt-[50px]">
  </div>
  <div class="centered-form mt-10">
    <form @submit.prevent="onSubmit()" class="bg-[#FDF7FF] pb-44 pt-36 px-80 rounded-[15px]">
      <div class="form-group">
        <label class="text mr-10" for="productName">Product Name:</label>
        <input class="rounded rounded-full bg-[#AFA8BA]" type="text" id="productName" v-model="formData.name" />
      </div>
      <div class="form-group">
        <label class="text mr-10" for="price">Price:</label>
        <input class="ml-[80px] rounded rounded-full bg-[#AFA8BA] pl-3" type="number" id="price" v-model="formData.price" />
      </div>
      <div class="form-group">
        <label class="text mr-10" for="category">Category:</label>
        <select class="ml-[45px] rounded rounded-full h-[25px] bg-[#AFA8BA]" id="category" v-model="formData.category">
          <option value="Jewelry">Jewelry</option>
          <option value="Scented Candle">Scented Candle</option>
        </select>
      </div>
      <div class="form-group">
        <label class="text mr-10" for="quantity">Quantity:</label>
        <input class="ml-[42px] rounded rounded-full bg-[#AFA8BA] pl-3" type="number" id="quantity" v-model="formData.quantity" />
      </div>
      <button type="submit"
        class=" text-xl bg-[#5D12D2] w-[80px] h-[50px] rounded-[10px] text-center drop-shadow-sm hover:bg-[#9400FF] text-white">Submit</button>
    </form>

  </div>

</template>

<script setup>
  import { useRouter } from 'vue-router';
  import { ref } from 'vue';

  const route = useRoute()

  const formData = ref({
    name: "",
    quantity: "",
    category: "",
    price: "",
  })

  const customerShow = ref(null)

  const router = useRouter();

  const onSubmit = async () => {
    const {
      data: response,
      error
    } = await useMyFetch(`products/${route.params.id}`, {
      method: 'PUT',
      body: formData.value
    })
    router.push('/products');
  }
</script>

<style scoped>
  .edit-product {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }

  .image-container {
    text-align: center;
  }

  .product-image {
    max-width: 300px;
  }

  .text {
    color: #151515;
    font-size: 20px;
    font-family: Inria Serif;
    font-weight: 700;
    word-wrap: break-word
  }

  .form-group {
    margin: 30px 0;
  }

  .centered-form {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  /* Add styling for the submit button */
  .submit-button {
    /* Add your custom styles here */
  }

  .custom-file-input {
    cursor: pointer;
    background: #fcfcfc;
    color: #000000;
    padding: 10px 20px;
    border-radius: 5px;
    display: inline-block;
  }

  .upload-button input[type="file"] {
    display: none;
  }

  .custom-button-edit {
    width: 100px;
    height: 60px;
    background: #9985BB;
    color: #FCFAFA;
    font-size: 20px;
    font-family: Inria Serif;
    font-weight: 700;
    word-wrap: break-word;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    border-radius: 20px;
  }

  /* Style for button on hover */
  .custom-button-edit:hover {
    background: #6c519c;
  }

  /* Style for button when clicked */
  .custom-button-edit:active {
    background: #6c45ae;
    /* Change the background color when clicked */
  }
</style>