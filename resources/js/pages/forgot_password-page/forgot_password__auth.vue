<template>
    <div :class="cnForgotPassword('auth')">
        <Input deletePassword=1 deleteCode=1 :class="cnForgotPassword('auth-block')">Forgot your password</Input>
    </div>
</template>

<script setup>
import { cnForgotPassword } from './forgot_password.const';
import Input from "@/assets/shared/components/input/input.vue";
</script>

<style lang="scss" scoped>
.forgot-password__auth {
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