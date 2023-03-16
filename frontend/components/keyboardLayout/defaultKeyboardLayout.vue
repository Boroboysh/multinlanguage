<template>
  <div class="default_keyboard_layout_block">
    <div class="default_keyboard_layout">
        <slot />
    </div>
  </div>
</template>

<script setup>
import { ref, provide } from 'vue'

const props = defineProps({
  checkAction: {
    type: String,
    requered: true
  }
})
let result = ref(null)
const resultEmit = defineEmits(['result'])
const selectionsAction = (value) => {
  switch (props.checkAction) {
    case 'default':
      result = value
  }
  // defineEmits('result', result)
  resultEmit('result', result)
  // this.$emit('result', result)
}

provide('defaultKeyboardLayout', {
  'selectionsAction': selectionsAction
})

</script>

<style scoped>
.default_keyboard_layout {
  display: flex;
  flex-wrap: wrap;
}
</style>