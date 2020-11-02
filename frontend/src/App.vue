<template>
  <div id="app">
    <NavBar/>
    <Content/>
    <Footer/>
  </div>
</template>

<script>
import NavBar from './components/NavBar.vue'
import Content from './components/Content.vue'
import Footer from './components/Footer.vue'

export default {
  name: 'App',
  components: {
    NavBar,
    Content,
    Footer
  }
}
</script>

<style media="screen">
  h1 {
    text-align: center;
    /* position: absolute; */
    top: 30%;
    width: 100%;
    line-height: 60px;
  }

  h2 {
    text-align: center;
    /* position: absolute; */
    top: 50%;
    width: 100%;
    line-height: 60px;
  }

  body {
    background: linear-gradient(to right, rgb(255, 250, 241) 0%, rgb(255, 250, 241) 100%);
  }

  .mt-120 {
    margin-top: 120px;
  }
</style>
