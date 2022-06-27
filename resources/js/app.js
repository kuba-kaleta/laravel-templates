require('./bootstrap');

window.Vue = require('vue');

Vue.component('front-page', require('./components/Front.vue').default);
Vue.component('articles', require('./components/Articles.vue').default);

const app = new Vue({
    el: '#app',
});
