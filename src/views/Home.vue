<template>
    <div>
      <div>
            <app-header></app-header>

            <div :class="$style.content">
                  <div :class="$style.heroText">
                    <span>Your <br><span>Travel </span>map <span>to...</span></span>
                    <span style="color:orangered; float:right;">KISH</span><br/>
                    <app-button :class="$style.btnStart">Let's Go!</app-button>
                  </div>
                  <div class="$style.mainImage">
                    <img :src="image" alt="">
                  </div>
            </div>

            <div :class="$style.boxContainer">
              <app-box v-for="(city, index) in cities" :city="city" :key="index"></app-box>
            </div>

            <!-- CONTACT FORM: START -->
            <div :class="$style.contactForm">
              <div :class="$style.contactUsInner">
                  <div>
                      <app-custom-input 
                          label="Full Name" 
                          :class="$style.name"
                          v-model="contactData.name"
                      ></app-custom-input>
                  </div>
                  <div>
                      <app-custom-input 
                          label="Email" 
                          :class="$style.email"
                          v-model="contactData.email"
                      ></app-custom-input>
                      <app-custom-input 
                          label="Phone Number" 
                          :class="$style.phone"
                          v-model="contactData.phone"
                      ></app-custom-input>
                  </div>
                  <div>
                      <label for="body">Message Content</label>
                      <textarea v-model="contactData.comment" :class="$style.textArea" name="body" id="" cols="30" rows="3">
                      </textarea>
                  </div>
                  <app-button @click.native="submit" color="regular" :class="$style.confBtn">Send</app-button>
              </div>
            </div>
            <!-- CONTACT FORM: END -->

            <app-footer></app-footer>

        </div>
      </div>
</template>

<script>

import Header from '../components/Header/Header.vue';
import Footer from '../components/Footer/Footer.vue';
import Box from '../components/Box/Box.vue'
import Button from '../components/Button/Button.vue';
import CustomInput from '../components/CustomInput/CustomInput.vue';

export default {
  name: 'Home',
  data() {
    return {
      image:require('@/assets/image/main-image.png'),
      contactData: {},
      label: '',
      btnLabel: '',
      cities: [
        {cityName: 'Montreal', imageLink:'../../assets/image/logo.png'},
        {cityName: 'Berlin', imageLink:'../../assets/image/logo.png'},
        {cityName: 'San Francisco', imageLink:'../../assets/image/logo.png'},
      ]
    }
  },
  components: {
    appHeader: Header,
    appFooter: Footer,
    appBox: Box,
    appButton: Button,
    appCustomInput : CustomInput
  }
}
</script>

<style lang="scss" module>
  @import './home';
</style>
