<template>
    <div >
        <button :class="$style.btn">
            <slot>Button</slot>
        </button>
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

