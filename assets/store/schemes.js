import axios from "axios"

export default {
  state: {
    schemes: [],
  },
  getters: {
    schemes(s) {
      return s.schemes
    },
    srcSchemes(s) {
      let srcSchemes = [];

      for (let schema of s.schemes) {
        srcSchemes.push(schema.SCHEMA_SRC)
      }

      return srcSchemes
    },
    getSchemesByPlaceId: state => placeId => {
      return state.schemes.filter((schema) => schema.PROPERTY_PLACE_VALUE === placeId.toString())
    },
  },
  mutations: {
    loadSchemes(s, payload) {
      s.schemes = payload
    }
  },
  actions: {
    async GET_SCHEMES({commit}) {
      await axios.get(process.env.API_URI + '/schemes')
        .then((response) => {
          commit('loadSchemes', Object.values(response.data))
        })
    }
  }
}
