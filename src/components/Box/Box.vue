<template>
    <div class="row" :class="$style.boxes">
        <div v-for="(city, index) in cities" :key="index" :class="$style.singleBox">
            <img src="../../assets/image/logo.png" alt="City_Photo">
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
                    {cityName: 'Montreal', imageLink:'../../assets/image/logo.png'},
                    {cityName: 'Berlin', imageLink:'../../assets/image/logo.png'},
                    {cityName: 'San Francisco', imageLink:'../../assets/image/logo.png'},
                ]
            }
        }
    }
</script>

<style lang="scss" module>
    @import './box';
</style>
