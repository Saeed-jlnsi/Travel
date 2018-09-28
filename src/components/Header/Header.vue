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
import Menu from '@/components/menu/Menu'

export default {
  data() {
    return {
      menu:[
        'Home' ,
        'RS',
        'Brazil',
        'WorldWide'
      ]
    }
  },
  components : {
    Menu
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" module>
  @import './header';
</style>
