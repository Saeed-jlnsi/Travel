<template>
    <div>
      <div>
            <app-header></app-header>

            <div :class="$style.content">
                  <div :class="$style.heroText">
                    <span>Your <br><span :class="$style.orangered">Travel </span>map <br><span :class="$style.orangered">to</span>...</span>
                    <span style="float:right;" :class="$style.orangered">KISH</span><br/>
                    <app-button :class="$style.btnStart">Let's Go!</app-button>
                  </div>
                  <div class="$style.mainImage">
                    <img :src="image" alt="">
                  </div>
            </div>

            <div :class="$style.kishInfo">
                <h2>Welcome to Kish Island</h2>
                <p>Welcome to Iran's Sunshine Coast, or Iran's Costa del Sol. 
                  However you label it, say hello to this attractive island that,
                  since the 1970s, has become a beach resort where visitors can swim, shop and sample a laid-back and relatively liberated local lifestyle. 
                  Iran's most hedonistic spot, Kish is booming.
                  Hotels, apartment blocks and retail complexes (it enjoys free-trade-zone status) dominate the once-empty desert landscape and domestic tourist numbers are on the rise, especially in winter,
                  when it's freezing cold on the mainland.
                  Kish is largely ignored by foreign tourists, though.
                  That's a shame, because a visit here is a great way to experience Iran from an altogether different perspective.
                  Leave the sight-laden cities of the mainland and come here to enjoy sea, sand and sun in a relaxed atmosphere.</p>
                  <p>
                    Kish is Located on the north east of the Persian Gulf with a minimum distance of 17 km from the southern offshore of the mainland Iran,
                    the Kish island with an area of 90 square kilometres is one of the most marvelous and most beautiful regions of the Persian Gulf and has attracted the attention of many tribes and nations since times immemorial. 
                    Oval in shape, the island is 15 km long and 8 km wide.
                    The island is largely flat, sandy and uncultivated, with a high point of 45 meters above sea level.
                    Although very hot and humid in summer, it has got a pleasant weather from about November to March, with an annual average temperature of 27 degrees centigrade.
                    Its beautiful coast is covered with white silvery sand washed by azure blue waves of the sea. Already a famous island, Kish owes it present flourishing to its status as Irans first and, for a long time, the only free port, and its sweet water.
                  </p>
            </div>

            <div :class="$style.boxContainer">
              <app-box v-for="(city, index) in cities" :city="city" :key="index"></app-box>
            </div>

            <!-- CONTACT FORM: START -->
            <div :class="$style.contactForm">
              <div :class="$style.title">Contact US</div>
              <div :class="$style.contactUsInner">
                  
                      <app-custom-input 
                          label="Full Name"
                          :class="$style.name"
                          v-model="contactData.name"
                      ></app-custom-input>
                  
                  
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
      contactData: {},
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
  }
}
</script>

<style lang="scss" module>
  @import './home';
</style>
