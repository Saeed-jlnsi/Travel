<template>
    <div class="bootstrap-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
            <app-header></app-header>
            <app-body></app-body>
            <app-footer></app-footer>
          </div>
        </div>
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

  html {


    body {

    }
  }

</style>
