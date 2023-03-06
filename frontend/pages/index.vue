<template>
  <div class="home-view">
    <div class="header_content_block w-100">
      <default-header class="container-xl" />
    </div>
    <div class="header_content_info_content">
      <div class="header_content_info container-xl">
        <div class="header_content_info_row row">
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
            >
              <template #container-right>
                <img src="@/assets/images/search_icon.png" alt="" />
              </template>
            </default-input>
            <div
              class="header_content_info_calculate_block w-100 d-block align-items-start flex-column"
            >
              <h2 class="header_content_info_forms_title">
                Рассчитать и отправить груз
              </h2>
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
                class="header_content_info_calculate_result w-100 d-flex justify-content-start justify-content-sm-center justify-content-md-center justify-content-xl-end justify-content-xxl-end"
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
    </div>
    <div class="about_block">
      <div class="about_content_block">
        <div class="about_block_title align-items-center w-100 d-flex">
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
              Компания работает как с юридическими, так и с физическими лицам.
              По запросу мы готовы предоставить для юрлиц спецтехнику для
              погрузочно-разгрузочных работ, перевозку и возврат
              сопроводительных документов, предложить API-
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="map_block">
      <div class="map_block_content">
        <div class="map_block_title_block w-100 d-flex">
          <div class="map_block_content_title_block p-0">
            <div
              class="map_block_content_title_block_row container-xl align-items-center justify-content-center w-100"
            >
              <div
                class="map_block_content_title_block_col map_content_block_title position-relative"
              >
                <div
                  class="map_block_linear about_block_content_title_linear"
                />
                <p class="map_block_content_title">
                  Куда компания ПЭК доставляет грузы?
                </p>
              </div>
              <div
                class="map_block_content_title_block_col h-100 map_card_block"
              >
                <div class="map_block_content_card_block position-relative">
                  <div class="default_border_block map_block_border_block">
                    <div class="default_border default_border_top_left"></div>
                    <div class="default_border default_border_top_right"></div>
                    <div
                      class="default_border default_border_bottom_left"
                    ></div>
                    <div
                      class="default_border default_border_bottom_right"
                    ></div>
                  </div>
                  <div class="map_block_content_card">
                    Помогаем развивать бизнес наших клиентов, решая
                    логистические задачи
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <default-map />
      <div class="map_block_contact">
        <div class="map_contact_button_block">
          <default-button size="large" class="map_contact_button">
            Оставить заявку
          </default-button>
        </div>
        <div class="map_contact_info">
          <span class="map_contact_info_title">позвонить по номеру</span>
          <div class="map_contact_telephone_block">
            <span>+ 7 (7172) 644-644</span>
          </div>
        </div>
      </div>
    </div>
    <div class="advatages_block">
      <div class="advatages_block_title container-xl">
        <div class="advatnages_block_title_linear_block">
          <div class="advatages_title_linear"></div>
        </div>
        <div class="advantages_title_block container-xl">
          <p class="advantages_title">Премущество работы с компанией ПЭК</p>
        </div>
      </div>
    </div>
    <div class="advantages_block_card container-xl">
      <div class="row w-100">
        <div
          class="col-12 col-sm-6 col-md-6 col-xl-6 d-flex h-100 align-items-start justify-content-center advantages_block_card_item"
        >
          <div
            class="advantages_card_block position-relative default_card w-100"
          >
            <div class="default_border_block advantages_card_border_block">
              <div class="default_border default_border_top_left"></div>
              <div class="default_border default_border_top_right"></div>
              <div class="default_border default_border_bottom_left"></div>
              <div class="default_border default_border_bottom_right"></div>
            </div>
            <div class="advantages_card default-card">
              <div
                class="advantages_card_content_title_block d-flex align-items-center"
              >
                <div class="advantages_card_title_icon_block">
                  <img
                    src="@/assets/images/Shield.svg"
                    alt=""
                    class="advantages_card_title_icon"
                  />
                </div>
                <div class="advantages_content_card_title_block fw-bold">
                  <span class="advantages_content_card_title">
                    Надежность
                  </span>
                </div>
              </div>
              <div class="advantages_card_content">
                <div class="advantages_card_content_list">
                  <div
                    class="advantages_card_content_list_item d-flex align-items-center h-100"
                  >
                    <div class="advantages_card_content_list_item_linear"></div>
                    <div class="advantages_card_content_list_item_content">
                      <div
                        class="advantages_card_content_list_item_content_text"
                      >
                        Более 20 лет на рынке оборудования
                      </div>
                    </div>
                  </div>
                  <div
                    class="advantages_card_content_list_item d-flex align-items-center h-100"
                  >
                    <div class="advantages_card_content_list_item_linear"></div>
                    <div class="advantages_card_content_list_item_content">
                      <div
                        class="advantages_card_content_list_item_content_text"
                      >
                        Более 20 лет на рынке оборудования
                      </div>
                    </div>
                  </div>
                  <div
                    class="advantages_card_content_list_item d-flex align-items-center h-100"
                  >
                    <div class="advantages_card_content_list_item_linear"></div>
                    <div class="advantages_card_content_list_item_content">
                      <div
                        class="advantages_card_content_list_item_content_text"
                      >
                        Более 20 лет на рынке оборудования
                      </div>
                    </div>
                  </div>
                  <div
                    class="advantages_card_content_list_item d-flex align-items-center h-100"
                  >
                    <div class="advantages_card_content_list_item_linear"></div>
                    <div class="advantages_card_content_list_item_content">
                      <div
                        class="advantages_card_content_list_item_content_text"
                      >
                        Более 20 лет на рынке оборудования
                      </div>
                    </div>
                  </div>
                  <div
                    class="advantages_card_content_list_item d-flex align-items-center h-100"
                  >
                    <div class="advantages_card_content_list_item_linear"></div>
                    <div class="advantages_card_content_list_item_content">
                      <div
                        class="advantages_card_content_list_item_content_text"
                      >
                        Более 20 лет на рынке оборудования
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="col-12 col-sm-6 col-md-6 col-xl-6 d-flex h-100 align-items-start justify-content-center advantages_block_card_item"
        >
          <div
            class="advantages_card_block position-relative default_card w-100"
          >
            <div class="default_border_block advantages_card_border_block">
              <div class="default_border default_border_top_left"></div>
              <div class="default_border default_border_top_right"></div>
              <div class="default_border default_border_bottom_left"></div>
              <div class="default_border default_border_bottom_right"></div>
            </div>
            <div class="advantages_card default-card">
              <div
                class="advantages_card_content_title_block d-flex align-items-center"
              >
                <div class="advantages_card_title_icon_block">
                  <img
                    src="@/assets/images/accouting_icon.svg"
                    alt=""
                    class="advantages_card_title_icon"
                  />
                </div>
                <div class="advantages_content_card_title_block fw-bold">
                  <span class="advantages_content_card_title"> Выгода </span>
                </div>
              </div>
              <div class="advantages_card_content">
                <div class="advantages_card_content_list">
                  <div
                    class="advantages_card_content_list_item d-flex align-items-center h-100"
                  >
                    <div class="advantages_card_content_list_item_linear"></div>
                    <div class="advantages_card_content_list_item_content">
                      <div
                        class="advantages_card_content_list_item_content_text"
                      >
                        Более 20 лет на рынке оборудования
                      </div>
                    </div>
                  </div>
                  <div
                    class="advantages_card_content_list_item d-flex align-items-center h-100"
                  >
                    <div class="advantages_card_content_list_item_linear"></div>
                    <div class="advantages_card_content_list_item_content">
                      <div
                        class="advantages_card_content_list_item_content_text"
                      >
                        Более 20 лет на рынке оборудования
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="col-12 col-sm-6 col-md-6 col-xl-6 h-100 d-flex align-items-start justify-content-center advantages_block_card_item"
        >
          <div
            class="advantages_card_block position-relative default_card w-100"
          >
            <div class="default_border_block advantages_card_border_block">
              <div class="default_border default_border_top_left"></div>
              <div class="default_border default_border_top_right"></div>
              <div class="default_border default_border_bottom_left"></div>
              <div class="default_border default_border_bottom_right"></div>
            </div>
            <div class="advantages_card default-card">
              <div
                class="advantages_card_content_title_block d-flex align-items-center"
              >
                <div class="advantages_card_title_icon_block">
                  <img
                    src="@/assets/images/accouting_icon.svg"
                    alt=""
                    class="advantages_card_title_icon"
                  />
                </div>
                <div class="advantages_content_card_title_block fw-bold">
                  <span class="advantages_content_card_title">
                    Надежность
                  </span>
                </div>
              </div>
              <div class="advantages_card_content">
                <div class="advantages_card_content_list">
                  <div
                    class="advantages_card_content_list_item d-flex align-items-center h-100"
                  >
                    <div class="advantages_card_content_list_item_linear"></div>
                    <div class="advantages_card_content_list_item_content">
                      <div
                        class="advantages_card_content_list_item_content_text"
                      >
                        Более 20 лет на рынке оборудования
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="col-12 col-sm-6 col-md-6 col-xl-6 h-100 d-flex h-100 align-items-start justify-content-center advantages_block_card_item"
        >
          <div
            class="advantages_card_block position-relative default_card w-100"
          >
            <div class="default_border_block advantages_card_border_block">
              <div class="default_border default_border_top_left"></div>
              <div class="default_border default_border_top_right"></div>
              <div class="default_border default_border_bottom_left"></div>
              <div class="default_border default_border_bottom_right"></div>
            </div>
            <div class="advantages_card default-card">
              <div
                class="advantages_card_content_title_block d-flex align-items-center"
              >
                <div class="advantages_card_title_icon_block">
                  <img
                    src="@/assets/images/accouting_icon.svg"
                    alt=""
                    class="advantages_card_title_icon"
                  />
                </div>
                <div class="advantages_content_card_title_block fw-bold">
                  <span class="advantages_content_card_title">
                    Надежность
                  </span>
                </div>
              </div>
              <div class="advantages_card_content">
                <div class="advantages_card_content_list">
                  <div
                    class="advantages_card_content_list_item d-flex align-items-center h-100"
                  >
                    <div class="advantages_card_content_list_item_linear"></div>
                    <div class="advantages_card_content_list_item_content">
                      <div
                        class="advantages_card_content_list_item_content_text"
                      >
                        Более 20 лет на рынке оборудования
                      </div>
                    </div>
                  </div>
                  <div
                    class="advantages_card_content_list_item d-flex align-items-center h-100"
                  >
                    <div class="advantages_card_content_list_item_linear"></div>
                    <div class="advantages_card_content_list_item_content">
                      <div
                        class="advantages_card_content_list_item_content_text"
                      >
                        Более 20 лет на рынке оборудования
                      </div>
                    </div>
                  </div>
                  <div
                    class="advantages_card_content_list_item d-flex align-items-center h-100"
                  >
                    <div class="advantages_card_content_list_item_linear"></div>
                    <div class="advantages_card_content_list_item_content">
                      <div
                        class="advantages_card_content_list_item_content_text"
                      >
                        Более 20 лет на рынке оборудования
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="contact_test_row">
      <div class="contact_test_col-2">1</div>
      <div class="contact_test_col-4">2</div>
      <div class="contact_test_col-4">3</div>
    </div> -->
    <div class="contact_form_block">
      <div class="contact_form_question_mark_block container-xl">
        <div class="contact_form_question_mark">?</div>
      </div>
      <div class="contact_form w-100 container-xl">
        <div class="contact_form_title_block">
          <span class="contact_form_title"> Ещё остались вопросы? </span>
        </div>
        <div class="contact_form_title_info_block">
          <span class="contact_form_info_item contact_form_info_item_text">
            Оставьте заявку, мы с радостью с Вами свяжемся и на них ответим!
          </span>
        </div>
        <div class="contact_form_container">
          <div class="row">
            <div class="col-4 d-flex align-items-center justify-content-center">
              <div class="contact_form_item_block w-100">
                <default-input
                  class="contact_form_item contact_form_item_city"
                  placeholder="Город"
                  :title="true"
                />
              </div>
            </div>
            <div class="col-4 d-flex align-items-center justify-content-center">
              <div class="contact_form_item_block w-100">
                <default-input
                  class="contact_form_item contact_form_item_name"
                  placeholder="Ваше имя"
                  :title="true"
                />
              </div>
            </div>
            <div class="col-4 d-flex align-items-center justify-content-center">
              <div class="contact_form_item_block w-100">
                <default-input
                  class="contact_form_item contact_form_item_telephone"
                  placeholder="Город"
                  :title="true"
                />
              </div>
            </div>
            <div
              class="col-12 d-flex align-items-center justify-content-center"
            >
              <div class="contact_form_item_block w-100">
                <default-text-area placeholder="Сообщение" />
              </div>
            </div>
          </div>
        </div>
        <div
          class="contact_form_send_block container-xl d-flex align-items-center justify-content-center flex-column"
        >
          <div class="contact_form_send_personal_info_text">
            Отправляя свои данные через форму, вы соглашаетесь с условиями
            обработки
            <a href="#" class="contact_form_send_personal_info_link">
              персональных данных.
            </a>
          </div>
          <div class="contact_form_send_personal_info_button_block">
            <default-button
              size="large"
              color="grey"
              class="contact_form_send_personal_info_button"
            >
              Отправить заявку
            </default-button>
          </div>
        </div>
      </div>
    </div>
    <default-select placeholder="Выберите значение">
      <default-option
        v-for="(item, indexItem) in [
          { id: 1, name: 1 },
          { id: 2, name: 1 },
          { id: 3, name: 1 },
        ]"
        :key="indexItem"
        :item="item.name"
      >
        {{ item.name }}
      </default-option>
    </default-select>
    <search-select> </search-select>
    <choosing-region />
    <default-footer />
  </div>
