<template>
  <div>
    <div class="bg-element" :style="{ 'background-image': `url(${bgImage})` }">
      <div class="parent">
        <div class="element">
          <div class="image-container">
            <img src="@/assets/img/logoLogin.png" alt="Centered Image" class="centered-image">
          </div>
          <div class="text-container">
            <div class="flex flex-col">
              <div class="textLogin pt-[50px] text-center">Login</div>
                <form @submit.prevent="login">
                  <div class="pl-20">
                    <small class="text-red-500">{{ errorMessage }}</small>
                    <div class="textUsername flex justify-items-start items-start p-2 pt-[25px] pb-5">Email</div>
                    <div class="input-container-login pl-3">
                      <input type="email" v-model="formData.email" id="email" class="custom-input" placeholder="Username"/>
                    </div>
                  </div>
                  <div class="pl-20 p-5">
                    <div class="textPassword flex justify-items-start items-start p-2 pb-5">Password</div>
                    <div class="input-container-login pl-3">
                      <input type="password" v-model="formData.password" id="password" class="custom-input" placeholder="Password"/>
                      <MenuLink class="textNotHaveAcc mt" to="/register">Registration</MenuLink>
                    </div>
                  </div>
                  <div class="pl-[212px] pt-[120px]">
                    <button type="submit" class="custom-button-login" value="Login">Login</button> 
                  </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import bgImage from '@/assets/img/login.jpg';
// import axios from 'axios';

definePageMeta({
  layout: "login",
});

import { useAuthStore } from "~/stores/useAuthStore"

const auth = useAuthStore()
const errorMessage = ref("")
const formData = reactive({ email: "", password: "" })

const login = async () => {
  try {
    const { data: response, error } = await useMyFetch('auth/login', {
      method: 'POST',
      body: formData
    })

    const { access_token, token_type } = response.value
    if (access_token !== "") {
      getProfile(access_token)
    }
  } catch(error) {
    console.log(error)
    auth.clear()
    errorMessage.value = "Please try again"
  }
}
const getProfile = async (access_token) => {
  try {
      auth.setNewToken(access_token)
      const { data: user, error } = await useMyFetch('auth/user-profile', {
        method: 'GET'
      })
      if (user.value !== null) {
        auth.setUser(user.value.name, user.value.email)
        await navigateTo('/cashier')
      }
    } catch (error) {
        console.log(error)
    }

    }
  </script>
  
<style>
.bg-element {
  width: 100%;
  height: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  opacity: 0.8;
}

.parent {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.element {
  width: 1300px;
  height: 800px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
  /* Add a box shadow for a visual effect */
  background-color: #9892C0;
  position: relative;
  opacity: 0.9;
  border-radius: 49px;
  display: flex;
}

.element::after {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 50%;
  background-color: white;
  width: 50%;
  border-radius: 0 49px 49px 0;
}

.image-container {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
}

.centered-image {
  max-width: 80%;
  /* Adjust the image width as needed */
  max-height: 80%;
  /* Adjust the image height as needed */
}

.text-container {
  z-index: 2;
  flex: 1;
  display: flex;
  flex-direction: column;
}

.textLogin {
  color: #151515;
  font-size: 64px;
  font-family: Inria Serif;
  font-weight: 900;
  word-wrap: break-word;
  margin-bottom: 20px;
  /* Adjust the margin between text elements */
}

.textUsername {
  color: #151515;
  font-size: 36px;
  font-family: Inria Serif;
  font-weight: 500;
  word-wrap: break-word;
}

.textPassword {
  color: #151515;
  font-size: 36px;
  font-family: Inria Serif;
  font-weight: 500;
  word-wrap: break-word;
}

.input-container-login {
  width: 450px;
  height: 65px;
  background: #D9D9D9;
  border-radius: 20px;
  z-index: 2;
  position: relative;
  /* Add relative positioning to the container */
}

.custom-input {
  width: 100%;
  height: 100%;
  border: none;
  background: transparent;
  /* Make the input background transparent */
}

.custom-button-login {

  width: 200px;
  height: 80px;
  background: #9985BB;
  color: #FCFAFA;
  font-size: 40px;
  font-family: Inria Serif;
  font-weight: 700;
  word-wrap: break-word;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  border-radius: 20px;
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

.textNotHaveAcc {
  color: #683BEB;
  font-size: 15px;
  font-family: Inria Serif;
  font-weight: 700;
  word-wrap: break-word;
  z-index: 2;
}

.textForgotten {
  color: #EB3B85;
  font-size: 15px;
  font-family: Inria Serif;
  font-weight: 700;
  word-wrap: break-word;
}</style>
