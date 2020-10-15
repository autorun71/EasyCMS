import Vue from 'vue';
import VeeValidate from 'vee-validate';

import './bootstrap';

window.Vue = Vue;
window.VeeValidate = VeeValidate;

Vue.use(VeeValidate, {
    events: 'input|change|blur',
});
Vue.prototype.$http = axios

window.eventBus = new Vue();

$(document).ready(function () {
    Vue.config.ignoredElements = [
        'option-wrapper',
        'group-form',
        'group-list'
    ];

    var app = new Vue({
        el: "#app",

        data: {
        },

        mounted() {
        },

        methods: {
        }
    });
});
