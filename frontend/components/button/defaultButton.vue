<template>
  <button :type="type" :class="`size_${size} color_${color}`" class="default_button">
    <slot />
  </button>
</template>

<script setup>
defineProps({
  size: {
    type: String,
    default: 'medium'
  },
  type: {
    type: String,
    default: undefined,
  },
  color: {
    type: String,
    default: 'primary'
  }
})
</script>

<style scoped>
.default_button {
  border-radius: 3px;
  border: none;
  transition: .2s;
}

.default_button:disabled {
  color: #AAAAAA;
  background: #DBDBDB;
}

.default_button:hover:disabled {
  color: #AAAAAA;
  background: #DBDBDB;
  box-shadow: none;
}

.size_small {
  padding: 12px 8px;
}

.size_medium {
  padding: 10px 28px;
  font-size: 14px;
}

.size_large {
  padding: 16px 28px;
  font-size: 16px;
}

.color_primary {
  background: #E4003C;
  color: #FFFFFF;
}

.color_primary:hover {
  background: #FF465C;
  box-shadow: 0px 2px 12px rgba(198, 7, 57, 0.25);
}

.color_secondary {
  background: #48538B;
  color: #FFFFFF;
}

.color_secondary:hover {
  background: #848FC9;
  box-shadow: 0px 2px 12px rgba(33, 29, 86, 0.25);
}

.color_grey {
  background: #F6F6F6;
  color: #2B2B2B;
  font-weight: 700;
}

.color_grey:hover {
  background: #48538B;
  color: white;
  box-shadow: 0px 2px 12px rgba(33, 29, 86, 0.25);
}</style>
