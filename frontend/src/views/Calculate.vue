<template>
  <div class="mt-120">
    <h1>Find B C Value</h1>
    <h1>If A = 21, A + B = 23, A + C = -21 </h1>
    <h2>B = {{ data['b'] }}</h2>
    <h2>C = {{ data['c'] }}</h2>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'Calculate',
  data () {
    return {
      data: null
    }
  },
  mounted () {
    axios
      .get('http://localhost:8000/api/calculate')
      .then(
        response => (
          this.data = response.data
        )
      )
  }
}
</script>

<style></style>
