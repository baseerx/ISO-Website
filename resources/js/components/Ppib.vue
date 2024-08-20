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
                                                    Private Power Infrastructure Board (Power Division)
                                                </h2>
                                            </v-card-title>
                                        </v-img>

                                        <v-card-text>
                                            <div class="d-flex justify-content-center font-weight-bold ml-8 mb-2">
                                                PPIB (POWER DIVISION)
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <div class="p-0 text-justify">
                                                    Private Power and Infrastructure Board (PPIB) was created in 1994 as a "One-Window Facilitator" on behalf of the Government of Pakistan (GoP) to promote private investments in power sector. In 2012 PPIB was made a statutory organization through Private Power and Infrastructure Board Act 2012 (Act VI of 2012). The role of PPIB has been further expanded by the GoP by allowing it to facilitate public sector power and related infrastructure projects in IPP mode, for which PPIB's Act has been amended in November 2015.
                                                    <a
                                                        href="http://www.mowp.gov.pk/"
                                                        color="teal accent-4"
                                                        target="_blank"
                                                    >
                                                        Learn More
                                                    </a>
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
