<template>
    <Logo/>
    <div :class="cnForgotPassword('')">
        <Block/>
    </div>
</template>

<script setup>
import { cnForgotPassword } from './forgot_password.const';
import Logo from '@/assets/shared/components/logo/logo.vue'
import Block from './forgot_password__block.vue'
</script>

<style lang="scss" scoped>
.forgot-password {
    display: flex;
    justify-content: center;
}
</style>