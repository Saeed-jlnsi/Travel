<template>
    <div class="row" :class="$style.box">
        <div :class="$style.innerBox">
            <img :src="image" alt="City_Photo">
            <div>{{city.cityName}}</div>
            <div>travel now <span>></span></div>
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
            // this.image = require(this.city.imageLink)
            console.log(this.city)
        },
        props: {
            city:{}
        }
    }
</script>

<style lang="scss" module>
    @import './box';
</style>
