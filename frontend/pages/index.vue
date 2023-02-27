<template>
  <div class="home-view">
    <default-header />
    <div class="header_content_info container-xl">
      <div class="header_content_info row">
        <div class="row"></div>
        <div
          class="col header_content_info_col d-flex justify-content-center header_content_info_preview p-0"
        >
          <img src="@/assets/images/preview_header.png" alt="" />
        </div>
        <div class="col header_content_info_col header_content_info_forms">
          <h2 class="header_content_info_forms_title">Отследить</h2>
          <default-input
            placeholder="Поиск по коду груза"
            class="header_content_info_forms"
          />
          <div
            class="header_content_info_calculate_block w-100 d-block align-items-start flex-column"
          >
            <h2 class="header_content_info_forms_title">Рассчитать</h2>
            <div
              class="header_content_info_calculate_forms_block w-100 justify-content-between"
            >
              <default-input
                class="header_content_info_calculate_form_input_size"
                placeholder="Откуда"
                :title="true"
              />
              <img
                class="header_content_info_calculate_form_icons"
                src="@/assets/images/arrow_double.svg"
                alt=""
              />
              <default-input
                class="header_content_info_calculate_form_input_size"
                placeholder="Куда"
                :title="true"
              />
            </div>
            <default-button
              class="header_content_info_calculate_button"
              size="large"
            >
              Рассчитать стоимость
            </default-button>
            <div
              class="header_content_info_calculate_result w-100 d-flex justify-content-start justify-content-md-start justify-content-xl-center justify-content-xxl-end"
            >
              <img
                class="header_content_info_calculate_result_icons d-none d-sm-block d-md-block d-xl-block"
                src="@/assets/images/arrow_crocked.svg"
                alt=""
              />
              <span class="header_content_info_calculate_result_text">
                От 2994 тенге, примерный срок 1—3 дня
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="header_content_advantages_block">
        <div class="row">
          <div
            class="col-12 col-xl-4 col-md-4 header_content_advantages d-flex align-items-center justify-content-start"
          >
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
          <div
            class="col-xl-4 col-md-4 col-12 header_content_advantages d-flex align-items-center justify-content-start"
          >
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
          <div
            class="col-xl-4 col-md-4 header_content_advantages d-flex align-items-center justify-content-start"
          >
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
    <div class="about_block">
      <div class="about_content_block">
        <div class="align-items-center w-100 d-flex">
          <div class="about_block_content_title_linear" />
          <div class="about_block_content_title_block container">
            <span class="about_block_content_title">
              Перевозки в Казахстан
            </span>
          </div>
        </div>
        <div class="about_block_content_advertisement">
          <span class="about_block_content_title d-block">
            Привлекайте новых клиентов в ПЭК, получайте проценты от продаж!
          </span>
        </div>
        <div class="about_content_block_info container-xl">
          <div class="about_content_info">
            <span class="about_content_title">
              ПЭК: GLOBAL предлагает услуги авто- и авиаперевозок из России в
              Казахстан и в обратном направлении.
            </span>
            <div class="about_content_text">
              ПЭК: GLOBAL предлагает услуги авто- и авиаперевозок из России в
              Казахстан и в обратном направлении. Отправить груз в Казахстан
              можно из всех городов присутствия ПЭК в России, самостоятельно
              доставив их в отделение или сделав заказ адресного забора
            </div>
            <div class="about_content_text">
              ПЭК: GLOBAL предлагает услуги авто- и авиаперевозок из России в
              Казахстан и в обратном направлении. Отправить груз в Казахстан
              можно из всех городов присутствия ПЭК в России, самостоятельно
              доставив их в отделение или сделав заказ адресного забора
            </div>
            <div class="about_content_block_info_adress_list_block">
              <span class="about_content_title">
                Отделения ПЭК в Казахстане
              </span>
              <div
                class="about_content_block_info_adress_list_item d-flex align-items-center"
              >
                <div class="about_content_block_info_adress_linear"></div>
                <span class="about_content_block_info_adress_text">
                  Астана, ул. Жанажол, д. 19. Тел.: + 7 (7172) 644-644
                </span>
              </div>
              <div
                class="about_content_block_info_adress_list_item d-flex align-items-center"
              >
                <div class="about_content_block_info_adress_linear"></div>
                <span class="about_content_block_info_adress_text">
                  Астана, ул. Жанажол, д. 19. Тел.: + 7 (7172) 644-644
                </span>
              </div>
              <div
                class="about_content_block_info_adress_list_item d-flex align-items-center"
              >
                <div class="about_content_block_info_adress_linear"></div>
                <span class="about_content_block_info_adress_text">
                  Астана, ул. Жанажол, д. 19. Тел.: + 7 (7172) 644-644
                </span>
              </div>
            </div>
            <div class="about_content_text">
              ПЭК: GLOBAL предлагает услуги авто- и авиаперевозок из России в
              Казахстан и в обратном направлении. Отправить груз в Казахстан
              можно из всех городов присутствия ПЭК в России, самостоятельно
              доставив их в отделение или сделав заказ адресного забора
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="map_block">
      <div class="map_block_content">
        <div class="about_block_content_title_blockposition-relative d-flex">
          <div class="map_block_linear about_block_content_title_linear" />
          <div class="about_block_content_title_block container">
            <span class="r about_block_content_title">
              Куда компания ПЭК доставляет грузы?
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import defaultButton from "@/components/button/defaultButton.vue";
import defaultInput from "~~/components/input/defaultInput.vue";
import defaultHeader from "@/components/header/defaultHeader/defaultHeader.vue";
import DefaultHeader from "../components/header/defaultHeader/defaultHeader.vue";
</script>
<style>
html,
body {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  font-family: 'Roboto';
  color: #2b2b2b;
}
.header_content_info_calculate_forms_block {
  display: flex;
}
.header_content_advantages_block {
  margin-top: 35px;
  margin-bottom: 120px;
}

