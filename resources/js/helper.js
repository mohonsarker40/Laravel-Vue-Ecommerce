const helper = function (store, router) {
    router.beforeEach((to, from, next)=>{
        store.state.updateId = '';
        store.state.formType = 1;
        store.state.formData = {};
        next(true);
    });
}

export default helper;