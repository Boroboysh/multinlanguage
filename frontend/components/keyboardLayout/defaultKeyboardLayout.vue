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
  typeAction: {
    type: String,
    requered: true
  }
})
const result = ref(null)

const choiceActions = (action, value) => {
  switch (action) {
    case 'default':
      result = value
  }
}

</script>

<style scoped>
.default_keyboard_layout {
  display: flex;
  flex-wrap: wrap;
}
</style>