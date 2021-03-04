var app = new Vue({
  el : '#root',
  data: {
    arrayDischi: [];
  },
  mounted() {
    const self = this;
      axios.get('app/server.php').then(function(response)){
        self.arrayDischi = response.data;
        console.log(self.arrayDischi);
      }
  }
})
