<template>
  <section>
    <el-date-picker
      v-model="currentSession.startDateTime"
      :picker-options="pickerOptions"
      @input="updateSession"
      type="date"
      format="dd.MM.yyyy"
      placeholder="Выберите день">
    </el-date-picker>
    <el-time-picker
      v-model="currentSession.startDateTime"
      @input="updateSession"
      format="HH:mm"
      placeholder="Select time">
    </el-time-picker>
    <el-time-picker
      v-model="currentSession.endTime"
      @input="updateSession"
      format="HH:mm"
      placeholder="Select time">
    </el-time-picker>
    <el-button v-if="sessions.length > 1" @click="deleteSession" icon="el-icon-close"/>
  </section>
</template>

<script>
import {mapGetters} from "vuex"
import moment from "moment"

export default {
  props: ['currentSession'],
  data() {
    return {
      pickerOptions: {
        disabledDate(time) {
          const date = moment().subtract(1, 'days').toDate();
          return time.getTime() < date;
        },
      }
    }
  },
  computed: {
    ...mapGetters(['sessions'])
  },
  methods: {
    deleteSession() {
      this.$store.commit('deleteSessionByKey', this.currentSession.key)
    },
    updateSession() {
      this.$store.commit('updateSession', this.currentSession)
    }
  }
}
</script>
