    
    @extends('layouts.master')
    @section('content')
                <!-- Header acaba -->
                <!-- Carrusel empieza -->
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                 <!-- Indicators -->
                 <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                 <!-- Slides -->
            <div class="carousel-inner">
                 <div class="item active">
                    <img src="images/carr1.jpg" alt="Imagen1" width="100%" >
                </div>
                <div class="item">
                    <img src="images/carr2.jpg" alt="Imagen2" width="100%" height="300px">
                </div>
                <div class="item">
                    <img src="images/carr3.jpg" alt="Imagen3" width="100%" height="300px">
                </div>
            </div>
                <!-- Controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Siguiente</span>
          </a>
        </div>
        <!-- Carrusel acaba-->
                <!--Posts ofertas-->
                <div class="job-post-area ptb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-center ">
                                    <h2 class="uppercase">Nuevas Ofertas</h2>
                                    <div class="separator mt-35 mb-77">
                                        <span><img src="images/icons/1.png" alt=""></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="job-post-container fix">
                                    <!-- INICIO DE UNA OFERTA -->
                                    <?php
                                                $ofertas = DB::table('Oferta')->select('*')->get();
                                                $result = json_decode($ofertas, true);
                                                foreach ($result as $oferta1) {
                                            ?>
                                                    
                                                
                                    <div class="single-job-post fix">
                                        <div class="job-title col-4 pl-30">
                                            <span class="pull-left block mtb-17">
                                                <a href="#"><img src="images/company-logo/pp.jpg" alt="" width="90px"></a>
                                            </span>
                                            <div class="fix pl-30 mt-29">
                                                <h4 class="mb-5">{{$oferta1['titulo']}}</h4>
                                                
                                                <span class="mtb-15 block">{{$oferta1['localizacion']}}</span>
                                        		
                                            </div>
                                        </div>
                                        <div class="address col-4 pl-50">
                                            <span class="mtb-30 block">{{$oferta1['requisitos']}}</span>
                                        </div>
                                        <div class="col-2 pl-60 text-center pt-22">            
                                            <a href="{{ url('ofertasdetalle/'.$oferta1['idOferta'] )}}" class="button btn-orange">Detalles</a>
                                        </div>
                                    </div>
                                <?php }
                                            ?>
                                    <!-- FIN DE OTRA OFERTA -->
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Job Post Area -->
    @stop