<template>
    <div class="row">
        <div v-for="(city, index) in cities" :key="index" :class="$style.singleBox">
            <img src="../../assets/image/logo.png" alt="City_Photo">
            <p>{{city.cityName}}</p>
            <p>travel now <span>></span></p>
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
