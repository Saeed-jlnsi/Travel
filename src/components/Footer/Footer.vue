<template>
    <div :class="$style.footer">
        <div :class="footerLinks">
            <Menu :menu="menu"></Menu>
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
