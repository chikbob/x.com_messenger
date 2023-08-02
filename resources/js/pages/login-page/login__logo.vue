<template>
    <div :class="cnLogin('logo')">
        <img src="@/assets/images/white_logo.png" alt="white_logo.png">
    </div>
</template>

<script setup>
import { cnLogin } from "./login.const";
</script>

<style lang="scss" scoped>
.login__logo {
    display: flex;
    justify-content: center;
    margin: 3rem 0;

    & img {
        width: 6.25rem;
        height: 6.25rem;
        flex-shrink: 0;
    }
}
</style>