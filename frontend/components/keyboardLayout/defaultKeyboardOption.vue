<template>
  <div @click="selection.selectionsAction(value)" class="default_keyboard_option_block">
    <slot />
  </div>
</template>

<script setup>
import { ref, inject } from 'vue'

const props = defineProps({
  value: {
    type: String,
    requered: true,
  },
});

const test = () => {
  console.log('value', props.value)
}

const selection = inject('defaultKeyboardLayout')

</script>

<style scoped>
.default_keyboard_option_block {

}
</style>