require('./bootstrap');

window.Vue = require('vue').default;

import createFilm from "./components/createFilm.vue";


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('create-film', createFilm);


const app = new Vue({
    el: '#app',
});
