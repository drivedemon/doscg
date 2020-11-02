<template>
  <div class="mt-120">
    <h1>Fibonacci</h1>
    <h1>X, Y, 5, 9, 15, 23, Z </h1>
    <h2>x = {{ data[0] }}</h2>
    <h2>y = {{ data[1] }}</h2>
    <h2>z = {{ data[6] }}</h2>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'Fibonacci',
  data () {
    return {
      data: null
    }
  },
  mounted () {
    axios
      .get('http://localhost:8000/api/fibonacci')
      .then(
        response => (
          this.data = response.data.data
        )
      )
  }
}
</script>

<style></style>
