<template>
    <div class="row mt-4 d-flex  align-items-center">
        <div class="text-start col-md-6">
            <h3 class="">{{ $route.meta.pageTitle }}</h3>
        </div>
        <div class="text-end col-md-6">
            <button @click="openModal('myModal')" class="btn btn-primary mb-2">
                <i class="fa fa-plus"></i>
                <span>Add New</span>
            </button>
        </div>
    </div>
</template>

<script>
    export default {
        name: "pageTop"
    }
</script>

<style scoped>

</style>