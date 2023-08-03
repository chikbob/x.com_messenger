<template>
    <div :class="cnInput('field')">
        <input :placeholder="text" :type="type" @keypress="NumbersOnly()" minlength="8" :class="cnInput('field-input')">
    </div>
</template>

<script setup>
import { cnInput } from './input.const';

let text = "Email address"
let type = null

function NumbersOnly(evt) {
    if (props.id == 'code') {
        evt = (evt) ? evt : window.event;
        let charCode = (evt.which) ? evt.which : evt.keyCode;
        if ((charCode > 31 && (charCode < 48 || charCode > 57)) && charCode !== 46) {
            evt.preventDefault();;
        } else {
            return true;
        }
    }
}

const props = defineProps({
    id: Array,
})

if (props.id == 'password' || props.id == 'newPassword' || props.id == 'newPasswordAgain') {
    text = "Password"
    type = "password"
}

if (props.id == 'newPassword') {
    text = "New password"
}

if (props.id == 'newPasswordAgain') {
    text = "New password again"
}

if (props.id == 'code') {
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

input[type="number"] {
    -moz-appearance: textfield;
    -webkit-appearance: textfield;
    appearance: textfield;
}

input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
    display: none;
}
</style>