<template>
    <div>
      <div>
            <app-header></app-header>
            <div :class="$style.content">
                  <div :class="$style.heroText">
                    <span>your <span :class="$style.orangered">Travel <br></span>map <span :class="$style.orangered"> To </span></span>
                    <!-- <span style="float:right;" :class="$style.orangered"></span><br/> -->
                    <app-button :class="$style.btnStart">KISH</app-button>
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
              <div :class="$style.title">Contact US</div>
              <div :class="$style.contactUsInner">
                      <app-custom-input 
                          name="name"
                          label="Full Name"
                          placeHolder="Enter your name ..."
                          @input="changeName($event)"
                          :class="$style.name"
                          v-model="contactData.name"
                      ></app-custom-input>
                      <app-custom-input 
                          name="email"
                          label="Email" 
                          placeHolder="Enter your email ..."
                          @input="changeEmail($event)"
                          :class="$style.email"
                          v-model="contactData.email"
                      ></app-custom-input>
                      <app-custom-input 
                          name="phone"
                          label="Phone Number" 
                          placeHolder="Enter your phone ..."
                          @input="changePhone($event)"
                          :class="$style.phone"
                          v-model="contactData.phone"
                      ></app-custom-input>
                      <div :class="$style.textareaLabel">Message Content</div>
                      <textarea v-model="contactData.comment" :class="$style.textArea" name="body" id="" cols="30" rows="8">
                      </textarea>
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
      contactData: {
        name:null,
        email:null,
        phone:null,
        comment:''
      },
      label: '',
      btnLabel: '',
      cities: [
        {cityName: 'Montreal', imageLink:'Greek-ship'},
        {cityName: 'Berlin', imageLink:'Greek-ship'},
        {cityName: 'San Francisco', imageLink:'Greek-ship'},
      ]
    }
  },
  components: {
    appHeader: Header,
    appFooter: Footer,
    appBox: Box,
    appButton: Button,
    appCustomInput : CustomInput
  },
  methods :{
    changeName(e) {
     console.log('changeName function', e)   
    },
    changeEmail(e) {
     console.log('changeEmail function', e)   
    },
    changePhone(e) {
     console.log('changePhone function', e)   
    },
  }
}
</script>

<style lang="scss" module>
  @import './home';
</style>
