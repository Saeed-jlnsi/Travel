<template>
  <div :class="[$style.btn , $style[`btn-${color}`]]">
    <slot>Button</slot>
  </div>
</template>

<script>
  export default {
    props: ['btnLabel', 'color']
  }

</script>


<style lang="scss" module>
  @import './button';

</style>
