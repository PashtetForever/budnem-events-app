import axios from "axios"

export default {
  state: {
    sections: [],
  },
  getters: {
    sections(s) {
      return s.sections
    }
  },
  mutations: {
    loadSections(s, payload) {
      s.sections = payload
    }
  },
  actions: {
    async GET_SECTIONS({commit}) {
      await axios.get(process.env.API_URI + '/sections')
        .then((response) => {
          commit('loadSections', Object.values(response.data))
        })
    }
  }
}
