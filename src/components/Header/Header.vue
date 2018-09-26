<template>
  <div class="row" :class="$style.header">
    <div class="col-sm-2">
      <div :class="$style.logo">
        <span :class="$style.logoIcon">GZH</span>
      </div>
    </div>
    <div class="col-sm-10">
      <div :class="$style.navbar">
        <ul>
          <li>home</li>
          <li>RS</li>
          <li>brazil</li>
          <li>worldwide</li>
          <li>Search</li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {

    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" module>
  @import './header.scss';
</style>
