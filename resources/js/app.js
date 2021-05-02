
// Bootsrtap Support
require('./bootstrap');
// vue Support
window.Vue = require('vue');
// Ruter Support
import VueRouter from 'vue-router'

Vue.use(VueRouter)

// Error Support
import { Form, HasError, AlertError } from 'vform'
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
window.Form = Form;

// Sweetalert Supporrt
import Swal from 'sweetalert2'
window.Swal = Swal; 
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,

  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})
window.Toast = Toast; 

// Toastr Support
import toastr from 'toastr'
window.toastr = toastr;
// Routes Support
import {routes} from './routes';
const router = new VueRouter({
    routes,
    mode:'hash',
  })

// Vuesx Support
import Vuex from 'vuex'
Vue.use(Vuex)
// Vusex Store Support
import storeInfo from './store/store';
const store = new Vuex.Store(
  storeInfo
  )
// Moment Js Support
import moment from 'moment';
Vue.filter('timeformat',(arg)=>{
  return moment(arg).format("DD-MM-YYYY")
})
Vue.filter('shortlength',(text,length,suffix)=>{
  return text.substring(0,length)+suffix;
})
// Vue Filter

// Ckedditor Support
import CKEditor from 'ckeditor4-vue';
Vue.use( CKEditor )

// Google Chart
import VueGoogleCharts from 'vue-google-charts'
Vue.use(VueGoogleCharts)


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('admin-master', require('./components/admin/adminmaster.vue').default);
Vue.component('public-master', require('./components/public/PublicMaster.vue').default);





const app = new Vue({
    el: '#app',
    router,
    store,
});
