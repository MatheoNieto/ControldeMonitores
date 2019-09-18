<!DOCTYPE html>
<html>

<head>
      <meta charset="utf-8">
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>css/images/icon.ico" />
      <title>Horario diario</title>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/stylehorarioprede.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>

<body>
      <div id="barra"><img id="img1" src="<?php echo base_url(); ?>css/images/logoucp2.png" alt=" logo_universidad">
            Horario diario
            <img id="img2" src="<?php echo base_url(); ?>css/images/logobiblioteca.png" alt="Logo de la biblioteca">
      </div>
      <div id="bottomside" class="sidenav">
        <a href="<?php echo base_url(); ?>menuprincipal" id="about" title="Volver al menú principal">Home</a>
        <a href="<?php echo base_url(); ?>mmonitores" id="cmoni" title="Consultar monitores">C.monitores</a>
        <a href="<?php echo base_url(); ?>mreporte" id="blog" title="¿Necesitas reportes? da click!">Reportes</a>
    </div>
      <div class="col-md-12" id="contcarrousel">
            <div id="myCarousel" class="carousel slide col-md-12" data-ride="carousel" data-interval="false" data-pause="hover">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">

                        <div id="divlun" class="item">
                              <div class="col-md-12">
                                    <div class="col-md-2">
                                          <a class="btn btn-info btn-block mrgin" href="#myCarousel" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                Atras
                                          </a>
                                    </div>
                                    <div class="col-md-8">
                                          <h1 class="text-center">Lunes</h1>
                                    </div>
                                    <div class="col-md-2">
                                          <a class="btn btn-info btn-block mrgin" href="#myCarousel"
                                                data-slide="next">Siguiente <span
                                                      class="glyphicon glyphicon-chevron-right"></span></a>
                                    </div>
                              </div>
                              <div class="col-md-12 contenthorario">
                                    <div class="col-md-2 listimoniter">
                                          <?php 
                                          foreach($themonday as $datos){
                                                if($datos->statuslun>0){
                                                      echo '<button type="button" class="btn btn-default btn-block disabled" data-toggle="tooltip" data-placement="bottom" title="Ya esta en el horario">'.$datos->apellidos.' '.$datos->nombres.'</button>';
                                                }else{
                                                      echo '<button type="button" class="btn btn-default btn-block" onclick="inforlunes('.$datos->codigo.')">'.$datos->apellidos.' '.$datos->nombres.'</button>';
                                                }
                                          }
                                          ?>
                                    </div>
                                    <div class="col-md-10 conttable">
                                          <div class="contenedor-tabla conttablelun">
                                                <div class="contenedor-fila theadd">
                                                      <div class="contenedor-columna thh">
                                                            Hora
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Bibliocafe
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Recepción (Bolsos/Multimedia)
                                                      </div>

                                                      <div class="contenedor-columna thh">
                                                            Entrada (Mesita)
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Referencia
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Procesos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            GTI
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Hemeroteca
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Circulacion y prestamos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            General Principal
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            General Cubiculos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            General Folletos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Sala Grupal
                                                      </div>
                                                </div>
                                                
                                               <?php 
                                               for ($i=7; $i < 21 ; $i += 0.50) { 
                                                     
                                                     if((int) $i == $i){
                                                        echo ' <div class="contenedor-fila tbodyy lunesrow"> <div class="contenedor-columna tdd horaa">'.$i.':00 </div><div class="contenedor-columna tdd bibliocafe"></div><div class="contenedor-columna tdd recepción(bolsos/multimedia)"></div><div class="contenedor-columna tdd entrada(mesita)"></div><div class="contenedor-columna tdd referencia"></div><div class="contenedor-columna tdd procesos"></div><div class="contenedor-columna tdd gti"></div><div class="contenedor-columna tdd hemeroteca"></div><div class="contenedor-columna tdd circulaciónyprestamos"></div><div class="contenedor-columna tdd generalprincipal"></div><div class="contenedor-columna tdd generalcubiculos"></div><div class="contenedor-columna tdd generalfolletos"></div><div class="contenedor-columna tdd salagrupal"></div></div>';   
                                                     }else{                                                      
                                                      

                                                      echo ' <div class="contenedor-fila tbodyy lunesrow"> <div class="contenedor-columna tdd horaa">'.floor($i).':30</div><div class="contenedor-columna tdd bibliocafe"></div><div class="contenedor-columna tdd recepción(bolsos/multimedia)"></div><div class="contenedor-columna tdd entrada(mesita)"></div><div class="contenedor-columna tdd referencia"></div><div class="contenedor-columna tdd procesos"></div><div class="contenedor-columna tdd gti"></div><div class="contenedor-columna tdd hemeroteca"></div><div class="contenedor-columna tdd circulaciónyprestamos"></div><div class="contenedor-columna tdd generalprincipal"></div><div class="contenedor-columna tdd generalcubiculos"></div><div class="contenedor-columna tdd generalfolletos"></div><div class="contenedor-columna tdd salagrupal"></div></div>';    
                                                     }
                                               }
                                               ?>
                                          </div>
                                    </div>

                              </div>
                        </div>

                        <div id="divmart" class="item">
                              <div class="col-md-12">
                                    <div class="col-md-2">
                                          <a class="btn btn-info btn-block mrgin" href="#myCarousel" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                Atras
                                          </a>
                                    </div>
                                    <div class="col-md-8">
                                          <h1 class="text-center">Martes</h1>
                                    </div>
                                    <div class="col-md-2">
                                          <a class="btn btn-info btn-block mrgin" href="#myCarousel"
                                                data-slide="next">Siguiente
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                          </a>
                                    </div>
                              </div>
                              <div class="col-md-12 contenthorario">
                                    <div class="col-md-2 listimoniter">
                                          <?php 
                                          foreach($thetuesday as $datos){
                                                if($datos->statusmar>0){
                                                      echo '<button type="button" class="btn btn-default btn-block disabled" data-toggle="tooltip" data-placement="bottom" title="Ya esta en el horario">'.$datos->apellidos.' '.$datos->nombres.'</button>';
                                                }else{
                                                      echo '<button type="button" class="btn btn-default btn-block" onclick="informartes('.$datos->codigo.')">'.$datos->apellidos.' '.$datos->nombres.'</button>';
                                                }
                                          }
                                          ?>
                                    </div>
                                    <div class="col-md-10 conttable">
                                          <div class="contenedor-tabla conttablelun">
                                                <div class="contenedor-fila theadd">
                                                      <div class="contenedor-columna thh">
                                                            Hora
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Bibliocafe
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Recepción (Bolsos/Multimedia)
                                                      </div>

                                                      <div class="contenedor-columna thh">
                                                            Entrada (Mesita)
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Referencia
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Procesos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            GTI
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Hemeroteca
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Circulacion y prestamos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            General Principal
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            General Cubiculos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            General Folletos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Sala Grupal
                                                      </div>
                                                </div>
                                                
                                               <?php 
                                               for ($i=7; $i < 21 ; $i += 0.50) { 
                                                     
                                                     if((int) $i == $i){
                                                        echo ' <div class="contenedor-fila tbodyy martesrow"> <div class="contenedor-columna tdd horaa">'.$i.':00 </div><div class="contenedor-columna tdd bibliocafe"></div><div class="contenedor-columna tdd recepción(bolsos/multimedia)"></div><div class="contenedor-columna tdd entrada(mesita)"></div><div class="contenedor-columna tdd referencia"></div><div class="contenedor-columna tdd procesos"></div><div class="contenedor-columna tdd gti"></div><div class="contenedor-columna tdd hemeroteca"></div><div class="contenedor-columna tdd circulaciónyprestamos"></div><div class="contenedor-columna tdd generalprincipal"></div><div class="contenedor-columna tdd generalcubiculos"></div><div class="contenedor-columna tdd generalfolletos"></div><div class="contenedor-columna tdd salagrupal"></div></div>';   
                                                     }else{                                                      
                                                      

                                                      echo ' <div class="contenedor-fila tbodyy martesrow"> <div class="contenedor-columna tdd horaa">'.floor($i).':30</div><div class="contenedor-columna tdd bibliocafe"></div><div class="contenedor-columna tdd recepción(bolsos/multimedia)"></div><div class="contenedor-columna tdd entrada(mesita)"></div><div class="contenedor-columna tdd referencia"></div><div class="contenedor-columna tdd procesos"></div><div class="contenedor-columna tdd gti"></div><div class="contenedor-columna tdd hemeroteca"></div><div class="contenedor-columna tdd circulaciónyprestamos"></div><div class="contenedor-columna tdd generalprincipal"></div><div class="contenedor-columna tdd generalcubiculos"></div><div class="contenedor-columna tdd generalfolletos"></div><div class="contenedor-columna tdd salagrupal"></div></div>';    
                                                     }
                                               }
                                               ?>
                                          </div>
                                    </div>
                              </div>
                        </div>

                        <div id="divmier" class="item">
                              <div class="col-md-12">
                                    <div class="col-md-2">
                                          <a class="btn btn-info btn-block mrgin" href="#myCarousel" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                Atras
                                          </a>
                                    </div>
                                    <div class="col-md-8">
                                          <h1 class="text-center">Miercoles</h1>
                                    </div>
                                    <div class="col-md-2">
                                          <a class="btn btn-info btn-block mrgin" href="#myCarousel" data-slide="next">
                                                Siguiente
                                                <span class="glyphicon glyphicon-chevron-right"></span></a>
                                    </div>
                              </div>
                              <div class="col-md-12 contenthorario">
                                    <div class="col-md-2 listimoniter">
                                          <?php 
                                          foreach($thewednesday as $datos){

                                                if($datos->statusmier>0){
                                                      echo '<button type="button" class="btn btn-default btn-block disabled" data-toggle="tooltip" data-placement="bottom" title="Ya esta en el horario">'.$datos->apellidos.' '.$datos->nombres.'</button>';
                                                }else{
                                                      echo '<button type="button" class="btn btn-default btn-block" onclick="informiercoles('.$datos->codigo.')">'.$datos->apellidos.' '.$datos->nombres.'</button>';
                                                }
                                          }
                                          ?>
                                    </div>
                                    <div class="col-md-10 conttable">
                                          <div class="contenedor-tabla conttablelun">
                                                <div class="contenedor-fila theadd">
                                                      <div class="contenedor-columna thh">
                                                            Hora
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Bibliocafe
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Recepción (Bolsos/Multimedia)
                                                      </div>

                                                      <div class="contenedor-columna thh">
                                                            Entrada (Mesita)
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Referencia
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Procesos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            GTI
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Hemeroteca
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Circulacion y prestamos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            General Principal
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            General Cubiculos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            General Folletos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Sala Grupal
                                                      </div>
                                                </div>
                                                
                                               <?php 
                                               for ($i=7; $i < 21 ; $i += 0.50) { 
                                                     
                                                     if((int) $i == $i){
                                                        echo ' <div class="contenedor-fila tbodyy miercolesrow"> <div class="contenedor-columna tdd horaa">'.$i.':00 </div><div class="contenedor-columna tdd bibliocafe"></div><div class="contenedor-columna tdd recepción(bolsos/multimedia)"></div><div class="contenedor-columna tdd entrada(mesita)"></div><div class="contenedor-columna tdd referencia"></div><div class="contenedor-columna tdd procesos"></div><div class="contenedor-columna tdd gti"></div><div class="contenedor-columna tdd hemeroteca"></div><div class="contenedor-columna tdd circulaciónyprestamos"></div><div class="contenedor-columna tdd generalprincipal"></div><div class="contenedor-columna tdd generalcubiculos"></div><div class="contenedor-columna tdd generalfolletos"></div><div class="contenedor-columna tdd salagrupal"></div></div>';   
                                                     }else{                                                      
                                                      

                                                      echo ' <div class="contenedor-fila tbodyy miercolesrow"> <div class="contenedor-columna tdd horaa">'.floor($i).':30</div><div class="contenedor-columna tdd bibliocafe"></div><div class="contenedor-columna tdd recepción(bolsos/multimedia)"></div><div class="contenedor-columna tdd entrada(mesita)"></div><div class="contenedor-columna tdd referencia"></div><div class="contenedor-columna tdd procesos"></div><div class="contenedor-columna tdd gti"></div><div class="contenedor-columna tdd hemeroteca"></div><div class="contenedor-columna tdd circulaciónyprestamos"></div><div class="contenedor-columna tdd generalprincipal"></div><div class="contenedor-columna tdd generalcubiculos"></div><div class="contenedor-columna tdd generalfolletos"></div><div class="contenedor-columna tdd salagrupal"></div></div>';    
                                                     }
                                               }
                                               ?>
                                          </div>
                                    </div>
                              </div>
                        </div>

                        <div id="divjuev" class="item">
                              <div class="col-md-12">
                                    <div class="col-md-2">
                                          <a class="btn btn-info btn-block mrgin" href="#myCarousel" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                Atras
                                          </a>
                                    </div>
                                    <div class="col-md-8">
                                          <h1 class="text-center">Jueves</h1>
                                    </div>
                                    <div class="col-md-2">
                                          <a class="btn btn-info btn-block mrgin" href="#myCarousel" data-slide="next">
                                                Siguiente
                                                <span class="glyphicon glyphicon-chevron-right"></span></a>
                                    </div>
                              </div>
                              <div class="col-md-12 contenthorario">
                                    <div class="col-md-2 listimoniter">
                                          <?php 
                                          foreach($thethuersday as $datos){
                                                if($datos->statusjueves>0){
                                                      echo '<button type="button" class="btn btn-default btn-block disabled" data-toggle="tooltip" data-placement="bottom" title="Ya esta en el horario">'.$datos->apellidos.' '.$datos->nombres.'</button>';
                                                }else{
                                                      echo '<button type="button" class="btn btn-default btn-block" onclick="inforjueves('.$datos->codigo.')">'.$datos->apellidos.' '.$datos->nombres.'</button>';
                                                }
                                                

                                          }                                          
                                          ?>
                                    </div>
                                    <div class="col-md-10 conttable">
                                          <div class="contenedor-tabla conttablelun">
                                                <div class="contenedor-fila theadd">
                                                      <div class="contenedor-columna thh">
                                                            Hora
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Bibliocafe
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Recepción (Bolsos/Multimedia)
                                                      </div>

                                                      <div class="contenedor-columna thh">
                                                            Entrada (Mesita)
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Referencia
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Procesos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            GTI
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Hemeroteca
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Circulacion y prestamos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            General Principal
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            General Cubiculos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            General Folletos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Sala Grupal
                                                      </div>
                                                </div>
                                                
                                               <?php 
                                               for ($i=7; $i < 21 ; $i += 0.50) { 
                                                     
                                                     if((int) $i == $i){
                                                        echo ' <div class="contenedor-fila tbodyy juevesrow"> <div class="contenedor-columna tdd horaa">'.$i.':00 </div><div class="contenedor-columna tdd bibliocafe"></div><div class="contenedor-columna tdd recepción(bolsos/multimedia)"></div><div class="contenedor-columna tdd entrada(mesita)"></div><div class="contenedor-columna tdd referencia"></div><div class="contenedor-columna tdd procesos"></div><div class="contenedor-columna tdd gti"></div><div class="contenedor-columna tdd hemeroteca"></div><div class="contenedor-columna tdd circulaciónyprestamos"></div><div class="contenedor-columna tdd generalprincipal"></div><div class="contenedor-columna tdd generalcubiculos"></div><div class="contenedor-columna tdd generalfolletos"></div><div class="contenedor-columna tdd salagrupal"></div></div>';   
                                                     }else{                                                      
                                                      

                                                      echo ' <div class="contenedor-fila tbodyy juevesrow"> <div class="contenedor-columna tdd horaa">'.floor($i).':30</div><div class="contenedor-columna tdd bibliocafe"></div><div class="contenedor-columna tdd recepción(bolsos/multimedia)"></div><div class="contenedor-columna tdd entrada(mesita)"></div><div class="contenedor-columna tdd referencia"></div><div class="contenedor-columna tdd procesos"></div><div class="contenedor-columna tdd gti"></div><div class="contenedor-columna tdd hemeroteca"></div><div class="contenedor-columna tdd circulaciónyprestamos"></div><div class="contenedor-columna tdd generalprincipal"></div><div class="contenedor-columna tdd generalcubiculos"></div><div class="contenedor-columna tdd generalfolletos"></div><div class="contenedor-columna tdd salagrupal"></div></div>';    
                                                     }
                                               }
                                               ?>
                                          </div>
                                    </div>
                              </div>
                        </div>

                        <div id="divvier" class="item">
                              <div class="col-md-12">
                                    <div class="col-md-2">
                                          <a class="btn btn-info btn-block mrgin" href="#myCarousel" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                Atras
                                          </a>
                                    </div>
                                    <div class="col-md-8">
                                          <h1 class="text-center">Viernes</h1>
                                    </div>
                                    <div class="col-md-2">
                                          <a class="btn btn-info btn-block mrgin" href="#myCarousel" data-slide="next">
                                                Siguiente
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                          </a>
                                    </div>
                              </div>
                              <div class="col-md-12 contenthorario">
                                    <div class="col-md-2 listimoniter">
                                          <?php 
                                          foreach($thefriday as $datos){
                                                if($datos->statusvier>0){
                                                      echo '<button type="button" class="btn btn-default btn-block disabled" data-toggle="tooltip" data-placement="bottom" title="Ya esta en el horario">'.$datos->apellidos.' '.$datos->nombres.'</button>';
                                                }else{
                                                      echo '<button type="button" class="btn btn-default btn-block" onclick="inforviernes('.$datos->codigo.')">'.$datos->apellidos.' '.$datos->nombres.'</button>';
                                                }


                                          }
                                          ?>
                                    </div>
                                    <div class="col-md-10 conttable">
                                          <div class="contenedor-tabla conttablelun">
                                                <div class="contenedor-fila theadd">
                                                      <div class="contenedor-columna thh">
                                                            Hora
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Bibliocafe
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Recepción (Bolsos/Multimedia)
                                                      </div>

                                                      <div class="contenedor-columna thh">
                                                            Entrada (Mesita)
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Referencia
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Procesos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            GTI
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Hemeroteca
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Circulacion y prestamos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            General Principal
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            General Cubiculos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            General Folletos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Sala Grupal
                                                      </div>
                                                </div>
                                                
                                               <?php 
                                               for ($i=7; $i < 21 ; $i += 0.50) { 
                                                     
                                                     if((int) $i == $i){
                                                        echo ' <div class="contenedor-fila tbodyy viernesrow"> <div class="contenedor-columna tdd horaa">'.$i.':00 </div><div class="contenedor-columna tdd bibliocafe"></div><div class="contenedor-columna tdd recepción(bolsos/multimedia)"></div><div class="contenedor-columna tdd entrada(mesita)"></div><div class="contenedor-columna tdd referencia"></div><div class="contenedor-columna tdd procesos"></div><div class="contenedor-columna tdd gti"></div><div class="contenedor-columna tdd hemeroteca"></div><div class="contenedor-columna tdd circulaciónyprestamos"></div><div class="contenedor-columna tdd generalprincipal"></div><div class="contenedor-columna tdd generalcubiculos"></div><div class="contenedor-columna tdd generalfolletos"></div><div class="contenedor-columna tdd salagrupal"></div></div>';   
                                                     }else{
                                                      

                                                      echo ' <div class="contenedor-fila tbodyy viernesrow"> <div class="contenedor-columna tdd horaa">'.floor($i).':30</div><div class="contenedor-columna tdd bibliocafe"></div><div class="contenedor-columna tdd recepción(bolsos/multimedia)"></div><div class="contenedor-columna tdd entrada(mesita)"></div><div class="contenedor-columna tdd referencia"></div><div class="contenedor-columna tdd procesos"></div><div class="contenedor-columna tdd gti"></div><div class="contenedor-columna tdd hemeroteca"></div><div class="contenedor-columna tdd circulaciónyprestamos"></div><div class="contenedor-columna tdd generalprincipal"></div><div class="contenedor-columna tdd generalcubiculos"></div><div class="contenedor-columna tdd generalfolletos"></div><div class="contenedor-columna tdd salagrupal"></div></div>';    
                                                     }
                                               }
                                               ?>
                                          </div>
                                    </div>
                              </div>
                        </div>

                        <div id="divsab" class="item">
                              <div class="col-md-12">
                                    <div class="col-md-2">
                                          <a class="btn btn-info btn-block mrgin" href="#myCarousel" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                Atras
                                          </a>
                                    </div>
                                    <div class="col-md-8">
                                          <h1 class="text-center">Sabado</h1>
                                    </div>
                                    <div class="col-md-2">
                                          <a class="btn btn-info btn-block mrgin" href="#myCarousel" data-slide="next">
                                                Siguiente
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                          </a>
                                    </div>
                              </div>
                              <div class="col-md-12 contenthorario">
                                    <div class="col-md-2 listimoniter">
                                          <?php 
                                          foreach($thesaturday as $datos){
                                                if($datos->statussabado>0){
                                                      echo '<button type="button" class="btn btn-default btn-block disabled" data-toggle="tooltip" data-placement="bottom" title="Ya esta en el horario">'.$datos->apellidos.' '.$datos->nombres.'</button>';
                                                }else{
                                                      echo '<button type="button" class="btn btn-default btn-block" onclick="inforsab('.$datos->codigo.')">'.$datos->apellidos.' '.$datos->nombres.'</button>';
                                                }
                                                
                                          }                                          
                                          ?>
                                    </div>
                                    <div class="col-md-10 conttable">
                                          <div class="contenedor-tabla conttablelun">
                                                <div class="contenedor-fila theadd">
                                                      <div class="contenedor-columna thh">
                                                            Hora
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Bibliocafe
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Recepción (Bolsos/Multimedia)
                                                      </div>

                                                      <div class="contenedor-columna thh">
                                                            Entrada (Mesita)
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Referencia
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Procesos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            GTI
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Hemeroteca
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Circulacion y prestamos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            General Principal
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            General Cubiculos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            General Folletos
                                                      </div>
                                                      <div class="contenedor-columna thh">
                                                            Sala Grupal
                                                      </div>
                                                </div>
                                                
                                               <?php 
                                               for ($i=7; $i < 21 ; $i += 0.50) { 
                                                     
                                                     if((int) $i == $i){
                                                        echo ' <div class="contenedor-fila tbodyy sabadorows"> <div class="contenedor-columna tdd horaa">'.$i.':00 </div><div class="contenedor-columna tdd bibliocafe"></div><div class="contenedor-columna tdd recepción(bolsos/multimedia)"></div><div class="contenedor-columna tdd entrada(mesita)"></div><div class="contenedor-columna tdd referencia"></div><div class="contenedor-columna tdd procesos"></div><div class="contenedor-columna tdd gti"></div><div class="contenedor-columna tdd hemeroteca"></div><div class="contenedor-columna tdd circulaciónyprestamos"></div><div class="contenedor-columna tdd generalprincipal"></div><div class="contenedor-columna tdd generalcubiculos"></div><div class="contenedor-columna tdd generalfolletos"></div><div class="contenedor-columna tdd salagrupal"></div></div>';   
                                                     }else{                                                      
                                                      

                                                      echo ' <div class="contenedor-fila tbodyy sabadorows"> <div class="contenedor-columna tdd horaa">'.floor($i).':30</div><div class="contenedor-columna tdd bibliocafe"></div><div class="contenedor-columna tdd recepción(bolsos/multimedia)"></div><div class="contenedor-columna tdd entrada(mesita)"></div><div class="contenedor-columna tdd referencia"></div><div class="contenedor-columna tdd procesos"></div><div class="contenedor-columna tdd gti"></div><div class="contenedor-columna tdd hemeroteca"></div><div class="contenedor-columna tdd circulaciónyprestamos"></div><div class="contenedor-columna tdd generalprincipal"></div><div class="contenedor-columna tdd generalcubiculos"></div><div class="contenedor-columna tdd generalfolletos"></div><div class="contenedor-columna tdd salagrupal"></div></div>';    
                                                     }
                                               }
                                               ?>
                                          </div>
                                    </div>
                              </div>
                        </div>

                  </div>
            </div>
      </div>



      <div id="barraf">Biblioteca Cardenal Darío Castrillón Hoyos | © 2018 Developed By: Comité de Desarrollo GTI </div>

      <!-- Modal -->
      <div class="modal fade" id="mdlmoni" role="dialog">
            <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                        <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h1 id="titlemday" class="text-center">Lunes</h1>
                        </div>
                        <form id="formrgisthorario" method="POST" action="<?php echo base_url(); ?>mhorarios/regisr">
                              <div class="modal-body">
                                    <input type="text" class="form-control disabled" id="thasday" name="thasday"
                                          readonly style="display:none">
                                    <div class="col-md-12">
                                          <div class="col-md-6">
                                                <label for="">Codigo monitor</label>
                                                <input type="text" class="form-control disabled" id="txtcode"
                                                      name="txtcode" readonly>
                                          </div>
                                          <div class="col-md-6">
                                                <label for="">Apellidos y nombres</label>
                                                <input type="text" class="form-control disabled" id="txtlname"
                                                      name="txtlname" readonly>
                                          </div>
                                    </div>
                                    <div class="col-md-12">
                                          <div class="col-md-6">
                                                <label for="">Hora de inicio</label>
                                                <select name="slecthoraini" id="slecthoraini"
                                                      class="form-control"></select>
                                          </div>
                                          <div class="col-md-6">
                                                <label for="">Hora de finalización</label>
                                                <select name="slecthorafin" id="slecthorafin"
                                                      class="form-control"></select>
                                          </div>
                                    </div>
                                    <div class="col-md-12">
                                          <div class="col-md-12">
                                          <label for="">Lugar de trabajo</label>
                                          <select name="slectltrab" id="slectltrab" class="form-control">
                                          <option>Bibliocafe</option>
                                          <option>Recepción(Bolsos/Multimedia)</option>
                                          <option>entrada(mesita)</option>
                                          <option>Referencia</option>
                                          <option>Procesos</option>
                                          <option>GTI</option>
                                          <option>Hemeroteca</option>
                                          <option>Circulaciónyprestamos</option>
                                          <option>GeneralPrincipal</option>
                                          <option>GeneralCubiculos</option>
                                          <option>GeneralFolletos</option>
                                          <option>salagrupal</option>
                                          </select>
                                          </div>
                                    </div>
                                    <div class="col-md-12">
                                         <div class="col-md-12">
                                                <label for="">Comentarios</label>
                                                <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
                                         </div>
                                    </div>
                              </div>
                              <div class="modal-footer" style="border:none">
                                    <p>&nbsp;</p>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-success">Registrar al horario</button>
                              </div>
                        </form>
                  </div>
            </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="mdlainforrgi" role="dialog">
            <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                        <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h1 id="titlemdayhr" class="text-center">Lunes</h1>
                        </div>
                        <form id="formmodificar" method="POST" action="<?php echo base_url(); ?>mhorarios/modifcarr">
                              <div class="modal-body">
                                    <input type="text" class="form-control disabled" id="thasdayhr" name="thasdayhr"
                                          readonly style="display:none">
                                    <input type="text" class="form-control disabled" id="thesid" name="thesid"
                                          readonly style="display:none">
                                    <div class="col-md-12">
                                          <div class="col-md-12">
                                                <label for="">Apellidos y nombres</label>
                                                <input type="text" class="form-control disabled" id="txtlnamehr"
                                                      name="txtlnamehr" readonly>
                                          </div>
                                    </div>
                                    <div class="col-md-12">
                                          <div class="col-md-6">
                                                <label for="">Hora de inicio</label>
                                                <select name="slecthorainihr" id="slecthorainihr"
                                                      class="form-control"></select>
                                          </div>
                                          <div class="col-md-6">
                                                <label for="">Hora de finalización</label>
                                                <select name="slecthorafinhr" id="slecthorafinhr"
                                                      class="form-control"></select>
                                          </div>
                                    </div>
                                    <div class="col-md-12">
                                          <div class="col-md-12">
                                          <label for="">Lugar de trabajo</label>
                                          <select name="slectltrabhr" id="slectltrabhr" class="form-control">
                                          <option>Bibliocafe</option>
                                          <option>Recepción(Bolsos/Multimedia)</option>
                                          <option>entrada(mesita)</option>
                                          <option>Referencia</option>
                                          <option>Procesos</option>
                                          <option>GTI</option>
                                          <option>Hemeroteca</option>
                                          <option>Circulaciónyprestamos</option>
                                          <option>GeneralPrincipal</option>
                                          <option>GeneralCubiculos</option>
                                          <option>GeneralFolletos</option>
                                          <option>salagrupal</option>
                                          </select>
                                          </div>
                                    </div>
                                   <div class="col-md-12">
                                          <div class="col-md-12">
                                                <label for="">Comentarios</label>
                                                <textarea name="descripcionhr" id="descripcionhr" class="form-control"></textarea>
                                          </div>
                                   </div>
                              </div>
                              <div class="modal-footer" style="border:none">
                                    <p>&nbsp;</p>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-danger" onclick="eliminar();">Quitar del horario</button>
                                    <button type="submit" class="btn btn-success">Modificar al horario</button>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>scripts/scripthorarioprede.js"></script>

