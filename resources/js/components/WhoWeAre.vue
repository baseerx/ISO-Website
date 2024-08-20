<template>
    <v-app>
        <Section></Section>
        <v-main>
            <div class="container" style="margin-block:20%">
            <div class="mt-15">
                <p class="description text-justify">
                    The National Power Control Center (NPCC) functions as the nerve center of the electricity generation and transmission system. The engineers of NPCC pass on instructions to GENCOS, IPPs, various formations of NTDC, DISCOS, & Residual WAPDA from its main control center and regional control centers to ensure smooth and economical system operation in providing electricity supply to the end customer as per grid code.
                    •	National Control Centre Islamabad
                    •	Regional Control Centre North Islamabad
                    •	Regional Control Centre South Jamshoro
                    All these Control centers functions round the clock.
                </p>
            </div>
            </div>
            <Footer></Footer>
        </v-main>
    </v-app>
</template>

<script>
import Footer from "./Footer";
import Section from "./Section";
export default {
    components:{
        Footer,
        Section
    }
}
</script>

<style scoped>

</style>
