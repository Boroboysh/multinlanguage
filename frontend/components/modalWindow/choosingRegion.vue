<template>
  <div class="choosing_region_block">
    <div class="choosing_region">
      <div
        class="choosing_region_header_block choosing_region_header_block_row"
      >
        <div
          class="choosing_region_header_title_block d-flex align-items-start choosing_region_header_block_col"
        >
          <span class="choosing_region_header_title"> Выбор региона </span>
        </div>
        <div
          class="choosing_region_header_close_button_block d-flex align-items-center justify-content-end choosing_region_header_block_col"
        >
          <img
            src="@/assets/images/icons/Arrow_done.svg"
            alt=""
            class="choosing_region_header_close_button"
          />
        </div>
      </div>
      <div class="choosing_region_content_block">
        <div class="choosing_region_content_search_block">
          <default-input
            placeholder="Поиск"
            class="choosing_region_content_search"
          >
            <template #container-right>
              <img src="@/assets/images/search_icon.png" alt="" />
            </template>
          </default-input>
        </div>
        <div class="choosing_region_content_territory_block">
          <div class="choosing_region_content_territory d-flex">
            <div class="choosing_region_content_city_list_block">
              <div class="choosing_region_content_city_list">
                <div
                  class="choosing_region_content_city_list_item choosing_region_content_city_list_item_active"
                >
                  waffwawfawfa
                </div>
                <div class="choosing_region_content_city_list_item">
                  waffwawfawfa
                </div>
                <div class="choosing_region_content_city_list_item">
                  waffwawfawfa
                </div>
                <div class="choosing_region_content_city_list_item">
                  waffwawfawfa
                </div>
                <div class="choosing_region_content_city_list_item">
                  waffwawfawfa
                </div>
                <div class="choosing_region_content_city_list_item">
                  waffwawfawfa
                </div>
              </div>
            </div>
            <div class="choosing_region_content_city_block_info">
              <div class="choosing_region_content_city_block_popular">
                <div
                  class="choosing_region_content_city_block_popular_title_block"
                >
                  <span
                    class="choosing_region_content_city_block_popular_title_block"
                  >
                    Популярные города
                  </span>
                </div>
                <div
                  class="choosing_region_content_city_block_popular_list_block"
                >
                  <div
                    class="choosing_region_content_city_block_popular_list d-flex"
                  >
                    <div
                      class="choosing_region_content_city_block_popular_list_item_block"
                    >
                      <a
                        href="#"
                        class="choosing_region_content_city_block_popular_list_item"
                        >уафщшуапф</a
                      >
                    </div>
                    <div
                      class="choosing_region_content_city_block_popular_list_item_block"
                    >
                      <a
                        href="#"
                        class="choosing_region_content_city_block_popular_list_item"
                        >уафщшуапф</a
                      >
                    </div>
                  </div>
                </div>
                <div
                  class="choosing_region_content_city_block_popular_keyboard_block"
                >
                  <default-keyboard-layout checkAction="default" class="d-flex">
                    <default-keyboard-option
                      v-for="(item, index) in test"
                      :key="index"
                      :value="item"
                    >
                      {{ item.name }}
                    </default-keyboard-option>
                  </default-keyboard-layout>
                </div>
                <div class="choosing_region_content_city_all_list_block">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import defaultInput from "@/components/input/defaultInput.vue";
import defaultKeyboardLayout from "@/components/keyboardLayout/defaultKeyboardLayout.vue";
import defaultKeyboardOption from "@/components/keyboardLayout/defaultKeyboardOption.vue";

import { ref } from "vue";
const test = ref([
  {
    id: 1,
    name: "a",
  },
  {
    id: 1,
    name: "a",
  },
  {
    id: 1,
    name: "a",
  },
]);
</script>

<style>
.choosing_region_block {
  width: 100%;
  height: 100%;
  top: 0;
  background: #ffffff;
  position: absolute;
  z-index: 100;
}
.choosing_region {
  padding: 30px;
}
.choosing_region_header_block {
  display: flex;
  /* background: #8d8d8d; */
}
.choosing_region_header_block_row {
  width: 100%;
}
.choosing_region_header_block_col {
  width: 50%;
}
.choosing_region_header_title_block {
  font-size: 24px;
  font-weight: 500;
  color: #2b2b2b;
}
.choosing_region_header_close_button {
  width: 18px;
  height: 18px;
}
.choosing_region_content_search_block {
  margin-top: 30px;
}
.choosing_region_content_territory_block {
  width: 100%;
  margin-top: 20px;
  /* background: #000; */
}
.choosing_region_content_city_list_block {
  min-width: 160px;
  width: 200px;
  height: 100%;
  border-right: 1px solid #e4e6e7;
  /* background: #000; */
}
.choosing_region_content_city_block_popular_list_block {
  margin-top: 20px;
}
.choosing_region_content_city_block_popular_list {
  flex-wrap: wrap;
}
.choosing_region_content_city_list {
  margin-right: 20px;
  /* background: #a8a8a8; */
}
.choosing_region_content_city_list_item {
  /* min-width: 160px; */
  padding: 16px 8px;
  margin-bottom: 20px;
}
.choosing_region_content_city_list_item_active {
  background: #f6f6f6;
}
.choosing_region_content_city_block_popular {
  margin-left: 40px;
}
.choosing_region_content_city_block_info {
  width: 100%;
}
.choosing_region_content_city_block_popular_title_block {
  font-size: 1.4em;
  color: #2b2b2b;
  font-weight: 500;
}
.choosing_region_content_city_block_popular_list_item_block {
  margin-right: 30px;
}
.choosing_region_content_city_block_popular_list_item {
  text-decoration: none;
  color: #48538b;
}
.choosing_region_content_city_block_popular_keyboard_block {
  margin-top: 30px;
}
</style>