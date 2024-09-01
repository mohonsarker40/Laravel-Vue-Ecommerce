<template>
    <div>
        <TopNav></TopNav>

        <div id="layoutSidenav">
            <SideNav></SideNav>

            <div id="layoutSidenav_content">
                <main>
                    <router-view></router-view>
                </main>

                <Footer></Footer>
            </div>
        </div>

    </div>

</template>

<script>
    import TopNav from "../components/topNav";
    import SideNav from "../components/sideNav";
    import Footer from "../components/footer";
    export default {
        name: "App",
        components: {Footer, SideNav, TopNav}
    }
</script>

<style scoped>

</style>