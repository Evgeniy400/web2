import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/home'
import intro from "../components/intro"
import element from "@/components/element"
import header from '@/components/header'
import main from '@/components/main'
import item_page from "@/components/item_page"
import footer from '@/components/footer'

Vue.component('app-intro', intro)
Vue.component('app-element', element)
Vue.component('app-header', header)
Vue.component('app-main', main)
Vue.component('app-item_page', item_page)
Vue.component('app-footer', footer)
Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'Home',
        components: {
            default: Home
        },
        meta: {
            requiredAuth: true
        }
    },
    {
        path: '/intro',
        name: 'intro',
        components: {
            default: intro
        },
    },
    {
        path: '/item_page/:id',
        name: 'item_page',
        components: {
            default: item_page
        }
    },
    {
        path: '/element',
        name: 'element',
        components: {
            default: element
        }
    },
    {
        path: '/main',
        name: 'main',
        components: {
            default: main
        }
    }

]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router