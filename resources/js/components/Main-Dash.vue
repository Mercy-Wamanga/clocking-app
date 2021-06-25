
<template>
  <div class="container">
    <div class="wrapper position-absolute top-50 start-50 translate-middle">
      <form class="form" action="/dashboard-users/time" method="POST" >
        <label for="time">
          <h1 class="title text-body" v-text="currenttime"></h1> </label
        ><br />
        <label for="date">
          <h5 class="title text-muted" v-text="currentdate"></h5> </label
        ><br />
        <button
          type="button"
          class="btn btn-info text-white"
          v-show="isVisible"
          @click="toggleSeen"
          @submit="enterTime()"
        >
          Time In
        </button>
         <button
          type="button"
          class="btn btn-danger text-white"
           v-show="!isVisible"
          @click="toggleSeen"
          
        >
         Time Out
        </button>
      </form>
    </div>
  </div>
</template>

<script type="text/javascript">
const moment = require("moment");
export default {
  mounted() {
    console.log("welcome");
  },
  data() {
    return {
      message: "current date and time",
      currentdate: null,
      currenttime: null,
      isVisible: false,
    };
  },
  methods: {
    updatecurrent() {
      this.currentdate = moment().format(" ddd DD-MM-YY");
      this.currenttime = moment().format("LTS");
    },
    toggleSeen() {
      this.isVisible = !this.isVisible;
    },
    enterTime(){
        alert("entering time...");
    }
  },
  created() {
    this.currentdate = moment().format("YYYY-MM-DD ddd");
    this.currenttime = moment().format("HH:mm");
    setInterval(() => this.updatecurrent());
  },
};
</script>
<style scoped>
.wrapper {
  width: 500px;
  height: 400px;
  margin-top: 6%;
  margin-right: 500px;
  text-align: center;
}
h5 {
  text-align: center;
  color: rgba(0, 0, 0, 0.3);
}

button {
  width: 100px;
  height: 40px;
}
/* div{
    border:1px solid green;
} */
</style>