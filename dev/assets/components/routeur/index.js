import { createRouter, createWebHashHistory } from 'vue-router'
import HomeVue from '../Home.vue'
import AlbumDetail from '../AlbumDetail'

const routes = [
    {
        path: '/',
        name: 'homepage',
        component: HomeVue
    },
    {
        path: '/album/:id',
        name: 'albumdetail',
        component: AlbumDetail
    }
]

const router = createRouter({
    history: createWebHashHistory(),
    routes,
})

export default router