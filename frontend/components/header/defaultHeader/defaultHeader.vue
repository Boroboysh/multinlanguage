<template>
  <header class="w-100">
    <div class="header_content_block w-100 h-100 container-xl">
      <div class="header_menu_block d-flex w-100">
        <div class="header_logo_block">
          <img
            class="header_logo_white"
            :src="env.host + getLogoType('mobile').path"
            alt=""
          />
          <img
            class="header_logo_blue"
            :src="env.host + getLogoType('desktop').path"
            alt=""
          />
        </div>
        <div
          class="header_menu_block d-flex align-content-center justify-content-end bg-red-500"
        >
          <div @click="openMenu()" class="header_menu_burger_block">
            <img src="@/assets/images/default_menu_icons.svg" alt="" />
          </div>
          <div
            class="header_menu_group_block"
            :class="{ header_menu_group_active: menuStatus }"
          >
            <div class="header_menu_mobile_block-row container-xl">
              <div
                class="header_menu_mobile_row header_menu_mobile_row container-xl"
              >
                <div class="header_menu_mobile_logo_block w-50">
                  <img
                    :src="env.host + getLogoType('mobile').path"
                    alt=""
                    class="header_menu_mobile_logo"
                  />
                </div>
                <div class="header_menu_close_button_block">
                  <div class="header_menu_close_button">
                    <div
                      @click="closeMenu()"
                      href="#"
                      class="header_menu_close_button"
                    >
                      <img
                        class="header_menu_close_button_image"
                        src="@/assets/images/icons/arrow_done.svg"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
              <default-input
                placeholder="Поиск кода по грузу"
                class="header_content_info_forms"
              >
                <template #container-right>
                  <img src="@/assets/images/search_icon.png" alt="" />
                </template>
              </default-input>
            </div>
            <!-- <default-input
              placeholder="wgagawgaw"
              class="header_content_info_forms"
            /> -->
            <div class="header_menu_block_link">
              <a
                @click="
                  $emit('actionName', { actionName: 'openModal', value: true })
                "
                class="header_menu_link"
                href="#"
              >
                <div class="header_menu_icons_block">
                  <img
                    src="@/assets/images/default_arrow_icon.png"
                    alt=""
                    class="header_menu_icons"
                  />
                </div>
                Астана
                <div class="header_menu_icons_block">
                  <img
                    src="@/assets/images/arrow_done.svg"
                    alt=""
                    class="header_menu_icons header_menu_icons_arrow_done"
                  />
                </div>
              </a>
            </div>
            <div class="header_menu_block_link_mobile header_menu_block_link container-xl">
              <div class="header_menu_block_lang_title">Выберите язык</div>
              <div class="header_menu_mobile_block_lang">
                <div
                  v-for="(lang, indexLang) in menu?.languages"
                  :item="lang"
                  @click="updateLang(lang)"
                  :key="indexLang"
                  class="header_menu_block_lang_item"
                >
                  <img
                    :src="env.host + lang.icon"
                    alt=""
                    class="header_menu_block_lang_item_image"
                  />
                  {{ lang.name }}
                </div>
              </div>
            </div>
            <div class="header_menu_block_link header_menu_block_lang">
              <transparent-select @return-option="(lang) => updateLang(lang)">
                <template #title>
                  <div class="default_drowndown_title d-flex">
                    <div class="header_menu_icons_block">
                      <img
                        :src="env.host + activeLang.icon"
                        alt=""
                        class="header_menu_icons header_menu_icons_flug"
                      />
                    </div>
                    {{ activeLang.name }}
                    <div class="header_menu_icons_block">
                      <img
                        src="@/assets/images/arrow_done.svg"
                        alt=""
                        class="header_menu_icons header_menu_icons_arrow_done"
                      />
                    </div>
                  </div>
                </template>
                <transparent-option
                  v-for="(lang, indexLang) in menu?.languages"
                  :item="lang"
                  :key="indexLang"
                >
                  <div class="default_drowndown_item_block d-flex">
                    <div
                      class="default_drowndown_content_item_lang_image_block"
                    >
                      <img
                        class="header_menu_icons_block"
                        :src="env.host + lang.icon"
                        alt=""
                      />
                    </div>
                    <span class="default_drowndown_content_item_title">
                      {{ lang.name }}
                    </span>
                  </div>
                </transparent-option>
              </transparent-select>
            </div>
            <div class="header_menu_block_link">
              <a class="header_menu_link" href="#">
                <div class="header_menu_icons_block">
                  <img
                    src="@/assets/images/support_icons.png"
                    alt=""
                    class="header_menu_icons"
                  />
                </div>
                {{ menu?.supportText }}
              </a>
            </div>
            <div class="overflow header_menu_block_link">
              <a
                class="header_menu_link header_menu_link_telephone"
                :href="'tel:' + menu?.tel_number"
              >
                {{ menu?.tel_number }}
              </a>
            </div>
          </div>
        </div>
        <!-- {{ activeLang }} -->
      </div>
    </div>
  </header>
