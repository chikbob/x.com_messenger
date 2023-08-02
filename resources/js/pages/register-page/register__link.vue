<template>
    <div :class="cnRegister('link')">
        <Link :class="cnRegister('link-item')" :href="login" style="text-align: right;">Have account?</Link>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { cnRegister } from "./register.const";

const props = defineProps({
    login: Array,
})
</script>

<style lang="scss" scoped>
.register__link {
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