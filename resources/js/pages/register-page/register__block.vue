<template>
    <div :class="cnRegister('block')">
        <Welcome />
        <Auth />
        <LinkToAny login="/"></LinkToAny>
        <AuthButton invite="">Sign in</AuthButton>
    </div>
</template>

<script setup>
import { cnRegister } from './register.const';
import Welcome from "@/assets/shared/components/welcome/welcome.vue"
import Auth from "./register__auth.vue"
import LinkToAny from "./register__link.vue"
import AuthButton from "@/assets/shared/components/button/button.vue"
</script>

<style lang="scss" scoped>
.register__block {
    display: flex;
    align-items: center;
    flex-direction: column;

    width: 40.625rem;
    height: 28.625rem;
    flex-shrink: 0;

    border-radius: 1.25rem;
    background: #343434;
}
</style>