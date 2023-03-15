<template>
  <div class="default_select_block position-relative">
    {{ selectValue }}
    <default-input
      @focus="udpateStatus(true)"
      v-model="selectValue"
      :readonly="true"
      :placeholder="placeholder"
    >
      <template #container-right>
        <img
          class="default_select_search_icon_block"
          src="@/assets/images/arrow_done.svg"
          alt=""
        />

        <slot name="container-right" />
      </template>
    </default-input>
    <div v-if="isActive" class="default_select_list_block">
      <div class="default_select_list">
        <slot />
      </div>
    </div>
  </div>
</template>

<script setup>
import defaultInput from "../input/defaultInput.vue";
import { ref, provide, onMounted } from "vue";

defineProps({
  placeholder: {
    type: String,
  },
});

let selectValue = ref("");
let defaultInputValue = ref(null);
let isActive = ref(false);

const udpateStatus = (status) => {
  isActive.value = status;
};

onMounted(() => {
  console.log('defaultInputValue', defaultInputValue)
})

const updateValue = (value) => {
  selectValue.value = value
}

const closeOptionBlock = () => {
}

provide('defaultSelect', {
  updateValue,
  udpateStatus
})

</script>

<style scoped>
.default_select_block {
}
.default_select_list_block {
  width: 100%;
  padding: 10px;
  position: absolute;
  top: 100%;
  background: #ffffff;
  z-index: 1000;
  box-shadow: 0px 0px 12px rgba(95, 124, 151, 0.25);
}
</style>