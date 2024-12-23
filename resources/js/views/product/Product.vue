<template>
    <div class="container-fluid px-4">

        <page-top></page-top>

        <data-table :tableHeading="tableHeading">
            <tr v-for="(data, index) in dataList" :key="index">
                <td> {{ index+1 }} </td>
                <td> {{ data.name }} </td>
                <td> {{ data.category ? data.category.name : 'N/A' }} </td>
                <td> {{ data.sub_category ? data.sub_category.name : 'N/A' }} </td>
                <td>
                    <button @click="openEditModal(data)" class="btn btn-outline-success">
                        <i class="fas fa-edit"></i>
                    </button>

                    <button @click=" deleteInformation(data.id, index)" class="btn btn-outline-danger">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
        </data-table>
        <form-modal ref="myModal" @submit="submitForm(formData)">
            <div class="row">
                <div class="col-md-12 d-flex mb-2">
                    <label class="col-md-4">Category Name</label>
                    <div class="col-md-8">
                    <select v-validate="'required'"
                            v-model="formData.category_id" name="name" class="form-control" type="text">

                        <option value="">Select</option>
                        <template v-for="(item, index) in requiredData.category">
                            <option :value="item.id">{{ item.name }}</option>
                        </template>
                    </select>
                    </div>
                </div>
                <div class="col-md-12 d-flex mb-2">
                    <label class="col-md-4">Sub Category Name</label>
                    <div class="col-md-8">
                        <select v-validate="'required'"
                                v-model="formData.sub_category_id" name="name" class="form-control" type="text">

                            <option value="">Select</option>
                            <template v-for="(item, index) in requiredData.sub_category">
                                <option :value="item.id">{{ item.name }}</option>
                            </template>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 d-flex">
                    <label class="col-md-4">Product Name</label>
                    <div class="col-md-8">
                        <input v-model="formData.name"
                               v-validate="'required'" class="form-control" type="text" name="name"/>
                    </div>
                </div>
            </div>
        </form-modal>
    </div>
</template>

<script>
    import PageTop from "../../../components/pageTop";
    import DataTable from "../../../components/dataTable";
    import FormModal from "../../../components/formModal";
    export default {
        name: "Product",
        components: {FormModal, DataTable, PageTop},
        data() {
            return {
                tableHeading: ['Sl', 'Name', 'Category', 'Sub Category', 'Action'],
            }
        },
        mounted() {
            this.getDataList();
            this.getRequiredData(['category']);
            this.getRequiredData(['sub_category']);
            this.$set(this.formData, 'name', '');
        }
    }
</script>

<style scoped>

</style>