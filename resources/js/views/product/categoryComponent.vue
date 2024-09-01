<template>
        <div class="container-fluid px-4">

            <page-top></page-top>
            <data-table>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                </tr>
            </data-table>
        </div>
</template>

<script>
    import PageTop from "../../../components/pageTop";
    import DataTable from "../../../components/dataTable";
    export default {
        name: "categoryComponent",
        components: {DataTable, PageTop}
    }
</script>

<style scoped>

</style>