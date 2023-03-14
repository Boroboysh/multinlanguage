import { defineStore } from 'pinia'
import getContentInfo from "@/api/contentInfo/getContentInfo";

export const useLang = defineStore({
  id: 'lang',
  state: () => ({
    lang: null
  }),
  getters: {

  },
  actions: {
    async getContent (lang) {
     const response = await getContentInfo(lang);
     this.pageContent = response
    }
  }
})
