    
    @extends('layouts.master')
    @section('content')
                <!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area pt-94 pb-85 bg-3 bg-opacity-dark-blue-90">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h2 class="text-center text-white uppercase mb-17">Crear oferta</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                <!--Start of Single Job Post Area-->
                <div class="single-job-post-area pt-70 mb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <form action="#">
                                    <div class="single-job-content">
                                        <div class="area-title text-center">
                                            <h2 class="pt-10 pb-10">Crea una oferta de trabajo</h2>
                                        </div>
                                        <div class="title uppercase pt-70 pb-38"><span>Detalles de la oferta</span></div>
                                        <div class="single-job-form">
                                            <div class="single-info pb-14">
                                                <label for="title" class="uppercase pull-left m-0">Título</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="title" name="title" placeholder="Introduzca el título de la oferta">
                                                </div>
                                            </div>
                                            <div class="single-info pb-14">
                                                <label for="desc" class="uppercase pull-left m-0">Descripción</label>
                                                <div class="text-style fix pt-5 pb-5 pl-15 fix">
                                                    <span class="mr-15"><i class="zmdi zmdi-format-bold"></i></span>
                                                    <span class="mr-15"><i class="zmdi zmdi-format-italic"></i></span>
                                                    <span class="mr-15"><i class="zmdi zmdi-format-underlined"></i></span>
                                                    <span class="mr-15"><i class="zmdi zmdi-format-list-numbered"></i></span>
                                                    <span class="mr-15"><i class="zmdi zmdi-format-line-spacing"></i></span>
                                                </div>
                                                <div class="desc fix">
                                                    <textarea name="textarea" class="fix textarea" cols="30" rows="10" placeholder="Introduzca una pequeña descripción"></textarea>
                                                </div>
                                            </div>
                                            <div class="single-info pb-14">
                                                <label for="location" class="uppercase pull-left m-0">Localización</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="location" name="location" placeholder="Introduzca la localización">
                                                </div>
                                            </div>
                                            <div class="map-area ml-160 mb-14">
                                                <div id="googleMap" style="width:100%;height:160px;"></div>
                                            </div>
                                            <div class="single-info pb-14">
                                                <label for="type" class="uppercase pull-left m-0">Tipo de empresa</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="type" name="type" placeholder="Introduzca el tipo de empresa">
                                                </div>
                                            </div>
                                            <div class="single-info pb-14">
                                                <label for="category" class="uppercase pull-left m-0">Sector</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="category" name="category" placeholder="Introduzca el sector">
                                                </div>
                                            </div>
                                            <div class="single-info mb-14">
                                                <label for="function" class="uppercase pull-left m-0">Funciones</label>
                                                <div class="text-style fix pt-5 pb-5 pl-15 fix">
                                                    <span class="mr-15"><i class="zmdi zmdi-format-bold"></i></span>
                                                    <span class="mr-15"><i class="zmdi zmdi-format-italic"></i></span>
                                                    <span class="mr-15"><i class="zmdi zmdi-format-underlined"></i></span>
                                                    <span class="mr-15"><i class="zmdi zmdi-format-list-numbered"></i></span>
                                                    <span class="mr-15"><i class="zmdi zmdi-format-line-spacing"></i></span>
                                                </div>
                                                <div class="desc fix">
                                                    <textarea name="textarea" class="fix textarea" cols="30" rows="10" placeholder="Introduzca las funciones a realizar"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-job-form">
                                            <div class="single-info mb-14">
                                                <label for="requirements" class="uppercase pull-left m-0">Requisitos</label>
                                                <div class="text-style fix pt-5 pb-5 pl-15 fix">
                                                    <span class="mr-15"><i class="zmdi zmdi-format-bold"></i></span>
                                                    <span class="mr-15"><i class="zmdi zmdi-format-italic"></i></span>
                                                    <span class="mr-15"><i class="zmdi zmdi-format-underlined"></i></span>
                                                    <span class="mr-15"><i class="zmdi zmdi-format-list-numbered"></i></span>
                                                    <span class="mr-15"><i class="zmdi zmdi-format-line-spacing"></i></span>
                                                </div>
                                                <div class="desc fix">
                                                    <textarea name="textarea" class="fix textarea" cols="30" rows="10" placeholder="Introduzca los requisitos a cumplir"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="ml-160 mt-38">
                                                <a href="#" class="button button-large-box">Publicar</a>
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