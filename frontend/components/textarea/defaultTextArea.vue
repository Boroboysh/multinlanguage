<template>
  <div
      :class="{
      default_text_area__active: !!modelValue,
      default_text_area_disabled: disabled,
    }"
      class="default_text_area_block"
  >
    <span v-if="title" class="default_text_area__title">
      {{ placeholder }}
    </span>
    <textarea
        @input="($emit('update:modelValue', $event.target.value))"
        :placeholder="!title ? placeholder : ''"
        class="default_text_area"
    ></textarea>
  </div>
</template>

<script setup>
defineProps({
  placeholder: {
    type: String,
  },
  modelValue: {
    type: String,
    default: '',
  },
  title: {
    type: Boolean,
    default: false,
  },
  disabled: {
    type: Boolean,
    default: false,
  },
});
</script>

<style scoped>
.default_text_area_block {
  position: relative;
  width: 100%;
}
.default_text_area {
  box-sizing: border-box;
  border: 1px solid #e4e6e7;
  width: 100%;
  margin: 0;
  outline: none;
  padding: 16px;
  padding-top: 20px;
  font-size: 16px;
  border-radius: 3px;
  transition: 0.2s;
  height: 100%;
}

.default_text_area__title {
  background: white;
  position: absolute;
  top: 15px;
  left: 0;
  transition: 0.2s;
  display: flex;
  align-items: center;
  padding-left: 16px;
  color: #AAAAAA;
}


.default_text_area__active .default_text_area {
  color: #2b2b2b;
}
.default_text_area_block:focus-within .default_text_area__title,
.default_text_area__active .default_text_area__title{
  top: 5px;
  font-size: 10px;
}
.default_text_area::placeholder {
  color:#AAAAAA ;
}
.default_text_area:hover {
  /*border: 1px solid #aaaaaa;*/
}
</style>