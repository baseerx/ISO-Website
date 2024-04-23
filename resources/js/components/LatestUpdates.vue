<template>
    <nav class="navbar navbar-expand-lg my-0 py-0 text-white transp">
        <div class="mx-auto" style="width: 130px;">
            News Update |
        </div>
        <div class="w-100">
            <marquee direction="left">
                <ul class="text-white">
                    <li>
                        <a class="text-white" href="#">
                            <small class="text-danger">New </small> first news marquee
                        </a>
                    </li>
                    <li>
                        <a class="text-white pl-5" ref="#">
                            Second News Marquee
                        </a>
                    </li>
                    <li>
                        <a class="text-white pl-5" ref="#">
                            Third News Marquee
                        </a>
                    </li>

                </ul>
            </marquee>
        </div>
    </nav>
</template>

<script>
import MarqueeText from 'vue-marquee-text-component'

export default {
    components: {
        MarqueeText
    },
    data() {
        return {
            name: "Header",

        }
    },

    methods: {}
}
</script>

<style>
.transp {
    background: rgba(0, 0, 0, 0.5);
}
ul{
    list-style-type: none;
}
li {
    float: left;
}

</style>
