const { createApp } = Vue 

createApp({
    data() {
      return {
        message: 'Hello Vue!',
        apiUrl: 'server.php',
      }
    },
    methods: {
      
    },
  }).mount('#app')