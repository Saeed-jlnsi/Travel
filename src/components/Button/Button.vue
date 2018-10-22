<template>
    <div >
        <div :class="$style.btn">
            <slot>Button</slot>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['btnLabel']    
    }
</script>


<style lang="scss" module>
    @import './button';
</style>

