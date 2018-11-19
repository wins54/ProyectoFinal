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
                    </div>
                </div>
            </section>
 
            <section id="contact" class="contact bg-mega fix">
                <div class="container">
                    <div class="row">
                        <div class="main_contact roomy-100 text-white">
                            <div class="col-md-4">
                                <div class="rage_widget">
                                    <div class="widget_head">
                                        <h3 class="text-white">Agregar mascota</h3>
                                        <div class="separator_small"></div>
                                    </div>
                                    <p>Bienvenido Ingresa a tu mascota</p>

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
                        
                                <form >

                        <div class="form-group row">
                            <h4 for="email" class="col-sm-4 col-form-label text-md-right text-white">Tipo de mascota</h4>

                            <div class="col-md-8">
<md-field :class="messageClass">
      <label>Mascota</label>
      <md-input v-model="mascota"></md-input>
    </md-field>
                            </div>
                        </div>

                        <div class="form-group row">
                            <h4 for="password" class="col-md-4 col-form-label text-md-right text-white">Fecha nacimiento</h4>

                            <div class="col-md-8">
                                <input v-model="date" class="form-control" type="date">

                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                            <button   @click="agregar(date,mascota)" class="btn btn-primary">
                                    Agregar
                            </button>

                            </div>
                        </div>
                    </form>
                            </div>
                        </div>
                    </div><!--End off row -->
                </div><!--End off container -->
            </section>
   

</div>

</template>

<script>
  import Multiselect from 'vue-multiselect'
import Vuetify from 'vuetify'
//import 'vuetify/dist/vuetify.min.css'
    export default {
        props:['menu'],
          name: 'FloatingButtons',
              name: 'LabeledDatepicker',

  components: {
    Multiselect
  },
  data () {
        
    return {
     selectedDate: new Date(),
     mascota:"",
     date:0,
     url:"/",
    }
  },
  methods: {
      agregar(date,mascota){
    let me=this;
// window.open('/','_blank');
                var url= '/nuevo?nuevos='+date+'&mascotas='+mascota ;
                axios.get(url).then(function (response) {
                    window.location = '/';

                })
                .catch(function (error) {
                    console.log(error);
                });

 }
,
    
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
            console.log('Component mounted.')
        }
    }
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<style lang="scss" scoped>
  .md-field:last-child {
    margin-bottom: 40px;
  }
</style>