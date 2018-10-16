<template>
    <div class="bootstrap-wrapper">
      <div class="fluid-container">

            <app-header></app-header>

            <div class="row" :class="$style.content">
                  <div :class="$style.heroText">
                    <span>Your <br><span>Travel </span>map <span>to</span></span>
                    <!-- <span style="color: grey">Your</span><br/>
                    <span style="color:orangered">Travel</span>
                    <span style="color: grey;"> map </span>
                    <span style="color:orangered">to</span><br/> -->
                    <span style="color:orangered; float:right;">KISH</span><br/>
                    <app-button>Let's Go!</app-button>
                  </div>
                  <div class="main-image float-right">
                    <img :src="image" alt="">
                  </div>
            </div>

            <app-box></app-box>

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
                  <app-button @click.native="submit" color="regular" :className="$style.confBtn">Send Message</app-button>
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
      btnLabel: ''
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
