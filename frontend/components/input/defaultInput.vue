<template>
  <div :class="{ 'default_input__active': valueInput != '', 'default_input_disabled': disabled }"
    class="default_input_block">
    <span v-if="title" class="default_input_title">
      {{ placeholder }}
    </span>
    <div class="default_input_container">
    </div>
    <input @focus="$emit('focus')" @blur="$emit('blur')" :readonly="readonly" :placeholder="!title ? placeholder : null" :disabled="disabled"
      @input="$emit('update:modelValue', $event.target.value)" v-model="valueInput" class="default_input" type="text">
    <div class="container_right_slot">
      <slot name="container-right" />
    </div>
    <div v-if="valueInput && clearButton" @click="updateValue('')" class="default_input_clear_button_block">
      <img class="default_input_clear" src="@/assets/images/icons/Arrow_done.svg" alt="">
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

defineProps({
  disabled: {
    type: Boolean
  },
  modelValue: {
    type: String,
    required: true
  },
  placeholder: {
    type: String
  },
  title: {
    type: Boolean,
    default: false
  },
  clearButton: {
    type: Boolean
  },
  readonly: {
    type: Boolean
  }
})

const valueInput = ref('');

const updateValue = (value) => {
  valueInput = value
}


const emit = defineEmits(['update:modelValue'])

</script>

<style scoped>
.default_input_block {
  /* height: 100%; */
  border: 1px solid #E4E6E7;
  border-radius: 3px;
  display: flex;
  align-items: center;
  position: relative;
  background: white;
}

.default_input_block:focus-within {
  border: 1px solid #48538B;
}

.default_input_block:focus-within .default_input_title {
  top: -32%;
  font-size: 10px;
}

.default_input_block:hover {
  border: 1px solid #AAAAAA;
}

.default_input_block:disabled:has(.default_input) {
  background: #000000;
}

.default_input_disabled {
  background: #FAFAFA;
}

.default_input_disabled:hover {
  border: 1px solid #E4E6E7;
}

.default_input {
  width: 100%;
  border: none;
  outline: none;
  height: 100%;
  background: none;
  padding: 16px 8px;
  color: #AAAAAA;
}

.default_input_title {
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  transition: .2s;
  display: flex;
  align-items: center;
  padding-left: 8px;
}

.container_right_slot {
  padding-right: 10px;
}

.default_input__active {
  background: #FFFFFF;
  border: 1px solid #E4E6E7;
}

.default_input__active .default_input {
  color: #2B2B2B;
}

.default_input__active:focus-within {
  background: #FFFFFF;
  border: 1px solid #E4E6E7 !important;
  box-shadow: 0px 0px 12px rgba(95, 124, 151, 0.25);
}

.default_input__active .default_input_title {
  top: -32%;
  font-size: 10px;
}

.default_input__active:focus-within .default_input {
  color: #2B2B2B;
}

.default_input_clear_button {
  width: 12px;
  display: flex;
  cursor: pointer;
  align-items: center;
  justify-content: center;
}

.default_input_clear_button_block {
  padding: 0 10px;
}
</style>