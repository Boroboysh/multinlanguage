<template>
  <div class="default_keyboard_option_block">
    <slot />
  </div>
</template>

<script setup>
const props = defineProps({
  value: {
    type: String,
    requered: true,
  },
});


</script>

<style scoped>
.default_keyboard_option_block {
    padding: 4px 8px;
    margin-right: 4px;
    background: #E4E6E7;
    border-radius: 3px;
}
</style>