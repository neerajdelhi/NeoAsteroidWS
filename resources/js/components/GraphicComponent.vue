<template>
  <div class="small">
    <input type="date" value="start date" v-model="startdate">
    <input type="date" value="end date" v-model="enddate">
    <button v-on:click="getDetails">Submit</button>
    <h4 style="margin-top:3px;">Asteroid NeosWS</h4>
    <line-chart :chart-data="datacollection" :height="100"></line-chart>
  </div>
</template>

<script>

import LineChart from './LineChart.js'
import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'

export default {


  components: {
    LineChart
  },
  data() {
    return {
      datacollection: null,
      startdate: '',
      enddate: ''
    }
  },
  mounted() {
    this.fillData()
    Vue.axios.get('https://api.nasa.gov/neo/rest/v1/feed?start_date=2015-09-07&end_date=2015-09-08&api_key=YEHodwsF7ZUz08nUX7bI2qoXc112wJxm2ZSQcvKW')
      .then((resp)=> {
        var max = 0, fastest_astro_id = 0, 
        farest_astro = '', closet_astro = 0, avg_size = 0;
        farest_astro = 0;
        list_farest_astro = [];
      
        //fastest astro
        (resp.data.near_earth_objects["2015-09-08"]).forEach(myFunction)
        console.log('max: '+max+ ' id: '+fastest_astro_id)

        //closet astro
        ((resp.data.near_earth_objects["2015-09-08"]).forEach(findMin));
        closet_astro = farest_astro;
        console.log('closet astro '+ closet_astro)

        
        function myFunction(item, index){
          if(max < (item.close_approach_data[0].relative_velocity.kilometers_per_hour) ){
            max = item.close_approach_data[0].relative_velocity.kilometers_per_hour  
            fastest_astro_id = item.id
          }

          list_farest_astro.push((item.close_approach_data[0].miss_distance.kilometers)); 
          //calculate farest asteroid
          if(farest_astro < (item.close_approach_data[0].miss_distance.kilometers)){
            farest_astro = item.close_approach_data[0].miss_distance.kilometer;
          }

        }

        function findMin(item, index){
          if(farest_astro > (item.close_approach_data[0].miss_distance.kilometers)){
            farest_astro = item.close_approach_data[0].miss_distance.kilometers
            closet_astro_id = item.id
          }
        }
        console.warn(resp.data.near_earth_objects["2015-09-08"][0].close_approach_data[0].relative_velocity.kilometers_per_hour)
        // console.warn('url: https://api.nasa.gov/neo/rest/v1/feed?start_date='+startdate+'&end_date='+endate+'&api_key=YEHodwsF7ZUz08nUX7bI2qoXc112wJxm2ZSQcvKW ')
      })
  },
  methods: {

    async getDetails() {
      Vue.axios.get('https://api.nasa.gov/neo/rest/v1/feed?start_date=2015-09-07&end_date=2015-09-08&api_key=YEHodwsF7ZUz08nUX7bI2qoXc112wJxm2ZSQcvKW')
      .then((resp)=> {
        console.warn(resp.data.near_earth_objects.close_approach_data)
      })
    },
    fillData() {
      this.datacollection = {
        labels: ['Jan', 'feb', 'mar', 'apr', 'may', 'jun', 'july'],
        datasets: [
          {
            label: 'Fastest Asteroid',
            backgroundColor: 'yellow',
            data: [20, 40, 50, 20, 50, 40, 0]
          },
          {
            label: 'Closet Asteroid',
            backgroundColor: 'blue',
            data: [30, 45, 89, 89, 55, 41, 10]
          },
          {
            label: 'Average Asteroid',
            backgroundColor: 'pink',
            data: [10, 20, 60, 90, 100, 110, 120]
          },
        ]
      }
    }
  }
}
</script>

<style lang="css">
.small {
  max-width: 800px;
  /* max-height: 500px; */
  margin: 50px auto;
}
</style>