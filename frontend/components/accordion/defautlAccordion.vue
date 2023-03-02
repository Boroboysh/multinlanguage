<template>
  <div class="default_accordion_block">
    <div @click="updateStatus(!currentStatus)" class="default_accordion">
        Открыть
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
    min-height: 200px;
    background: #a0a0a0;
}

</style>