</template>

<script setup>
import { ref, onMounted } from "vue";
import env from "~~/api/env/env";
import transparentSelect from "~~/components/select/transparentSelect/transparentSelect.vue";
import transparentOption from "~~/components/select/transparentSelect/transparentOption.vue";
import defaultInput from "~~/components/input/defaultInput.vue";
import { useContentPages } from "~~/stores/homeStores";
const props = defineProps({
  menu: {
    type: Object,
  },
});
const homePageContentStores = useContentPages();
// homePageContentStores.getCurrentLang
let menuStatus = ref(false);
let isActive = ref(false);
let activeLang = ref(homePageContentStores.getActiveLang[0]);
const emit = defineEmits(["updateSelected", "actionName"]);

const updateStatusMenu = (status) => {
  menuStatus.value = status;
};

const openMenu = () => {
  updateStatusMenu(true);
  getBody().style.overflowY = "hidden";
};

const closeMenu = () => {
  updateStatusMenu(false);
  getBody().style.overflowY = null;
};

const updateLang = (lang) => {
  activeLang.value = lang;
  homePageContentStores.updateCurrentLang(lang.code);
  emit("updateSelected", lang.code);
  updateStatusMenu(false)
};

const emitActions = (actionName) => {
  emit("actionName", actionName);
};

const getLogoType = (type) => {
  return props.menu.logo.find((logo) => logo.type === type);
};

const getBody = () => {
  const body = document.querySelector("body");
  // body.style.overflowY = 'hidden';
  return body;
};
</script>

<style>
header {
  width: 100%;
  height: 70px;
  /* background: #929292; */
  /* background: #000; */
}

.header_logo_block {
  width: 40%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: flex-start;
}

.header_menu_block {
  width: 60%;
  height: 100%;
  /* background: #000; */
}

.header_content_block {
  width: 100%;
  height: 100%;
}

.header_content_info_calculate_result_text {
  margin-left: 10px;
}
.header_logo_blue {
  display: none;
}
.header_menu_mobile_row {
  display: none;
}
.header_menu_block_link {
  display: flex;
  align-items: center;
  height: 100%;
}

.header_menu_block_link:not(:last-child) {
  margin-right: 40px;
}

.header_menu_link {
  display: flex;
  text-decoration: none;
  color: #2b2b2b;
  font-size: 14px;
}

.header_menu_icons_block {
  margin: 0px 10px;
}

.header_menu_mobile_block-row {
  display: none;
}

.header_menu_icons {
  width: 12px;
  background-size: contain;
}

.header_menu_icons_flug {
  width: 24px;
  height: 24px;
}

.header_menu_link_telephone {
  font-weight: bold;
  font-size: 20px;
}

.header_menu_icons_arrow_done {
  width: 16px;
}

.header_content_info_preview img {
  /* width: 100%; */
  width: 740px;
  object-fit: contain;
}

.header_content_info_forms {
  margin-top: 16px;
}

.header_content_info_forms_title {
  font-weight: 500;
  text-align: left;
  color: #2b2b2b;
  font-size: 24px;
}

.header_content_info_calculate_block {
  margin-top: 80px;
}

.header_content_info_calculate_form_input_size {
  width: 240px;
}

.header_content_info_calculate_forms_block {
  margin-top: 16px;
}

.header_content_info_calculate_button {
  margin-top: 25px;
}

