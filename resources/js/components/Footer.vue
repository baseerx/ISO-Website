<template>
    <v-footer padless>
        <v-col lg="12">
            <v-row justify="center">
                <v-col lg="6" class="text-center">
                    <v-toolbar-title class="text-success text-uppercase">National Power Control Center (System Operation)</v-toolbar-title>
                    <v-card-text>
                        <v-btn
                                v-for="icon in icons"
                                :key="icon"
                                class="mx-4 black--text"
                                icon
                        >
                            <v-icon size="24px">
                                {{ icon }}
                            </v-icon>
                        </v-btn>
                    </v-card-text>
                    <v-subheader>
                        O/o General Manager (System Operation)
                        Address: Faiz Ahmed Faiz Rd, H-8/1,Islamabad Capital Territory, Pakistan
                    </v-subheader>
                    <v-form class="mt-4">
                        <v-text-field label="Email" outlined dense />
                        <v-btn rounded color="success">Subscribe us</v-btn>
                    </v-form>
                </v-col>

            </v-row>
            <div class="mt-10">
                <v-divider></v-divider>
                <v-subheader>
                    © Copyright Web Burden. All Rights Reserved {{ new Date().getFullYear() }} — <strong>NPCC (ISO)</strong>
                    <v-spacer />
                    <strong class="text-info">Designed & Developed by ISO TEAM</strong>
                </v-subheader>
            </div>
        </v-col>
    </v-footer>
</template>

<script>
    export default {
        name: "Footer",
        data() {
            return {
                icons: [
                    'mdi-facebook',
                    'mdi-twitter',
                    'mdi-linkedin',
                    'mdi-instagram',
                ],
            }
        }
    }
</script>

<style scoped>

</style>