</template>

<script setup>
import defaultButton from "@/components/button/defaultButton.vue";
import defaultInput from "~~/components/input/defaultInput.vue";
import defaultHeader from "@/components/header/defaultHeader/defaultHeader.vue";
import DefaultHeader from "@/components/header/defaultHeader/defaultHeader.vue";
import defaultMap from "@/components/map/defaultMap.vue";
import defaultTextArea from "@/components/textarea/defaultTextArea.vue";
import defaultSelect from "@/components/select/defaultSelect.vue";
import defaultOption from "~~/components/select/defaultOption.vue";
import searchSelect from "~~/components/select/searchSelect.vue";
import choosingRegion from "@/components/modalWindow/choosingRegion.vue";
import defaultFooter from "@/components/footer/defaultFooter.vue";
import getContentInfo from "@/api/contentInfo/getContentInfo";
// import { useAsyncData } from "async"
// import { useAsyncData } from "vueuse";
// getContentInfo("ru");
// useAsyncData("mountains", () => {
//   console.log("wfawfawfawafwafwfa");
// });
// const contentPage = await useAsyncData('fwafawfwa', async () => {
//   await getContentInfo('ru')
// })
// const test = await useAsyncData(
//   'mountains',
//   () => $fetch('https://api.nuxtjs.dev/mountains')
// )

