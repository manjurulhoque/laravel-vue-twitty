/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.prototype.$url = 'http://localhost:8000/';
Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('search', require('./components/Search.vue'));
Vue.component('side-bar', require('./components/Sidebar.vue'));
Vue.component('all-tweets', require('./components/Tweets.vue'));
Vue.component('create-tweet', require('./components/CreateTweet.vue'));
Vue.component('follow', require('./components/follow/Follow.vue'));
Vue.component('who-to-follow', require('./components/follow/WhoToFollow.vue'));
Vue.component('user-tweet', require('./components/UserTweet.vue'));
Vue.component('user-following', require('./components/UserFollowing.vue'));
Vue.component('user-follower', require('./components/UserFollower.vue'));
Vue.component('account-setting', require('./components/user/UserAccount.vue'));
Vue.component('user-profile-edit', require('./components/user/UserProfileEdit.vue'));

import axios from 'axios';

const app = new Vue({
    el: '#app',
    data: {
        return: {}
    }
});
