require('./bootstrap');

window.Vue = require('vue');

Vue.component('chat-app', require('./components/ChatApp.vue'));

const app = new Vue({
    el: '#app'
});
