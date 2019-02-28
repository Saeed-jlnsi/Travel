<template>
  <div :class="$style.customInput">
    <div v-if="label" for="" :class="$style.label">{{label}}</div>
    <div v-if="validation" :class="$style.validation">!</div>
    <div :class="$style.input">
      <span v-if="icon" :class="$style.icon"></span>
      <input :name="name" type="text" :placeholder="placeHolder" @input="onInput" :value="value" autocomplete="on">
    </div>
  </div>
</template>

<script>
  export default {
    name: 'CustomInput',
    props: {
      label: {},
      name: {},
      placeHolder: {},
      value: {},
      name: {},
      icon: {}
    },
    data() {
      return {
        validation: false
      }
    },
    methods: {
      onInput(e) {
        this.$emit('input', e.target.value)
      }

    },
  }

</script>


<style lang="scss" module>
  @import './custominput.scss';

</style>
