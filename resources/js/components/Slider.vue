<template>
        <div class="pt-15">
            <div class="d-flex justify-content-between pt-3 mt-15">
                <v-carousel
                    cycle
                    height="400"
                    width="100%"
                    interval="5000"
                >
                    <v-carousel-item
                        v-for="(item,i) in items"
                        :key="i"
                        :src="item.src"
                    >
                    </v-carousel-item>
                </v-carousel>
            </div>
        </div>
</template>
<script>

export default {
    data() {
        return {
            items: [
                {
                    src: '/img/banner/1.png',
                },
                {
                    src: '/img/banner/2.png',
                },
                {
                    src: '/img/banner/3.png',
                },
                {
                    src: '/img/banner/4.png',
                },
                {
                    src: '/img/banner/5.png',
                },
                {
                    src: '/img/banner/6.png',
                },
                {
                    src: '/img/banner/7.png',
                },
                {
                    src: '/img/banner/8.png',
                },
                {
                    src: '/img/banner/10.png',
                },
                {
                    src: '/img/banner/new final size.jpg',
                }
            ],
        }
    },
}
</script>
<style>

</style>
