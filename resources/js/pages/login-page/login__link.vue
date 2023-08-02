<template>
    <div :class="cnLogin('link')">
        <Link :class="cnLogin('link-item')" href="">Forgot your password?</Link>
        <Link :class="cnLogin('link-item')" href="" style="text-align: right;">Join us?</Link>
    </div>
</template>

<script setup>
import { cnLogin } from "./login.const";
import { Link } from '@inertiajs/vue3'
</script>

<style lang="scss" scoped>
.login__link {
    display: flex;
    width: 25.5625rem;
    height: 3.125rem;
    flex-direction: column;
    justify-content: center;

    &-item {
        color: #D9D9D9;
        font-family: Inter;
        font-size: 1rem;
        font-style: normal;
        font-weight: 500;
        line-height: 0rem;
        /* 0% */
        text-decoration-line: underline;
    }
}
</style>