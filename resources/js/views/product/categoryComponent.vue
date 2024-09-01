<template>
        <div class="container-fluid px-4">

            <page-top></page-top>

            <data-table :tableHeading="tableHeading">
                <tr v-for="(data, index) in dataList">
                    <td> {{ index+1 }} </td>
                    <td> {{ data.name }} </td>
                    <td>
                        <a href="#" ><i class="fas fa-edit"></i></a>
                        <a href="#" ><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            </data-table>
        </div>
</template>

<script>
    import PageTop from "../../../components/pageTop";
    import DataTable from "../../../components/dataTable";

    export default {
        name: "categoryComponent",
        components: {DataTable, PageTop},
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