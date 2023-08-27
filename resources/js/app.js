require('./bootstrap');

window.Vue = require('vue').default

require('electrician-vue-components').default.install(Vue);

const app = new Vue({
    el: '#app',
});
