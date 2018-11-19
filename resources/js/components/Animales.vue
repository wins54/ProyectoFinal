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

                            
<!-- Button trigger modal -->

 <md-dialog :md-active.sync="showDialog">
      <md-dialog-title>Editar {{nomb}}</md-dialog-title>

      <md-tabs md-dynamic-height>
        <md-tab md-label="Editar">
                            
<div class="form-group row">
<h5 for="email" class="col-sm-4">Tipo de mascota</h5>
<div class="col-md-8">
<md-field :class="messageClass">
      <md-input v-model="nomb" :value="nomb" ></md-input>
    </md-field>
</div>
</div> 

<div class="form-group row">
<h5 for="email" class="col-sm-4">Fecha</h5>
<div class="col-md-8">
<md-field :class="messageClass">
      <md-input v-model="fec" :value="fec" ></md-input>
    </md-field>
</div>
</div> 

    <div class="form-group row" v-if="ide==2">
        <h5  class="col-sm-4">Tipo de mascota</h5>
         <div class="col-md-8">
<md-field>
        <label >Mascotas</label>
        <md-select v-model="selectedMovies" multiple>
          <md-option v-for="depa in arraymascota" :value="depa.id" :key="depa.id">{{depa.nombre}}</md-option>
        </md-select>
      </md-field>
        </div>
    </div>


</md-tab>

        <md-tab md-label="Ver más">
         
        </md-tab>

       
      </md-tabs>

      <md-dialog-actions>
        <md-button class="md-primary" @click="showDialog = false">Salir</md-button>
        <md-button class="md-primary" @click="actual()" v-if="ide==1">Guardar</md-button>
        <md-button class="md-primary" @click="actual2()" v-if="ide==2">Guardar</md-button>

      </md-dialog-actions>
    </md-dialog>
    

<!-- Modal -->

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
                              <a @click="borrar2(dese.idD)"><li class="fa fa-trash text-primary"></li></a> <a @click="editar2(dese)"><li class="fa fa-edit text-primary"></li></a>

                                            </li>
                                        </ul>
                                       
                                    </div>


                          
</div>
  <md-speed-dial class="md-top-left" md-direction="bottom">
      <md-speed-dial-target>
        <md-icon class="md-morph-initial">add</md-icon>
        <md-icon class="md-morph-final">edit</md-icon>
      </md-speed-dial-target>

      <md-speed-dial-content>
        <md-button class="md-icon-button" @click="editar(mascota)">
          <md-icon>note</md-icon>
        </md-button>

        <md-button class="md-icon-button" @click="borrar(mascota.id)">
          <md-icon>delete</md-icon>
        </md-button>
      </md-speed-dial-content>
    </md-speed-dial>
</div>

                     </div>
                    </div><!--End off row-->

             


                </div><!--End off container -->
</section> 



</div>
</template>

<script>
//import BootstrapVue from 'bootstrap-vue'
//import 'bootstrap/dist/css/bootstrap.css'
//import 'bootstrap-vue/dist/bootstrap-vue.css'
    export default {
   name: 'MorphingIcon',
    name: 'DialogCustom',
    name: 'FloatingButtons',
    name: 'LabeledDatepicker',
   name: 'MultipleSelect',
    name: 'DialogConfirm',
  data () {
    return {
        arraymascota:[],
        arraydese:[],
             selectedMovies: [],
        borra:0,
        ide:0,
         showDialog: false,
         mascot:"",
               modalShow: false,
               active: false,
      value: null,
      nomb:"Editar",
      fec:"",
      idM:0

    }
  },
  methods: {

  actual2(){
    let me = this;
        this.showDialog = false;
        axios.post('/actualizadatos', {
                   'nuevos': this.fec,
                    'mascotas': this.nomb,
                    'idM':this.idM,
                    'dese': this.selectedMovies,

  })
  .then(function (response) {
            me.lista();
  })
  .catch(function (error) {
    console.log(error);
  });

    }
,
    actual(){
    let me = this;
        this.showDialog = false;
        axios.post('/actualiza', {
                   'nuevos': this.fec,
                    'mascotas': this.nomb,
                    'idM':this.idM
  })
  .then(function (response) {
            me.lista();
  })
  .catch(function (error) {
    console.log(error);
  });

    },
    editar2(datos=[]){
this.showDialog = true;
    this.ide=2;
console.log(datos);
this.nomb=datos['nombreD'];
this.fec=datos['fechaF'];
this.idM=datos['idD'];
}
    ,  
editar(datos=[]){
    this.ide=1;
this.showDialog = true;
console.log(datos);
this.nomb=datos['nombre'];
this.fec=datos['fecha'];
this.idM=datos['id'];
},
 onConfirm () {
        this.value = 'Agreed'
      },
      onCancel () {
        this.value = 'Disagreed'
      },
      
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

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
