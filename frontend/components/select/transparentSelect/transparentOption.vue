<template>
 <div
   @click="emitSelect(item)"
  class="default_transparent_option_block"
  >
   <div class="default_transparent_option_item">
    <slot />
   </div>
 </div>
</template>

<script setup>
import { inject } from "vue";

const props = defineProps({
  item: {
    type: String,
  },
});

const { emitSelect } = inject("transparentSelect");

const updateSelect = (item) => {};
</script>

<style>
</style>