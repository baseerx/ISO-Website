<template>
    <div class="fixed-top">
        <nav class="navbar navbar-light bg-img">

        </nav>
        <Header></Header>
        <LatestUpdates></LatestUpdates>
    </div>
</template>

<script>
import Header from "./Header";
import LatestUpdates from "./LatestUpdates";
export default {
    components: {
        Header,
        LatestUpdates
    }
}
</script>

<style scoped>
.bg-img {
    /* The image used */
    background-image: url("/img/banner/bbb1.png");

    min-height: 170px;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

    /* Needed to position the navbar */
    position: relative;
}
</style>
