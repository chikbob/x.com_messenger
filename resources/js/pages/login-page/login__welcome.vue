<template>
    <div :class="cnLogin('welcome')">Welcome to
        <span :class="cnLogin('welcome_bold')">x.com!</span>
    </div>
</template>

<script setup>
import { cnLogin } from "./login.const";
</script>

<style lang="scss" scoped>
.login__welcome {
    color: #D9D9D9;
    text-align: center;
    font-family: Inter;
    font-size: 2vw;
    font-style: normal;
    font-weight: 400;
    line-height: normal;

    width: fit-content;
    height: 2.3125rem;
    flex-shrink: 0;

    margin: 2.5rem 0 4rem;

    @media screen and (max-width: 1200px) {
        font-size: 2.5vw;
    }

    &_bold {
        color: #D9D9D9;
        font-family: Inter;
        font-size: 2vw;
        font-style: normal;
        font-weight: 600;
        line-height: normal;

        @media screen and (max-width: 1200px) {
            font-size: 3vw;
        }
    }
}
</style>