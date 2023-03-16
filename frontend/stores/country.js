import { defineStore } from 'pinia'
import { getCountry } from "@/api/getCountry/getCountry";
1
export const useCountry = defineStore({
  id: 'country',
  state: () => ({
    countryList: {},
    currentSites: {},
    currentCity: {},
    currentCountry: {},
  }),
  getters: {
    getCountryKZ: (state) => {
      return state.countryList?.find((item) => item.id === 2)
    },
    getCurrentSite: (state) => {
      return state?.getCountryKZ.territoryList?.find((item) => item.id === 6)
    },
    getCurrentCity: (state) => {
      return state?.getCountryKZ.territoryList?.find((item) => item.id === 6)
    },
    getSelectedCountry: (state) => {
      return state?.currentCountry;
    },
  },
  actions: {
    async getCountryList(lang) {
     const response = await getCountry(lang);
     this.updateCountryList(response.data)
    },

    updateCountryList(lang) {
      this.countryList = lang;
      if (!Object.keys(this.currentCity).length) {

      }
    },
    changeCity(city) {
      this.currentCity = city;
    },
    changeCountry(country) {
      this.currentCountry= country;
    },
  }
})
