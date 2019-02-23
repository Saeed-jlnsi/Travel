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
      <!-- <div :class="$style.sidebar">
        <div :class="$style.mobileNavIcon" v-on:click.prevent="isMenuOpened = !isMenuOpened">
          <img src="../../assets/image/phone-nav.svg" alt="">
        </div>
        <div :class="$style.mobileNav" v-if="isMenuOpened">
          <Menu :menu="menu"></Menu>
        </div>
      </div> -->
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
      imageLink: require('@/assets/image/logo.png'),
      isMenuOpened: false

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
