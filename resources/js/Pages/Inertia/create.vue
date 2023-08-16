<script setup>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'
import BreezeValidationErrors from '@/Components/ValidationErrors.vue'

defineProps({
    errors: Object
})

function submitfunction() {
    Inertia.post('/inertia-test', form);
}

const form = reactive({
    name: null,
    memo: null,
    price: null
})

const storeItem = () => {
    Inertia.post('/items', form)
}
</script>


<template>
    <BreezeValidationErrors :errors="errors" />
    <form @submit.prevent="submitfunction">
        <input type="text" name="title" v-model="form.title"><br>
        <div v-if="errors.title">{{ errors.title }}</div>
        <input type="text" name="content" v-model="form.content"><br>
        <div v-if="errors.content">{{ errors.content }}</div>
        <button>送信</button>
    </form>
</template>