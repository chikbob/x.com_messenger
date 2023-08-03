<template>
    <Logo />
    <div :class="cnCode()">
        <Block />
    </div>
</template>

<script setup>
import { cnCode } from './code.const';
import Logo from "@/assets/shared/components/logo/logo.vue"
import Block from "./code__block.vue"
</script>

<style lang="scss">
.code {
    display: flex;
    justify-content: center;
}
</style>