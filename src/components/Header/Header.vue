<template>
  <div :class="$style.header">
    <div>
      <div :class="$style.logo">
        <img :src="imageLink" alt="travel to kish">
      </div>
    </div>
    <div :class="$style.navBar">
      <Menu :menu="menu"></Menu>
    </div>
    <div :class="$style.navIcon">
      <img src="../../assets/image/phone-nav.svg" alt="">
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
      ],
      imageLink: require('@/assets/image/logo.png')
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
