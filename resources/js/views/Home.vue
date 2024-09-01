<template>
    <div>
            <h1>This is Home page</h1>
            <router-link to="/admin/home"><h1>Home</h1></router-link>
            <router-link to="/admin/about"><h1>About</h1></router-link>
    </div>
</template>

<script>
    export default {
        name: "Home.vue",

    }
</script>

<style scoped>

</style>