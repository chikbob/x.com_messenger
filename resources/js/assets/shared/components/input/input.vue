<template>
    <div :class="cnInput()">
        <div :class="props.smallText ? cnInput('small-text') : cnInput('text')">
            <slot></slot>
        </div>
        <InputField id=1 v-if="props.deleteEmail == 0" />
        <InputField id=2 v-if="props.deletePassword == 0" />
        <InputField id=3 v-if="props.deleteCode == 0" />
    </div>
</template>

<script setup>
import { cnInput } from "./input.const.js";
import InputField from './input__field.vue';

props.deleteEmail == 0;
props.deletePassword == 0;
props.deleteCode == 0;
props.smallText == 0;

const props = defineProps({
    deleteEmail: Boolean,
    deletePassword: Boolean,
    deleteCode: Boolean,
    smallText: Boolean,
})

console.log(props.deleteEmail, props.deletePassword, props.deleteCode)
</script>

<style lang="scss" scoped>
.input {
    &__text {
        height: 3.4375rem;

        color: #D9D9D9;
        text-align: center;
        font-family: Inter;
        font-size: 1.5rem;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    &__small-text {
        height: 1.0625rem;

        color: #D9D9D9;
        text-align: center;
        font-family: Inter;
        font-size: 1rem;
        font-style: normal;
        font-weight: 400;
        line-height: normal;

        margin-bottom: 1.625rem;
    }
}
</style>