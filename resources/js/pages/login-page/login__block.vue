<template>
    <div :class="cnLogin('block')">
        <Welcome />
        <Auth />
        <Link />
        <AuthButton>Login</AuthButton>
    </div>
</template>

<script setup>
import { cnLogin } from "./login.const"
import Welcome from "./login__welcome.vue"
import Auth from "./login__auth.vue"
import Link from "./login__link.vue"
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