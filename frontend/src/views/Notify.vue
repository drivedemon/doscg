<template>
  <div class="mt-120">
    <h1>Bot can't response there message</h1>
    <h2>Latest message: {{ data.data }}</h2>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'Notify',
  data () {
    return {
      data: null
    }
  },
  async beforeCreate () {
    await axios
      .get('http://localhost:8000/api/notify')
      .then(
        response => (
          console.log(response.data),
          this.data = response.data
        )
      )
  }
}
</script>

<style></style>
