import dashboardComponent from "../views/dashboardComponent.vue";
import About from "../views/About";


const route = [
    {
        path: '/admin/dashboard',
        name: 'home',
        component: dashboardComponent
    },
    {
        path: '/admin/about',
        component: About
    },
];


export default route;