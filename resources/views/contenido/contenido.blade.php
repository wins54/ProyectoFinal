@extends('welcome')
@section('contenido')
<template v-if="menu==0">

  @auth
<animales-component></animales-component>
                    @else
        
<animales1-component></animales1-component>

                    @endauth
</template>
<template v-if="menu==1">
<login-component :menu="menu"></login-component>
</template>
<template v-if="menu==2">
<desemp-component :menu="menu"></desemp-component>
</template>
@endsection