<template>
    <div class="container-fluid px-4">

        <page-top></page-top>

        <data-table :tableHeading="tableHeading">
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>kyo</td>
            </tr>
        </data-table>
    </div>
</template>

<script>
    import PageTop from "../../../components/pageTop";
    import DataTable from "../../../components/dataTable";
    import axios from 'axios';


    export default {
        name: "subCategoryComponent",
        components: {DataTable, PageTop},
        data(){
            return {
                tableHeading: ['Sl', 'name', 'Category', 'Action']
            }
        },
        methods : {
            getDataList : function () {
                axios.get(`${baseUrl}/${this.$route.meta.dataUrl}`)
                    .then(function (response) {
                        console.log(response);
                    })
            }
        },
        mounted() {
            then.getDataList();
        }
    }
</script>

<style scoped>

</style>