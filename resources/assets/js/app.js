require('./bootstrap');
import Vue from 'vue';
import { TimelineMax, TweenMax, TweenLite } from 'gsap';


Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
  el: '#app',
});
