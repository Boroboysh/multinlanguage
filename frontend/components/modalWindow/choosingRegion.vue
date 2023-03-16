<template>
  <div class="choosing_region_block">
    <div class="choosing_region">
      <div
        class="choosing_region_header_block choosing_region_header_block_row"
      >
        <div
          class="choosing_region_header_title_block d-flex align-items-start choosing_region_header_block_col"
        >
          <span class="choosing_region_header_title">Выбор региона </span>
        </div>
        <div
          @click="emitActions({ actionName: 'closeModal', value: true })"
          class="choosing_region_header_close_button_block d-flex align-items-center justify-content-end choosing_region_header_block_col"
        >
          <img
            src="@/assets/images/icons/arrow_done.svg"
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
                  v-for="(country, countryIndex) in list"
                  @click="updateCurrentCountry(country)"
                  :key="countryIndex"
                  :class="{
                    choosing_region_content_city_list_item_active:
                      country.id === currentCountry.id,
                  }"
                  class="choosing_region_content_city_list_item"
                >
                  {{ country.country }}
                </div>
                <div class="choosing_region_content_city_list_item"></div>
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
                      v-for="(country, countryIndex) in getSortPopularCites(
                        currentCountry.territoryList
                      )"
                      :key="countryIndex"
                      class="choosing_region_content_city_block_popular_list_item_block"
                    >
                      <a
                        href="#"
                        @click="updateCurrentCity(country)"
                        class="choosing_region_content_city_block_popular_list_item"
                        >{{ country.name }}</a
                      >
                    </div>
                  </div>
                </div>
                <div
                  class="choosing_region_content_city_block_popular_keyboard_block"
                >
                  <!-- todo refactor !!! -->
                  <default-keyboard-layout @result="changeLetter" checkAction="default" class="d-flex">
                    <div
                      class="choosing_region_content_city_block_popular_keyboard_button_block"
                    ></div>
                    <default-keyboard-option
                      v-for="(item, index) in letters"
                      :key="index"
                      :value="item"
                    >
                      <div
                        :class="`choosing_region_content_city_block_popular_keyboard_button ${item.selected ? 'choosing_region_content_city_block_popular_keyboard_button_selected' : ''}`"
                      >
                        {{ item.name }}
                      </div>
                    </default-keyboard-option>
                  </default-keyboard-layout>
                </div>
                <div class="choosing_region_content_city_all_list_block">
                  <div class="row">
                    <div class="col-6">
                      <div
                        class="choosing_region_content_city_all_list_item"
                      ></div>
                    </div>
                    <div class="col-6"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="result_city_block">
      <div class="row">
        <div class="col-6"></div>
        <div class="col-6"></div>
      </div>
    </div>
  </div>
</template>

<script setup>
import defaultInput from "@/components/input/defaultInput.vue";
import defaultKeyboardLayout from "@/components/keyboardLayout/defaultKeyboardLayout.vue";
import defaultKeyboardOption from "@/components/keyboardLayout/defaultKeyboardOption.vue";
import { ref, onMounted } from "vue";
import { useCountry } from "~~/stores/country";
import { getCountrySearch } from '@/api/getCountry/getCountry'

const alphabet = ['А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Э', 'Ю', 'Я'];

const letters = ref(alphabet.reduce((acc, item, currentIndex)=>{
  acc = [...acc, {
    id: currentIndex,
    name: item,
    selected: false,
  }]
  return acc;
},[]));
const selectedLetter = ref();

const changeLetter = (value) => {
  selectedLetter.value = value;

  letters.value = letters.value.map((item) => {
    item.selected = false;
    if (item.name === value.name) {
      console.log(item);
      item.selected = true;
    }
    return item;
  });
}

const props = defineProps({
  list: {
    type: Array,
    default: null,
  },
});
const emits = defineEmits(["closeButton"]);

let coutryStores = useCountry();

let currentCountry = ref(coutryStores.countryList[0]);

const updateCurrentCountry = (country) => {
  currentCountry.value = country;
};
const updateCurrentCity = (city) => {
  coutryStores.changeCity(city);
};


const getSortPopularCites = (list) => {
  return list.sort(
    (currentItem, nextItem) => currentItem.rating + nextItem.rating
  );
};

getCountrySearch("аст")
const emitActions = (action) => {
  emits("closeButton", action);
};

onMounted(() => {
  currentCountry = list[0];
});
</script>

<style>
.choosing_region_block {
    background: #fff;
    height: 602px;
    position: absolute;
    top: 2rem;
    width: 867px;
    z-index: 10000;
    left: 50%;
    transform: translate(-50%, 0);
    box-shadow: 0 0 0 50vmax rgba(0,0,0,.5);
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
  white-space: nowrap;
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
}
.choosing_region_content_city_list_block {
  min-width: 160px;
  width: 200px;
  height: 100%;
  border-right: 1px solid #e4e6e7;
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
  padding: 8px 16px ;
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
.choosing_region_content_city_block_popular_keyboard_button {
  padding: 4px 8px;
  margin-right: 4px;
  background: #e4e6e7;
  border-radius: 3px;
  cursor: pointer;
  margin-bottom: 12px;
}

.choosing_region_content_city_block_popular_keyboard_button_selected {
  background: #48538b;
  color: white;
}
.choosing_region_content_city_block_info {
  overflow-y: scroll;
}
.choosing_region_content_city_block_info::-webkit-scrollbar-thumb {
  background-color: #aaaaaa;
  border-radius: 3px;
  border: var(--scrollbarBorder);
}
.choosing_region_content_city_block_info::-webkit-scrollbar {
  width: 12px; /* ширина scrollbar */
}
.choosing_region_content_city_block_info::-webkit-scrollbar-track {
  background: #e4e6e7; /* цвет дорожки */
}

.choosing_region_content_city_block_info {
  overflow-y: hidden;
}

@media (max-width: 768px) {
  .default_keyboard_layout_block {
    display: none !important;
  }
  .choosing_region_content_city_block_popular_list_item_block {
    margin-top: 16px;
  }
  .choosing_region_content_city_block_popular_title_block {
    font-size: 20px;
  }
  .choosing_region_content_city_block_popular_list {
    display: block !important;
  }
}
</style>