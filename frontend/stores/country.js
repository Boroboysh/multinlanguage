import { defineStore } from 'pinia'
import getContentInfo from "@/api/contentInfo/getContentInfo";

export const useCountry = defineStore({
  id: 'country',
  state: () => ({
    pageContent: {},
    currentLang: 'kk'
  }),
  getters: {
    getLang: (state) => {
      return state.pageContent.header?.languages
    },
    getActiveLang: (state) => {
      return state.getLang?.filter((lang) => lang.isDefault === 1)
    }
  },
  actions: {
    async getContent (lang) {
     const response = await getContentInfo(lang);
     this.pageContent = response
    },
    updateCurrentLang (lang) {
      this.currentLang = lang;
    }
    // getCurrentLang (list, lang) {
    //   let result = {}
    //   list.map((item, index) => {
    //     if (item.isDefault > list[index + 1].isDefault) {
    //       result = item
    //     }
    //   })
    //   return result
    // }
  }
})
