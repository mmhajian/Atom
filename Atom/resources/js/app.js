/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { toInteger } = require('lodash');

require('./bootstrap');

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

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component("home", require("./components/Home.vue").default);
Vue.component("explore", require("./components/Explore.vue").default);
Vue.component("atom", require("./components/Atom.vue").default)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#document',
});

var stable = document.getElementById("stable");

if (stable.textContent == "Stable") {
    stable.style.color = "var(--stable-color)";
}
else {
    stable.style.color = "var(--unstable-color)";
}

///////////////////////////////////////////////

var proton = document.getElementById("proton");
var neutron = document.getElementById("neutron");

if (eval(proton.textContent) >= 84) {
    proton.style.color = "var(--unstable-color)";
}
if(eval(proton.textContent) < 84) {
    proton.style.color = "var(--stable-color)";
}

var max_neu = eval(proton.textContent) * 1.5;

if (eval(neutron.textContent) >= max_neu) {
    neutron.style.color = "var(--unstable-color)";
}
if(eval(neutron.textContent) < max_neu) {
    neutron.style.color = "var(--stable-color)";
}

///////////////////////////////////////////////
