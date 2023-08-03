<template>
    <Logo />
    <div :class="cnNewPassword('')">
        <Block />
    </div>
</template>

<script setup>
import { cnNewPassword } from './new-password.const';
import Logo from '@/assets/shared/components/logo/logo.vue'
import Block from './new-password__block.vue'
</script>

<style lang="scss" scoped>
.new-password {
    display: flex;
    justify-content: center;
}
</style>