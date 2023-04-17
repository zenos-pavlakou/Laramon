import Vue from 'vue'
window.Vue = require('vue'); 

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

require('./bootstrap');
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)


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


