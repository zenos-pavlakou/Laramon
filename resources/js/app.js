import Vue from 'vue'
window.Vue = require('vue'); 

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

require('./bootstrap');
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)


import DonutChart from "./components/DonutChart.vue";
Vue.component("donut", DonutChart);

import ProgressBar from "./components/ProgressBar.vue";
Vue.component("progress-bar", ProgressBar);


import Typewriter from "./components/Typewriter.vue";
Vue.component("typewriter", Typewriter);


import WorkExperience from "./components/WorkExperience.vue";
Vue.component("work-experience", WorkExperience);


import Education from "./components/Education.vue";
Vue.component("education", Education);


import $ from "jquery";
import axios from "axios";
 
Vue.prototype.$http = axios;
Vue.prototype.$axios = axios



import mixin from "./mixin.js";
mixin["components"] = {

}
Vue.mixin(mixin)




import store from "./store";


window.onload = function () {
  const app = new Vue({
      store,
      el: '#app',
      components: {

      },
      data: {

      }
  });
}


