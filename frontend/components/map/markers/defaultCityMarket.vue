<template>
  <div class="default_city_market_block d-flex">
    <img
      src="@/assets/images/defaut_marker.svg"
      alt=""
      class="map_container_marker"
    />
    <div class="map_container_marker_name">
      {{ name }}
      <slot />
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
    item: {
        type: Object
    }
})

</script>

<style>
.map_container_marker_name {
  font-size: 12px;
  margin: 0px 0px 0px 8px;
}
</style>