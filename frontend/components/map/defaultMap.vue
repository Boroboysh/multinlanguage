<template>
  <div class="default_map_block">
    <div class="map_container w-100 d-flex align-items-center justify-content-center">
      <img class="map_container_images map_container_map_state" src="@/assets/images/map/map_state.svg"
        alt="">
      <img class="position-absolute map_container_images map_container_map_kz" src="@/assets/images/map/map_kz.svg" alt="">
    </div>
  </div>
</template>

<script>

</script>

<style>
.map_block_content_title_block_col {
  width: 50%;
}


.map_container_map_state {
  max-height: 100%;
  object-fit: contain;
  width: 100%;
  /* max-width: 1620px; */
  z-index: -100;
}

.map_container_map_kz {
  width: 68%;
  object-fit: contain;
  height: 100%;
  z-index: -10;
}
</style>