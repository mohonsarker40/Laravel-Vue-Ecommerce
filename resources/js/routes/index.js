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
        component: categoryComponent,
        meta: {pageTitle: 'Category Table', dataUrl : 'api/categoies'}
    },
    {
        path: '/admin/product/sub_category',
        name : 'sub_category',
        component: subCategoryComponent,
        meta: {pageTitle: 'SubCategory Table', dataUrl : 'api/sub_categoies'}
    },
];


export default route;