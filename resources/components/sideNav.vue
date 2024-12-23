<template>
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>


                    <router-link class="nav-link" to="/admin/dashboard">
                        <div class="sb-nav-link-icon">
                            <svg class="svg-inline--fa fa-gauge-high" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gauge-high" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM288 96a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM256 416c35.3 0 64-28.7 64-64c0-17.4-6.9-33.1-18.1-44.6L366 161.7c5.3-12.1-.2-26.3-12.3-31.6s-26.3 .2-31.6 12.3L257.9 288c-.6 0-1.3 0-1.9 0c-35.3 0-64 28.7-64 64s28.7 64 64 64zM176 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM96 288a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm352-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"></path></svg><!-- <i class="fas fa-tachometer-alt"></i> Font Awesome fontawesome.com --></div>
                        Dashboard
                    </router-link>

                    <div class="sb-sidenav-menu-heading">Ecommerce</div>

                <!--product-->
                    <template v-for="(menu, mIndex) in Config.menus">
                        <template v-if="menu.sub_menus.length > 0">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                <span>{{ menu.name }}</span>
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <template v-for="(subMenu, sIndex) in menu.sub_menus">
                                        <router-link class="nav-link" :to="subMenu.link">{{ subMenu.name }}</router-link>
                                    </template>
                                </nav>
                            </div>
                        </template>
                        <template v-else>
                            <router-link class="nav-link" :to="menu.link">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                {{ menu.name }}
                            </router-link>
                        </template>
                    </template>

                    <!--customer menu-->
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                       data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <span>Customer</span>
                        <div class="sb-sidenav-collapse-arrow">
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-left"></i></div>
                        </div>
                    </a>
                    <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne"
                         data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <router-link class="nav-link" to="/admin/customer/customers">Customers</router-link>
                            <router-link class="nav-link" to="/admin/customer/order">Order</router-link>
                        </nav>
                    </div>


                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Rangpur Shop
            </div>
        </nav>
    </div>
</template>



<script>
    export default {
        name: "sideNav",
        methods : {
            getConfigurations : function (){
                const _this = this;
                let url = _this.urlGenerate('api/configurations');
                _this.httpReq('get', url, {}, {}, function (retData){
                    _this.$store.commit('Config', retData.result);
                    _this.$store.commit('permissions', retData.result.permissions);
                })
            }
        },
        mounted() {
            this.getConfigurations();
        }
    }
</script>
<style scoped>
</style>