<script>
      $(document).ready(function () {
            $('#myCarousel').carousel({
                  interval: false
            });
      });
</script>

<script>
      //horarios de disponbilidad del semestre
      var lunes = [
            <?php 
            foreach($themonday as $datos){
            $information = $datos->lunes;
            $partinfor = explode("-",$information);
            $hourinit = $partinfor[0];
            $hourfin = $partinfor[1];
            $typeservice = $partinfor[2];

            echo '{
            "nombre":"'.$datos->apellidos.' '.$datos->nombres.'",
            "codigo":"'.$datos->codigo.'",
            "horainicio": "'.$hourinit.'",
            "horafin":"'.$hourfin.'",
            "tipomoni": "'.$typeservice.'"
            },';
            }
            ?>
      ];
      var martes = [
             <?php 
            foreach($thetuesday as $datos){
            $information = $datos->martes;
            $partinfor = explode("-",$information);
            $hourinit = $partinfor[0];
            $hourfin = $partinfor[1];  
            $typeservice = $partinfor[2];  

            echo '{
            "nombre":"'.$datos->apellidos.' '.$datos->nombres.'",
            "codigo":"'.$datos->codigo.'",
            "horainicio": "'.$hourinit.'",
            "horafin":"'.$hourfin.'",
            "tipomoni": "'.$typeservice.'"
            },';
            }
            ?>
      ];
      var miercoles = [
            <?php 
            foreach($thewednesday as $datos){
            $information = $datos->miercoles;
            $partinfor = explode("-",$information);
            $hourinit = $partinfor[0];
            $hourfin = $partinfor[1];  
            $typeservice = $partinfor[2];  

            echo '{
            "nombre":"'.$datos->apellidos.' '.$datos->nombres.'",
            "codigo":"'.$datos->codigo.'",
            "horainicio": "'.$hourinit.'",
            "horafin":"'.$hourfin.'",
            "tipomoni": "'.$typeservice.'"
            },';
            }
            ?>
      ];
      var jueves = [
            <?php 
            foreach($thethuersday as $datos){
            $information = $datos->jueves;
            $partinfor = explode("-",$information);
            $hourinit = $partinfor[0];
            $hourfin = $partinfor[1];  
            $typeservice = $partinfor[2];  

            echo '{
            "nombre":"'.$datos->apellidos.' '.$datos->nombres.'",
            "codigo":"'.$datos->codigo.'",
            "horainicio": "'.$hourinit.'",
            "horafin":"'.$hourfin.'",
            "tipomoni": "'.$typeservice.'"
            },';
            }
            ?>
      ];
      var viernes = [
            <?php 
            foreach($thefriday as $datos){
            $information = $datos->viernes;
            $partinfor = explode("-",$information);
            $hourinit = $partinfor[0];
            $hourfin = $partinfor[1];  
            $typeservice = $partinfor[2];  

            echo '{
            "nombre":"'.$datos->apellidos.' '.$datos->nombres.'",
            "codigo":"'.$datos->codigo.'",
            "horainicio": "'.$hourinit.'",
            "horafin":"'.$hourfin.'",
            "tipomoni": "'.$typeservice.'"
            },';
            }
            ?>
      ];
      var sabado = [
            <?php 
            foreach($thesaturday as $datos){
            $information = $datos->sabado;
            $partinfor = explode("-",$information);
            $hourinit = $partinfor[0];
            $hourfin = $partinfor[1];  
            $typeservice = $partinfor[2];  

            echo '{
            "nombre":"'.$datos->apellidos.' '.$datos->nombres.'",
            "codigo":"'.$datos->codigo.'",
            "horainicio": "'.$hourinit.'",
            "horafin":"'.$hourfin.'",
            "tipomoni": "'.$typeservice.'"
            },';
            }
            ?>
      ];

      function inforlunes(codigo) {
            $.each(lunes, function (i) {
                  if (lunes[i].codigo == codigo) {
                        $("#slecthoraini").empty();
                        $("#slecthorafin").empty();
                        var names = lunes[i].nombre;
                        var code = lunes[i].codigo;
                        var hinit = lunes[i].horainicio;
                        var hfini = lunes[i].horafin;
                        var tmoni = lunes[i].tipomoni;
                        $("#txtcode").val(code);
                        $("#txtlname").val(names);
                        $("#titlemday").text("Lunes");
                        $("#thasday").val("lunes");
                        hinit = hinit.replace(":", ".");
                        hfini = hfini.replace(":", ".");
                        var intinit = parseFloat(hinit);
                        var intifint = parseFloat(hfini);

                        if (intinit - Math.floor(intinit) != 0) {
                              intinit = Math.floor(intinit) + 0.50;
                        }

                        if (intifint - Math.floor(intifint) == 0) {
                              intifint = intifint + 0.50;
                        } else {
                              intifint = Math.floor(intifint) + 1;
                        }

                        for (var i = intinit; i < intifint; i += 0.50) {
                              var htm;
                              if (i - Math.floor(i) == 0) {
                                    htm = '<option>' + i + ':00</option>';
                              } else {
                                    htm = '<option>' + Math.floor(i) + ':30</option>';
                              }
                              $("#slecthoraini").append(htm);
                              $("#slecthorafin").append(htm);
                              htm = null
                        }
                        $("#mdlmoni").modal("show");
                  }
            });
      }

      function informartes(codigo) {
            $.each(martes, function (i) {
                  if (martes[i].codigo == codigo) {
                        $("#slecthoraini").empty();
                        $("#slecthorafin").empty();
                        var names = martes[i].nombre;
                        var code = martes[i].codigo;
                        var hinit = martes[i].horainicio;
                        var hfini = martes[i].horafin;
                        var tmoni = martes[i].tipomoni;
                        $("#txtcode").val(code);
                        $("#txtlname").val(names);
                        $("#titlemday").text("Martes");
                        $("#thasday").val("martes");
                        hinit = hinit.replace(":", ".");
                        hfini = hfini.replace(":", ".");
                        var intinit = parseFloat(hinit);
                        var intifint = parseFloat(hfini);

                        if (intinit - Math.floor(intinit) != 0) {
                              intinit = Math.floor(intinit) + 0.50;
                        }

                        if (intifint - Math.floor(intifint) == 0) {
                              intifint = intifint + 0.50;
                        } else {
                              intifint = Math.floor(intifint) + 1;
                        }

                        for (var i = intinit; i < intifint; i += 0.50) {
                              var htm;
                              if (i - Math.floor(i) == 0) {
                                    htm = '<option>' + i + ':00</option>';
                              } else {
                                    htm = '<option>' + Math.floor(i) + ':30</option>';
                              }
                              $("#slecthoraini").append(htm);
                              $("#slecthorafin").append(htm);
                              htm = null
                        }
                        $("#mdlmoni").modal("show");
                  }
            });
      }

      function informiercoles(codigo) {
            $.each(miercoles, function (i) {
                  if (miercoles[i].codigo == codigo) {
                        $("#slecthoraini").empty();
                        $("#slecthorafin").empty();
                        var names = miercoles[i].nombre;
                        var code = miercoles[i].codigo;
                        var hinit = miercoles[i].horainicio;
                        var hfini = miercoles[i].horafin;
                        var tmoni = miercoles[i].tipomoni;
                        $("#txtcode").val(code);
                        $("#txtlname").val(names);
                        $("#titlemday").text("Miercoles");
                        $("#thasday").val("miercoles");
                        hinit = hinit.replace(":", ".");
                        hfini = hfini.replace(":", ".");
                        var intinit = parseFloat(hinit);
                        var intifint = parseFloat(hfini);

                        if (intinit - Math.floor(intinit) != 0) {
                              intinit = Math.floor(intinit) + 0.50;
                        }

                        if (intifint - Math.floor(intifint) == 0) {
                              intifint = intifint + 0.50;
                        } else {
                              intifint = Math.floor(intifint) + 1;
                        }
                        for (var i = intinit; i < intifint; i += 0.50) {
                              var htm;
                              if (i - Math.floor(i) == 0) {
                                    htm = '<option>' + i + ':00</option>';
                              } else {
                                    htm = '<option>' + Math.floor(i) + ':30</option>';
                              }
                              $("#slecthoraini").append(htm);
                              $("#slecthorafin").append(htm);
                              htm = null
                        }
                        $("#mdlmoni").modal("show");
                  }
            });
      }

      function inforjueves(codigo) {
            $.each(jueves, function (i) {
                  if (jueves[i].codigo == codigo) {
                        $("#slecthoraini").empty();
                        $("#slecthorafin").empty();
                        var names = jueves[i].nombre;
                        var code = jueves[i].codigo;
                        var hinit = jueves[i].horainicio;
                        var hfini = jueves[i].horafin;
                        var tmoni = jueves[i].tipomoni;
                        $("#txtcode").val(code);
                        $("#txtlname").val(names);
                        $("#titlemday").text("Jueves");
                        $("#thasday").val("jueves");
                        hinit = hinit.replace(":", ".");
                        hfini = hfini.replace(":", ".");
                        var intinit = parseFloat(hinit);
                        var intifint = parseFloat(hfini);

                        if (intinit - Math.floor(intinit) != 0) {
                              intinit = Math.floor(intinit) + 0.50;
                        }

                        if (intifint - Math.floor(intifint) == 0) {
                              intifint = intifint + 0.50;
                        } else {
                              intifint = Math.floor(intifint) + 1;
                        }
                        for (var i = intinit; i < intifint; i += 0.50) {
                              var htm;
                              if (i - Math.floor(i) == 0) {
                                    htm = '<option>' + i + ':00</option>';
                              } else {
                                    htm = '<option>' + Math.floor(i) + ':30</option>';
                              }
                              $("#slecthoraini").append(htm);
                              $("#slecthorafin").append(htm);
                              htm = null
                        }
                        $("#mdlmoni").modal("show");
                  }
            });
      }

      function inforviernes(codigo) {
            $.each(viernes, function (i) {
                  if (viernes[i].codigo == codigo) {
                        $("#slecthoraini").empty();
                        $("#slecthorafin").empty();
                        var names = viernes[i].nombre;
                        var code = viernes[i].codigo;
                        var hinit = viernes[i].horainicio;
                        var hfini = viernes[i].horafin;
                        var tmoni = viernes[i].tipomoni;
                        $("#txtcode").val(code);
                        $("#txtlname").val(names);
                        $("#titlemday").text("Viernes");
                        $("#thasday").val("viernes");
                        hinit = hinit.replace(":", ".");
                        hfini = hfini.replace(":", ".");
                        var intinit = parseFloat(hinit);
                        var intifint = parseFloat(hfini);
                        if (intinit - Math.floor(intinit) != 0) {
                              intinit = Math.floor(intinit) + 0.50;
                        }
                        if (intifint - Math.floor(intifint) == 0) {
                              intifint = intifint + 0.50;
                        } else {
                              intifint = Math.floor(intifint) + 1;
                        }

                        for (var i = intinit; i < intifint; i += 0.50) {
                              var htm;
                              if (i - Math.floor(i) == 0) {
                                    htm = '<option>' + i + ':00</option>';
                              } else {
                                    htm = '<option>' + Math.floor(i) + ':30</option>';
                              }
                              $("#slecthoraini").append(htm);
                              $("#slecthorafin").append(htm);
                              htm = null
                        }
                        $("#mdlmoni").modal("show");
                  }
            });
      }

      function inforsab(codigo) {
            $.each(sabado, function (i) {
                  if (sabado[i].codigo == codigo) {
                        $("#slecthoraini").empty();
                        $("#slecthorafin").empty();
                        var names = sabado[i].nombre;
                        var code = sabado[i].codigo;
                        var hinit = sabado[i].horainicio;
                        var hfini = sabado[i].horafin;
                        var tmoni = sabado[i].tipomoni;
                        $("#txtcode").val(code);
                        $("#txtlname").val(names);
                        $("#titlemday").text("Sabado");
                        $("#thasday").val("sabado");
                        hinit = hinit.replace(":", ".");
                        hfini = hfini.replace(":", ".");
                        var intinit = parseFloat(hinit);
                        var intifint = parseFloat(hfini);

                        if (intinit - Math.floor(intinit) != 0) {
                              intinit = Math.floor(intinit) + 0.50;
                        }

                        if (intifint - Math.floor(intifint) == 0) {
                              intifint = intifint + 0.50;
                        } else {
                              intifint = Math.floor(intifint) + 1;
                        }
                        for (var i = intinit; i < intifint; i += 0.50) {
                              var htm;
                              if (i - Math.floor(i) == 0) {
                                    htm = '<option>' + i + ':00</option>';
                              } else {
                                    htm = '<option>' + Math.floor(i) + ':30</option>';
                              }
                              $("#slecthoraini").append(htm);
                              $("#slecthorafin").append(htm);
                              htm = null
                        }
                        $("#mdlmoni").modal("show");
                  }
            });
      }
