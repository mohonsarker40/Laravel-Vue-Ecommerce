import dashboardComponent from "../views/dashboardComponent.vue";
import About from "../views/About";
import Category from "../views/product/Category";
import SubCategory from "../views/product/SubCategory";
import Product from "../views/product/Product";

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
        path: '/admin/category',
        name : 'category',
        component: Category,
        meta: {pageTitle: 'Category Table', dataUrl : 'api/categories'}
    },
    {
        path: '/admin/sub_category',
        name : 'sub_category',
        component: SubCategory,
        meta: {pageTitle: 'SubCategory Table', dataUrl : 'api/sub_categories'}
    },
    {
        path: '/admin/product',
        name : 'product',
        component: Product,
        meta: {pageTitle: 'Product Table', dataUrl : 'api/product'}
    },
];


export default route;