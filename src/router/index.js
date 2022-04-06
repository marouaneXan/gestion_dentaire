import { createWebHistory,createRouter } from "vue-router";
import Signup from '../views/Signup.vue'
import LoginV from '../views/Login.vue'
const routes=[
    {
        path: '/sign-up',
        name: 'SignUp',
        component: Signup
    },
    {
        path: '/login',
        name: 'Login',
        component: LoginV
    }
]


const router=createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});
export default router