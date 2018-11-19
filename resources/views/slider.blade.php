  <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
           

                <div class="container">    
                  

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                           @auth
                        <a @click="menu=0"  class="navbar-brand">
                            PETSHOP
                            <li class="fa fa-paw"></li>
                        </a>
                        @else
                           <a @click="menu=0" href="{{ url('/') }}" class="navbar-brand" href="#brand">
                             PETSHOP
                            <li class="fa fa-paw"></li>
                        </a>                
                        @endauth

                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                          
                        @if (Route::has('login'))
                    @auth
                       <li  @click="menu=1"> <a>Agregar Mascota</a></li>  
                       <li  @click="menu=2"> <a>Nuevo Desempeño</a></li>  

                    @else
        

                    @endauth
                @endif 

                     @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            </li>
                            <li class="nav-item"> <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                        @endguest
                </div>
            
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>  



            </nav>