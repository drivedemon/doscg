<template>
  <div class="mt-120">
    <h1>Map direction from SCG bangsue to Central world</h1>
    <div v-if="!error">
      <h2>Distance: {{ routes['legs'][0]['distance']['text'] }}</h2>
      <h2>Duration: {{ routes['legs'][0]['duration']['text'] }}</h2>
      <h2>Steps</h2>
      <div class="text-center" v-for="step in steps" v-bind:key="step.html_instructions">
        <div v-html="step.html_instructions"></div>
      </div>
    </div>
    <h2 v-else>Oh no something went wrong 😢</h2>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'Map',
  data () {
    return {
      routes: null,
      steps: null,
      error: false
    }
  },
  mounted () {
    axios
    .get('http://localhost:8000/api/map')
    .then(
      response => (
        this.routes = response.data.data.routes[0],
        this.steps = response.data.data.routes[0].legs[0].steps
      )
    ).catch(
      error => (
        this.error = true,
        console.log(error)
      )
    )
  }
}
</script>

<style></style>
