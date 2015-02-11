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
                                                             
                             <h3>REQUISITOS:</h3>
                                   <ul class="list-group">
  <li class="list-group-item">SER ALUMNO INSCRITO</li>
  <li class="list-group-item">SER ALUMNO REGULAR (NO ADEUDAR NINGUNA MATERIA)</li>
  <li class="list-group-item">CONTAR CON LA AUTORIZACION DEL PADRE O TUTOR</li>
  <li class="list-group-item">ESTAR ASEGURADO EN ALGUNA INSTITUCION PUBLICA (ISSSTE, IMSS, ISSEMIN)</li>
  <li class="list-group-item">QUE EL ESENARIO ESTE ACORDE AL PERFIL PROFESIONAL (CARRERA)</li>
</ul>
                             
       
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
                                         <img src="img/pobservacion/1presentacion/presentacionI.jpg">
                                           <div class="overlay-p">
                                             <a href="img/pobservacion/1presentacion/presentacionP.pdf" target="_blank" data-gal="prettyPhoto">
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
                                             Municipio:</label>
                                                 <div class="col-xs-3">
                                                 <input type="text" name="municipio" value="<?php echo Input::old('municipio'); ?>" class="form-control" id="inputNombre" placeholder="Donde se realizará la práctica">
                                                 <div class="alert-danger"><?php echo $errors->first('municipio');?></div>
                                                 </div>  
                                                                                                         
                                                <label class="control-label col-xs-3">
                                             Fecha:</label>  <div class="col-xs-3">
                                                 <input type="text" name="fCartaPresentacion" value="<?php echo Input::old('fCartaPresentacion');?>" class="form-control" id="fCartaPresentacion" placeholder="Fecha del documento" readonly/>
                                                 <div class="alert-danger"><?php echo $errors->first('fCartaPresentacion');?></div>
                                                 </div>   
                                                 
                                                 <label class="control-label col-xs-3">
                                                 <input type="hidden" value="" name="oculto" />
                                                 <div class="alert-danger"><?php echo $errors->first('oculto');?></div>
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
                                  <div id="columna1"><h4>Imagen de muestra:</h4>  
                                  <div class="portfolio-item">
                                       <div class="portfolio-thumb">                                     
                                         <img src="img/pobservacion/2aceptacion/cartaaceptacion.jpg">
                                           <div class="overlay-p">
                                             <a href="img/pejecucion/cartaaceptacion.pdf" target="_blank" data-gal="prettyPhoto">
                                               <i class="fa fa-arrows-alt fa-2x"></i>
                                             </a>                                        
                                           </div>                                    
                                      </div> <!-- /.portfolio-thumb -->
                                                                                                      
                                  </div> <!-- /.portfolio-item -->
                            </div><!-- /columna1 -->
                            
                            
                       <div id="columna2">
                                  
 <!-- inicia formulario    ********************************************-->
                        Descarga la plantilla de Ejemplo:<br>
                        <form class="form-horizontal" method="POST" action="cartaPresentacion"> 
                            <br>
                                      <p align="center"><input name="enviar2" type="submit" value="Descargar" class="btn btn-primary btn-lg"></p>                                                                
                        </form>
                            <!-- termina formulario    ********************************************-->                   
                           <br><br><br>
                         </div>
                        </div>
                      </div>
                    </div>
                 </div> <!-- /.container-fluid -->
                 @include('includes.datepicker')
 @include('includes.pie_y_escript')
  </body>           
</html>
