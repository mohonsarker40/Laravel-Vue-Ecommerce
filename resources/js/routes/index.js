import dashboardComponent from "../views/dashboardComponent.vue";
import About from "../views/About";
import categoryComponent from "../views/product/categoryComponent";
import subCategoryComponent from "../views/product/subCategoryComponent";


const route = [
    {
        path: '/admin/dashboard',
        name: 'home',
        component: dashboardComponent
    },
    {
        path: '/admin/about',
        name : 'about',
        component: About
    },
    {
        path: '/admin/product/category',
        name : 'category',
        component: categoryComponent
    },
    {
        path: '/admin/product/sub_category',
        name : 'sub_category',
        component: subCategoryComponent
    },
];


export default route;