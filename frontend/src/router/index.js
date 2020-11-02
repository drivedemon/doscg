import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '@/views/Home'
import About from '@/views/About'
import Fibonacci from '@/views/Fibonacci'
import Calculate from '@/views/Calculate'
import Map from '@/views/Map'
import Notify from '@/views/Notify'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home,
  },
  {
    path: '/fibonacci',
    name: 'Fibonacci',
    component: Fibonacci,
  },
  {
    path: '/calculate',
    name: 'Calculate',
    component: Calculate,
  },
  {
    path: '/map',
    name: 'Map',
    component: Map,
  },
  {
    path: '/notify',
    name: 'Notify',
    component: Notify,
  },
  {
    path: '/about',
    name: 'About',
    component: About,
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes,
})

export default router
