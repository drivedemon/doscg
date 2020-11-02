<template>
  <div>
    <footer>
      <div class="container">
        <span class="text-muted">This is "FOOTER"</span>
      </div>
    </footer>
  </div>
</template>

<script>
export default {
  name: 'Footer'
}
</script>

<style>
footer {
  text-align: center;
  background: linear-gradient(to right, rgb(219, 219, 202) 0%, rgb(219, 219, 202) 100%);
  position: absolute;
  left: 0;
  bottom: 0;
  height: auto;
  width: 100%;
  line-height: 60px;
  overflow:hidden;
}
.footer {
  text-align: center;
  position: absolute;
  overflow:hidden;
  bottom: 0;
  width: 100%;
  height: auto;
  line-height: 60px;
  background: linear-gradient(to right, rgb(219, 219, 202) 0%, rgb(219, 219, 202) 100%);
}
</style>
