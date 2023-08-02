<template>
    <div :class="cnForgotPassword('block')">
        <Welcome />
        <Auth />
        <AuthButton invite="">Next</AuthButton>
    </div>
</template>

<script setup>
import { cnForgotPassword } from './forgot_password.const';
import Welcome from "@/assets/shared/components/welcome/welcome.vue"
import Auth from "./forgot_password__auth.vue"
import AuthButton from "@/assets/shared/components/button/button.vue"
</script>

<style lang="scss" scoped>
.forgot-password__block {
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