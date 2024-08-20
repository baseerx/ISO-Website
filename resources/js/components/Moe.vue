<template>
    <v-app>
        <v-content>
            <v-container>
                <Section></Section>
                <v-main>
                    <div class="container" style="margin-block:20%">
                        <div class="mt-15">
                            <v-row justify="space-around">
                                <v-col lg-12>
                                    <v-card width="100%">
                                        <v-img
                                            height="200px"
                                            src="/img/banner/discos.jpg"
                                        >
                                            <v-card-title class="white--text mt-8">
                                                <v-avatar size="80">
                                                    <img
                                                        alt="cppa"
                                                        src="/img/logo/moe_logo.jpg"
                                                    >
                                                </v-avatar>
                                                <h2 class="ml-3 text-primary">
                                                    Ministry Of Energy (Power Division)
                                                </h2>
                                            </v-card-title>
                                        </v-img>

                                        <v-card-text>
                                            <div class="d-flex justify-content-center font-weight-bold ml-8 mb-2">
                                                MOE (POWER DIVISION)
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <div class="p-0 text-justify">
                                                    Central Power Purchasing Agency (CPPA-G) is a Company incorporated under the Companies Ordinance, 1984 and wholly owned by the Government of Pakistan (the “GOP”). Since June 2015, CPPA-G has assumed the business of National Transmission and Dispatch Company (the “NTDC”) pertaining to the market operations and presently functioning as the Market Operator in accordance with Rule-5 of the NEPRA Market Operator (Registration, Standards and Procedure) Rules, 2015 (the “Market Rules”).
                                                    The Company is currently performing eight major functions segregated into six core and two support functions. The core functions include (i) settlement, (ii) power procurement on behalf of DISCOs, (iii) finance, (iv) legal and corporate affairs, (v) strategy and market development, (vi) monitoring and coordination. The support functions include (vii) human resource management and (viii) information technology.  <v-card-actions>
                                                    <a
                                                        href="http://www.mowp.gov.pk/"
                                                        color="teal accent-4"
                                                        target="_blank"
                                                    >
                                                        Learn More
                                                    </a>
                                                </v-card-actions>
                                                </div>

                                            </div>
                                        </v-card-text>

                                    </v-card>
                                </v-col>
                            </v-row>
                        </div>
                    </div>
                </v-main>
            </v-container>
        </v-content>
        <Footer></Footer>
    </v-app>
</template>

<script>
import Section from "./Section";
import Footer from "./Footer";

export default {
    components: {
        Section,
        Footer
    },
    data: () => ({
    }),
}
</script>

<style scoped>

</style>
