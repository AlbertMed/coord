<!DOCTYPE html>
<html>
    <head>
    <title>Prácticas Profesionales</title>
        @include('includes.stylesEncabezado')
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
                         <li class="about"><a href="#about">Prácticas Profesionales</a></li>
                         <li class="contact"><a href="#tipos">Tipos de Prácticas</a></li>
                         <li class="services"><a href="#services">Informaci&Oacute;n del proceso</a></li>
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
                         <li class="about"><a href="#about">Prácticas Profesionales</a></li>
                         <li class="contact"><a href="#tipos">Tipos de Prácticas</a></li>
                         <li class="services"><a href="#services">Informaci&Oacute;n del proceso</a></li>

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
                                     <h2>Prácticas Profesionales</h2>
                                 </div>
                             </div>
                         </div>                         
                         
                     <div class="row">
     <!--                     

                         </div> <!-- /.row -->
                         <div class="row our-story">
                             <div class="col-md-8">                                 
                              <h3>¿Cuál es el objetivo de la práctica profesional?</h3>
                              <p align="justify">Fortalecer el campo de formación profesional 
                              mediante la vinculación del estudiante en escenarios reales para 
                              la obtención y aplicación de conocimientos, desarrollo de 
                              habilidades, fomento de actitudes y valores que le permitan
                               interactuar en el sector laboral, visualizando posibilidades de 
                               inserción.</p><br>

                               <h3>¿En qué consiste la práctica profesional?</h3>
                               <p align="justify">La práctica profesional es un periodo de tiempo 
                               donde el estudiante de una carrera técnica realiza tareas en un 
                               escenario real, relacionadas con las competencias que habrá de 
                               adquirir en cada uno de los módulos profesionales durante su formación.
                                <br><br>
                               Hablar de una práctica profesional, significa tener en cuenta todo un 
                               proceso de formación del estudiante, quien debe dar inicio con las 
                               prácticas de observación para que posteriormente realice prácticas de 
                               ejecución de competencia y finalice con el submódulo de estadía en 
                               escenarios reales de la carrera técnica cursada.<br> <br>

                               Dichas situaciones coadyuvan al fortalecimiento académico y profesional 
                               del estudiante para que logre los atributos de una competencia profesional: 
                               el saber, saber hacer, el ser, para poder así interactuar con su medio.<br><br></p>                            


                             <h3>¿En qué escenarios se pueden realizar las prácticas profesionales?</h3>
                             <p align="justify">En empresas, instituciones públicas o privadas y cualquier escenario real 
                             que reúna las características que favorezcan el desarrollo de las competencias
                              profesionales extendidas relacionadas con el perfil de egreso del estudiante.</p>
                              <br><br>

                              <h3>¿Quiénes participan en el proceso de prácticas profesionales?</h3>
                              <p>La participación es de varias figuras:<br><br>
                              a)  Supervisor Escolar.<br>
                              b)  Institución educativa que son: El director, subdirector escolar, 
                              secretario escolar, el coordinador del área de vinculación, los orientadores 
                              écnicos, los docentes de la formación propedéutica y profesional, 
                              los estudiantes y los padres de familia o tutores.<br>
                              c)  Escenario Real.<br><br>
                             La operatividad de las prácticas requiere que los involucrados ejecuten las siguientes acciones: 
                            </p>
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
                                     <h2>Tipos de Prácticas</h2>
                                 </div> <!-- /.section-title -->
                             </div> <!-- /.col-md-12 -->
                         </div> <!-- /.row -->
                      

                         
                         <div class="row our-tipos">

                            <div class="col-md-8">
                              <h3>Prácticas de Observación:</h3>
                              <p align="justify">El estudiante con la orientación y 
                              asesoría del profesor que imparte la materia de Dinámicas 
                              Productivas Regionales y los titulares del módulo profesional I,
                              coordinados por quien imparte el submódulo de Instrumenta la 
                              práctica,  participa en el reconocimiento del ámbito laboral en 
                              las áreas  de producción  de bienes o servicios en su entorno 
                              social; con la finalidad de recopilar información de lo existente
                              como oportunidad de desarrollo profesional futuro.</p><br><br>

                               <p align="right"><a  href ="observacion" class="btn btn-primary btn-lg">Más informacion  >></a></p>                                                         
                            
                            </div>   <!-- /col-md-8 -->
                            
                             <div class="col-md-8">
                              <h3>Prácticas de Ejecución:</h3>
                              <p align="justify">El estudiante con la orientación y 
                              asesoría del profesor que imparte la materia de Dinámicas 
                              Productivas Regionales y los titulares del módulo profesional I,
                              coordinados por quien imparte el submódulo de Instrumenta la 
                              práctica,  participa en el reconocimiento del ámbito laboral en 
                              las áreas  de producción  de bienes o servicios en su entorno 
                              social; con la finalidad de recopilar información de lo existente
                              como oportunidad de desarrollo profesional futuro.</p><br><br>

                               <p align="right"><a  href ="ejecucion" class="btn btn-primary btn-lg">Más informacion  >></a></p>                                                         
                            
                            </div>   <!-- /col-md-8 -->
                              
                               <div class="col-md-4">
                                  <div class="story-image">
                                     
                                  </div>
                               </div>
                         </div>
                             
                            <div class="col-md-4">
                                 <div class="contac-item">
                                     <div class="contac-icon">
                                         <i class="fa fa-laptop fa-2x"></i>
                                     </div>
                                      <div class="contac-content">
                                         <H3><a href="presenta.html" target="_blank"><font color="#fff">Presentación</font></a></H3>
                                      </div>
                                 </div> <!-- /.service-item -->
                             </div> <!-- /.col-md-4 -->
                             
                             
              </div> <!-- /#tipos -->


                   <div id="services" class="section-content">
                       
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="section-title">
                                     <h2>información del Proceso </h2>
                                 </div> <!-- /.section-title -->
                             </div> <!-- /.col-md-12 -->
                         </div> <!-- /.row -->
                         <div class="row our-skills">

                             <div class="col-md-8">
                                
                             </div>
                             <div class="col-md-4">
                                 <div class="story-image">
                                     
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-4">
                                 <div class="service-item">
                                     <div class="service-icon">
                                         <i class="fa fa-laptop fa-2x"></i>
                                     </div>
                                     <div class="service-content">
                                         <h3><a href="presenta.html" target="_blank"><font color="#fff">Presentación</font></a></h3>

                                     </div>
                                 </div> <!-- /.service-item -->
                             </div> <!-- /.col-md-4 -->
                     </div> <!-- /#services -->



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


     <script src="js/jquery-1.10.2.min.js"></script>
             <script src="js/jquery.singlePageNav.js"></script>
             <script src="js/jquery.flexslider.js"></script>
             <script src="js/jquery.prettyPhoto.js"></script>
             <script src="js/custom.js"></script>
             <script type='text/javascript' src='js/logging.js'></script>
</html>