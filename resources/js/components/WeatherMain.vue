<template>
<div class="d-flex justify-content-center">
    <div class="p-1">
        <WeatherTable></WeatherTable>
    </div>
    <div class="p-1">
        <WeatherBoard></WeatherBoard>
    </div>
</div>
</template>

<script>
import WeatherBoard from "./WeatherBoard";
import WeatherTable from "./WeatherTable";

export default {
    components: {
        WeatherBoard,
        WeatherTable
    },
    data()
    {
        return {
            name: "WeatherMain"
        }
    }
}
</script>

<style scoped>

</style>
