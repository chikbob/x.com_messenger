<template>
    <LoginLogo />
    <div :class="cnLogin()">
        <Block/>
    </div>
</template>

<script setup>
import { cnLogin } from "./login.const";
import LoginLogo from "@/assets/shared/components/logo/logo.vue"
import Block from "./login__block.vue"
</script>

<style lang="scss">
body {
    margin: 0;
    border: 0;
}

.login {
    display: flex;
    justify-content: center;
}
</style>