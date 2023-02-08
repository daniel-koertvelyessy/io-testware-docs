window.axios = require('axios');
window.docsearch = require('docsearch.js');


import Vue from 'vue';
import Search from './components/Search.vue';
import Callbackform from './components/Callbackform.vue';
import Contactform from './components/Contactform.vue';
import Contactsupport from './components/Contactsupport.vue';
import Requestdemo from './components/Requestdemo.vue';
import hljs from 'highlight.js/lib/core';

import'./components/copycode';

import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()



hljs.registerLanguage('bash', require('highlight.js/lib/languages/bash'));
hljs.registerLanguage('css', require('highlight.js/lib/languages/css'));
hljs.registerLanguage('html', require('highlight.js/lib/languages/xml'));
hljs.registerLanguage('javascript', require('highlight.js/lib/languages/javascript'));
hljs.registerLanguage('json', require('highlight.js/lib/languages/json'));
hljs.registerLanguage('markdown', require('highlight.js/lib/languages/markdown'));
hljs.registerLanguage('php', require('highlight.js/lib/languages/php'));
hljs.registerLanguage('scss', require('highlight.js/lib/languages/scss'));
hljs.registerLanguage('yaml', require('highlight.js/lib/languages/yaml'));

document.querySelectorAll('pre code').forEach((block) => {
    hljs.highlightBlock(block);
});
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