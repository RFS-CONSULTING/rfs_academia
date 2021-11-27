<template>
  <div class="inline-block relative">
    <select
      class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
      v-model="selected"
      @change="change"
    >
      <option v-for="d in data" :key="keyField ? d[keyField] : d" :value="valueField ? d[valueField] : d">{{ textField ? d[textField] : d }}</option>
    </select>
  </div>
</template>

<script>
export default {
  name: 'InputSelect',
  emits: ['update:modelValue', 'change'],
  props: {
    data: Array,
    textField: String,
    keyField: String,
    valueField: String,
    modelValue: undefined,
  },
  data() {
    return {
      selected: this.modelValue,
    }
  },
  methods: {
    change(e) {
      this.$emit('update:modelValue', this.selected)
      this.$emit('change', this.selected)
    }
  }
}
</script>
