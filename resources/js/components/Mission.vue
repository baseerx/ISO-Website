<template>
    <div class="d-flex justify-content-center">
        <div class="p-2">
            <v-card
                class="mx-auto"
                width="435"
            >
                <v-img
                    src="/img/cards/1.png"
                    height="200px"
                ></v-img>

                <v-card-title>
                    NPCC ISLAMABAD (MISSION)
                </v-card-title>

                <v-card-subtitle>
                    Reliable and economical management of National Grid.
                </v-card-subtitle>

                <v-card-actions>
                    <v-btn
                        color="orange lighten-2"
                        text
                    >
                        DETAILS
                    </v-btn>

                    <v-spacer></v-spacer>

                    <v-btn
                        icon
                        @click="showMission = !showMission"
                    >
                        <v-icon>{{ showMission ? 'mdi-chevron-up' : 'mdi-chevron-down' }}</v-icon>
                    </v-btn>
                </v-card-actions>

                <v-expand-transition>
                    <div v-show="showMission">
                        <v-divider></v-divider>

                        <v-card-text>
                            <p class="text-justify"> The National Power Control Center (NPCC) functions as the nerve
                                center of the electricity generation and transmission system. The engineers of NPCC pass
                                on instructions to GENCOS, IPPs, various formations of NTDC, DISCOS, & Residual WAPDA
                                from its main control center and regional control centers to ensure smooth and
                                economical system operation in providing electricity supply to the end customer as per
                                grid code.
                            </p>
                        </v-card-text>
                    </div>
                </v-expand-transition>
            </v-card>
        </div>
        <div class="p-2">
            <v-card
                class="mx-auto"
                width="435"
            >
                <v-img
                    src="/img/cards/newmap.jpeg"
                    height="200px"
                ></v-img>

                <v-card-title>
                    ELECTRICITY DISTRIBUTION COMPANIES
                </v-card-title>

                <v-card-subtitle>
                Load Map
                </v-card-subtitle>

                <v-card-actions>
                    <v-btn
                        color="orange lighten-2"
                        text
                    >
                        DETAILS
                    </v-btn>

                    <v-spacer></v-spacer>

                    <v-btn
                        icon
                        @click="show = !show"
                    >
                        <v-icon>{{ show ? 'mdi-chevron-up' : 'mdi-chevron-down' }}</v-icon>
                    </v-btn>
                </v-card-actions>

                <v-expand-transition>
                    <div v-show="show">
                        <v-divider></v-divider>
                        <v-card-text class="text-justify">
                            Distribution company (DISCO) is a company under Pakistan Electric Power Company (PEPCO) and is responsible for distribution of electricity in their respective allocated areas. They buy electricity from Water and Power Development Authority (WAPDA), PEPCO and other private Independent Power Producers (IPPs) and sell it to their respective area customers. All companies are owned by the Government of Pakistan except K-Electric which was privatized.
                        </v-card-text>
                    </div>
                </v-expand-transition>
            </v-card>
        </div>
        <div class="p-2">
            <v-card
                class="mx-auto"
                width="435"
            >
                <v-img
                    src="/img/cards/3.png"
                    height="200px"
                ></v-img>

                <v-card-title>
                    CONTROL CENTER
                </v-card-title>

                <v-card-subtitle>
                    Switching & Operations
                </v-card-subtitle>

                <v-card-actions>
                    <v-btn
                        color="orange lighten-2"
                        text
                    >
                        DETAILS
                    </v-btn>

                    <v-spacer></v-spacer>

                    <v-btn
                        icon
                        @click="showVision = !showVision"
                    >
                        <v-icon>{{ showVision ? 'mdi-chevron-up' : 'mdi-chevron-down' }}</v-icon>
                    </v-btn>
                </v-card-actions>

                <v-expand-transition>
                    <div v-show="showVision">
                        <v-divider></v-divider>
                        <v-card-text class="text-justify">
                            To be the Business Role Model for the Public Sector in Pakistan through its excellent
                            Operations & Despatch, backing the economic growth in the country.
                        </v-card-text>
                    </div>
                </v-expand-transition>
            </v-card>
        </div>
    </div>
</template>

<script>
export default {
    data: () => ({
        showMission: false,
        showVision: false,
        show: false,
    })
}
</script>

<style scoped>

</style>
