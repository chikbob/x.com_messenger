<template>
    <div :class="cnCode('block')">
        <Welcome />
        <Auth />
        <AuthButton invite="/new_password">Next</AuthButton>
    </div>
</template>

<script setup>
import { cnCode } from './code.const';
import Welcome from "@/assets/shared/components/welcome/welcome.vue"
import Auth from "./code__auth.vue"
import AuthButton from "@/assets/shared/components/button/button.vue"
</script>

<style lang="scss" scoped>
.code__block {
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