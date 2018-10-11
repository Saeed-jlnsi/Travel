<template>
    <div class="bootstrap-wrapper">
      <div class="container">
            <app-header></app-header>
            <div class="row" :class="$style.content">
              
              <div :class="$style.heroText">
                <span style="color: grey">Your</span><br/>
                <span style="color:orangered">Travel</span>
                <span style="color: grey;"> map </span>
                <span style="color:orangered">to</span><br/>
                <span style="color:orangered">KISH</span>
              </div>
              <div class="main-image float-right">
                <img :src="image" alt="">
              </div>
            </div>
            <app-box></app-box>
            <app-footer></app-footer>
      </div>
    </div>
</template>

<script>

import Header from '../components/Header/Header.vue';
import Footer from '../components/Footer/Footer.vue';
import Box from '../components/Box/Box.vue'

export default {
  name: 'Home',
  data() {
    return {
      image:require('@/assets/image/main-image.png')
    }
  },
  components: {
    appHeader: Header,
    appFooter: Footer,
    appBox: Box
  }
}
</script>

<style lang="scss" module>
  @import './home';
</style>
