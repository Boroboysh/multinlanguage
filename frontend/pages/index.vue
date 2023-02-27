<template>
  <div class="home-view">
    <default-header />
    <!-- <header class="w-100">
      <div class="header_content_block container-xl">
        <div class="header_menu_block d-flex w-100">
          <div class="header_logo_block">
            <img src="@/assets/images/logo-pec-eng.png" alt="">
          </div>
          <div class="header_menu_block d-flex align-items-center justify-content-end bg-red-500">
            <div class="header_menu_burger_block">
              Закрыть
            </div>
            <div class="header_menu_group_block">
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
                  <img src="@/assets/images/Vector(3).png" alt="" class="header_menu_icons">
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
                  <img src="@/assets/images/Vector(3).png" alt="" class="header_menu_icons">
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
    </header> -->
    <div class="header_content_info container-xl">
      <div class="header_content_info_row">
        <div class="header_content_info_col d-flex justify-content-start header_content_info_preview p-0">
          <img src="@/assets/images/preview_header.png" alt="">
        </div>
        <div class="header_content_info_col header_content_info_forms">
          <h2 class="header_content_info_forms_title">Отследить</h2>
          <default-input placeholder="Поиск по коду груза" class="header_content_info_forms" />
          <div class="header_content_info_calculate_block w-100 d-flex align-items-start flex-column">
            <h2 class="header_content_info_forms_title">Рассчитать</h2>
            <div class="header_content_info_calculate_forms_block w-100 d-flex justify-content-between">
              <default-input class="header_content_info_calculate_form_input_size" placeholder="Откуда" :title="true" />
              <img class="header_content_info_calculate_form_icons" src="@/assets/images/arrow_double.svg" alt="">
              <default-input class="header_content_info_calculate_form_input_size" placeholder="Куда" :title="true" />
            </div>
            <default-button class="header_content_info_calculate_button" size="large">
              Рассчитать стоимость
            </default-button>
            <div class="header_content_info_calculate_result w-100 d-flex justify-content-center justify-content- justify-content-xxl-center">
              <img class="header_content_info_calculate_result_icons" src="@/assets/images/arrow_crocked.svg" alt="">
              <span class="header_content_info_calculate_result_text">
                От 2994 тенге, примерный срок
                1—3 дня
              </span>
            </div>
          </div>
        </div>
        <div class="header_content_advantages_block">
          <div class="row">
            <div class="col-12 col-xl-4 col-md-4 header_content_advantages d-flex align-items-center justify-content-start">
              <div class="header_content_advantages_info_block">
                <div class="header_content_advantages_number_block">
                  <span class="header_content_advantages_number">20</span>
                  <div class="header_content_advantages_number_icons">+</div>
                </div>
                <div class="header_content_advantages_text_block">
                  <p class="header_content_advantages_text">
                    Более 20 лет опыта грузовых перевозок
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-4 col-12 header_content_advantages d-flex align-items-center justify-content-start">
              <div class="header_content_advantages_info_block">
                <div class="header_content_advantages_number_block">
                  <span class="header_content_advantages_number">20</span>
                  <div class="header_content_advantages_number_icons">+</div>
                </div>
                <div class="header_content_advantages_text_block">
                  <p class="header_content_advantages_text">
                    Более 20 лет опыта грузовых перевозок
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-4 header_content_advantages d-flex align-items-center justify-content-start">
              <div class="header_content_advantages_info_block">
                <div class="header_content_advantages_number_block">
                  <span class="header_content_advantages_number">20</span>
                  <div class="header_content_advantages_number_icons">+</div>
                </div>
                <div class="header_content_advantages_text_block">
                  <p class="header_content_advantages_text">
                    Более 20 лет опыта грузовых перевозок
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="about_block">
      <div class="about_content_block">
        <div class="about_block_content_title_block d-flex">
          <div class="about_block_content_title_linear" />
          <div class="about_block_content_title_block container">
            <span class="about_block_content_title">
              Перевозки в Казахстан
            </span>
          </div>
        </div>
        <div class="about_content_block_info container-xl">
          <div class="about_content_info">
            <span class="about_content_title">
            ПЭК: GLOBAL предлагает услуги авто- и авиаперевозок из России в Казахстан и в обратном направлении.
          </span>
          <div class="about_content_text">
            ПЭК: GLOBAL предлагает услуги авто- и авиаперевозок из России в Казахстан и в обратном направлении. Отправить
            груз в Казахстан можно из всех городов присутствия ПЭК в России, самостоятельно доставив их в отделение или
            сделав заказ адресного забора
          </div>
          <div class="about_content_text">
            ПЭК: GLOBAL предлагает услуги авто- и авиаперевозок из России в Казахстан и в обратном направлении. Отправить
            груз в Казахстан можно из всех городов присутствия ПЭК в России, самостоятельно доставив их в отделение или
            сделав заказ адресного забора
          </div>
          <div class="about_content_block_info_adress_list_block">
            <span class="about_content_title">
              Отделения ПЭК в Казахстане
            </span>
            <div class="about_content_block_info_adress_list_item d-flex align-items-center">
              <div class="about_content_block_info_adress_linear"></div>
              <span class="about_content_block_info_adress_text">
                Астана, ул. Жанажол, д. 19. Тел.: + 7 (7172) 644-644
              </span>
            </div>
            <div class="about_content_block_info_adress_list_item d-flex align-items-center">
              <div class="about_content_block_info_adress_linear"></div>
              <span class="about_content_block_info_adress_text">
                Астана, ул. Жанажол, д. 19. Тел.: + 7 (7172) 644-644
              </span>
            </div>
            <div class="about_content_block_info_adress_list_item d-flex align-items-center">
              <div class="about_content_block_info_adress_linear"></div>
              <span class="about_content_block_info_adress_text">
                Астана, ул. Жанажол, д. 19. Тел.: + 7 (7172) 644-644
              </span>
            </div>
          </div>
          <div class="about_content_text">
            ПЭК: GLOBAL предлагает услуги авто- и авиаперевозок из России в Казахстан и в обратном направлении. Отправить
            груз в Казахстан можно из всех городов присутствия ПЭК в России, самостоятельно доставив их в отделение или
            сделав заказ адресного забора
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import defaultButton from '@/components/button/defaultButton.vue'
import defaultInput from '~~/components/input/defaultInput.vue';
import defaultHeader from '@/components/header/defaultHeader/defaultHeader.vue';
import DefaultHeader from '../components/header/defaultHeader/defaultHeader.vue';

