<template>
  <div :class="$style.menu">
    <ul>
      <li v-for="(item,index) in menu" :key="index"><span>{{item}}</span></li>
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
      menu: {}

    }
  }

</script>

<style lang="scss" module>
  @import './menu.scss';

</style>
