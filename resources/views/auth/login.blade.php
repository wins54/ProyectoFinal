@extends('welcome')

@section('content')
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
                                        <h3 class="text-white">Login</h3>
                                        <div class="separator_small"></div>
                                    </div>
                                    <p>Bienvenido Ingresa a nuestra página</p>

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
                        
                                <form method="POST"  action="{{ route('login') }}">
                        @csrf

<div class="form-group row">
                         <div class="separator">
     <h3  class="col-sm-5 col-form-label text-md-right">
         </md-avatar></h3>
    </div>
    <div class="col-md-2">
<md-avatar class="md-avatar-icon md-large md-accent">
        <md-icon>person_pin</md-icon>
      </md-avatar>
     </div>   
</div>
                        <div class="form-group row">
                            <h3 for="email" class="col-sm-2 col-form-label text-md-right text-white"><md-icon class="md-size-2x">account_box</md-icon></h3>

                            <div class="col-md-8">
   <md-field>
      <label>Correo</label>
      <md-input type="email" id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus></md-input>
    </md-field>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <h3 for="password" class="col-md-2 col-form-label text-md-right text-white"><md-icon class="md-size-2x">https</md-icon></h3>

                            <div class="col-md-8">
 <md-field>
      <label>Contraseña</label>
      <md-input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required></md-input>
    </md-field>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">

                                    
                                    <input class="form-check-input btn-primary" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <p class="form-check-label" for="remember">
                                        {{ __('Recordar contraseña') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row ">
                     <h3 for="email" class="col-sm-4 col-form-label text-md-right text-white"></h3>

                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar sesión') }}
                                </button>
<!--End off row 
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                -->
                            </div>
                        </div>
                    </form>
                            </div>
                        </div>
                    </div><!--End off row -->
                </div><!--End off container -->
            </section><!--End off Contact Section-->


@endsection
