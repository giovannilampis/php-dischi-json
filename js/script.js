const { createApp } = Vue 

createApp({
    data() {
      return {
        apiUrl: 'server.php',
        data: '',
        diskDetails: ''
      }
    },
    methods: {
      callApi() {
        axios.get( this.apiUrl ).then( (res) => {
          this.data = res.data;
        } )
      },
      // showSingleCard(i) {
      //   const datoIndice = {
      //     diskIndex: i
      //   }
      //   axios.get( this.apiUrl, { datoIndice } )
      //     .then( (res)=> {
      //       this.diskDetails = res.data;
      //     } )
      // }
    },
    created() {
      this.callApi();
    },
  }).mount('#app')