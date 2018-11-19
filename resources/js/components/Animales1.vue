<template>
<div>
<section id="hello" class="home bg-mega">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home">
                            <div class="home_text">
                                <h1 class="text-white">Descubre
<br />Nuevas oportunidades!</h1>
                            </div>

                            <div class="home_btns m-top-40">
                                <a  target="_blank" class="btn btn-primary text-white">Ver más</a>
                            </div>

                        </div>
                    </div>
                </div>
</section>
            <section id="pricing" class="pricing lightbg">
                <div class="container">
                    <div class="row">
                        <div class="main_pricing roomy-100">
                            <div class="col-md-8 col-md-offset-2 col-sm-12">
                                <div class="head_title text-center">
                                    <h2>Nuestras Mascotas</h2>
                                    <div class="separator_auto"></div>
                                </div>
                            </div>

                            

                            <div class="col-md-4 col-sm-12" v-for="mascota in arraymascota"  :key="mascota.id">
                                <div class="pricing_item sm-m-top-30">
                                    <div class="pricing_top_border"></div>
                                    <div class="pricing_head p-top-30 p-bottom-100 text-center">
                                        <h4 class="text-uppercase" v-text="mascota.nombre">
                                        </h4>
                                    </div>
                                    <div class="pricing_price_border text-center">
                                        <div class="pricing_price">
                                            <h6 class="text-white" v-text="mascota.fecha"></h6>
                                            <p class="text-white">Nacimiento</p>
                                        </div>
                                    </div>

                                    <div class="pricing_body bg-white p-top-110 p-bottom-60">
                                        <ul>
                                            <li v-for="dese in arraydese"  :key="dese.idD" v-if="mascota.id==dese.idM"><i class="fa fa-check-circle text-primary"></i>{{dese.nombreD}}
                                            </li>
                                        </ul>
                                       
                                    </div>

        
                                </div>
                            </div>


                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
 

</section> 
</div>
</template>

<script>

    export default {
 
  data () {
    return {
        arraymascota:[],
        arraydese:[],
        borra:0,
        id:0
    }
  },
  methods: {
 borrar(id){

    let me=this;
                var url= '/borrar?borrar='+id;
                axios.get(url).then(function (response) {
      me.arraymascota=response.data.mascota;
                })
                .catch(function (error) {
                    console.log(error);
                });

 },
 borrar2(id){
    let me=this;
                var url= '/borrardes?borrar='+id;
                axios.get(url).then(function (response) {
      me.arraydese=response.data.dese;
                })
                .catch(function (error) {
                    console.log(error);
                });

 },
 lista(){
                     let me=this;
     axios.get('/animales')
  .then(function (response) {
      me.arraymascota=response.data.mascota;
      me.arraydese=response.data.dese;
  })
  .catch(function (error) {
    // handle error
    console.log(error);
  });
 },

 addTag (newTag) {
      const tag = {
        name: newTag,
        code: newTag.substring(0, 2) + Math.floor((Math.random() * 10000000))
      }
      this.options.push(tag)
      this.value.push(tag)
    },
    countDownChanged (dismissCountDown) {
      this.dismissCountDown = dismissCountDown
    },
    showAlert () {
      this.dismissCountDown = this.dismissSecs
    }
    
  },
    computed: {
      
      messageClass () {
        return {
          'md-invalid': this.hasMessages
        }
      }
    },
        mounted() 
        {
            this.lista();
        }
    }
</script>

