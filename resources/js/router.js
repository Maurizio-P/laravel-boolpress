import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from "./components/pages/Home.vue"
import Show from "./components/pages/Show.vue"


Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/posts/:id',
            name: 'show',
            component: Show
        }
    ]
})

export default router;