<template>
  <div @click="test" class="default_keyboard_option_block">
    <slot />
  </div>
</template>

<script setup>
import { inject } from 'vue'

const props = defineProps({
  value: {
    type: String,
    requered: true,
  },
});

const test = () => {
  selection.selectionsAction(props.value);
}
const selection = inject('defaultKeyboardLayout')

</script>

<style scoped>
.default_keyboard_option_block {
    margin-bottom: 12px;
}
</style>