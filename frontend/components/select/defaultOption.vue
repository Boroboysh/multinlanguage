<template>
<div @click="updateOptionValue(item)" class="default_option_block">
    <div class="default_option">
        <slot />
    </div>
</div>
</template>

<script setup>
import { ref, inject } from "vue";

const props = defineProps({
  item: {
    type: String,
  },
});

const { updateValue, udpateStatus } = inject('defaultSelect')
const updateOptionValue = (item) => {
  updateValue(item)
  udpateStatus(false)
}

updateValue(props.item.name)
let value = ref("");

</script>

<style scoped>
.default_option_block {
}
.default_option {
    padding: 10px;
}
</style>