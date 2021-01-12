import Vue from 'vue'
import Vuex from 'vuex'
import axios from "axios";

import sessions from "./sessions";
import regions from "./regions";
import places from "./places";
import schemes from "./schemes";
import sections from "./sections";

Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
    sessions,
    regions,
    places,
    schemes,
    sections
  },
  state: {
    files: [],
  },
  getters: {
    files(s) {
      return s.files
    }
  },
  mutations: {
    addFile(s, payload) {
      s.files.push(payload)
    }
  },
  actions: {
    async CREATE_EVENT({getters}, payload) {
      const response = await axios.post(process.env.API_URI + '/events/create', {
        ...payload,
        sessions: getters.sessions,
        files: getters.files
      })

      return JSON.stringify(response.data)
    }
  }
})
