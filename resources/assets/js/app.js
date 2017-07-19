
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import VueResource from 'vue-resource';

Vue.use(VueResource);

Vue.http.interceptors.push((request, next) => {
    request.headers.set('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
    next();
});


Vue.component('example', require('./components/Example.vue'));
Vue.component('course', require('./components/mad/Cours.vue'));
Vue.component('agreements', require('./components/mad/Agreements.vue'));
Vue.component('tasks', require('./components/mad/Task.vue'));
Vue.component('schedule', require('./components/mah/Schedule.vue'));
Vue.component('block', require('./components/mah/Block.vue'));

const app = new Vue({
    el: '#app'
});
