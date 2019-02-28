<template>
  <div :class="$style.modal">
    <div :class="$style.background"></div>
    <div :class="$style.mainWrapper">
      <div :class="$style.main">
        <div :class="$style.header">
          <span>Travel To Kish</span>
        </div>
        <div :class="$style.body">
          <p>
            Thanks For Contact Us. We will call you as soon as possible.
          </p>
          <Button color="regular" :class="$style.btn" @click="close">Let's Go</Button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import Button from "@/components/Button/Button.vue";
  export default {
    name: "Modal",
    data() {
      return {};
    },
    methods: {
      close() {
        this.$emit('close')
      }
    },
    components: {
      Button
    },
    props: {}
  };

</script>

<style lang="scss" module>
  @import "./modal.scss";

</style>
