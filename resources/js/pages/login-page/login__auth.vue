<template>
    <div :class="cnLogin('auth')">
        <Input spawnEmail=1 spawnPassword=1 :class="cnLogin('auth-block')">Sign in</Input>
    </div>
</template>

<script setup>
import { cnLogin } from "./login.const";
import Input from "@/assets/shared/components/input/input.vue";
</script>

<style lang="scss" scoped>
.login__auth {
    width: 25.5625rem;
    height: 9.0625rem;

    &-block {
        display: flex;
        justify-content: center;
        flex-direction: column;

        color: #D9D9D9;
    }
}
</style>