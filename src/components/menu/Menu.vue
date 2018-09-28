<template>
  <div class="row" :class="$style.menu">
        <ul>
          <li v-for="(item,index) in menu" :key="index">{{item}}</li>
        </ul>
  </div>
</template>

<script>
export default {
  name: 'Menu',
  data() {
    return {

    }
  },
  props: {
    menu:[]
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" module>
  @import './menu.scss';
</style>
