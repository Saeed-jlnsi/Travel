<template>
    <div class="bootstrap-wrapper">
      <div class="container">
            <app-header></app-header>
            <div class="row" :class="$style.heroText">
              <div :class="$style.heroText"><span style="color: grey">Your</span><br/>Travel map</div>
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
