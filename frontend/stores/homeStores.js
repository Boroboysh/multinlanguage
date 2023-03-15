import { defineStore } from 'pinia'
import getContentInfo from "@/api/contentInfo/getContentInfo";

export const useContentPages = defineStore({
  id: 'page-content',
  state: () => ({
    pageContent: {}
  }),
  getters: {
    getLang: (state) => {
      return state.pageContent.header?.languages
    }
  },
  actions: {
    async getContent (lang) {
     const response = await getContentInfo('ru');
     this.pageContent = response
    }
  }
})
