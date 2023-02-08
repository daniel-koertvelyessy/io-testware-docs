window.axios = require('axios');
window.docsearch = require('@docsearch/js');


import Vue from 'vue';
import Search from './components/Search.vue';
import Callbackform from './components/Callbackform.vue';
import Contactform from './components/Contactform.vue';
import Contactsupport from './components/Contactsupport.vue';
import Requestdemo from './components/Requestdemo.vue';

import Prism from 'prismjs';


Prism.highlightAll();

import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

Vue.config.productionTip = false;

new Vue({
    components: {
        Search,
        Callbackform,
        Contactform,
        Contactsupport,
        Requestdemo,
    },
}).$mount('#app');