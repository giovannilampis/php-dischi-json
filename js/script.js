const { createApp } = Vue 

createApp({
    data() {
      return {
        message: 'Hello Vue!',
        apiUrl: 'server.php',
        data: '',
      }
    },
    methods: {
      callApi() {
        axios.get( this.apiUrl ).then( (res) => {
          this.data = res.data;
        } )
      }
    },
    created() {
      this.callApi();
    },
  }).mount('#app')