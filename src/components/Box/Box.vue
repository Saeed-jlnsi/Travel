<template>
    <div :class="$style.box">
        <div :class="$style.innerBox">
            <img :src="image" alt="City_Photo">
            <span>{{city.cityName}}</span>
            <span>Travel Now ></span>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Box',
        data() {
            return {
                image: {}
            }
        },
        created() {
            // let path = this.city.imageLink
            console.log(this.city)
            this.image = require('@/assets/image/' + this.city.imageLink + '.jpg')
        },
        props: {
            city:{}
        }
    }
</script>

<style lang="scss" module>
    @import './box';
</style>
