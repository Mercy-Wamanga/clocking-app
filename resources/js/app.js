/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('vue-moment');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-nav', require('./components/Header-Nav.vue').default);
Vue.component('main-image', require('./components/Main-Image.vue').default);
Vue.component('login', require('./components/Login.vue').default);
Vue.component('header-nav-dash', require('./components/Header-Nav-Dash.vue').default);
Vue.component('main-dash', require('./components/Main-Dash.vue').default);
Vue.component('main-report', require('./components/Main-Report.vue').default);
Vue.component('main-users', require('./components/Main-Users.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
