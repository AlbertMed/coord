 
 <!-- This one in here is responsive menu for tablet and mobiles -->
             <div class="responsive-navigation visible-sm visible-xs">
                 <a href="#" class="menu-toggle-btn">
                     <i class="fa fa-bars fa-2x"></i>
                 </a>
                 <div class="navigation responsive-menu">
                     <ul class="main-menu">
                         <li class="home"><a href="#templatemo">Inicio</a></li>
                         <li class="about"><a href="#about">Prácticas de Observacion</a></li>
                         <li class="contact"><a href="#tipos">Formatos</a></li>
                     </ul> <!-- /.main_menu -->
                 </div> <!-- /.responsive_menu -->
             </div> <!-- /responsive_navigation -->

             <div id="main-sidebar" class="hidden-xs hidden-sm">
                 <div class="logo">
                     <h2>Alumno</h2>          
                         @if (Session::has('nom'))
                                {{Session::get('nom')}} 
                         @endif
                         @if (Session::has('nomP'))
                                {{Session::get('nomP')}} 
                         @endif
                         @if (Session::has('nomM'))
                                {{Session::get('nomM')}} &nbsp;
                         @endif
                          <br>               	     
                          <h3>Estado:</h3> 
                         @if (Session::has('estatus'))
                                {{Session::get('estatus')}} &nbsp;
                         @endif  
                        <br> 
                      
                     <h3><a href="/logout"><u>Cerrar sesión</u></a></h3>
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
