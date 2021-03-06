
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import ru from 'vee-validate/dist/locale/ru';
import VeeValidate, { Validator } from 'vee-validate';
require('./bootstrap');

window.Vue = require('vue');

import VueSelect from 'vue-cool-select'

Vue.use(VueSelect, {
    theme: 'bootstrap' // or 'material-design'
  })

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('typetext', require('./components/Typetext.vue').default);

Vue.component('mainform', require('./components/MainForm.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// import Typewriter from 'typewriter-effect/dist/core';

Vue.use(VeeValidate);
Validator.localize('ru', ru);
// document.addEventListener("DOMContentLoaded", function(event) {
//     new Typewriter(document.getElementById('typewriter'), {
//         strings: ['Hello', 'World'],
//         autoStart: true,
//     });
//   });

import VueTyperPlugin from 'vue-typer'
Vue.use(VueTyperPlugin)

const app = new Vue({
    el: '#app'
});