const data = `{
    "header": {
        "logo": "images/f1f3047ee55929ea5096371b0e94d2c3.png",
        "supportText": "Поддержка",
        "tel_number": "+7(7172) 644-644",
        "languages": [
            {
                "id": 1,
                "name": "Русский",
                "icon": "images/baa540f7e3603f8baec3d4c083f4adba.png",
                "code": "ru"
            },
            {
                "id": 2,
                "name": "English",
                "icon": "images/f8ab12c358137ddab39e5b458aa4a8b7.png",
                "code": "en"
            },
            {
                "id": 3,
                "name": "Қазақ",
                "icon": "images/fedb9aa4a0db8eaf8f8bb5a9c2df8381.png",
                "code": "kk"
            }
        ]
    },
    "body": {
        "subheader": {
            "image": "images/f6d5321db64337172982b08130d95a99.png",
            "titles": [
                {
                    "content": "Отследить"
                },
                {
                    "content": "Рассчитать и отправить груз"
                }
            ],
            "fields": [
                {
                    "content": "Поиск по коду груза"
                },
                {
                    "content": "Откуда"
                },
                {
                    "content": "Куда"
                }
            ],
            "content": {
                "text": "От 2994 тенге, примерный срок 1—3 дня"
            },
            "list": [
                {
                    "icon": "images/461772eb14941d92512beb48d3d0c583.png",
                    "content": "Более 20 лет опыта грузовых перевозок"
                },
                {
                    "icon": "images/d7b01e8c08922b5410dfb8f53cae85fe.png",
                    "content": "Клиентов ежегодно доверяют нам доставку и хранение"
                },
                {
                    "icon": "images/aec5fd432535f1dddfcec977546c66fa.png",
                    "content": "Отделений в России и за рубежом"
                }
            ]
        },
        "textInfoBlock": {
            "title": "Перевозки в Казахстан",
            "subtitle": "Отделения ПЭК в Казахстане",
            "content": [
                {
                    "text": "ПЭК: GLOBAL предлагает услуги авто- и авиаперевозок из России в Казахстан и в обратном направлении."
                },
                {
                    "text": "Отправить груз в Казахстан можно из всех городов присутствия ПЭК в России, самостоятельно доставив их в отделение или сделав заказ адресного забора."
                },
                {
                    "text": "В Казахстане адресный забор и доставка грузов действуют по всей стране!"
                },
                {
                    "text": "Отделения ПЭК в Казахстане"
                },
                {
                    "text": "Компания работает как с юридическими, так и с физическими лицам. По запросу мы готовы предоставить для юрлиц спецтехнику для погрузочно-разгрузочных работ, перевозку и возврат сопроводительных документов, предложить API-интеграцию."
                }
            ],
            "list": [
                {
                    "content": "Астана, ул. Жанажол, д. 19. Тел.: + 7 (7172) 644-644"
                },
                {
                    "content": "Алматы, ул. Казыбаева, 3/2. Тел.: + 7 (727) 346-77-77"
                },
                {
                    "content": "Костанай, ул. Карбышева, д. 20А. Тел.: +7 (7142) 222-095"
                }
            ]
        },
        "mapInfoBlock": {
            "title": "Куда компания ПЭК доставляет грузы?",
            "content": [
                {
                    "text": "или позвонить по номеру"
                },
                {
                    "text": "+ 7 (7172) 644-644"
                }
            ],
            "buttons_text": {
                "content": "Оставить заявку"
            },
            "points": [
                {
                    "id": 7,
                    "name": "Астана",
                    "coordination": {
                        "x": 0.34,
                        "y": 0.52
                    }
                },
                {
                    "id": 8,
                    "name": "Алматы",
                    "coordination": {
                        "x": 0.42,
                        "y": 0.52
                    }
                },
                {
                    "id": 9,
                    "name": "Костанай",
                    "coordination": {
                        "x": 0.35,
                        "y": 0.42
                    }
                }
            ]
        },
        "listInfoBlock": {
            "title": "Преимущества работы с компанией ПЭК",
            "element": [
                {
                    "icon": "images/37230ec5236f9b335faab4fcb348bde2.png",
                    "title": "Надежность",
                    "list": [
                        {
                            "content": "Более 20 лет работы на рынке;"
                        },
                        {
                            "content": "Страхование груза;"
                        },
                        {
                            "content": "Дополнительная упаковка;"
                        },
                        {
                            "content": "Личный кабинет с фотоотчетом приема груза;"
                        },
                        {
                            "content": "Услуги ответственного хранения."
                        }
                    ]
                },
                {
                    "icon": "images/de1c4aee75152e88ec164e9d75c7615c.png",
                    "title": "Выгода",
                    "list": [
                        {
                            "content": "Гибкие тарифы;"
                        },
                        {
                            "content": "Возможность отсрочки платежа."
                        }
                    ]
                },
                {
                    "icon": "images/549575b0df9dfc438aae7778be49f638.png",
                    "title": "Сервис",
                    "list": [
                        {
                            "content": "Калькулятор расчета стоимости на сайте;"
                        },
                        {
                            "content": "Предварительное оформление заказа на сайте;"
                        },
                        {
                            "content": "Забор и доставка дверь-дверь;"
                        },
                        {
                            "content": "Онлайн-отслеживание грузов."
                        }
                    ]
                },
                {
                    "icon": "images/903d2b12c2b09d5022734ad5a6a154c0.png",
                    "title": "Комфорт",
                    "list": [
                        {
                            "content": "Управление выдачей;"
                        },
                        {
                            "content": "Возможность замены грузополучателя или грузоотправителя;"
                        },
                        {
                            "content": "Забор и доставка день в день, в выходные и праздники;"
                        },
                        {
                            "content": "Персональный менеджер."
                        }
                    ]
                }
            ]
        },
        "contactForm": {
            "title": "Ещё остались вопросы?",
            "subtitle": "Оставьте заявку, мы с радостью с Вами свяжемся и на них ответим!",
            "fields": {
                "city": "Город",
                "name": "Ваше имя",
                "tel_number": "Номер телефона",
                "message_placeholder": "Сообщение"
            },
            "buttonText": {
                "content": "Отправить заявку"
            },
            "textContent": [
                {
                    "key": "text",
                    "content": "Отправляя свои данные через форму, вы соглашаетесь с условиями обработки"
                },
                {
                    "key": "link",
                    "content": "персональных данных."
                }
            ]
        }
    },
    "footer": {
        "icon": "images/307ae9112e6f082a3508e7609ad5024c.png",
        "personal_data": "О защите персональных данных",
        "copyright": "© ООО «ПЭК»",
        "store_link_title": "Управляй доставкой в приложении",
        "store_links": [
            {
                "icon": "images/86783d740ffb3ff3c70417383bef1832.png",
                "link": "https://play.google.com/store/games?hl=ru&gl=US"
            }
        ]
    }
}`
const currentData = JSON.parse(data)
console.log(currentData)
</script>


