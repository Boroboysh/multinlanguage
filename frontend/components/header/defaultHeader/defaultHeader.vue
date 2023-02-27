<template>
  <header class="w-100">
    <div class="header_content_block container-xl">
      <div class="header_menu_block d-flex w-100">
        <div class="header_logo_block">
          <img class="header_logo_white" src="@/assets/images/logo-pec-eng.png" alt="">
          <img class="header_logo_blue" src="@/assets/images/logo-pec-eng-blue.svg" alt="">
        </div>
        <div class="header_menu_block d-flex align-content-center justify-content-end bg-red-500">
          <div @click="updateStatusMenu(true)" class="header_menu_burger_block">
            <img src="@/assets/images/default_menu_icons.svg" alt="">
          </div>
          <div class="header_menu_group_block" :class="{'header_menu_group_active': menuStatus}">
            <div class="header_menu_block_link">
              <a class="header_menu_link" href="#">
                <div class="header_menu_icons_block">
                  <img src="@/assets/images/default_arrow_icon.png" alt="" class="header_menu_icons">
                </div>
                Астана
                <div class="header_menu_icons_block">
                  <img src="@/assets/images/arrow_done.svg" alt="" class="header_menu_icons header_menu_icons_arrow_done">
                </div>
              </a>
            </div>
            <div class="header_menu_block_link">
              <a class="header_menu_link" href="#">
                <div class="header_menu_icons_block">
                  <img src="@/assets/images/flag.png" alt="" class="header_menu_icons header_menu_icons_flug">
                </div>
                РУС
                <div class="header_menu_icons_block">
                  <img src="@/assets/images/arrow_done.svg" alt="" class="header_menu_icons header_menu_icons_arrow_done">
                </div>
              </a>
            </div>
            <div class="header_menu_block_link">
              <a class="header_menu_link" href="#">
                <div class="header_menu_icons_block">
                  <img src="@/assets/images/support_icons.png" alt="" class="header_menu_icons">
                </div>
                Поддержка
              </a>
            </div>
            <div class="header_menu_block_link">
              <a class="header_menu_link header_menu_link_telephone" href="#">
                + 7 (7172) 644-644
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script setup>
import { ref, onMounted } from 'vue';

let menuStatus = ref(false);

const updateStatusMenu = (status) => {
  menuStatus.value = status;
  // getBody()
}

// const scrollStatus = onMounted((status) => {
//   const body = document.querySelector('body');
// })

const getBody = (status) => {
  onMounted(() => {
    const body = document.querySelector('body');
    return body
  })
}

updateStatusMenu(false)
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
  color: #2B2B2B;
  font-size: 14px;
}

.header_menu_icons_block {
  margin: 0px 10px;
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
  color: #2B2B2B;
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
  border-top: 1px solid #E4E6E7;

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
  width: 100px;
  margin-right: 24px;
  color: #E4003C;
}

.header_content_advantages_number_icons {
  font-size: 30px;
}

.header_content_advantages_number {
  font-size: 48px;
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
@media (max-width: 1400px) {
  .header_content_info_preview>img {
    width: 100%;
  }
}

@media(max-width: 1000px) {
  .header_content_info_preview>img {
    width: 464px;
  }
}

@media(max-width:912px) {
  /* .header_content_info_preview img {
    width: 100%;
    background-size: cover;
  } */
  /* .header_menu_burger_block {
    display: block;
  } */
  html, body {
    overflow-x: hidden;
    position: relative;
  }
  .header_logo_block > img {
    width: 80px;
  }
  .header_content_block {
    height: 50px;
    background: #252069;
    color: #E4003C;
  }
  .header_menu_group_block {
    background: #a1a1a1;
    display: block;
    position: absolute;
    top: 0;
    left: 100%;
    width: 100%;
    height: 100%;
    z-index: 1;
  }
  .header_menu_block_link {
    height: auto;
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
}


</style>