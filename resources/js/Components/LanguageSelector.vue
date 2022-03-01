<template>
    <SelectInput
        v-model="current_locale"
        :data="locales"
        class="mt-1 block w-full"
        text-field="native"
        key-field="locale"
        valueField="locale"
        @change="change"
    />

</template>

<script >
import { defineComponent } from 'vue'
import SelectInput from '@/Components/SelectInput.vue'
export default defineComponent({
    components: {
        SelectInput
    },
    props: ['locales', 'locale'],
    data() {
        return {
            current_locale: this.locale
        }
    },
    methods: {
        change() {
            location.href = this.locales.find((l) => l.locale === this.current_locale).link
        }
    }
})
</script>
