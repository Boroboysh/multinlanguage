<template>
  <div class="default_footer_block">
    <footer>
      <div class="footer_content_block">
        <div class="footer_content container-xl">
          <div class="row w-100 m-0 p-0 footer_content_items">
            <div
              class="col-12 col-md-6 col-xl-6 m-0 p-0 d-flex align-items-center justify-content-start"
            >
              <div class="footer_content_logo_block">
                <slot name="block_left" />
              </div>
            </div>
            <div
              class="col-12 col-sm-12 col-md-6 col-xl-6 m-0 p-0 d-flex align-items-center justify-content-start justify-content-md-start justify-content-xl-end"
            >
              <div class="footer_content_downloads_market">
                <slot name="block_right" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>

<script setup>
</script>

<style>
footer {
  background: #222222;
}
.footer_content {
  padding: 40px 0px;
}
.footer_content_logo_block {
  display: flex;
}
.footer_content_logo {
  width: 200px;
}
.footer_content_logo_info_pesonal {
  margin-left: 40px;
}
.footer_content_logo_info_pesonal_text {
  color: white;
}
.footer_content_logo_info_pesonal_link {
  color: white;
}
.footer_content_logo_info_pesonal_link_block {
  margin-top: 10px;
}
.footer_content_logo_info_pesonal_link {
  color: white;
  text-decoration: none;
}
.footer_content_downloads_market {
  width: 100%;
  margin-bottom: 40px;
}

.footer_content_downloads_market_title {
  color: white;
}
.footer_content_downloads_market_link_group_block   {
  width: 100%;
  gap: 2px;
  margin-top: 12px;
}
.footer_content_downloads_market_link_group_item {
  max-width: 108px;
  margin-right: 15px;
}
.footer_content_downloads_market_link_image {
  max-width: 100%;
  margin-right: 15px;
}

@media (max-width: 1000px) {
  .footer_content_logo {
    display: none;
  }
  .footer_content {
    padding: 40px 16px;
  }
  .footer_content_logo_info_pesonal {
    margin-left: 0;
  }
}

@media (max-width: 757px) {

  .footer_content_items {
    flex-direction: column-reverse;
  }
}
@media (max-width: 480px) {
  .footer_content_downloads_market_link_group_item {
    margin: 0;
  }

  .footer_content_logo_info_pesonal_text {
    font-size: 13px;
    color: white;
  }
  .footer_content_logo_info_pesonal_link {
    font-size: 13px;
    color: white;
  }
}
</style>