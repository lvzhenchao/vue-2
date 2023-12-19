// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import axios from "axios";
import VueAxios from "vue-axios";
import VueRouter from 'vue-router';
import App from './App'
import Todos from './components/Todos'

Vue.use(VueAxios,axios);
Vue.use(VueRouter);

const routes = [
  {path: '/', components: Todos}
];

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  el: '#app',
  components: { App },
  template: '<App/>'
})
