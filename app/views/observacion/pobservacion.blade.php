<!DOCTYPE html>
<html>
    <head>
    <title>Documentos Practicas</title>              
        @include('includes.stylesEncabezado')              
    </head>    
    <body>
      @include('includes.menu_y_content')
                 <div class="container-fluid">

 <div id="about" class="section-content">
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="section-title">
                                     <h2>Practica de Observación</h2>
                                 </div>
                             </div>
                         </div>                         
                         
                     <div class="row">
     <!--                     
                         </div> <!-- /.row -->
                         <div class="row our-story">
                             <div class="col-md-8">                                 
                              hola
                             </div>
       
                             <div class="col-md-4">
                                 <div class="story-image">
                                    
                                 </div>
                             </div>
                             </div>
                         </div> <!-- /.row -->
                     </div> <!-- /#about -->                 
                     
                                                                                    
<div id="tipos" class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>Descarga de formatos</h2>
                            </div> <!-- /.section-title -->
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->
                    
                    <h3 class="portfolio-title">Carta de Presentación</h3>
                    
                        <div class="col-md-4">
                             <div id="contenedor">
                               <div id="contenidos">
                                  <div id="columna1"><h4>Imagen de muestra:</h4>  
                                  <div class="portfolio-item">
                                       <div class="portfolio-thumb">                                     
                                         <img src="img/pobservacion/cartaaceptacion.jpg">
                                           <div class="overlay-p">
                                             <a href="img/pejecucion/cartapresentacion.pdf" target="_blank" data-gal="prettyPhoto">
                                               <i class="fa fa-arrows-alt fa-2x"></i>
                                             </a>                                        
                                           </div>                                    
                                      </div> <!-- /.portfolio-thumb -->
                                                                                                      
                                  </div> <!-- /.portfolio-item -->
                            </div><!-- /columna1 -->
                            
                            
                       <div id="columna2">
                                  
 <!-- inicia formulario    ********************************************-->
                        <form class="form-horizontal" method="POST" action="cartaPresentacion">
                            
                                      
                                    <div class="form-group">
                                       <h4>¡Datos personales!</h4> 
                                       
                                                 <label class="control-label col-xs-3">
                                            Inicio:</label>  <div class="col-xs-3">
                                                 <input type="text" name="Finicio" value="<?php echo Input::old('Finicio');?>" class="form-control" id="from" placeholder="Fecha de inicio" readonly/>
                                                 <div class="alert-danger"><?php echo $errors->first('Finicio');?></div>
                                                 </div>
                                                
                                                 <label class="control-label col-xs-3">
                                            Final</label> <div class="col-xs-3">
                                                 <input type="text"  class="form-control" name="Ffinal" value="<?php echo Input::old('Ffinal'); ?>" id="to" placeholder="Fecha de termino" readonly/>
                                                 <div class="alert-danger"><?php echo $errors->first('Ffinal');?></div>
                                                 </div>                                                 
                                                                                         
                                                 <label class="control-label col-xs-3">
                                            Semestre que cursas:</label>
                                                 <div class="col-xs-3">
                                                 <input type="text" name="semestre" value="<?php echo Input::old('semestre'); ?>" class="form-control" id="inputSemestre" placeholder="Semestre">
                                                 <div class="alert-danger"><?php echo $errors->first('semestre');?></div>
                                                 </div>
                                                  
                                                 <br><br>
                                      <h4>¡Datos de la empresa!</h4>
                                                
                                                 <label class="control-label col-xs-3">
                                             Nombre Completo:</label>
                                                 <div class="col-xs-3">
                                                 <input type="text" name="NombreResponsable" value="<?php echo Input::old('NombreResponsable'); ?>" class="form-control" id="inputNombre" placeholder="Responsable directo">
                                                 <div class="alert-danger"><?php echo $errors->first('NombreResponsable');?></div>                                                
                                                 </div>
                                                                                  
                                                 <label class="control-label col-xs-3">
                                             Cargo:</label>
                                                 <div class="col-xs-3">
                                                 <input type="text" name="CargoResponsable" value="<?php echo Input::old('CargoResponsable'); ?>" class="form-control" id="inputNombre" placeholder="Cargo del responsable">
                                                 <div class="alert-danger"><?php echo $errors->first('CargoResponsable');?></div>
                                                 </div>                                                 
                                                                                                 
                                                 <label class="control-label col-xs-3">
                                             Dirección:</label>
                                                 <div class="col-xs-3">
                                                 <input type="text" name="DireccionLugar" value="<?php echo Input::old('DireccionLugar'); ?>" class="form-control" id="inputNombre" placeholder="Dirección de la empresa">
                                                 <div class="alert-danger"><?php echo $errors->first('DireccionLugar');?></div>
                                                 </div>                                                 
                                                                                                 
                                                 <label class="control-label col-xs-3">
                                             Teléfono:</label>
                                                 <div class="col-xs-3">
                                                 <input type="tel" name="TeleLugar" value="<?php echo Input::old('TeleLugar'); ?>" class="form-control" id="inputNombre" placeholder="Teléfono de la empresa">
                                                 <div class="alert-danger"><?php echo $errors->first('TeleLugar');?></div>
                                                 </div> 
                                                 
                                                 </div>                                                
                                 
                            <br>
                                      <p align="center"><input name="enviar" type="submit" value="Descargar" class="btn btn-primary btn-lg"></p>                                                                
                        </form>
                            <!-- termina formulario    ********************************************-->                   
                           <br><br><br>
                         </div>
                        </div>
                      </div>
                    </div>
                           
                           
                         <h3 class="portfolio-title">Carta de Aceptación</h3>
                        <div class="col-md-4">
                            <div id="contenedor">
                            <div id="contenidos">
                             <div id="columna1">información de columna 1   
                                  <div class="portfolio-item">
                                <div class="portfolio-thumb">
                                    <img src="aquiva una img">
                                    <div class="overlay-p">
                                        <a href="aqui va una img" data-gal="prettyPhoto">
                                            <i class="fa fa-arrows-alt fa-2x"></i>
                                        </a>
                                    </div>
                                </div> <!-- /.portfolio-thumb -->    
                              </div> <!-- /.portfolio-item -->
                             </div>
                               <div id="columna2">información de columna 2   </div>
                            </div>
                          </div>
                          <br><br>                              
                                <p align="right"><a  href ="practicas/observacion" class="btn btn-primary btn-lg">Descarga >></a></p>  
                          
                        </div> <!-- /.col-md-4 -->
                     
                </div> <!-- /#portfolio -->
                 </div> <!-- /.container-fluid -->
                 @include('includes.datepicker')
 @include('includes.pie_y_escript')
  </body>           
</html>
