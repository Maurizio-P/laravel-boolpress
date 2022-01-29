import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from "./components/pages/Home.vue"
import Show from "./components/pages/Show.vue"
import About from "./components/pages/About.vue"
import CategoryShow from "./components/pages/categories/Show.vue"


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
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
        {
            path: '/categories/:id',
            name: 'category.show',
            component: CategoryShow
        }
    ]
})

export default router;