import "regenerator-runtime/runtime"

import Vue from 'vue'
import App from './App.vue'
import store from './store'

import elementUi from 'element-ui'
import lang from 'element-ui/lib/locale/lang/ru-RU'
import locale from 'element-ui/lib/locale'
import 'element-ui/lib/theme-chalk/reset.css'

Vue.config.productionTip = false
Vue.use(elementUi)
locale.use(lang)

new Vue({
  store,
  render: h => h(App)
}).$mount('#app')