<style>
html,
body {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  font-family: "Roboto";
  color: #2b2b2b;
}

.default_header_block {
  border-bottom: 1px solid #e4e6e7;
}

.header_content_info_calculate_forms_block {
  display: flex;
}

.header_content_info_content {
  margin-top: 50px;
}

.header_content_advantages_block {
  margin-top: 35px;
  margin-bottom: 120px;
}

.contact_test_row {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
}

.contact_test_col-2 {
  flex-basis: 20%;
}

.contact_test_col-4 {
  flex-basis: 40%;
}

.header_content_advantages_info_block {
  display: flex;
  border-top: 1px solid #e4e6e7;
}

.header_content_advantages_linear {
  width: 50%;
  height: 1px;
}

.header_content_info_forms_title {
}

.default_linear_title_block {
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
  height: 100%;
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
  padding: 104px 0;
}

.about_block_content_title {
  font-size: 50px;
  width: 100%;
  font-weight: 600;
}

.about_content_title {
  font-weight: bold;
  font-size: 20px;
  margin-top: 30px;
}

.about_block_content_title_linear {
  width: 50%;
  height: 1px;
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
  /* background: #fafafa; */
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
  margin-top: 24px;
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
  margin-top: 16px;
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

/* .default_map_block {
  margin-top: 30px;
} */
.map_block {
  margin-top: 105px;
  width: 100%;
}

.map_content_block_title {
  margin-bottom: 30px;
  background: white;
}

.map_block_title {
  font-size: 48px;
}

.map_block_border_block {
  top: -25px;
  left: -12px;
}

.map_block_linear {
  top: 20% !important;
  left: -50vw;
  width: 50vw;
}

.map_card_block {
  display: flex;
  align-items: center;
  justify-content: flex-end;
}

.map_block_content_card_block {
  max-width: 500px;
  min-height: 135px;
}

.map_block_content_title_block {
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
  height: 100%;
  /* background: #ffffff; */
}

.map_block_content_title {
  max-width: 700px;
  font-size: 48px;
  font-weight: 600;
  margin: 0;
  line-height: 60px;
}

.map_block_content_title_block_col {
  width: 50%;
}

.map_block_content_card {
  padding: 20px 20px 40px;
  font-size: 20px;
  height: 100%;
  background: #fafafa;
}

.map_block_content_title_block_row {
  display: flex;
  align-items: center;
  justify-content: center;
}

.map_card_block {
  display: flex;
  align-items: center;
  justify-content: center;
}

.map_block_linear {
}

.default_border_block {
  position: absolute;
  width: 100%;
  height: 100%;
}

.default_border {
  width: 40px;
  height: 40px;
  position: absolute;
  /* background: #59b1ff; */
}

.default_border_top_left {
  position: absolute;
  top: 0;
  left: 0;
  width: 40px;
  height: 40px;
  border-top: 1px solid #aaaaaa;
  border-left: 1px solid #aaaaaa;
}

.default_border_top_right {
  position: absolute;
  top: 0;
  right: 0;
  border-top: 1px solid #aaaaaa;
  border-right: 1px solid #aaaaaa;
}

.default_border_bottom_left {
  bottom: 0;
  left: 0;
  border-bottom: 1px solid #aaaaaa;
  border-left: 1px solid #aaaaaa;
}

.default_border_bottom_right {
  bottom: 0;
  right: 0;
  border-bottom: 1px solid #aaaaaa;
  border-right: 1px solid #aaaaaa;
}

.map_block_contact {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.map_contact_button_block {
  font-weight: 600;
  margin-right: 24px;
}

.map_contact_info {
  font-size: 24px;
  font-weight: 700;
}

.map_contact_info_title {
  font-size: 24px;
}

.map_contact_telephone_block {
  color: #48538b;
}

.advatages_block {
  margin-top: 185px;
}

.advantages_title_block {
  z-index: 10;
}

.advantages_title_block {
  background: white;
}

.advantages_title {
  max-width: 580px;
  font-size: 50px;
  z-index: 100;
  color: #2b2b2b;
  background: white;
  font-weight: bold;
}

.advatnages_block_title_linear_block {
  width: 100%;
  height: 10px;
}

.advatnages_block_title_linear_block {
  width: 50vw;
  left: -50vw;
  height: 2px;
  position: absolute;
  top: 20%;
  background: #000;
}

.advatages_block_title {
  position: relative;
  display: flex !important;
}

.advantages_block_card {
  margin-top: 56px;
}

.advantages_card {
  padding: 28px 28px 50px 28px;
  width: 100%;
  background: #fafafa;
}

.advantages_card_block {
  width: 100%;
  max-width: 480px;
}

.advantages_content_card_title_block {
  margin-left: 24px;
}

.advantages_content_card_title {
  font-size: 20px;
  font-weight: bold;
}

.advantages_card_title_icon_block {
  width: 60px;
  height: 60px;
}

.advantages_card_title_icon {
  width: 100%;
  height: 100%;
  object-fit: contain;
}

.advantages_card_border_block {
  position: absolute;
  top: -12px;
  left: -12px;
}

.advantages_card_content_list_item_linear {
  width: 20px;
  height: 1px;
  background: #2b2b2b;
}

.advantages_card_content_list_item_content {
  /* width: 20px; */
  margin-left: 10px;
  /* background: #000; */
}

.advantages_card_content {
  margin-top: 24px;
}

.advantages_card_content_list_item {
  margin-top: 15px;
}

.advantages_block_card_item {
  margin-top: 35px;
}

.contact_form_block {
  width: 100%;
  margin-top: 190px;
  padding: 80px 0px 76px 0px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  position: relative;
  background: #9295a0;
}

.contact_form {
  position: relative;
}

.contact_form_question_mark_block {
  width: 100%;
  height: 100%;
  position: absolute;
}

.contact_form_question_mark {
  font-size: 236px;
  position: absolute;
  top: -20%;
  text-shadow: 0px 4px 16px rgba(36, 34, 101, 0.25);
  color: white;
}

.contact_form_title {
  font-size: 50px;
  color: white;
  font-weight: bold;
}

.contact_form_title_block {
  display: flex;
  align-items: center;
  justify-content: center;
}

.contact_form_info_item_text {
  color: white;
}

.contact_form_title_info_block {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 20px;
}

.contact_form_info_item_text {
  font-size: 24px;
  text-align: center;
  color: white;
}

.contact_form_container {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 60px;
}

.contact_form_item_city {
  width: 200px;
}

.contact_form_item_name {
  width: 260px;
}

.contact_form_item_telephone {
  width: 260px;
}

.contact_form_item_block {
  width: 100%;
  margin-top: 20px;
}

.contact_form_item {
  width: 100%;
}

/* .contact_form_small_size {
  width: 200px;
} */
.contact_form_send_block,
.contact_form_send_personal_info_button_block {
  margin-top: 30px;
}

.contact_form_send_personal_info_text {
  color: white;
}

.contact_form_send_personal_info_link {
  color: white;
}

/* .footer_content_logo_block {
  display: flex;
} */
/* .footer_content_logo {
  width: 200px;
}
.footer_content_logo_info_pesonal {
  margin-left: 40px;
}
.footer_content_logo_info_pesonal_text {
  color: white;
}
.footer_content_logo_info_pesonal_link_block {
  margin-top: 10px;
}
.footer_content_logo_info_pesonal_link {
  color: white;
  text-decoration: none;
}
.footer_content_downloads_market_title {
  color: white;
}
.footer_content_downloads_market_link_group_block {
  margin-top: 12px;
}
.footer_content_downloads_market_link_group_item {
  margin-right: 15px;
} */
@media (max-width: 1400px) {
  .header_content_info_preview > img {
    width: 100%;
    min-width: 320px;
  }
}

@media (max-width: 1000px) {
  .header_content_info_preview > img {
    /* width: 100%; */
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

  .footer_content_logo {
    display: none;
  }

  .contact_form_title {
    font-size: 30px;
  }

  .contact_form_info_item_text {
    font-size: 18px;
  }

  .header_content_info_calculate_form_icons {
    margin: 15px;
  }

  .map_block_content_title_block_col {
    margin-top: 0;
  }

  .map_block_content_title {
    font-size: 30px;
    /* margin-top: 60px; */
    max-width: 400px;
    line-height: 30px;
  }

  .map_block_linear {
    top: 50px;
  }

  .advantages_title_block {
    width: 100%;
    background: none;
  }

  .advantages_title {
    font-size: 30px;
    max-width: 400px;
  }

  .map_block_content_title_block {
    margin-left: 20px;
  }

  .footer_content {
    padding: 40px 16px;
  }

  .footer_content_logo_info_pesonal {
    margin-left: 0;
  }

  .about_block_content_title {
    font-size: 30px;
  }

  /* .header_content_info_calculate_block {
    margin-top: 50px;
  } */
}

@media (max-width: 912px) {
  .header_content_advantages_info_block {
    display: block;
  }

  .header_content_block {
    width: 100%;
    height: 50px;
    background: #252069;
    color: #e4003c;
  }

  .header_content_info_calculate_block {
    margin-top: 50px;
  }
}

@media (max-width: 844px) {
  .map_block_linear {
    top: 60px;
  }
}

@media (max-width: 780px) {
  .header_content_advantages_info_block {
    width: 100%;
  }

  .header_content_advantages_text {
    max-width: 320px;
  }
}

@media (max-width: 768px) {
  .map_block_content_title_block_row {
    display: flex;
    flex-direction: column-reverse;
  }

  /* .contact_form_item_city {
    display: none !important;
  } */
  .map_block_content_title_block_col {
    width: 100%;
    height: 100%;
  }

  .map_block_linear {
    top: 218px;
  }

  .header_content_info_calculate_result {
    justify-content: center;
  }

  .map_content_block_title {
    margin-top: 70px;
  }
}

@media (max-width: 510px) {
  .header_content_info_calculate_form_input_size {
    /* min-width: auto; */
  }

  .header_content_info_calculate_result {
    justify-content: flex-start;
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

  .map_contact_button_block {
    margin: 24px;
  }

  .about_content_block_title {
    display: none !important;
  }

  /* .about_block_content_title_block {
    display: none !important;
  } */
  .map_block_contact {
    display: block;
  }

  .map_block_contact_button {
    width: 100%;
  }
}

@media (max-width: 480px) {
  .about_block_content_advertisement {
    display: block;
  }

  .contact_form_question_mark {
    display: none;
  }

  .about_block_title {
    display: none !important;
  }

  .map_contact_info {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    margin-top: 20px;
    width: 100%;
  }

  .map_contact_button_block {
    display: flex;
    justify-content: center;
  }

  .map_contact_button {
    width: 100%;
    margin-bottom: 20px;
  }

  .footer_content_downloads_market_link_group_item {
    margin: 0;
  }
}
</style>