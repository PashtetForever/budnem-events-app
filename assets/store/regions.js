import axios from "axios"

export default {
  state: {
    regions: [],
  },
  getters: {
    regions(s) {
      return s.regions
    }
  },
  mutations: {
    loadRegions(s, payload) {
      s.regions = payload
    }
  },
  actions: {
    async GET_REGIONS({commit}) {
      await axios.get(process.env.API_URI + '/regions')
        .then((response) => {
          commit('loadRegions', Object.values(response.data))
        })
    }
  }
}
