<template>
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>


<!--                    <router-link class="nav-link" to="/admin/dashboard">-->
<!--                        <div class="sb-nav-link-icon">-->
<!--                            <svg class="svg-inline&#45;&#45;fa fa-gauge-high" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gauge-high" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM288 96a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM256 416c35.3 0 64-28.7 64-64c0-17.4-6.9-33.1-18.1-44.6L366 161.7c5.3-12.1-.2-26.3-12.3-31.6s-26.3 .2-31.6 12.3L257.9 288c-.6 0-1.3 0-1.9 0c-35.3 0-64 28.7-64 64s28.7 64 64 64zM176 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM96 288a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm352-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"></path></svg>&lt;!&ndash; <i class="fas fa-tachometer-alt"></i> Font Awesome fontawesome.com &ndash;&gt;</div>-->
<!--                        Dashboard-->
<!--                    </router-link>-->

                    <div class="sb-sidenav-menu-heading">Ecommerce</div>

<!--                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">-->
<!--                        <div class="sb-nav-link-icon">-->
<!--                            <i class="fab fa-product-hunt"></i>-->
<!--                        </div>-->
<!--                        <span>Product</span>-->
<!--                        <div class="sb-sidenav-collapse-arrow">-->
<!--                            <i class="bi bi-arrow-down"> ↓ </i>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">-->
<!--                        <nav class="sb-sidenav-menu-nested nav">-->
<!--                            <router-link class="nav-link" to="/admin/product/category">-->
<!--                                <i class="fas fa-arrow-right px-2"></i>-->
<!--                                Category-->
<!--                            </router-link>-->

<!--                            <router-link class="nav-link" to="/admin/product/sub_category">-->
<!--                                <i class="fas fa-arrow-right px-2"></i>-->
<!--                                SubCategory-->
<!--                            </router-link>-->

<!--                            <router-link class="nav-link" to="/admin/product/product">-->
<!--                                <i class="fas fa-arrow-right px-2"></i>-->
<!--                                Products-->
<!--                            </router-link>-->
<!--                        </nav>-->
<!--                    </div>-->

<!--customer menu-->
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

<!--                    -->
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                       data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <span>Customer</span>
                        <div class="sb-sidenav-collapse-arrow">
                            <i class="bi bi-arrow-down"> ↓ </i>
                        </div>
                    </a>
                    <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne"
                         data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <router-link class="nav-link" to="/admin/customer/customers">Customers</router-link>
                            <router-link class="nav-link" to="/admin/customer/order">Order</router-link>
                        </nav>
                    </div>



                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="charts.html">
                        <div class="sb-nav-link-icon"><svg class="svg-inline--fa fa-chart-area" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chart-area" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm96 288H448c17.7 0 32-14.3 32-32V251.8c0-7.6-2.7-15-7.7-20.8l-65.8-76.8c-12.1-14.2-33.7-15-46.9-1.8l-21 21c-10 10-26.4 9.2-35.4-1.6l-39.2-47c-12.6-15.1-35.7-15.4-48.7-.6L135.9 215c-5.1 5.8-7.9 13.3-7.9 21.1v84c0 17.7 14.3 32 32 32z"></path></svg><!-- <i class="fas fa-chart-area"></i> Font Awesome fontawesome.com --></div>
                        Charts
                    </a>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><svg class="svg-inline--fa fa-table" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M64 256V160H224v96H64zm0 64H224v96H64V320zm224 96V320H448v96H288zM448 256H288V160H448v96zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"></path></svg><!-- <i class="fas fa-table"></i> Font Awesome fontawesome.com --></div>
                        Tables
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Start Bootstrap
            </div>
        </nav>
    </div>
</template>

<!--<script>-->
<!--    export default {-->
<!--        name: "sideNav"-->
<!--    }-->
<!--</script>-->

<!--<style scoped>-->

<!--</style>-->

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