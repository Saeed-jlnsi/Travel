<template>
  <div class="row" :class="$style.header">
    <div class="col-sm-2">
      <div :class="$style.logo">
        <!-- <span :class="$style.logoIcon">TTK</span> -->
        <img src="../../assets/image/LogoSample_ByTailorBrands (5).jpg" alt="" width="130px" height="130px">
      </div>
    </div>
    <div class="col-sm-10">
      <Menu :menu="menu"></Menu>
    </div>
  </div>
</template>

<script>
import Menu from '@/components/menu/Menu.vue'

export default {
  data() {
    return {
      menu:[
        'home' ,
        'about KISH',
        'contact us'
      ]
    }
  },
  components : {
    Menu
  }
}
</script>

<style lang="scss" module>
  @import './header';
</style>
