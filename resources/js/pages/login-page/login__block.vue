<template>
    <div :class="cnLogin('block')">
        <Welcome />
        <Auth />
        <LinkToAny forgotPassword="/forgot_password" register="/register"></LinkToAny>
        <AuthButton invite="">Login</AuthButton>
    </div>
</template>

<script setup>
import { cnLogin } from "./login.const"
import Welcome from "@/assets/shared/components/welcome/welcome.vue"
import Auth from "./login__auth.vue"
import LinkToAny from "./login__link.vue"
import AuthButton from "@/assets/shared/components/button/button.vue"
</script>

<style lang="scss" scoped>
.login__block {
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