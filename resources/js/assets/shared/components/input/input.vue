<template>
    <div :class="cnInput()">
        <div :class="props.smallText ? cnInput('small-text') : cnInput('text')">
            <slot></slot>
        </div>
        <InputField id=email v-if="props.spawnEmail == 1" />
        <InputField id=password v-if="props.spawnPassword == 1" />
        <InputField id=newPassword v-if="props.spawnNewPassword == 1" />
        <InputField id=newPasswordAgain v-if="props.spawnNewPasswordAgain == 1" />
        <InputField id=code v-if="props.spawnCode == 1" />
    </div>
</template>

<script setup>
import { cnInput } from "./input.const.js";
import InputField from './input__field.vue';

props.spawnEmail == 0;
props.spawnPassword == 0;
props.spawnNewPassword == 0;
props.spawnNewPasswordAgain == 0;
props.spawnCode == 0;
props.smallText == 0;

const props = defineProps({
    spawnEmail: Boolean,
    spawnPassword: Boolean,
    spawnNewPassword: Boolean,
    spawnNewPasswordAgain: Boolean,
    spawnCode: Boolean,
    smallText: Boolean,
})

console.log(props.spawnEmail, props.spawnPassword, props.spawnCode)
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
        display: flex;
        align-items: flex-start;
        justify-content: center;

        height: 3.4375rem;

        color: #D9D9D9;
        text-align: center;
        font-family: Inter;
        font-size: 1rem;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
}
</style>