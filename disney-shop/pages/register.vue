<template>
  <div>
    <div class="bg-element">
      <img src="@/assets/img/login.jpg" alt="Background Image" class="background-image">
      <div class="centered-box-register">
        <div class="textLogin text-center">Employee registration</div>
        <form>
          <div class="">
            <label class="text flex justify-start pl-[220px] p-3" for="name">Name</label>
          </div>
          <input class="input-container pl-10" type="text" id="name" v-model="formData.name" required>
          <div class="">
            <label class="text flex justify-start pl-[220px] p-3" for="phonenum">Phone Number</label>
          </div>
          <input class="input-container pl-10" type="text" id="tel" v-model="formData.tel" required>
          <div class="">
            <label class="text flex justify-start pl-[220px] p-3" for="email">Email</label>
          </div>
          <input class="input-container pl-10" type="email" id="email" v-model="formData.email" required>
          <div class="">
            <label class="text flex justify-start pl-[220px] p-3" for="password">Password</label>
          </div>
          <input class="input-container pl-10" type="password" id="password" v-model="formData.password" required>
          <div class="">
            <label class="text flex justify-start pl-[220px] p-3" for="password">Confirm Password</label>
          </div>
          <input class="input-container pl-10" type="password" id="password" v-model="formData.password_confirmation" required>
          <div class="pt-10 flex flex-row justify-between">
            <a href="/cashier" class="bg-[#9985BB] w-32 h-12 font-bold text-xl py-3 px-2 rounded-[20px] text-white ml-44" style="font-family: Inria Serif;">
              Back
            </a>
            <MenuLink to="/cashier">
              <button @click="signUp" class="custom-button">Submit</button>
              <img src="@/assets/Sign_in_squre.png" alt="" />
            </MenuLink>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script setup>
  import {
    ref
  } from 'vue';

  definePageMeta({
    layout: "login",
  });

  const formData = ref({
    "name": "",
    "email": "",
    "password": "",
    "password_confirmation": "",
    "tel": ""
  })

  const signUp = async () => {
    const {
      data: response,
      error
    } = await useMyFetch('auth/register', {
      method: 'POST',
      body: formData.value
    })
  }
</script>

<style>
  body {
    overflow: hidden !important;

  }

  .bg-element {
    width: 100%;
    height: 100vh;
    background: linear-gradient(to bottom, #8680B0, #ffffff);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    opacity: 0.8;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .background-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;
  }

  .centered-box-register {
    background-color: white;
    padding: 20px;
    /* Adjust the padding as needed */
    border-radius: 49px;
    /* Adjust the border-radius as needed */
    text-align: center;
    /* Center the content within the box */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    /* Add a box shadow for a visual effect */
    width: 55%;
    /* Adjust the width as needed */
    height: 90%;
    /* Adjust the height as needed */
    opacity: .9;
  }

  .textLogin {
    color: #151515;
    font-size: 40px;
    font-family: Inria Serif;
    font-weight: 900;
    word-wrap: break-word
      /* Adjust the margin between text elements */
  }

  .input-container {
    width: 450px;
    height: 30px;
    background: #D9D9D9;
    border-radius: 20px;
    z-index: 2;
    position: relative;
    /* Add relative positioning to the container */
  }

  .text {
    color: #151515;
    font-size: 20px;
    font-family: Inria Serif;
    font-weight: 600;
    word-wrap: break-word
  }

  .custom-button {

    width: 100px;
    height: 50px;
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
    margin-right: 175px;
  }

  /* Style for button on hover */
  .custom-button:hover {
    background: #6c519c;
  }

  /* Style for button when clicked */
  .custom-button:active {
    background: #6c45ae;
    /* Change the background color when clicked */
  }
</style>