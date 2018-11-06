<template>
    <div :class="$style.sliderInner">
        <span :class="$style.titleRow">{{ category }}</span>
        <!-- <img src="../assets/image/play-button-left.svg" alt=""> -->
        <div :class="$style.scrollerWrapper">
            <div><img src="../../assets/image/coast.jpg" alt=""></div>
            <div><img src="../../assets/image/sea.jpg" alt=""></div>
            <div><img src="../../assets/image/dolphins-show.jpg" alt=""></div>
            <div><img src="../../assets/image/dariush-hotel.jpg" alt=""></div>
            <div><img src="../../assets/image/coast.jpg" alt=""></div>
            <div><img src="../../assets/image/sea.jpg" alt=""></div>
            <div><img src="../../assets/image/dolphins-show.jpg" alt=""></div>
            <div><img src="../../assets/image/dariush-hotel.jpg" alt=""></div>
            <div><img src="../../assets/image/coast.jpg" alt=""></div>
            <div><img src="../../assets/image/sea.jpg" alt=""></div>
            <div><img src="../../assets/image/dolphins-show.jpg" alt=""></div>
            <div><img src="../../assets/image/dariush-hotel.jpg" alt=""></div>
            <div><img src="../../assets/image/coast.jpg" alt=""></div>
            <div><img src="../../assets/image/sea.jpg" alt=""></div>
            <div><img src="../../assets/image/dolphins-show.jpg" alt=""></div>
            <div><img src="../../assets/image/dariush-hotel.jpg" alt=""></div>
            <div><img src="../../assets/image/coast.jpg" alt=""></div>
            <div><img src="../../assets/image/sea.jpg" alt=""></div>
            <div><img src="../../assets/image/dolphins-show.jpg" alt=""></div>
            <div><img src="../../assets/image/dariush-hotel.jpg" alt=""></div>
            <div><img src="../../assets/image/coast.jpg" alt=""></div>
            <div><img src="../../assets/image/sea.jpg" alt=""></div>
            <div><img src="../../assets/image/dolphins-show.jpg" alt=""></div>
            <div><img src="../../assets/image/dariush-hotel.jpg" alt=""></div>
        </div>
        <!-- <img src="../assets/image/play-button-right.svg" alt=""> -->
    </div>
</template>

<script>
    export default {
        props: [
            'category'
        ],
        data() {
            return {

            }
        }        
    }
</script>


<style lang="scss" module>
    @import './slider';
</style>

