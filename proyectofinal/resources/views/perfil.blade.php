    
    @extends('layouts.master')
    @section('content')
               
              
                <!--Start of Single Job Post Area-->
                <div class="single-job-post-area pt-70 mb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <form action="#">
                                    <div class="single-job-content">
                                        <div class="title uppercase pt-50 pb-38"><span class="lg">Perfil</span>
                                        </div>
                                        <div class="single-job-form">
                                            <div class="single-info mb-14 fix">
                                                <label for="photo" class="uppercase pull-left m-0">Foto</label>
                                                <div class="photo-uploader fix pull-left" id="fileupload">
                                                    <input type="file" id="photo" name="fileupload">
                                                     <span class="filename">Sube tu foto aquí</span> 
                                                     <span class="action">Buscar</span> 
                                                </div>
                                            </div>
                                            <div class="single-info pb-14">
                                                <label for="f_name" class="uppercase pull-left m-0">Nombre</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="f_name" name="f_name" placeholder="Introduzca su nombre">
                                                </div>
                                            </div>
                                            <div class="single-info pb-14">
                                                <label for="l_name" class="uppercase pull-left m-0">1er Apellido</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="l_name" name="l_name" placeholder="Introduzca su 1er apellido">
                                                </div>
                                            </div>
                                            <div class="single-info">
                                                <label for="l_name" class="uppercase pull-left m-0">2do Apellido</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="l_name" name="l_name" placeholder="Introduzca su 2do apellido">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title uppercase mt-45 mb-38"><span class="medium">Información de contacto</span>
                                        </div>
                                        <div class="single-job-form">
                                            <div class="single-info mb-14">
                                                <label for="country" class="uppercase pull-left m-0">País</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="country" name="country" placeholder="Introduzca su país de residencia">
                                                </div>
                                            </div>
                                            <div class="single-info mb-14">
                                                <label for="city" class="uppercase pull-left m-0">Ciudad</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="city" name="city" placeholder="Introduzca su ciudad de residencia">
                                                </div>
                                            </div>
                                            <div class="single-info mb-14">
                                                <label for="address" class="uppercase pull-left m-0">Dirección</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="address" name="address" placeholder="Introduzca su dirección">
                                                </div>
                                            </div>
                                            <div class="single-info mb-14">
                                                <label for="phone" class="uppercase pull-left m-0">Teléfono</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="phone" name="phone" placeholder="Introduzca su teléfono de contacto">
                                                </div>
                                            </div>
                                            <div class="single-info mb-14">
                                                <label for="email" class="uppercase pull-left m-0">Correo</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="email" name="email" placeholder="Introduzca una dirección de correo">
                                                </div>
                                            </div>
                                            <div class="single-info mb-14">
                                                <label for="website" class="uppercase pull-left m-0">Página web</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="website" name="website" placeholder="Introduzca una página web">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title uppercase mt-45 mb-38"><span class="lg">Biografía</span>
                                        </div>
                                        <div class="single-job-form">
                                            <div class="single-info mb-14 fix">
                                                <label class="uppercase pull-left m-0">Descripción</label>
                                                <div class="text-style fix pt-5 pb-5 pl-15 fix">
                                                     <span class="mr-15"><i class="zmdi zmdi-format-bold"></i></span>
                                                     <span class="mr-15"><i class="zmdi zmdi-format-italic"></i></span>
                                                     <span class="mr-15"><i class="zmdi zmdi-format-underlined"></i></span>
                                                     <span class="mr-15"><i class="zmdi zmdi-format-list-numbered"></i></span>
                                                     <span class="mr-15"><i class="zmdi zmdi-format-line-spacing"></i></span>
                                                </div>
                                                <div class="desc fix">
                                                    <textarea name="textarea" class="fix textarea" cols="30" rows="10" placeholder="Introduce una pequeña descripción sobre tí mismo para darte a conocer"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title uppercase mt-45 mb-38"><span class="lg">Estudios</span>
                                        </div>
                                        <div class="single-job-form">
                                            <div class="single-info mb-14">
                                                <label for="school_name" class="uppercase pull-left m-0">Centro</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="school_name" name="school_name" placeholder="Introduzca el centro">
                                                </div>
                                            </div>
                                            <div class="single-info mb-14">
                                                <label for="school_name" class="uppercase pull-left m-0">Curso</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="degree" name="degree" placeholder="Introduzca el curso">
                                                </div>
                                            </div>
                                            <div class="single-info mb-14 fix">
                                                <label class="uppercase pull-left m-0">Descripción</label>
                                                <div class="desc fix">
                                                    <textarea name="textarea" class="fix small textarea" cols="30" rows="10" placeholder="Introduce una pequeña descripción"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title uppercase mt-45 mb-38"><span class="lg">Experiencia laboral</span>
                                        </div>
                                        <div class="single-job-form">
                                            <div class="single-info pb-14">
                                                <label for="title" class="uppercase pull-left m-0">Puesto de trabajo</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="title" name="title" placeholder="Introduzca su puesto de trabajo">
                                                </div>
                                            </div>
                                            <div class="single-info mb-14">
                                                <label for="date_from" class="uppercase pull-left m-0">Desde</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="date_from" name="date_from" placeholder="Introduzca una fecha">
                                                </div>
                                            </div>
                                            <div class="single-info mb-14">
                                                <label for="date_to" class="uppercase pull-left m-0">Hasta</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="date_to" name="date_to" placeholder="Introduzca una fecha">
                                                </div>
                                            </div>
                                            <div class="single-info mb-14 fix">
                                                <label class="uppercase pull-left m-0">Descripción</label>
                                                <div class="desc fix">
                                                    <textarea name="textarea" class="fix small textarea" cols="30" rows="10" placeholder="Introduzca una pequeña descripción"></textarea>
                                                </div>
                                            </div>
                                            <div class="ml-160 mt-42">
                                                 <a href="#" class="button button-medium-box">Guardar</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Single Job Post Area-->
               @stop