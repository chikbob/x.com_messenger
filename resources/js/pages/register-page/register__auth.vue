<template>
    <div :class="cnRegister('auth')">
        <Input deleteCode=1 :class="cnRegister('auth-block')">Register</Input>
    </div>
</template>

<script setup>
import { cnRegister } from './register.const';
import Input from "@/assets/shared/components/input/input.vue";

</script>

<style lang="scss" scoped>
.register__auth {
    width: 25.5625rem;
    height: 9.0625rem;

    &-block {
        display: flex;
        justify-content: center;
        flex-direction: column;

        color: #D9D9D9;
    }
}
</style>