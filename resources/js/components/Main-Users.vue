
<template>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h4>{{ title }}</h4>
      </div>
      <div class="col-6">
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
          <input
            type="text"
            class="form-control"
            placeholder="Full Name"
            name="name"
            v-model="user.name"

          /></div> <br>
        <div class="form-group">
          <input
            type="email"
            class="form-control"
            placeholder="Email"
             name="email"
             v-model="user.email"
         
          />
        </div>
          <br>
        <div class="form-group">
          <input
            type="password"
            class="form-control"
            placeholder="Password"
             name="password"
             v-model="user.password"
          />
        </div>
        <br>

         <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="user_type" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Admin</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="user_type" id="inlineRadio2" value="option2" checked>
  <label class="form-check-label" for="inlineRadio2" >User</label>
</div>

        </form> 
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Save User</button>
      </div>
    </div>
  </div>
</div>

        <button type="button" class="btn btn-info mr-auto" data-toggle="modal" data-target="#exampleModal">+ Add User</button>
      </div>
    </div>
    <br />
    <div class="row">
      <div class="col-12">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">UserName</th>
              <th scope="col">Email</th>
              <th scope="col">Role</th>
               <th scope="col">Created At</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>8:00am</td>
              <td>
              <a href="#" class="btn btn-sm disabled" role="button" aria-disabled="true">
                      <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="green"
                  class="bi bi-pen-fill"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"
                  />
                </svg>
				
             </a>
             <a href="#" class="btn btn-sm disabled" role="button" aria-disabled="true">
                 <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="red"
                  class="bi bi-x-lg"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"
                  />
                </svg>
				
             </a>

              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
               <td>8:00am</td>
                <td>
              <a href="#" class="btn btn-sm disabled" role="button" aria-disabled="true">
                      <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="green"
                  class="bi bi-pen-fill"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"
                  />
                </svg>
				
             </a>
             <a href="#" class="btn btn-sm disabled" role="button" aria-disabled="true">
                 <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="red"
                  class="bi bi-x-lg"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"
                  />
                </svg>
				
             </a>

              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
               <td>8:00am</td>
                <td>
              <a href="#" class="btn btn-sm disabled" role="button" aria-disabled="true">
                      <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="green"
                  class="bi bi-pen-fill"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"
                  />
                </svg>
				
             </a>
             <a href="#" class="btn btn-sm disabled" role="button" aria-disabled="true">
                 <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="red"
                  class="bi bi-x-lg"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"
                  />
                </svg>
				
             </a>

              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  data() {
    return {
      title: "Users",
      user:{
        name:'',
        email:'',
        password:'',
        user_type:'',
      
      }
    };
  },
  methods:{

  }
};
</script>
<style scoped>
.container {
  margin-top: 5%;
}
div {
  border: 1px solid blue;
}

button {
  color: white;
  font-weight: bold;
  float: right;
}
</style>