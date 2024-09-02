<template>
        <div class="container-fluid px-4">

            <page-top></page-top>

            <data-table :tableHeading="tableHeading">
                <tr v-for="(data, index) in dataList" :key="index">
                    <td> {{ index+1 }} </td>
                    <td> {{ data.name }} </td>
                    <td>
<!--                        edit and delete button-->

                        <button href="#" class="btn btn-outline-success" ><i class="fas fa-edit"></i></button>
                        <button href="#" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
            </data-table>

            <form-modal :form-data="formData">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Category Name</label>
                            <input v-model="formData.name" class="form-control" type="text">
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
        name: "categoryComponent",
        components: {FormModal, DataTable, PageTop},
        data() {
            return {
                tableHeading: ['Sl', 'name', 'Action'],
                dataList: [],
            }
        },
        mounted() {
            this.getDataList();
        }
    }
</script>

<style scoped>

</style>