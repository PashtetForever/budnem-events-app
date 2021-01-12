<template>
  <el-card>
    <el-form ref="eventForm" :model="form" :rules="rules" label-width="200px" @submit="onCreateEvent">
      <el-form-item label="Название мероприятия" prop="name">
        <el-input v-model="form.name"></el-input>
      </el-form-item>
      <el-form-item label="Описание" prop="description">
        <el-input type="textarea" v-model="form.description"></el-input>
      </el-form-item>
      <el-form-item label="Изоображения">
        <el-upload
          class="upload-demo"
          drag
          :action="apiPath + '/events/upload-image'"
          :on-success="onSuccessUploadedFile"
          multiple>
          <i class="el-icon-upload"></i>
          <div class="el-upload__text">Перетащите изображения в этоу зону или <em>нажмите сюда</em></div>
          <div class="el-upload__tip" slot="tip">допускаються файлы в формате jpg/png</div>
        </el-upload>
      </el-form-item>
      <el-form-item label="Выберите раздел" prop="section">
        <el-select
          v-model="form.section"
          filterable
          remote>
          <el-option
            v-for="region in sections" :key="region.ID"
            :value="region.ID"
            :label="region.NAME"
          />
        </el-select>
      </el-form-item>
      <el-form-item label="Выберите город" prop="region">
        <el-select
          v-model="form.region"
          @change="onChangeRegionInput"
          filterable
          remote>
          <el-option
            v-for="region in regions" :key="region.ID"
            :value="region.ID"
            :label="region.NAME"
          />
        </el-select>
      </el-form-item>
      <el-form-item label="Выберите зал" prop="place">
        <el-select
          v-model="form.place"
          @change="onChangePlaceInput"
          filterable
          remote
        >
          <el-option
            v-for="place in placesForCurrentRegion" :key="place.ID"
            :value="place.ID"
            :label="place.NAME"
          />
        </el-select>
      </el-form-item>
      <el-form-item label="Выберите схему" v-if="form.place" prop="schema">
        <el-radio v-model="form.schema" v-for="schema in schemesForSelectedPlace" :key="schema.ID" :label="schema.ID">
          <el-image
            style="width: 200px"
            :src="schema.SCHEMA_SRC">
          </el-image>
        </el-radio>
      </el-form-item>
      <el-form-item label="Тип мероприятия">
        <el-switch
            style="display: block"
            v-model="form.isRegular"
            active-text="Регулярное"
            inactive-text="Разовое">
        </el-switch>
      </el-form-item>
      <el-form-item label="Выберите дату и время">
        <event-date-time-picker :current-session="session" v-for="session in sessions" :key="session.key"/>
        <el-button v-if="form.isRegular" icon="el-icon-plus" @click="addEmptySession()">Добавить сеанс</el-button>
      </el-form-item>
      <el-form-item>
        <el-button type="primary" @click="onCreateEvent">Создать</el-button>
      </el-form-item>
    </el-form>
    <form ref="eventsForm" action="https://budnyam.net/personal/my-events/girdle/" method="post" style="display: none">
      <input type="hidden" name="events" :value="eventIds">
      <input type="hidden" name="test" value="111">
    </form>
  </el-card>
</template>

<script>
import EventDateTimePicker from "../components/choiceEvents/EventDateTimePicker";
import {mapGetters, mapMutations} from "vuex"

export default {
  components: {
    EventDateTimePicker
  },
  computed: {
    ...mapGetters(['sessions', 'regions', 'places', 'schemes', 'sections']),
  },
  data() {
    return {
      form: {
        name: '',
        description: '',
        section: '',
        region: '',
        place: '',
        schema: null,
        isRegular: false,
      },
      rules: {
        name: [
          { required: true, trigger: 'blur', message: 'Поле обязательно для заполнения' }
        ],
        description: [
          { required: true, trigger: 'blur', message: 'Поле обязательно для заполнения' }
        ],
        section: [
          { required: true, trigger: 'change', message: 'Поле обязательно для заполнения' }
        ],
        region: [
          { required: true, trigger: 'blur', message: 'Поле обязательно для заполнения' }
        ],
        place: [
          { required: true, trigger: 'blur', message: 'Поле обязательно для заполнения' }
        ],
        schema: [
          { required: true, trigger: 'blur', message: 'Поле обязательно для заполнения' }
        ],
      },
      placesForCurrentRegion: [],
      schemesForSelectedPlace: [],
      apiPath: process.env.API_URI,
      eventIds: []
    }
  },
  methods: {
    ...mapMutations(['addEmptySession']),
    onCreateEvent() {
      this.$refs['eventForm'].validate(async (valid) => {
        if (valid) {
          this.eventIds = await this.$store.dispatch('CREATE_EVENT', this.form)
          setTimeout(() => {
            this.$refs['eventsForm'].submit()
          }, 1000)
        } else {
          return false;
        }
      });

    },
    onChangeRegionInput(value) {
      this.form.place = ''
      this.form.schema = ''
      this.placesForCurrentRegion = this.$store.getters.getPlaceByRegionId(value)
    },
    onChangePlaceInput(value) {
      this.form.schema = ''
      this.schemesForSelectedPlace = this.$store.getters.getSchemesByPlaceId(value)
    },
    onSuccessUploadedFile(response) {
      this.$store.commit('addFile', response)
    }
  },
  async mounted() {
    await this.$store.dispatch('GET_REGIONS')
    await this.$store.dispatch('GET_PLACES')
    await this.$store.dispatch('GET_SCHEMES')
    await this.$store.dispatch('GET_SECTIONS')
  }
}
</script>

<style>
  .el-image-viewer__img {
    width: 80%;
    height: 80%;
  }
</style>
