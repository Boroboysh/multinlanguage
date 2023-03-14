<template>
  <div class="default_map_block">
    <div
      class="map_container w-100 h-100 d-flex align-items-center justify-content-center"
    >
      <div
        v-for="(item, index) in itemList"
        :key="index"
        :style="{
          top: item.coordination.x + '%',
          left: item.coordination.y + '%',
        }"
        class="map_container_marker_block"
      >
        <img
          src="@/assets/images/defaut_marker.svg"
          alt=""
          class="map_container_marker"
        />
        <p class="map_container_marker_name">
          {{ item.name }}
        </p>
      </div>
      <img
        class="map_container_images map_container_map_state"
        src="@/assets/images/map/map_state.svg"
        alt=""
      />
      <img
        class="position-absolute map_container_images map_container_map_kz"
        src="@/assets/images/map/map_kz.svg"
        alt=""
      />
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  itemList: Array,
});
</script>

<style>
.map_block_content_title_block_col {
  width: 50%;
}
.default_map_block {
  position: relative;
}
.map_container {
  position: relative;
}
.map_container_map_state {
  max-height: 100%;
  object-fit: contain;
  width: 100%;
  max-width: 1620px;
  z-index: -100;
}

.map_container_map_kz {
  width: 68%;
  object-fit: contain;
  height: 100%;
  max-height: 630px;
  z-index: -10;
}
.map_container_marker_block {
  position: absolute;
  z-index: 1000;
  top: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
}
.map_container_marker_name {
  font-size: 12px;
  margin: 0px 0px 0px 8px;
}
</style>