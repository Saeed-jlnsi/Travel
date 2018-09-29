<template>
  <div class="row" :class="$style.header">
    <div class="col-sm-2">
      <div :class="$style.logo">
        <span :class="$style.logoIcon">GZH</span>
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
        'RS',
        'brazil',
        'worldwide'
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
