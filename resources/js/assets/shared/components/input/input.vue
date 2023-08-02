<template>
    <div :class="cnInput()">
        <div :class="cnInput('text')">
            <slot></slot>
        </div>
        <InputField id=1 />
        <InputField id=2 v-if="props.delete == 0" />
    </div>
</template>

<script setup>
import { cnInput } from "./input.const.js";
import InputField from './input__field.vue';

const props = defineProps({
    delete: Boolean,
})

props.delete == 0;
</script>

<style lang="scss" scoped>
.input__text {
    height: 3.4375rem;

    color: #D9D9D9;
    text-align: center;
    font-family: Inter;
    font-size: 1.5rem;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}

.none {
    display: none;
}
</style>