    
    @extends('layouts.master')
    @section('content')

            <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
            <script src="js/jquery/controlformu.js"></script>
                <!--Start of Single Job Post Area-->
                <div class="single-job-post-area pt-70 mb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">


                                <form class="bg-warning pb-20 pt-20 pl-20 pr-20" method="POST" action="{{ route('login') }}">
                       @csrf

                       <div class="form-group row">
                           <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                           <div class="col-md-6">
                               <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                               @if ($errors->has('email'))
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('email') }}</strong>
                                   </span>
                               @endif
                           </div>
                       </div>

                       <div class="form-group row">
                           <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                           <div class="col-md-6">
                               <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

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
                                   <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                   <label class="form-check-label" for="remember">
                                       {{ __('Remember Me') }}
                                   </label>
                               </div>
                           </div>
                       </div>

                       <div class="form-group row mb-0">
                           <div class="col-md-8 offset-md-4">
                               <button type="submit" class="btn btn-primary">
                                   {{ __('Login') }}
                               </button>

                               @if (Route::has('password.request'))
                                   <a class="btn btn-link" href="{{ route('password.request') }}">
                                       {{ __('Forgot Your Password?') }}
                                   </a>
                               @endif
                           </div>
                       </div>
                   </form>

                                
                                <!--
                                <form id="formu">
                                    <div class="single-job-content">
                                        <div class="title uppercase pt-50 pb-38"><span class="lg">Introduzca aqui los datos del profesor</span>
                                        </div>
                                        <div class="single-job-form">
                                            <div class="single-info pb-14">
                                                
                                                <div class="form-box fix">
                                                    <input type="text" id="nombre" name="nombre" placeholder="Introduzca su nombre">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-job-form">
                                            <div class="single-info mb-14">
                                                
                                                <div class="form-box fix">
                                                    <input type="text" id="country" name="departamento" placeholder="Introduzca departamento">
                                                </div>
                                            </div>
                                            <div class="single-info mb-14">
                                              
                                                <div class="form-box fix">
                                                    <input type="text" id="city" name="dni" placeholder="Introduzca su DNI">
                                                </div>
                                            </div>
                                            <div class="single-info mb-14">
                                                
                                                <div class="form-box fix">
                                                    <input type="text" id="email" name="email" placeholder="Introduzca una dirección de correo">
                                                </div>
                                            </div>
                                            <div class="single-job-form">
                                            <div class="single-info pb-14">
                                                
                                                <div class="form-box fix">
                                                    <input type="password" id="f_name" name="passw" placeholder="Introduzca su contraseña">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-job-form">
                                            
                                            
                                            <a id="botonprueba"class="button button-medium-box">Prueba</a>
                                            
                                            <div class="ml-160 mt-42">
                                                 <a href ="{{ url('/insertarprofe') }}" class="button button-medium-box">Guardar</a>
                                            </div> 

                                            <button onclick="validaForm()" type="button" value="hola"></button>
                                            
                                            
                                        </div>
                                    </div>
                                </form>
                                -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Single Job Post Area-->
    
    @stop


