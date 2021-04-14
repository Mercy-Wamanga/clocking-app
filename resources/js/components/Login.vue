<style scoped>
section{
    margin-top: 40%;
}
.card{
   height:300px;  
}
.card-body{
    padding:30px;
    height:200px;
}
</style>

<template>

<div class="card w-25 position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
  <div class="card-body d-grid gap-3">
    
    <h6 class="card-subtitle mb-2 text-muted fw-bolder h3-font-size text-center fs-3">Sign In</h6>
      <form action="#" class="login-form">
            <div class="form-group p-2 bg-light">
            <input type="text" class="form-control rounded-left" placeholder="Username" required>
            </div>
            <div class="form-group d-flex p-2 bg-light ">
            <input type="password" class="form-control rounded-left" placeholder="Password" required>
            </div>
            <div class="form-group p-2 bg-light d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class=" btn btn-info me-md-1 rounded submit text-light fs-6">Login To Clocking</button>
            </div>
           
</form>
  </div>
</div>






</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>