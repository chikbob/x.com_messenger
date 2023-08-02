<template>
    <div :class="cnWelcome('')">Welcome to
        <span :class="cnWelcome('bold')">x.com!</span>
    </div>
</template>

<script setup>
import { cnWelcome } from './welcome.const';
</script>

<style lang="scss" scoped>
.welcome {
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

    &__bold {
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