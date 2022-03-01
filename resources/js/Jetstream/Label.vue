<template>
    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">
        <span v-if="value">{{ $__(value) }}</span>
        <span v-else><slot></slot></span>
    </label>
</template>

<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        props: ['value']
    })
</script>
