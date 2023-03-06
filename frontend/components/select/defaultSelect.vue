<template>
  <div class="default_select_block">
    {{ isActive }}
    <default-input @focus="udpateStatus(true)" @blur="udpateStatus(false)" v-model="value" :readonly="false"
      :placeholder="placeholder">
      <template #container-right>
        <img class="default_select_search_icon_block" src="@/assets/images/arrow_done.svg" alt="">

        <slot name="container-right" />
      </template>
    </default-input>
    <div v-if="isActive" class="default_select_list_block">
      <div class="default_select_list">
        <div class="default_select_list_item">
          1
        </div>
        <div class="default_select_list_item">
          1
        </div>
        <div class="default_select_list_item">
          1
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import defaultInput from '../input/defaultInput.vue';
import { ref } from 'vue';

defineProps({
  placeholder: {
    type: String
  }
})

let value = ref('')
let isActive = ref(false)

const udpateStatus = (status) => {
  isActive.value = status;
}
</script>

<style>
.default_select_list_block {
  width: 100%;
  padding: 10px;
  box-shadow: 0px 0px 12px rgba(95, 124, 151, 0.25);
}
</style>