</script>

<script>
      // los que estan registrados en el horario
      var thesundays = [
            <?php 
            foreach($loslunes as $datos){
            echo '{
            "id":"'.$datos->id.'",
            "horainicio":"'.$datos->horainicio.'",
            "horafin":"'.$datos->horafin.'",
            "ltrabajo": "'.$datos->lugartrabajo.'",
            "nombre":"'.$datos->apellidos.' '.$datos->nombres.'",
            "codigomoni":"'.$datos->codigo.'",
            "comentarios":"'.$datos->comentarios.'"
            },';
            }
            ?>
      ];

      var thetuesday = [
            <?php 
            foreach($losmartes as $datos){
            echo '{
            "id":"'.$datos->id.'",
            "horainicio":"'.$datos->horainicio.'",
            "horafin":"'.$datos->horafin.'",
            "ltrabajo": "'.$datos->lugartrabajo.'",
            "nombre":"'.$datos->apellidos.' '.$datos->nombres.'",
            "codigomoni":"'.$datos->codigo.'",
            "comentarios":"'.$datos->comentarios.'"
            },';
            }
            ?>
      ];

      var thewednesday = [
            <?php 
            foreach($losmiercoes as $datos){
            echo '{
            "id":"'.$datos->id.'",
            "horainicio":"'.$datos->horainicio.'",
            "horafin":"'.$datos->horafin.'",
            "ltrabajo": "'.$datos->lugartrabajo.'",
            "nombre":"'.$datos->apellidos.' '.$datos->nombres.'",
            "codigomoni":"'.$datos->codigo.'",
            "comentarios":"'.$datos->comentarios.'"
            },';
            }
            ?>
      ];

      var thethursday = [
            <?php 
            foreach($losjueves as $datos){
            echo '{
            "id":"'.$datos->id.'",
            "horainicio":"'.$datos->horainicio.'",
            "horafin":"'.$datos->horafin.'",
            "ltrabajo": "'.$datos->lugartrabajo.'",
            "nombre":"'.$datos->apellidos.' '.$datos->nombres.'",
            "codigomoni":"'.$datos->codigo.'",
            "comentarios":"'.$datos->comentarios.'"
            },';
            }
            ?>
      ];

      var thesfirdays = [
            <?php 
            foreach($losviernes as $datos){
            echo '{
            "id":"'.$datos->id.'",
            "horainicio":"'.$datos->horainicio.'",
            "horafin":"'.$datos->horafin.'",
            "ltrabajo": "'.$datos->lugartrabajo.'",
            "nombre":"'.$datos->apellidos.' '.$datos->nombres.'",
            "codigomoni":"'.$datos->codigo.'",
            "comentarios":"'.$datos->comentarios.'"
            },';
            }
            ?>
      ];

      var thesastudays = [
            <?php 
            foreach($lossabados as $datos){
            echo '{
            "id":"'.$datos->id.'",
            "horainicio":"'.$datos->horainicio.'",
            "horafin":"'.$datos->horafin.'",
            "ltrabajo": "'.$datos->lugartrabajo.'",
            "nombre":"'.$datos->apellidos.' '.$datos->nombres.'",
            "codigomoni":"'.$datos->codigo.'",
            "comentarios":"'.$datos->comentarios.'"
            },';
            }
            ?>
      ];

      $(function() {

            $.each(thesundays, function(i) {

                  var horainit = thesundays[i].horainicio;
                  var horafin = thesundays[i].horafin;
                  var dondemetoca = thesundays[i].ltrabajo;
                  var comentarios = thesundays[i].comentarios;
                  
                  dondemetoca = dondemetoca.toLowerCase();

                  horainit = horainit.replace(":", ".");
                  horafin = horafin.replace(":", ".");
                  var horainit = parseFloat(horainit);
                  var hourafinal = parseFloat(horafin);

                  var sizie = $(".lunesrow").length;
                  for (var index = 0; index < sizie; index++) {
                        var sizies = $(".lunesrow:eq("+index+") > .tdd").length;
                        for (var andex = 0; andex < sizies; andex++) {
                              var clases = $(".lunesrow:eq("+index+") .tdd:eq("+andex+")").attr("class");
                              if (clases.indexOf(dondemetoca)> -1) {
                                    var hora  = $(".lunesrow:eq("+index+") .tdd:eq(0)").text();
                                    hora = hora.replace(":", ".");
                                    lahoradonde = parseFloat(hora);
                                    if(lahoradonde>=horainit && lahoradonde<=hourafinal){
                                          if(comentarios == ""){
                                                var contenhtml = '<span class="label label-success btninttable" onclick="lninfrmon('+thesundays[i].id+',1)" data-toggle="tooltip" data-placement="top" title="Clic para más información">'+thesundays[i].nombre+'</span><br>';
                                                $(".lunesrow:eq("+index+") .tdd:eq("+andex+")").append(contenhtml);
                                                contenhtml = null;
                                          }else{
                                                var contenhtml = '<span class="label label-warning btninttable" onclick="lninfrmon('+thesundays[i].id+',1)" data-toggle="tooltip" data-placement="top" title="Clic para más información">'+thesundays[i].nombre+'</span><br>';
                                                $(".lunesrow:eq("+index+") .tdd:eq("+andex+")").append(contenhtml);
                                                contenhtml = null;
                                          }
                                          
                                    }
                              }
                        }
                  }

            });

            $.each(thetuesday, function(i) {

                  var horainit = thetuesday[i].horainicio;
                  var horafin = thetuesday[i].horafin;
                  var dondemetoca = thetuesday[i].ltrabajo;
                  var comentarios = thetuesday[i].comentarios;
                  dondemetoca = dondemetoca.toLowerCase();
                  horainit = horainit.replace(":", ".");
                  horafin = horafin.replace(":", ".");
                  var horainit = parseFloat(horainit);
                  var hourafinal = parseFloat(horafin);

                  var sizie = $(".martesrow").length;
                  for (var index = 0; index < sizie; index++) {
                        var sizies = $(".martesrow:eq("+index+") > .tdd").length;
                        for (var andex = 0; andex < sizies; andex++) {
                              var clases = $(".martesrow:eq("+index+") .tdd:eq("+andex+")").attr("class");
                              if (clases.indexOf(dondemetoca)> -1) {
                                    var hora  = $(".martesrow:eq("+index+") .tdd:eq(0)").text();
                                    hora = hora.replace(":", ".");
                                    lahoradonde = parseFloat(hora);
                                    if(lahoradonde>=horainit && lahoradonde<=hourafinal){
                                          if(comentarios == ""){
                                                var contenhtml = '<span class="label label-success btninttable" onclick="lninfrmon('+thetuesday[i].id+',2)" data-toggle="tooltip" data-placement="top" title="Clic para más información">'+thetuesday[i].nombre+'</span><br>';
                                                $(".martesrow:eq("+index+") .tdd:eq("+andex+")").append(contenhtml);
                                                contenhtml = null;
                                          }else{
                                                var contenhtml = '<span class="label label-warning btninttable" onclick="lninfrmon('+thetuesday[i].id+',2)" data-toggle="tooltip" data-placement="top" title="Clic para más información">'+thetuesday[i].nombre+'</span><br>';
                                                $(".martesrow:eq("+index+") .tdd:eq("+andex+")").append(contenhtml);
                                                contenhtml = null;
                                          }
                                    }
                              }
                        }
                  }

            });

            $.each(thewednesday, function(i) {

                  var horainit = thewednesday[i].horainicio;
                  var horafin = thewednesday[i].horafin;
                  var dondemetoca = thewednesday[i].ltrabajo;
                  var comentarios = thewednesday[i].comentarios;
                  dondemetoca = dondemetoca.toLowerCase();

                  horainit = horainit.replace(":", ".");
                  horafin = horafin.replace(":", ".");
                  var horainit = parseFloat(horainit);
                  var hourafinal = parseFloat(horafin);

                  var sizie = $(".miercolesrow").length;
                  for (var index = 0; index < sizie; index++) {
                        var sizies = $(".miercolesrow:eq("+index+") > .tdd").length;
                        for (var andex = 0; andex < sizies; andex++) {
                              var clases = $(".miercolesrow:eq("+index+") .tdd:eq("+andex+")").attr("class");
                              if (clases.indexOf(dondemetoca)> -1) {
                                    var hora  = $(".miercolesrow:eq("+index+") .tdd:eq(0)").text();
                                    hora = hora.replace(":", ".");
                                    lahoradonde = parseFloat(hora);
                                    if(lahoradonde>=horainit && lahoradonde<=hourafinal){
                                          if(comentarios == ""){
                                                var contenhtml = '<span class="label label-success btninttable" onclick="lninfrmon('+thewednesday[i].id+',3)" data-toggle="tooltip" data-placement="top" title="Clic para más información">'+thewednesday[i].nombre+'</span><br>';
                                                $(".miercolesrow:eq("+index+") .tdd:eq("+andex+")").append(contenhtml);
                                                contenhtml = null;
                                          }else{
                                                var contenhtml = '<span class="label label-warning btninttable" onclick="lninfrmon('+thewednesday[i].id+',3)" data-toggle="tooltip" data-placement="top" title="Clic para más información">'+thewednesday[i].nombre+'</span><br>';
                                                $(".miercolesrow:eq("+index+") .tdd:eq("+andex+")").append(contenhtml);
                                                contenhtml = null;
                                          }
                                    }
                              }
                        }
                  }

            });

            $.each(thethursday, function(i) {

                  var horainit = thethursday[i].horainicio;
                  var horafin = thethursday[i].horafin;
                  var dondemetoca = thethursday[i].ltrabajo;
                  var comentarios = thethursday[i].comentarios;
                  dondemetoca = dondemetoca.toLowerCase();
                  horainit = horainit.replace(":", ".");
                  horafin = horafin.replace(":", ".");
                  var horainit = parseFloat(horainit);
                  var hourafinal = parseFloat(horafin);

                  var sizie = $(".juevesrow").length;
                  for (var index = 0; index < sizie; index++) {
                        var sizies = $(".juevesrow:eq("+index+") > .tdd").length;
                        for (var andex = 0; andex < sizies; andex++) {
                              var clases = $(".juevesrow:eq("+index+") .tdd:eq("+andex+")").attr("class");
                              if (clases.indexOf(dondemetoca)> -1) {
                                    var hora  = $(".juevesrow:eq("+index+") .tdd:eq(0)").text();
                                    hora = hora.replace(":", ".");
                                    lahoradonde = parseFloat(hora);
                                    if(lahoradonde>=horainit && lahoradonde<=hourafinal){
                                          if(comentarios == ""){
                                                var contenhtml = '<span class="label label-success btninttable" onclick="lninfrmon('+thethursday[i].id+',4)" data-toggle="tooltip" data-placement="top" title="Clic para más información">'+thethursday[i].nombre+'</span><br>';
                                                $(".juevesrow:eq("+index+") .tdd:eq("+andex+")").append(contenhtml);
                                                contenhtml = null;
                                          }else{
                                                var contenhtml = '<span class="label label-warning btninttable" onclick="lninfrmon('+thethursday[i].id+',4)" data-toggle="tooltip" data-placement="top" title="Clic para más información">'+thethursday[i].nombre+'</span><br>';
                                                $(".juevesrow:eq("+index+") .tdd:eq("+andex+")").append(contenhtml);
                                                contenhtml = null;
                                          }
                                    }
                              }
                        }
                  }

            });

            $.each(thesfirdays, function(i) {

                  var horainit = thesfirdays[i].horainicio;
                  var horafin = thesfirdays[i].horafin;
                  var dondemetoca = thesfirdays[i].ltrabajo;
                  var comentarios = thesfirdays[i].comentarios;
                  dondemetoca = dondemetoca.toLowerCase();

                  horainit = horainit.replace(":", ".");
                  horafin = horafin.replace(":", ".");
                  var horainit = parseFloat(horainit);
                  var hourafinal = parseFloat(horafin);

                  var sizie = $(".viernesrow").length;
                  for (var index = 0; index < sizie; index++) {
                        var sizies = $(".viernesrow:eq("+index+") > .tdd").length;
                        for (var andex = 0; andex < sizies; andex++) {
                              var clases = $(".viernesrow:eq("+index+") .tdd:eq("+andex+")").attr("class");
                              if (clases.indexOf(dondemetoca)> -1) {
                                    var hora  = $(".viernesrow:eq("+index+") .tdd:eq(0)").text();
                                    hora = hora.replace(":", ".");
                                    lahoradonde = parseFloat(hora);
                                    if(lahoradonde>=horainit && lahoradonde<=hourafinal){
                                          if(comentarios == ""){
                                                var contenhtml = '<span class="label label-success btninttable" onclick="lninfrmon('+thesfirdays[i].id+',5)" data-toggle="tooltip" data-placement="top" title="Clic para más información">'+thesfirdays[i].nombre+'</span><br>';
                                                $(".viernesrow:eq("+index+") .tdd:eq("+andex+")").append(contenhtml);
                                                contenhtml = null;
                                          }else{
                                                var contenhtml = '<span class="label label-warning btninttable" onclick="lninfrmon('+thesfirdays[i].id+',5)" data-toggle="tooltip" data-placement="top" title="Clic para más información">'+thesfirdays[i].nombre+'</span><br>';
                                                $(".viernesrow:eq("+index+") .tdd:eq("+andex+")").append(contenhtml);
                                                contenhtml = null;
                                          }
                                    }
                              }
                        }
                  }

            });

            $.each(thesastudays, function(i) {

                  var horainit = thesastudays[i].horainicio;
                  var horafin = thesastudays[i].horafin;
                  var dondemetoca = thesastudays[i].ltrabajo;
                  var comentarios = thesastudays[i].comentarios;
                  dondemetoca = dondemetoca.toLowerCase();

                  horainit = horainit.replace(":", ".");
                  horafin = horafin.replace(":", ".");
                  var horainit = parseFloat(horainit);
                  var hourafinal = parseFloat(horafin);

                  var sizie = $(".sabadorows").length;
                  for (var index = 0; index < sizie; index++) {
                        var sizies = $(".sabadorows:eq("+index+") > .tdd").length;
                        for (var andex = 0; andex < sizies; andex++) {
                              var clases = $(".sabadorows:eq("+index+") .tdd:eq("+andex+")").attr("class");
                              if (clases.indexOf(dondemetoca)> -1) {
                                    var hora  = $(".sabadorows:eq("+index+") .tdd:eq(0)").text();
                                    hora = hora.replace(":", ".");
                                    lahoradonde = parseFloat(hora);
                                    if(lahoradonde>=horainit && lahoradonde<=hourafinal){
                                          if(comentarios == ""){
                                                var contenhtml = '<span class="label label-success btninttable" onclick="lninfrmon('+thesastudays[i].id+',6)" data-toggle="tooltip" data-placement="top" title="Clic para más información">'+thesastudays[i].nombre+'</span><br>';
                                                $(".sabadorows:eq("+index+") .tdd:eq("+andex+")").append(contenhtml);
                                                contenhtml = null;
                                          }else{
                                                var contenhtml = '<span class="label label-warning btninttable" onclick="lninfrmon('+thesastudays[i].id+',6)" data-toggle="tooltip" data-placement="top" title="Clic para más información">'+thesastudays[i].nombre+'</span><br>';
                                                $(".sabadorows:eq("+index+") .tdd:eq("+andex+")").append(contenhtml);
                                                contenhtml = null;
                                          }
                                    }
                              }
                        }
                  }

            });

      });
