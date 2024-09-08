<template>
        <div class="container-fluid px-4">

            <page-top></page-top>

            <data-table :tableHeading="tableHeading">
                <tr v-for="(data, index) in dataList" :key="index">
                    <td> {{ index+1 }} </td>
                    <td> {{ data.name }} </td>
                    <td>
<!--                        edit and delete button-->

                        <button @click="openEditModal(data)" class="btn btn-outline-success"
                        ><i class="fas fa-edit"></i></button>
                        <button @click="deleteForm(data)" class="btn btn-outline-danger"><i
                                class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
            </data-table>

            <form-modal ref="myModal" @submit="submitForm()">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Category Name</label>
                            <input v-model="formData.name" class="form-control"
                                   type="text"/>

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

            }
        },
        mounted() {
            this.getDataList(name);
            this.$set(this.formData, 'name', '');
        }
    }
</script>


<style scoped>

</style>