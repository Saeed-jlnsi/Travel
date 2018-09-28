<template>
    <div class="bootstrap-wrapper">
      <div class="container">
            <app-header></app-header>
<<<<<<< HEAD
            
=======
>>>>>>> b5feaa9b65c472b1e8257f85ac40c1f9e35ee59d
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
