<template>
    <v-card
        class="mx-auto"
    >
    <div>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
            <tr>
                <th scope="col">Parameters</th>
                <th scope="col">Islamabad</th>
                <th scope="col">Lahore</th>
                <th scope="col">Faisalabad</th>
                <th scope="col">Multan</th>
                <th scope="col">Bahawalpur</th>
                <th scope="col">Hyderabad</th>
                <th scope="col">Karachi</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">Tempreture</th>
                <td class="text-center" v-for="temp in this.temperature">{{temp}}</td>
            </tr>
            <tr class="bg-info">
                <th scope="row">WindSpeed</th>
                <td class="text-center" v-for="w in this.windSpeed">{{w}}</td>
            </tr>
            <tr>
                <th scope="row">Sky Condition</th>
                <td class="text-center" v-for="s in this.skyConditions">{{s}}</td>
            </tr>
            <tr class="bg-info">
                <th scope="row">Humidity</th>
                <td class="text-center" v-for="h in this.Humidity">{{h}}</td>
            </tr>
            <tr>
                <th scope="row">Sun Rise</th>
                <td class="text-center" v-for="sr in this.sunRise">{{sr}}</td>
            </tr>
            <tr class="bg-info">
                <th scope="row">Sun Set</th>
                <td class="text-center" v-for="ss in this.sunSet">{{ss}}</td>
            </tr>
            </tbody>
        </table>
    </div>
    </v-card>
</template>

<script>


export default {
    data() {
        return {
            name: "WeatherTable",
            wData: {},
            cities: ['Islamabad', 'Lahore', 'Faisalabad', 'Multan', 'Bahawalpur', 'Hyderabad,PK', 'Karachi'],
            temperature: [],
            windSpeed: [],
            Humidity: [],
            skyConditions: [],
            sunRise: [],
            sunSet: []
        }
    },
    async created() {
        await this.getWeatherData()
    },
    methods: {
        getWeatherData() {
            this.cities.forEach((city, index) => {
                axios.get('api/weather/' + city)
                    .then(response => {
                        this.temperature.push((response.data.main.temp - 273.15).toString().split('.')[0]);
                        this.windSpeed.push(Math.round(response.data.wind.speed / 0.44284));
                        this.skyConditions.push(response.data.weather[0].description);
                        this.Humidity.push(response.data.main.humidity);

                        let date = new Date(response.data.sys.sunrise * 1000);
                        // Hours part from the timestamp
                        let hours = date.getHours();
                        // Minutes part from the timestamp
                        let minutes = "0" + date.getMinutes();
                        // Seconds part from the timestamp
                        let seconds = "0" + date.getSeconds();

                        // Will display time in 10:30:23 format
                        this.sunRise.push(hours + ':' + minutes.substr(-2) + ':' + seconds.substr(-2));

                        let d1 = new Date(response.data.sys.sunset * 1000);
                        // Hours part from the timestamp
                        let hrs = d1.getHours();
                        // Minutes part from the timestamp
                        let mins = "0" + d1.getMinutes();
                        // Seconds part from the timestamp
                        let secs = "0" + d1.getSeconds();

                        this.sunSet.push(hrs + ':' + mins.substr(-2) + ':' + secs.substr(-2));
                    })
                    .catch(error => console.log(error))
            })

        },
    }
}
</script>

<style scoped>

</style>