.header_content_info_calculate_result {
  margin-top: 16px;
  margin-left: 10px;
}

.header_content_advantages_block {
  margin-top: 35px;
  margin-bottom: 120px;
}
.header_menu_burger_block {
  display: none;
}

.header_content_advantages {
  /* border-top: 1px solid #E4E6E7; */
}

.header_content_advantages_info_block {
  display: flex;
  border-top: 1px solid #e4e6e7;
}

.header_menu_group_block {
  display: flex;
  justify-content: center;
}
.header_content_advantages_linear {
  width: 50%;
  height: 1px;
}

.header_content_advantages_number_block {
  position: relative;
  font-size: 48px;
  padding-right: 30px;
  margin-right: 24px;
  color: #e4003c;
}

.header_content_advantages_number_icons {
  font-size: 30px;
}

.header_content_advantages_number {
  font-size: 32px;
}

.header_content_advantages_number_icons {
  position: absolute;
  top: 0;
  right: 0;
  vertical-align: text-top;
}

.header_content_advantages_text {
  font-size: 18px;
  max-width: 200px;
}
.header_menu_group_active {
  left: 0 !important;
}
.default_drowndown_content {
  position: absolute;
  width: 100%;
  top: 100%;
  left: 0;
  z-index: 1000;
  background: #ffffff;
}
.default_drowndown_content_item {
  padding: 5px;
}
.default_drowndown_item_block {
  padding: 5px 0px;
}
.default_transparent_select_content_block {
  background: white;
}
.header_menu_close_button_block {
  display: none;
  width: 100%;
}
.header_menu_close_button_image {
  width: 100%;
}

.header_menu_mobile_block .header_menu_close_button {
  width: 20px;
  /* margin: 10px 10px 0px 0px; */
}
.header_menu_close_button {
  width: 20px;
}
.default_drowndown_title {
  cursor: pointer;
}
.default_drowndown_item_block {
  cursor: pointer;
}
.header_menu_block_link_mobile {
  display: none;
}
@media (max-width: 1400px) {
  .header_content_info_preview > img {
    width: 100%;
  }
}

@media (max-width: 1000px) {
  .header_content_info_preview > img {
    width: 464px;
  }
}

@media (max-width: 912px) {
  html,
  body {
    overflow-x: hidden;
    position: relative;
  }
  .header_logo_block > img {
    width: 80px;
  }
  .header_content_block {
    height: 50px;
    background: #252069;
  }
  .header_menu_block_link {
    margin: 20px;
  }
  .header_menu_group_block {
    background: #ffffff;
    display: block;
    position: absolute;
    top: 0;
    left: 100%;
    width: 100%;
    height: 100%;
    z-index: 1000;
  }
  .header_menu_block_link {
    height: auto;
  }
  .header_menu_close_button_block {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    height: 50px;
  }
  .header_logo_white {
    display: none;
  }
  .header_logo_blue {
    display: block;
  }
  .header_menu_burger_block {
    display: flex;
    /* align-items: center;
    justify-content: center; */
    /* vertical-align: middle; */
  }

  .header_menu_burger_block img {
    width: 24px;
  }
  .header_content_advantages_info_block {
    display: block;
  }
  .header_menu_mobile_logo_block {
    width: 50%;
    display: flex;
    align-items: center;
  }
  .header_menu_mobile_row {
    width: 100%;
    display: flex;
    justify-content: flex-start;
  }
  .header_menu_close_button_block {
    width: 50%;
  }
  .header_menu_mobile_logo {
    width: 80px;
  }
  .header_menu_mobile_block {
    display: block;
  }
  .header_menu_mobile_block-row {
    display: block;
  }
  .header_menu_mobile_block {
    display: flex;
  }
  .header_menu_block_link_mobile {
    display: block;
  }
  .header_menu_block_lang_title {
    font-size: 16px;
    border-bottom: 2px solid #e4e6e7;
  }
  .header_menu_block_lang_item {
    margin-top: 20px;
  }
  .header_menu_block_lang {
    display: none;
  }
  .header_menu_block_link {
    margin: 20px 0px 20px 10px;
  }
  .header_menu_icons_block {
    margin: 0px 10px 0px 0px;
  }
}
</style>