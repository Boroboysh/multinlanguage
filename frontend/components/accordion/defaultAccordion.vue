<template>
  <div class="default_accordion_block">
    <div @click="updateStatus(!currentStatus)" class="default_accordion">
        <slot :name="title" />
    </div>
    <div v-if="currentStatus" class="default_accordion_content_block">
      13234512543
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const currentStatus = ref(false);

const updateStatus = (status) => {
    currentStatus.value = status;
}

</script>

<style>
.default_accordion {
    width: 100%;
    background: #a0a0a0;
    transition: .2s;
}

</style>