<template>
  <div class="default_footer_block">
    <footer>
      <div class="footer_content_block">
        <div class="footer_content container-xl">
          <div class="row w-100 m-0 p-0">
            <div
              class="col-12 col-md-6 col-xl-6 m-0 p-0 d-flex align-items-center justify-content-start"
            >
              <div class="footer_content_logo_block">
                <img
                  src="@/assets/images/logo-pec-black.svg"
                  alt=""
                  class="footer_content_logo"
                />
                <div class="footer_content_logo_info_pesonal">
                  <div class="footer_content_logo_info_pesonal_text_block">
                    <span class="footer_content_logo_info_pesonal_text">
                      2022 © ООО «ПЭК»
                    </span>
                  </div>
                  <div class="footer_content_logo_info_pesonal_link_block">
                    <a href="#" class="footer_content_logo_info_pesonal_link"
                      >О защите персональных данных</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div
              class="col-12 col-sm-12 col-md-6 col-xl-6 m-0 p-0 d-flex align-items-center justify-content-start justify-content-md-start justify-content-xl-end"
            >
              <div class="footer_content_downloads_market">
                <div class="footer_content_downloads_market_title_block">
                  <span class="footer_content_downloads_market_title">
                    Управляй доставкой в приложении
                  </span>
                </div>
                <div
                  class="footer_content_downloads_market_link_group_block d-flex"
                >
                  <div class="footer_content_downloads_market_link_group_item">
                    <img
                      src="@/assets/images/app-store-small.svg"
                      alt=""
                      class="footer_content_downloads_market_link"
                    />
                  </div>
                  <div class="footer_content_downloads_market_link_group_item">
                    <img
                      src="@/assets/images/app-store-small.svg"
                      alt=""
                      class="footer_content_downloads_market_link"
                    />
                  </div>
                  <div class="footer_content_downloads_market_link_group_item">
                    <img
                      src="@/assets/images/app-store-small.svg"
                      alt=""
                      class="footer_content_downloads_market_link"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>

<script>
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

@media (max-width: 480px) {
  .footer_content_downloads_market_link_group_item {
    margin: 0;
  }
}
</style>