require('./bootstrap');

window.Vue = require('vue');

Vue.component('chat-app', require('./components/ChatApp').default);

const app = new Vue({
    el: '#app'
});
