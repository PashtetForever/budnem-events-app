export default {
  state: {
    sessions: [
      {
        key: 0,
        startDateTime: '',
        endTime: ''
      }
    ]
  },
  getters: {
    sessions(s) {
      return s.sessions
    }
  },
  mutations: {
    addEmptySession(s) {
      const key = s.sessions.length

      s.sessions.push({
        key,
        startDateTime: '',
        endTime: ''
      })
    },
    updateSession(s, payload) {
      s.sessions[payload.key] = payload
    },
    deleteSessionByKey(s, key) {
      s.sessions = s.sessions.filter((item) => {
        return item.key !== key
      })
    }
  },
}
