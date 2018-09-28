<template>
  <div class="row" :class="$style.header">
    <div class="col-sm-2">
      <div :class="$style.logo">
        <span :class="$style.logoIcon">GZH</span>
      </div>
    </div>
    <div class="col-sm-10">
<<<<<<< HEAD
      <Menu :menu="menu"></Menu>
=======
      <div :class="$style.navbar">
        <ul>
          <li>home</li>
          <li>RS</li>
          <li>brazil</li>
          <li>worldwide</li>
          <li>Search</li>
        </ul>
      </div>
>>>>>>> b5feaa9b65c472b1e8257f85ac40c1f9e35ee59d
    </div>
  </div>
</template>

<script>
<<<<<<< HEAD
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
=======
export default {
  data() {
    return {

    }
>>>>>>> b5feaa9b65c472b1e8257f85ac40c1f9e35ee59d
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" module>
<<<<<<< HEAD
  @import './header';
=======
  @import './header.scss';
>>>>>>> b5feaa9b65c472b1e8257f85ac40c1f9e35ee59d
</style>
