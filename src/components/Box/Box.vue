<template>
    <div class="row" :class="$style.boxes">
        <div v-for="(city, index) in cities" :key="index" :class="$style.singleBox">
            <img src="city.imageLink" alt="City_Photo">
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
                cities: [
                    {cityName: 'tehran', imageLink:'../../assets/image/Greek-ship.jpg'},
                    {cityName: 'Berlin', imageLink:'../../assets/image/logo.png'},
                    {cityName: 'San Francisco', imageLink:'../../assets/image/Greek-ship.jpg'},
                ]
            }
            image: {}
        },
        methods: {
            // imagelink(link) {
            //     console.log('link' , link)
            
            //     this.image = require(link)
            //     console.log('image' , image)
            //     return image
            // }
        } 
    }
</script>

<style lang="scss" module>
    @import './box';
</style>