</script>
<style>
/* @import url('../assets/styles/bootstrap.min.css'); */
/* @import url('~~/assets/fonts/Roboto/stylesheet.css'); */


html,
body {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  /* font-family: 'Roboto'; */
  color: #2B2B2B;
}

/* header {
  width: 100%;
  height: 120px;
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
}

.header_content_block {
  width: 100%;
  height: 100%;
}

.header_content_info_calculate_result_text {
  margin-left: 10px;
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

.header_content_advantages_info_block {
  display: flex;
  border-top: 1px solid #E4E6E7;

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
} */

.about_block {
  background: #FAFAFA;
}

.about_content_block {
  padding: 80px 0;
}

.about_block_content_title {
  font-size: 50px;
  width: 100%;
  font-weight: 600;
}

.about_content_title {
  font-weight: bold;
  margin-top: 30px;
}

.about_block_content_title_linear {
  width: 50%;
  height: 2px;
  background: #2B2B2B;
  position: absolute;
}

/* .about_content_block {
  margin: 0 20px;
} */

.about_block_content_title_block {
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
  height: 100%;
  background: #FAFAFA;
}

.about_content_block_info {
  margin-top: 30px;
  font-size: 18px;
  display: flex;
  align-items: flex-start;
  flex-direction: column;
  text-align: left;
}

.about_block_content_title {
  background: #FAFAFA;
}

.about_content_text {
  margin-top: 30px;
}
.about_content_info {
  max-width: 850px;
}

.about_content_block_info_adress_list_block {
  margin-top: 35px;
}
.about_content_block_info_adress_list_item {
  margin-top: 25px;
  font-size: 16px;
  color: #2B2B2B;
}
.about_content_block_info_adress_linear {
  width: 20px;
  height: 1px;
  background: #AAAAAA;
}
.about_content_block_info_adress_text {
  margin-left: 8px;
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

@media(max-width: 1120px) {
  .header_logo_block {
    width: 30%;
  }
  .header_menu_block {
    width: 70%;
  }
  .header_content_info_calculate_form_input_size {
    width: 210px;
  }
}

@media(max-width: 1000px) {}

@media(max-width:912px) {
  /* .header_content_info_preview img {
    width: 100%;
    background-size: cover;
  } */
  .header_content_advantages_info_block {
    display: block;
  }
}

@media(max-width:780px) {
  .header_content_advantages_info_block {
    width: 100%;
  }
  .header_content_advantages_text {
    max-width: 320px;
  }
  .about_block_content_title {
    font-size: 30px;
  }
}


</style>