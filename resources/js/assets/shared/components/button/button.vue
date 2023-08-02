<template>
    <Link :class="cnButton('block')" :href="invite">
        <div :class="cnButton('block-text')">
            <slot></slot>
        </div>
    </Link>
</template>

<script setup>
import { cnButton } from './button.const';
import { Link } from '@inertiajs/vue3'

const props = defineProps({
    invite: Array,
})
</script>

<style lang="scss" scoped>
.button {
    &__block {
        display: flex;
        width: 21.875rem;
        height: 3.125rem;
        flex-direction: column;
        justify-content: center;
        flex-shrink: 0;
        text-decoration: none;

        border-radius: 1.25rem;
        background: #D9D9D9;

        margin-top: 1.62rem;

        cursor: pointer;

        &-text {
            color: #1E1E1E;
            text-align: center;
            font-family: Inter;
            font-size: 1.5rem;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }
    }
}
</style>