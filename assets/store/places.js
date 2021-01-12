import axios from "axios"

export default {
  state: {
    places: [],
  },
  getters: {
    places(s) {
      return s.places
    },
    getPlaceByRegionId: state => id => {
      return state.places.filter(place => place.region.ID === id.toString());
    }
  },
  mutations: {
    loadPlaces(s, payload) {
      s.places = payload
    }
  },
  actions: {
    async GET_PLACES({commit}) {
      await axios.get(process.env.API_URI + '/places')
        .then((response) => {
          commit('loadPlaces', Object.values(response.data))
        })
    }
  }
}