.header_content_advantages_info_block {
  display: flex;
  border-top: 1px solid #e4e6e7;
}

.header_content_advantages_linear {
  width: 50%;
  height: 1px;
}

.header_content_advantages_number_block {
  position: relative;
  font-size: 48px;
  width: 80px;
  margin-right: 24px;
  color: #e4003c;
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
  height: 100%;
  margin: 0;
  display: flex;
  align-items: flex-end;
}

.about_block {
  background: #fafafa;
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
  background: #2b2b2b;
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
  background: #fafafa;
}
.default_content_title_block {
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
  height: 100%;
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
  background: #fafafa;
}

.about_content_text {
  margin-top: 30px;
}
.about_content_info {
  max-width: 850px;
}
.about_block_content_advertisement {
  font-weight: bold;
  display: none;
  font-size: 24px;
  border-left: 4px solid black;
  padding: 12px;
}
.about_content_block_info_adress_list_block {
  margin-top: 35px;
}
.about_content_block_info_adress_list_item {
  margin-top: 25px;
  font-size: 16px;
  color: #2b2b2b;
}
.about_content_block_info_adress_linear {
  width: 20px;
  height: 1px;
  background: #aaaaaa;
}
.about_content_block_info_adress_text {
  margin-left: 8px;
}
.map_block {
  width: 100%;
}
.map_block_title {
  font-size: 48px;
}
.map_block_linear {
  top: 25px;
}
/* .map_block_content_title {
  
} */
@media (max-width: 1400px) {
  .header_content_info_preview > img {
    width: 100%;
    min-width: 320px;
  }
}

@media (max-width: 1000px) {
  .header_content_info_preview > img {
    width: 720px;
  }
}

@media (max-width: 1120px) {
  .header_logo_block {
    width: 30%;
  }
  .header_menu_block {
    width: 70%;
  }
  .header_content_info_calculate_form_input_size {
    min-width: 210px;
  }
}

@media (max-width: 1000px) {
  .header_content_info_calculate_form_input_size {
    width: 100%;
  }
  .header_content_info_calculate_form_icons {
    margin: 15px;
  }
  /* .header_content_info_calculate_block {
    margin-top: 50px;
  } */
}

@media (max-width: 912px) {
  .header_content_advantages_info_block {
    display: block;
  }
  .header_content_info_calculate_block {
    margin-top: 50px;
  }
}

@media (max-width: 850px) {
}

@media (max-width: 780px) {
  .header_content_advantages_info_block {
    width: 100%;
  }
  .header_content_advantages_text {
    max-width: 320px;
  }
  .about_block_content_title {
    font-size: 20px;
  }
}
@media (max-width: 510px) {
  .header_content_info_calculate_form_input_size {
    min-width: auto;
  }
  .header_content_info_calculate_forms_block {
    display: block;
  }
  .header_content_info_calculate_result_text {
    margin: 0;
  }
  .header_content_info_calculate_form_icons {
    margin-left: 0;
  }
  .header_content_advantages_block {
    margin-bottom: 60px;
  }
  .about_block_content_title_block {
    display: none !important;
  }
  .about_block_content_advertisement {
    display: block;
  }
}
</style>