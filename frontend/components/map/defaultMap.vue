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
        <default-city-market v-if="item.type === 'text'" :item="item">
          {{ item.name }}
        </default-city-market>
        <div v-if="item.type === 'title'" class="map_container_city_bold_block">
          <span class="map_container_city_bold_block">
            {{ item.name }}
          </span>
        </div>
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
import defaultCityMarket from "@/components/map/markers/defaultCityMarket.vue";

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
  /* max-width: 2000px; */
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
.map_container_city_bold_block {
  font-size: 24px;
  font-weight: 600;
  transform: translate(-50%,-50%)
}

@media (max-width: 480px) {

  .default_map_block {
    transform: scale(140%);
  }
  .map_container_map_state, .map_container_map_kz {
    height: 280px;
    /*width: 100%;*/
  }
}
</style>