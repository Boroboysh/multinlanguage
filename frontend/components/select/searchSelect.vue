<template>
  <div class="default_select_search_block">
    {{ value }}
    <default-select v-model="value" placeholder="Выберите значение">
      <template #container-right>
        <img class="default_select_search_icon_block" src="@/assets/images/arrow_done.svg" alt="">
      </template>
    </default-select>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import defaultSelect from '@/components/select/defaultSelect.vue';

const value = ref('')
</script>

<style>

</style>