// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  imports: {
    // autoImport: false,
  },
  css: [
    '@/assets/styles/app.css',
    '@/assets/styles/bootstrap.min.css',
    '@/assets/fonts/Roboto/stylesheet.css'
  ],
  modules: [
    '@pinia/nuxt',
  ],
})
