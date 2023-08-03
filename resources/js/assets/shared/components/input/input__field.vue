<template>
    <div :class="cnInput('field')">
        <input :placeholder="text" :type="type" :class="cnInput('field-input')">
    </div>
</template>

<script setup>
import { cnInput } from './input.const';

let text = "Email address"
let type = null

const props = defineProps({
    id: Number,
})

if (props.id == 2) {
    text = "Password"
    type = "password"
}

if (props.id == 3) {
    text = "Code"
}
</script>

<style lang="scss" scoped>
input {
    all: unset;
}

.input__field {
    &-input {
        display: flex;
        width: 25.5625rem;
        height: 2.1875rem;
        align-items: center;

        border-bottom: 1px solid #FFF;

        color: #D9D9D9;
        font-family: Inter;
        font-size: 0.875rem;
        font-style: normal;
        font-weight: 500;
        line-height: normal;

        &::placeholder {
            color: #7F7F7F;
            font-family: Inter;
            font-size: 0.875rem;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        &:nth-child(1) {
            margin-bottom: 1.25rem;
        }
    }
}
</style>