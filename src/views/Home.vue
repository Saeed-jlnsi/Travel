<template>
    <div class="bootstrap-wrapper">
      <div class="container">
            <app-header></app-header>
            
            <app-body></app-body>
            <app-footer></app-footer>
      </div>
    </div>
</template>

<script>

import Header from '../components/Header/Header.vue'
import Body from '../components/Body/Body.vue'
import Footer from '../components/Footer/Footer.vue'

export default {
  name: 'Home',
  data() {
    return {

    }
  },
  components: {
    appHeader: Header,
    appBody: Body,
    appFooter: Footer
  }
}
</script>

<style lang="scss">
  @import './home';
</style>
