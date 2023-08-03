<template>
    <div :class="cnCode('auth')">
        <Input smallText=1 deleteEmail=1 deletePassword=1 :class="cnCode('auth-block')">Check your email and enter the code from the email</Input>
    </div>
</template>

<script setup>
import { cnCode } from './code.const';
import Input from "@/assets/shared/components/input/input.vue";
</script>

<style lang="scss" scoped>
.code__auth {
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

    &-text {
        height: 3.4375rem;

        color: #D9D9D9;
        text-align: center;
        font-family: Inter;
        font-size: 1.5rem;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }
}
</style>