<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold fst-italic text-white" href="/">web-clocking-app</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav position-absolute top-0 end-0">
       
        <a class="nav-link text-white" href="">Report</a>
        <a class="nav-link text-white" href="">Users</a>
        <a class="nav-link text-white" href="/logout">logout</a>
       
      </div>
    </div>
  </div>
</nav>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>
.navbar-nav{
  margin-right: 50px;
}
</style>