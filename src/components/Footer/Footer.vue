<template>
    <div :class="$style.footer">
        <div :class="$style.innerFooter">
            <div :class="$style.footerLinks">
                <Menu :menu="menu"></Menu>
            </div>
            <div :class="$style.socialMedia">
                <a href="#"><img :class="$style.socialMediaIcon" src="../../assets/image/facebook.svg"></a>
                <a href="#"><img :class="$style.socialMediaIcon" src="../../assets/image/instagram.svg"></a>
                <a href="#"><img :class="$style.socialMediaIcon" src="../../assets/image/telegram.svg"></a>
                <a href="#"><img :class="$style.socialMediaIcon" src="../../assets/image/twitter.svg"></a>
                <a href="#"><img :class="$style.socialMediaIcon" src="../../assets/image/linkedin.svg"></a>
            </div>
            <div :class="$style.copyRight">
                <p>Travel To Kish © 2018</p>
            </div>
            
        </div>
    </div>
</template>

<script>
import Menu from '@/components/menu/Menu.vue';
    export default {
        data() {
            return {
                menu: [
                'home' ,
                'about KISH',
                'contact us'
                ],
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
