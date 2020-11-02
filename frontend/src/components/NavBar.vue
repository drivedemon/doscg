<template>
  <div>
    <b-navbar toggleable="lg" type="dark" variant="dark">
      <b-navbar-brand class="font-weight-bold" href="/">HOME</b-navbar-brand>

      <b-collapse id="nav-collapse" is-nav>
        <b-navbar-nav>
          <b-nav-item href="/fibonacci">Fibonacci</b-nav-item>
          <b-nav-item href="/calculate">Find B/C Value</b-nav-item>
          <b-nav-item href="/map">Google map API</b-nav-item>
          <b-nav-item href="/notify">Line Notify</b-nav-item>
        </b-navbar-nav>

        <!-- Right aligned nav items -->
        <b-navbar-nav class="ml-auto">
          <b-navbar-brand right href="/about">
            <svg style="margin-bottom: 5px" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor">
              <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
            About Me
          </b-navbar-brand>
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>
  </div>
</template>

<script>
export default {
  name: 'NavBar'
}
</script>
