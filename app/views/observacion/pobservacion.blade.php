<!DOCTYPE html>
<html>
    <head>
    <title>Documentos Practicas</title>
        @include('includes.stylesEncabezado')
        <!-- CSS de Bootstrap -->
        

         <style type="text/css">
            #contenedor {
                display: table;
            }
            #contenidos {
                display: table-row;
            }
            #columna1, #columna2, #columna3 {
                display: table-cell;
                width: 400px;
            }
        </style>
    </head>    
    <body>
      <!-- This one in here is responsive menu for tablet and mobiles -->
             <div class="responsive-navigation visible-sm visible-xs">
                 <a href="#" class="menu-toggle-btn">
                     <i class="fa fa-bars fa-2x"></i>
                 </a>
                 <div class="navigation responsive-menu">
                     <ul>
                         <li class="home"><a href="#templatemo">Inicio</a></li>
                         <li class="about"><a href="#about">Prácticas de Observacion</a></li>
                         <li class="contact"><a href="#tipos">Formatos</a></li>
                     </ul> <!-- /.main_menu -->
                 </div> <!-- /.responsive_menu -->
             </div> <!-- /responsive_navigation -->

             <div id="main-sidebar" class="hidden-xs hidden-sm">
                 <div class="logo">
                     <?php echo '<h2>Alumno</h2>'; ?>
                     <?php echo '<a>Estado</a>'; ?><br><br>
                     <a href="/logout"><u>Cerrar sesión</u></a>
                 </div> <!-- /.logo -->

                 <div class="navigation">
                     <ul class="main-menu">
                         <li class="home"><a href="#templatemo">Inicio</a></li>
                         <li class="about"><a href="#about">Prácticas de Observacion</a></li>
                         <li class="contact"><a href="#tipos">Formatos</a></li>
                        

                     </ul>
                 </div> <!-- /.navigation -->

             </div> <!-- /#main-sidebar -->

             <div id="main-content">

                 <div id="templatemo">
                     <div class="main-slider">
                         <div class="flexslider">
                             <ul class="slides">

                                 <li>
                                     <div class="slider-caption">
                                         <h2>Cbt. Lic Julian Diaz Arias</h2>
                                         <p>Visitanos en Facebook</p>
                                         <a href="https://es-es.facebook.com/CBT.Lic.Julian.Diaz.Arias" rel="nofollow" class="largeButton homeBgColor">Ir</a>
                                     </div>
                                     <img src="img/slide1.jpg" alt="Slide 1">
                                 </li>

                                 <li>
                                     <div class="slider-caption">
                                         <h2>Extenci&oacute;n y vinculaci&oacute;n</h2>
                                         <p>Ofreciendo los servicios de servicio social, pr&aacute;cticas profesionales y titulaci&oacute;n.</p>
                                         <a href="http://cbtchapultepec.wix.com/coordvinc" rel="nofollow" class="largeButton homeBgColor">Saber m&aacute;s</a>
                                     </div>
                                     <img src="img/slide2.jpg" alt="Slide 2">
                                 </li>

                                 <li>
                                     <div class="slider-caption">
                                         <h2>Encuentra todo lo que necesitas</h2>
                                         <p>Ahora llena los formatos online.(ve a la sección de FORMATOS)</p>
                                         <a href="/assets/archivos/servicio/0Instructivo.doc" rel="nofollow" class="largeButton homeBgColor">Descarga un Instructivo de los campos</a>
                                     </div>
                                     <img src="img/slide3.jpg" alt="Slide 3">
                                 </li>

                             </ul>
                         </div>
                     </div>
                     <div class="container-fluid">
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="welcome-text">
                                     <h1>Bienvenido:</h1>

                                     <p>&nbsp;</p>
                                     
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div> <!-- /#sTop -->

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
                    <div class="row">
                        <div class="col-md-4">
                             <div id="contenedor">
                               <div id="contenidos">
                                  <div id="columna1">imagen de muestra  
                                  <div class="portfolio-item">
                                       <div class="portfolio-thumb">                                     
                                         <img src="img/cartaaceptacion.jpg">
                                           <div class="overlay-p">
                                             <a href="img/cartaaceptacion.jpg" data-gal="prettyPhoto">
                                               <i class="fa fa-arrows-alt fa-2x"></i>
                                             </a>                                        
                                           </div>                                    
                                      </div> <!-- /.portfolio-thumb -->
                                                                                                      
                            </div> <!-- /.portfolio-item -->
                            </div>
                                  <div id="columna2"><h4>¡Datos personales!</h4> 
                                  <form class="form-horizontal">
                                         <div class="form-group">
                                             <label class="control-label col-xs-3">Nombre:</label>
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
                                                </div>
                                         </div>
                                         <div class="form-group">
                                            <label class="control-label col-xs-3">Semestre:</label>
                                              <div class="col-xs-3">
                                                 <input type="text" class="form-control" id="inputSemestre" placeholder="Semestre">
                                               </div>
                                          </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Carrera:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control" id="inputCarrera" placeholder="Carrera">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-1">Inicio:</label>
                <div class="col-xs-1">
                    <select class="form-control col-xs-1" placeholder="dia">
                        <option>Dia</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                    </select>
                </div>
                <div class="col-xs-1">
                    <select class="form-control">
                        <option>Mes</option>
                        <option>Enero</option>
                        <option>Febrero</option>
                        <option>Marzo</option>
                        <option>Abril</option>
                        <option>Mayo</option>
                        <option>Junio</option>
                        <option>Julio</option>
                        <option>Agosto</option>
                        <option>Septiembre</option>
                        <option>Octubre</option>
                        <option>Noviembre</option>
                        <option>Diciembre</option>
                    </select>
                </div>
                 </div>
                 <div class="form-group">
                <label class="control-label col-xs-3">Fin :</label>
                <div class="col-xs-1">
                    <select class="form-control" placeholder="dia">
                        <option>Dia</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                    </select>
                </div>
                <div class="col-xs-1">
                    <select class="form-control">
                        <option>Mes</option>
                        <option>Enero</option>
                        <option>Febrero</option>
                        <option>Marzo</option>
                        <option>Abril</option>
                        <option>Mayo</option>
                        <option>Junio</option>
                        <option>Julio</option>
                        <option>Agosto</option>
                        <option>Septiembre</option>
                        <option>Octubre</option>
                        <option>Noviembre</option>
                        <option>Diciembre</option>
                    </select>
                </div>
                <div class="col-xs-1">
                    <select class="form-control">
                        <option>Año</option>
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                    </select>
                </div>
            </div>
            <h4>¡Datos de la empresa!</h4>
            <div class="form-group">
                <label class="control-label col-xs-3">Nombre:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control" id="inputNombre" placeholder="Responsable directo">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Cargo:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control" id="inputNombre" placeholder="Cargo del responsable">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Direccion:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control" id="inputNombre" placeholder="Direccion">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Telefono:</label>
                <div class="col-xs-3">
                    <input type="tel" class="form-control" id="inputNombre" placeholder="Telefono">
                </div>
            </div>

            <br>
            <div class="form-group">
                <div class="col-xs-offset-3 col-xs-4">
                    <input type="reset" class="btn btn-default" value="Limpiar">
                </div>
            </div>
        </form>
                                  </div>
                               </div>
                            </div>
                            <br><br><br>
                                      <p align="right"><a  href ="practicas/observacion" class="btn btn-primary btn-lg">Descarga >></a></p>                                                                
                 
                          
                           </div>
                         <h3 class="portfolio-title">Carta de Aceptación</h3>
                        <div class="col-md-4">
                            <div id="contenedor">
                            <div id="contenidos">
                             <div id="columna1">información de columna 1   
                                  <div class="portfolio-item">
                                <div class="portfolio-thumb">
                                    <img src="img/cartaaceptacion.jpg">
                                    <div class="overlay-p">
                                        <a href="images/portfolio/f2.png" data-gal="prettyPhoto">
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

                 <div class="site-footer">
                     <div class="first-footer">
                         <div class="container-fluid">
                             <div class="row">
                                 <div class="col-md-12">
                                     <div class="social-footer">
                                         <ul>
                                             <li><a href="https://www.facebook.com/gerardo.garciam.98" class="fa fa-facebook"></a></li>

                                         </ul>
                                     </div> <!-- /.social-footer -->
                                 </div> <!-- /.col-md-12 -->
                             </div> <!-- /.row -->
                         </div> <!-- /.container-fluid -->
                     </div> <!-- /.first-footer -->
                     <div class="bottom-footer">
                         <div class="container-fluid">
                             <div class="row">
                                 <div class="col-md-6">
                                     <p class="copyright"><a href="#">SocialService-Software</a>
                                     </p>
                                 </div> <!-- /.col-md-6 -->

                             </div> <!-- /.row -->
                         </div> <!-- /.container-fluid -->
                     </div> <!-- /.bottom-footer -->
                 </div> <!-- /.site-footer -->

             </div> <!-- /#main-content -->

           <!-- Librería jQuery requerida por los plugins de JavaScript -->
        <script src="http://code.jquery.com/jquery.js"></script>

        <!-- Todos los plugins JavaScript de Bootstrap (también puedes
             incluir archivos JavaScript individuales de los únicos
             plugins que utilices) -->
             <script src="dist/js/bootstrap.min.js"></script>
             <script src="js/jquery-1.10.2.min.js"></script>
             <script src="js/jquery.singlePageNav.js"></script>
             <script src="js/jquery.flexslider.js"></script>
             <script src="js/jquery.prettyPhoto.js"></script>
             <script src="js/custom.js"></script>
             <script type='text/javascript' src='js/logging.js'></script>
</html>