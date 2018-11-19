<template>

</template>

<script>

    export default {
 
  data () {
    return {
        arraymascota:[],
    }
  },
  methods: {

listar()
{
axios.get('/animales')
  .then(function (response) {
    console.log(response);
//me.arraymascota = response.data.mascota;
  })
  .catch(function (error) {
    console.log(error);
  })
  
}
    
  },
        mounted() {
            this.listar();
        }
    }
</script>

