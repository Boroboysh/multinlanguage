<template>
  <div class="default_text_area_block">
    <textarea @input="($emit('update:modelValue', $event.target.value))" :placeholder="placeholder" class="default_text_area"></textarea>
  </div>
</template>

<script setup>
defineProps({
  placeholder: {
    type: String,
  },
});
</script>

<style scoped>
.default_text_area_block {
  width: 100%;
}
.default_text_area {
  width: 100%;
  margin: 0;
  padding: 0;
  border: 1px solid #e4e6e7;
  outline: none;
  padding: 20px;
  font-size: 16px;
  border-radius: 3px;
  transition: 0.2s;
  height: 100%;
}
.default_text_area:hover {
  border: 1px solid #aaaaaa;
}
</style>