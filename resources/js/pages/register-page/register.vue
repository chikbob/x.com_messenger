<template>
    <Logo/>
    <div :class="cnRegister('')">
        <Block/>
    </div>
</template>

<script setup>
import { cnRegister } from './register.const';
import Logo from '@/assets/shared/components/logo/logo.vue'
import Block from './register__block.vue'
</script>

<style lang="scss">
.register {
    display: flex;
    justify-content: center;
}
</style>