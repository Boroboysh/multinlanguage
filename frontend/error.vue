<template>
  <div class="error_page">
    <div class="error_page_block">
      <div class="error_page_code_block">
        <span class="error_page_code">
          {{ error.statusCode }}
        </span>
      </div>
      <div class="error_page_text_block">
        <span class="error_page_text">
          {{ error.message }}
        </span>
      </div>
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  error: Object
})
</script>

<style scoped>
.error_page {
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}
.error_page_block {
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.error_page_code {
  font-size: 5em;
}
</style>