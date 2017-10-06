import VueRouter from "vue-router";

let routes = [
    {
        path: '/',
        component: require('./views/NewsTag.vue')
    },
    {
        path: '/about',
        component: require('./views/About.vue')
    },
    {
        path: '/contact',
        component: require('./views/Contact.vue')
    }
];

export default new VueRouter({
    routes,
    linkActiveClass: 'is-active'
});