<template>
  <div :class="$style.footer">
    <div :class="$style.innerFooter">
      <div :class="$style.footerInfo">
        <div :class="$style.footerLinks">
          <Menu :menu="menu"></Menu>
        </div>
        <div :class="$style.copyRight">
          <p>Travel To Kish © 2018</p>
        </div>
      </div>
      <div :class="$style.socialMedia">
        <router-link v-for="link in socialLinks" :key="link" to=""><img :class="$style.socialMediaIcon" :src="iconlink(link)"></router-link>
      </div>
    </div>
  </div>
</template>

<script>
  import Menu from '@/components/Menu/Menu.vue';
  export default {
    data() {
      return {
        menu: [
          'home',
          'about KISH',
          'contact us'
        ],
        socialLinks: [
          'facebook',
          'instagram',
          'telegram',
          'twitter',
          'linkedin'
        ]
      }
    },
    methods: {
      iconlink(iconName) {
        return require('@/assets/image/' + iconName + '.svg')
      }
    },
    components: {
      Menu
    }
  }

</script>


<style lang="scss" module>
  @import './footer';

</style>
