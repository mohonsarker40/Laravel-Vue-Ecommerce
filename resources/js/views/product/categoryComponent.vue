<template>
        <div class="container-fluid px-4">

            <page-top></page-top>

            <data-table :tableHeading="tableHeading">
                <tr v-for="(data, index) in dataList">
                    <td> {{ index+1 }} </td>
                    <td> {{ data.name }} </td>
                    <td>
                        <a href="#" class="btn btn-outline-success" ><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            </data-table>

            <form-modal>
                <form @submit.prevent="submitForm(formData)">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Category Name</label>
                            <input v-model="formData.name" class="form-control" type="text">
                        </div>
                    </div>
                </form>
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
                tableHeading: ['Sl', 'name', 'Action']
            }
        },
        mounted() {
            this.getDataList ();
        }
    }
</script>

<style scoped>

</style>