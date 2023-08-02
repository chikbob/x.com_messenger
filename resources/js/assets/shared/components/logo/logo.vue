<template>
    <div :class="cnLogo()">
        <img src="@/assets/images/white_logo.png" alt="white_logo.png">
    </div>
</template>

<script setup>
import { cnLogo } from "./logo.const"
</script>

<style lang="scss" scoped>
.logo {
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