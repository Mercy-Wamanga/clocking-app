<style scoped>

img{
    margin-left:40%;
   
    size: 300px;
}

</style>

<template>
   <div class="container">
       <div class="row">
           <div class="icon-image position-absolute top-50 start-50 translate-middle">
               <img src="images/wall-clock5.png" alt="web-clocking">
           </div>
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