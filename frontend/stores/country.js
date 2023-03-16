import { defineStore } from 'pinia'
import { getCountry } from "@/api/getCountry/getCountry";

export const useCountry = defineStore({
  id: 'country',
  state: () => ({
    countryList: {},
    currentSites: {}
  }),
  getters: {
    getCountryKZ: (state) => {
      return state.countryList?.find((item) => item.id === 2)
    },
    getCurrentSite: (state) => {
      return state?.getCountryKZ.territoryList?.find((item) => item.id === 6)
    }
  },
  actions: {
    async getCountryList (lang) {
     const response = await getCountry(lang);
     this.updateCountryList(response.data)
    },

    updateCountryList (lang) {
      this.countryList = lang;
    }
  }
})
