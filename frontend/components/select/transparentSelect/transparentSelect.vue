<template>
  <div class="default_transparent_select_block">
    <div
      @click="updateAciveContentStatus(!isActiveContent)"
      class="default_transparent_select_title"
    >
      <slot name="title" />
    </div>
    <div
      v-if="isActiveContent"
      class="default_transparent_select_content_block"
    >
      <slot />
    </div>
  </div>
</template>

<script setup>
import { provide } from "vue";

const props = defineProps({});
const emits = defineEmits(["returnOption"]);
const activeElement = ref();
let isActiveContent = ref(false);

const updateAciveContentStatus = (status) => {
  isActiveContent.value = status;
};

const emitSelect = (item) => {
  emits("returnOption", item);
  updateAciveContentStatus(false);
};

provide("transparentSelect", {
  emitSelect,
});
</script>

<style scoped>
.default_transparent_select_block {
  position: relative;
}
.default_transparent_select_content_block {
  width: 100%;
  padding: 20px 0px;
  position: absolute;
  top: 100%;
  z-index: 100;
}
</style>