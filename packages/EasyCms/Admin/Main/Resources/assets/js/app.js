import Vue from 'vue';
import VeeValidate from 'vee-validate';

import './bootstrap';

window.Vue = Vue;
window.VeeValidate = VeeValidate;


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

    const hideChildLeftSidebarClose = document.querySelector('.close-menu')

    hideChildLeftSidebarClose.addEventListener('click', function (e) {
        console.log(e.currentTarget.closest('.left-menu-children'))
        const hideChildLeftSidebar = e.currentTarget.closest('.left-menu-children')
        const tabsUl = document.querySelector('.tabs ul');
        let hideChildLeftSidebarVisibility = hideChildLeftSidebar.style.width;

        if (hideChildLeftSidebarVisibility === '10px') {
            hideChildLeftSidebar.style.width = ''
            hideChildLeftSidebarClose.querySelector('span').innerHTML = '<<'
            if (tabsUl) {
                tabsUl.style.width = '';
            }

        } else {
            hideChildLeftSidebar.style.width = '10px'
            hideChildLeftSidebarClose.querySelector('span').innerHTML = '>>'
            if (tabsUl) {
                tabsUl.style.width = 'calc(100vw - 142px)';
            }

        }

    })
});


document.addEventListener('DOMContentLoaded', function () {

})
