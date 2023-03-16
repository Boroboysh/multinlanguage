<template>
    <div class="advantages_card_block position-relative default_card w-100" v-on:click="toggleList">
        <div class="default_border_block advantages_card_border_block">
            <div class="default_border default_border_top_left"></div>
            <div class="default_border default_border_top_right"></div>
            <div class="default_border default_border_bottom_left"></div>
            <div class="default_border default_border_bottom_right"></div>
        </div>
        <div
          class="advantages_card default-card"
        >
            <div
                class="advantages_card_content_title_block d-flex align-items-center justify-content-between"
            >
              <div class=" d-flex align-items-center">
                <div class="advantages_card_title_icon_block">
                    <img
                      v-bind:src="env.host + advantagesItem.icon"
                      alt=""
                      class="advantages_card_title_icon"
                    />
                </div>
                <div class="advantages_content_card_title_block fw-bold">
                <span class="advantages_content_card_title">
                  {{ advantagesItem.title }}
                </span>
                </div>
              </div>
              <span class="advantages_content_card_title"
                v-bind:style="{
                  transform: `rotate(${isShow ? '180deg': '0deg'})`
                }"
              >
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6 9L12 15L18 9" stroke="#2B2B2B" stroke-width="1.28571" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                </span>
            </div>
            <div v-bind:class="`advantages_card_content ${!isShow ? 'd-none' : ''}`">
                <div class="advantages_card_content_list">
                    <div
                      v-for="(
                      advantagesItemList, advantagesItemIndex
                    ) in advantagesItem.list"
                      v-bind:key="advantagesItemIndex"
                      class="advantages_card_content_list_item d-flex align-items-center h-100"
                    >
                      <div class="advantages_card_content_list_item_linear"></div>
                      <div class="advantages_card_content_list_item_content">
                          <div class="advantages_card_content_list_item_content_text">
                              {{ advantagesItemList.content }}
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</template>

<script>
import env from "@/api/env/env";

export default {

  props: {
    advantagesItem: {
      type: Object,
    }
  },
  data: () => {
    return {
      isShow: false,
      env,
    }
  },
  methods: {
    toggleList() {
      this.isShow = !this.isShow;
    }
  }
}
</script>