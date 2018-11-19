<template>
<div>
<section id="subscribe" class="subscribe roomy-100 fix">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_subscribe text-center">
                          
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="subscribe_btns m-top-40">

                                
                                </div>
                            </div>
                        </div>
                    </div><!--End off row -->
                </div><!--End off container -->
            </section><!-- End off Impress section-->

 <!--Contact Us Section-->
            <section id="contact" class="contact bg-mega fix">
                <div class="container">
                    <div class="row">
                        <div class="main_contact roomy-100 text-white">
                            <div class="col-md-4">
                                <div class="rage_widget">
                                    <div class="widget_head">
                                        <h3 class="text-white">Agregar desempeño</h3>
                                        <div class="separator_small"></div>
                                    </div>
                                    <p>Bienvenido Ingresa a tu desempeño</p>

                                    <div class="widget_socail m-top-30">
                                        <ul class="list-inline">
                                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href=""><i class="fa fa-vimeo"></i></a></li>
                                            <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 sm-m-top-30">
                        

                        <div class="form-group row">
                            <h5 for="email" class="col-sm-4 col-form-label text-md-right text-white">Tipo de desempeño</h5>

                            <div class="col-md-8">
<md-field :class="messageClass">
      <label>Desempeño</label>
      <md-input v-model="mascota"></md-input>
    </md-field>
                            </div>
                        </div>


                        <div class="form-group row">
                            <h5 for="email" class="col-sm-4 col-form-label text-md-right text-white">Tipo de mascota</h5>
                            <div class="col-md-8">
<md-field>
        <label >Mascotas</label>
        <md-select v-model="selectedMovies" multiple>
          <md-option v-for="depa in arraymascota" :value="depa.id" :key="depa.id">{{depa.nombre}}</md-option>
        </md-select>
      </md-field>
                            </div>
                        </div>

                        <div class="form-group row">
                            <h5 for="password" class="col-md-4 col-form-label text-md-right text-white">Fecha</h5>

                            <div class="col-md-8">
                                <input v-model="date" class="form-control" type="date">

                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                            <button  v-bind:href="url" @click="agregar(date,mascota,selectedMovies)" class="btn btn-primary">
                                    Agregar
                            </button>
   

                            </div>
                        </div>
                            </div>
                        </div>
                    </div><!--End off row -->
                </div><!--End off container -->
            </section><!--End off Contact Section-->

</div>

</template>

<script>
import Vuetify from 'vuetify'
//import 'vuetify/dist/vuetify.min.css'
    export default {
        props:['menu'],
          name: 'FloatingButtons',
              name: 'LabeledDatepicker',
    name: 'MultipleSelect',
  data () {
        
    return {
     selectedDate: new Date(),
     mascota:"",
     date:0,
      arraymascota:[],
     url:"/",
     selectedMovies: [],
     dat:0,
    }
  },
  methods: {
      agregar(date,mascota,selectedMovies){
    let me=this;
// window.open('/','_blank');

                axios.post('/nuevosdes', {
                   'nuevos': date,
                    'mascotas': mascota,
                    'dese': selectedMovies,
  })
  .then(function (response) {
     // this.lista();
   window.location.href = '/';
    //console.log(response);
  })
  .catch(function (error) {
    console.log(error);
  });

 }
,
    lista(){
                     let me=this;
     axios.get('/animales')
  .then(function (response) {
      me.arraymascota=response.data.mascota;
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
    }
  ,
        mounted() {
            this.lista();
        }
    }
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<style lang="scss" scoped>
  .md-field:last-child {
    margin-bottom: 40px;
  }
</style>