<template>
    <div>
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Thanks for coming back!</li>
                </ol>
                <div class="row g-4">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white shadow">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <span>Category</span>
                                <h4 class="mb-0">0</h4>
<!--                                <h4 class="mb-0">{{ dataList.category }}</h4>-->
                            </div>
                            <div class="card-footer text-white-50 small text-center">More details</div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white shadow">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <span>Subcategory</span>
                                <h4 class="mb-0">0</h4>
                            </div>
                            <div class="card-footer text-white-50 small text-center">More details</div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white shadow">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <span>Product</span>
                                <h4 class="mb-0">0</h4>
                            </div>
                            <div class="card-footer text-white-50 small text-center">More details</div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-secondary text-white shadow">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <span>Customer</span>
                                <h4 class="mb-0">0</h4>
                            </div>
                            <div class="card-footer text-white-50 small text-center">More details</div>
                        </div>
                    </div>
                </div>
                <div class="row pt-2 g-4">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white shadow">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <span>Order</span>
                                <h4 class="mb-0">0</h4>
                            </div>
                            <div class="card-footer text-white-50 small text-center">More details</div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</template>

<script>
    export default {
        name: "dashboardComponent.vue",
        mounted() {
            // const _this = this;
            // this.getDataList(1, (retData) => {});
        }
    }
</script>

<style scoped>

</style>