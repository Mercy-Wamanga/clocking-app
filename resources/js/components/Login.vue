<template>

<div class="card w-25 position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
  <div class="card-body gap">
    <!-- d-grid gap-3 -->
    
    <h6 class="card-subtitle text-muted fw-bolder h3-font-size text-center fs-3">Sign In</h6>
    <hr>
      <form method="POST" action="" class="login-form bg-light">
             <p id="success"></p>
            <div class="form-group p-2 bg-light form-card">
            <input type="text" class="form-control rounded-left t" placeholder="Email" v-model="login.email" required>
            
            
            </div>
            <div class="form-group d-flex p-2 bg-light">
            <input type="password" class="form-control rounded-left t" placeholder="Password"  v-model="login.password" required>
            </div>
            <div class="form-group p-2 bg-light d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class=" btn btn-info me-md-1 rounded submit text-light fs-6 ">Login To Clocking</button>
            </div>
           
</form>
  </div>
</div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
          return {
            login:{
              email: '',
            password: '',
            }
          }
        },
        methods: {

          auth() {
            axios 
            .post("http://localhost/login", {
        email: this.email,
        password: this.password,
     
      })
      .then((response) => {
        if (response.data == 1) {
          $('#success').html(response.data.message)
        }
      })
      .catch(function (error) {
        console.log(error);
      })
      .finally(() => (this.loading = false));
            
          }
        },
    }
</script>
<style scoped>

.card{
   height:300px;  
}
.card-body{
    
    height:200px;
}
/* .t{
  padding:100px;
  margin:100px;
} */

.gap{
  margin:10%;
}

.form-card{
  margin-top:5%;
}
</style>