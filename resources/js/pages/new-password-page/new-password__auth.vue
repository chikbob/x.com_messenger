<template>
    <div :class="cnNewPassword('auth')">
        <Input spawnNewPassword=1 spawnNewPasswordAgain=1 :class="cnNewPassword('auth-block')"></Input>
    </div>
</template>

<script setup>
import { cnNewPassword } from './new-password.const';
import Input from "@/assets/shared/components/input/input.vue";
</script>

<style lang="scss" scoped>
.new-password__auth {
    display: flex;
    align-items: center;

    width: 25.5625rem;
    height: 9.0625rem;

    margin-bottom: 3.12rem;

    &-block {
        display: flex;
        justify-content: center;
        flex-direction: column;

        color: #D9D9D9;
    }
}
</style>