</script>

<script>
      function lninfrmon(id, donde) {
      console.log("entro!!");
      switch (donde) {
      case 1:
            console.log("lunes!!");
            $.each(thesundays, function(i) {
                  var eldiid = thesundays[i].id;
                  if (eldiid == id) {
                  var code = thesundays[i].id;
                  var hroariniciao = thesundays[i].horainicio;
                  var hroafinalizao = thesundays[i].horafin;
                  var ltrabajao = thesundays[i].ltrabajo;
                  var nombreo = thesundays[i].nombre;
                  var dudemonit = thesundays[i].codigomoni;
                  var comentarios = thesundays[i].comentarios;

                  $.each(lunes, function(j) {
                        var codigo = lunes[j].codigo;
                        if (codigo == dudemonit) {
                              var hinit = lunes[j].horainicio;
                              var hfini = lunes[j].horafin;

                              hinit = hinit.replace(":", ".");
                              hfini = hfini.replace(":", ".");
                              var intinit = parseFloat(hinit);
                              var intifint = parseFloat(hfini);

                              if (intinit - Math.floor(intinit) != 0) {
                              intinit = Math.floor(intinit) + 0.50;
                              }

                              if (intifint - Math.floor(intifint) == 0) {
                              intifint = intifint + 0.50;
                              } else {
                              intifint = Math.floor(intifint) + 1;
                              }

                              for (var i = intinit; i < intifint; i += 0.50) {
                              var htm;
                              if (i - Math.floor(i) == 0) {
                                    htm = '<option>' + i + ':00</option>';
                              } else {
                                    htm = '<option>' + Math.floor(i) + ':30</option>';
                              }
                              $("#slecthorainihr").append(htm);
                              $("#slecthorafinhr").append(htm);
                              htm = null
                              }

                              $("#slecthorainihr option").each(function(){
                                    var hourasinci = hroariniciao;
                                    var horuactu = $(this).text();
                                    
                                    if(horuactu == hourasinci){
                                          $(this).attr("selected","selected");
                                    }


                              });
                              $("#slecthorafinhr option").each(function(){
                                    var hourasinci = hroafinalizao;
                                    var horuactu = $(this).text();
                                    
                                    if(horuactu == hourasinci){
                                          $(this).attr("selected","selected");
                                    }


                              });
                              

                              $("#slectltrabhr option").each(function(){
                                    var textt = $(this).text();
                                    if(textt == ltrabajao){
                                          $(this).attr("selected","selected")
                                    }

                              });

                              

                              $("#titlemdayhr").text("Lunes");
                              $("#txtlnamehr").val(nombreo);
                              $("#thesid").val(eldiid);
                              $("#descripcionhr").val(comentarios);
                              $("#thasdayhr").val("lunes");

                              $("#mdlainforrgi").modal("show")
                        }



                  });
                  }
            });


            break;
      case 2:
            console.log("entro!! martes");
            $.each(thetuesday, function(i) {
                  var eldiid = thetuesday[i].id;
                  console.log(eldiid);
                  if (eldiid == id) {
                  console.log("eldiid");
                  var code = thetuesday[i].id;
                  var hroariniciao = thetuesday[i].horainicio;
                  var hroafinalizao = thetuesday[i].horafin;
                  var ltrabajao = thetuesday[i].ltrabajo;
                  var nombreo = thetuesday[i].nombre;
                  var dudemonit = thetuesday[i].codigomoni;
                  var comentarios = thetuesday[i].comentarios;

                  $.each(martes, function(j) {
                        var codigo = martes[j].codigo;
                        if (codigo == dudemonit) {
                              
                              var hinit = martes[j].horainicio;
                              var hfini = martes[j].horafin;
                             
                              hinit = hinit.replace(":", ".");
                              hfini = hfini.replace(":", ".");
                              var intinit = parseFloat(hinit);
                              var intifint = parseFloat(hfini);

                              if (intinit - Math.floor(intinit) != 0) {
                              intinit = Math.floor(intinit) + 0.50;
                              }

                              if (intifint - Math.floor(intifint) == 0) {
                              intifint = intifint + 0.50;
                              } else {
                              intifint = Math.floor(intifint) + 1;
                              }
                              
                              for (var i = intinit; i < intifint; i += 0.50) {
                              var htm;
                              
                              if (i - Math.floor(i) == 0) {
                                    htm = '<option>' + i + ':00</option>';
                              } else {
                                    htm = '<option>' + Math.floor(i) + ':30</option>';
                              }
                              $("#slecthorainihr").append(htm);
                              $("#slecthorafinhr").append(htm);
                              htm = null
                              }

                              $("#slecthorainihr option").each(function(){
                                    
                                    var hourasinci = hroariniciao;
                                    var horuactu = $(this).text();
                                    
                                    if(horuactu == hourasinci){
                                          $(this).attr("selected","selected");
                                    }


                              });
                              $("#slecthorafinhr option").each(function(){
                                    var hourasinci = hroafinalizao;
                                    var horuactu = $(this).text();
                                    
                                    if(horuactu == hourasinci){
                                          $(this).attr("selected","selected");
                                    }


                              });
                              

                              $("#slectltrabhr option").each(function(){
                                    var textt = $(this).text();
                                    if(textt == ltrabajao){
                                          $(this).attr("selected","selected")
                                    }

                              });

                              

                              $("#titlemdayhr").text("Martes");
                              $("#txtlnamehr").val(nombreo);
                              $("#thesid").val(eldiid);
                              $("#descripcionhr").val(comentarios);                              $("#thasdayhr").val("martes");

                              $("#mdlainforrgi").modal("show")
                        }



                  });
                  }
            });
           
            break;
      case 3:
            console.log("entro!! miercoles");
            $.each(thewednesday, function(i) {
                  var eldiid = thewednesday[i].id;
                  console.log(eldiid);
                  if (eldiid == id) {
                  console.log("eldiid");
                  var code = thewednesday[i].id;
                  var hroariniciao = thewednesday[i].horainicio;
                  var hroafinalizao = thewednesday[i].horafin;
                  var ltrabajao = thewednesday[i].ltrabajo;
                  var nombreo = thewednesday[i].nombre;
                  var dudemonit = thewednesday[i].codigomoni;
                  var comentarios = thewednesday[i].comentarios;

                  $.each(miercoles, function(j) {
                        var codigo = miercoles[j].codigo;
                        if (codigo == dudemonit) {
                              
                              var hinit = miercoles[j].horainicio;
                              var hfini = miercoles[j].horafin;
                             
                              hinit = hinit.replace(":", ".");
                              hfini = hfini.replace(":", ".");
                              var intinit = parseFloat(hinit);
                              var intifint = parseFloat(hfini);

                              if (intinit - Math.floor(intinit) != 0) {
                              intinit = Math.floor(intinit) + 0.50;
                              }

                              if (intifint - Math.floor(intifint) == 0) {
                              intifint = intifint + 0.50;
                              } else {
                              intifint = Math.floor(intifint) + 1;
                              }
                              
                              for (var i = intinit; i < intifint; i += 0.50) {
                              var htm;
                              
                              if (i - Math.floor(i) == 0) {
                                    htm = '<option>' + i + ':00</option>';
                              } else {
                                    htm = '<option>' + Math.floor(i) + ':30</option>';
                              }
                              $("#slecthorainihr").append(htm);
                              $("#slecthorafinhr").append(htm);
                              htm = null
                              }

                              $("#slecthorainihr option").each(function(){
                                    
                                    var hourasinci = hroariniciao;
                                    var horuactu = $(this).text();
                                    
                                    if(horuactu == hourasinci){
                                          $(this).attr("selected","selected");
                                    }


                              });
                              $("#slecthorafinhr option").each(function(){
                                    var hourasinci = hroafinalizao;
                                    var horuactu = $(this).text();
                                    
                                    if(horuactu == hourasinci){
                                          $(this).attr("selected","selected");
                                    }


                              });
                              

                              $("#slectltrabhr option").each(function(){
                                    var textt = $(this).text();
                                    if(textt == ltrabajao){
                                          $(this).attr("selected","selected")
                                    }

                              });

                              

                              $("#titlemdayhr").text("Miercoles");
                              $("#txtlnamehr").val(nombreo);
                              $("#thesid").val(eldiid);
                              $("#descripcionhr").val(comentarios);                              $("#thasdayhr").val("miercoles");

                              $("#mdlainforrgi").modal("show")
                        }



                  });
                  }
            });
            break;
      case 4:
            console.log("entro!! jueves");
            $.each(thethursday, function(i) {
                  var eldiid = thethursday[i].id;
                  console.log(eldiid);
                  if (eldiid == id) {
                  console.log("eldiid");
                  var code = thethursday[i].id;
                  var hroariniciao = thethursday[i].horainicio;
                  var hroafinalizao = thethursday[i].horafin;
                  var ltrabajao = thethursday[i].ltrabajo;
                  var nombreo = thethursday[i].nombre;
                  var dudemonit = thethursday[i].codigomoni;
                  var comentarios = thethursday[i].comentarios;

                  $.each(jueves, function(j) {
                        var codigo = jueves[j].codigo;
                        if (codigo == dudemonit) {
                              
                              var hinit = jueves[j].horainicio;
                              var hfini = jueves[j].horafin;
                             
                              hinit = hinit.replace(":", ".");
                              hfini = hfini.replace(":", ".");
                              var intinit = parseFloat(hinit);
                              var intifint = parseFloat(hfini);

                              if (intinit - Math.floor(intinit) != 0) {
                              intinit = Math.floor(intinit) + 0.50;
                              }

                              if (intifint - Math.floor(intifint) == 0) {
                              intifint = intifint + 0.50;
                              } else {
                              intifint = Math.floor(intifint) + 1;
                              }
                              
                              for (var i = intinit; i < intifint; i += 0.50) {
                              var htm;
                              
                              if (i - Math.floor(i) == 0) {
                                    htm = '<option>' + i + ':00</option>';
                              } else {
                                    htm = '<option>' + Math.floor(i) + ':30</option>';
                              }
                              $("#slecthorainihr").append(htm);
                              $("#slecthorafinhr").append(htm);
                              htm = null
                              }

                              $("#slecthorainihr option").each(function(){
                                    
                                    var hourasinci = hroariniciao;
                                    var horuactu = $(this).text();
                                    
                                    if(horuactu == hourasinci){
                                          $(this).attr("selected","selected");
                                    }


                              });
                              $("#slecthorafinhr option").each(function(){
                                    var hourasinci = hroafinalizao;
                                    var horuactu = $(this).text();
                                    
                                    if(horuactu == hourasinci){
                                          $(this).attr("selected","selected");
                                    }


                              });
                              

                              $("#slectltrabhr option").each(function(){
                                    var textt = $(this).text();
                                    if(textt == ltrabajao){
                                          $(this).attr("selected","selected")
                                    }

                              });

                              

                              $("#titlemdayhr").text("Jueves");
                              $("#txtlnamehr").val(nombreo);
                              $("#thesid").val(eldiid);
                              $("#descripcionhr").val(comentarios);                              $("#thasdayhr").val("jueves");

                              $("#mdlainforrgi").modal("show")
                        }



                  });
                  }
            });
            break;
      case 5:
            console.log("entro!! viernes");
            $.each(thesfirdays, function(i) {
                  var eldiid = thesfirdays[i].id;
                  console.log(eldiid);
                  if (eldiid == id) {
                  console.log("eldiid");
                  var code = thesfirdays[i].id;
                  var hroariniciao = thesfirdays[i].horainicio;
                  var hroafinalizao = thesfirdays[i].horafin;
                  var ltrabajao = thesfirdays[i].ltrabajo;
                  var nombreo = thesfirdays[i].nombre;
                  var dudemonit = thesfirdays[i].codigomoni;
                  var comentarios = thesfirdays[i].comentarios;

                  $.each(viernes, function(j) {
                        var codigo = viernes[j].codigo;
                        if (codigo == dudemonit) {
                              
                              var hinit = viernes[j].horainicio;
                              var hfini = viernes[j].horafin;
                             
                              hinit = hinit.replace(":", ".");
                              hfini = hfini.replace(":", ".");
                              var intinit = parseFloat(hinit);
                              var intifint = parseFloat(hfini);

                              if (intinit - Math.floor(intinit) != 0) {
                              intinit = Math.floor(intinit) + 0.50;
                              }

                              if (intifint - Math.floor(intifint) == 0) {
                              intifint = intifint + 0.50;
                              } else {
                              intifint = Math.floor(intifint) + 1;
                              }
                              
                              for (var i = intinit; i < intifint; i += 0.50) {
                              var htm;
                              
                              if (i - Math.floor(i) == 0) {
                                    htm = '<option>' + i + ':00</option>';
                              } else {
                                    htm = '<option>' + Math.floor(i) + ':30</option>';
                              }
                              $("#slecthorainihr").append(htm);
                              $("#slecthorafinhr").append(htm);
                              htm = null
                              }

                              $("#slecthorainihr option").each(function(){
                                    
                                    var hourasinci = hroariniciao;
                                    var horuactu = $(this).text();
                                    
                                    if(horuactu == hourasinci){
                                          $(this).attr("selected","selected");
                                    }


                              });
                              $("#slecthorafinhr option").each(function(){
                                    var hourasinci = hroafinalizao;
                                    var horuactu = $(this).text();
                                    
                                    if(horuactu == hourasinci){
                                          $(this).attr("selected","selected");
                                    }


                              });
                              

                              $("#slectltrabhr option").each(function(){
                                    var textt = $(this).text();
                                    if(textt == ltrabajao){
                                          $(this).attr("selected","selected")
                                    }

                              });

                              

                              $("#titlemdayhr").text("Viernes");
                              $("#txtlnamehr").val(nombreo);
                              $("#thesid").val(eldiid);
                              $("#descripcionhr").val(comentarios);                              $("#thasdayhr").val("viernes");

                              $("#mdlainforrgi").modal("show")
                        }



                  });
                  }
            });
            
            break;
      case 6:
            console.log("entro!! sabado");
            $.each(thesastudays, function(i) {
                  var eldiid = thesastudays[i].id;
                  console.log(eldiid);
                  if (eldiid == id) {
                  console.log("eldiid");
                  var code = thesastudays[i].id;
                  var hroariniciao = thesastudays[i].horainicio;
                  var hroafinalizao = thesastudays[i].horafin;
                  var ltrabajao = thesastudays[i].ltrabajo;
                  var nombreo = thesastudays[i].nombre;
                  var dudemonit = thesastudays[i].codigomoni;
                  var comentarios = thesastudays[i].comentarios;

                  $.each(sabado, function(j) {
                        var codigo = sabado[j].codigo;
                        if (codigo == dudemonit) {
                              
                              var hinit = sabado[j].horainicio;
                              var hfini = sabado[j].horafin;
                             
                              hinit = hinit.replace(":", ".");
                              hfini = hfini.replace(":", ".");
                              var intinit = parseFloat(hinit);
                              var intifint = parseFloat(hfini);

                              if (intinit - Math.floor(intinit) != 0) {
                              intinit = Math.floor(intinit) + 0.50;
                              }

                              if (intifint - Math.floor(intifint) == 0) {
                              intifint = intifint + 0.50;
                              } else {
                              intifint = Math.floor(intifint) + 1;
                              }
                              
                              for (var i = intinit; i < intifint; i += 0.50) {
                              var htm;
                              
                              if (i - Math.floor(i) == 0) {
                                    htm = '<option>' + i + ':00</option>';
                              } else {
                                    htm = '<option>' + Math.floor(i) + ':30</option>';
                              }
                              $("#slecthorainihr").append(htm);
                              $("#slecthorafinhr").append(htm);
                              htm = null
                              }

                              $("#slecthorainihr option").each(function(){
                                    
                                    var hourasinci = hroariniciao;
                                    var horuactu = $(this).text();
                                    
                                    if(horuactu == hourasinci){
                                          $(this).attr("selected","selected");
                                    }


                              });
                              $("#slecthorafinhr option").each(function(){
                                    var hourasinci = hroafinalizao;
                                    var horuactu = $(this).text();
                                    
                                    if(horuactu == hourasinci){
                                          $(this).attr("selected","selected");
                                    }


                              });
                              

                              $("#slectltrabhr option").each(function(){
                                    var textt = $(this).text();
                                    if(textt == ltrabajao){
                                          $(this).attr("selected","selected")
                                    }

                              });

                              

                              $("#titlemdayhr").text("Sabado");
                              $("#txtlnamehr").val(nombreo);
                              $("#thesid").val(eldiid);
                              $("#descripcionhr").val(comentarios);                              $("#thasdayhr").val("sabado");

                              $("#mdlainforrgi").modal("show")
                        }



                  });
                  }
            });
            break;

      }
      }
</script>

<script>
      function eliminar(){
           var  days =  $("#thasdayhr").val();
            var elidid = $("#thesid").val();
            var parametros = {
                  "eldia": days,
                  "id": elidid
            }
            $.ajax({
            url: "<?php echo base_url(); ?>mhorarios/eliminar",
            type: "POST",
            data: parametros,
            complete: function (data) {
                location.reload();
                
            }
        });


      }
</script>

<script>
      $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
      });
</script>

</html>