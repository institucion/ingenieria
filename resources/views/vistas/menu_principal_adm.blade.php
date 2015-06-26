<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  
 <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <title>Proyecto</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset ('css/diseño.css')}}">

   
</head>
<body>
<header>
<div class=" container-fluid  "> 
     <div class="row">
         <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1  "></div>
         <div class=" col-xs-10 col-sm-10 col-md-10 col-lg-10"> 
             <center>
                <div class="row">
                  
                <div  class="formulario1" style="background-color: rgba(255, 255, 255, 0.3)">
                  <img  src="css/escudo.png" class="imgcentercen img-responsive">

                  <div class="container l ">

                    <div class=" container   colo1  formulario "> 
                       <div class="col-lg-2  posc2" style="height:40px; background:#000000;">
  <ul class="nav navbar-nav navbar-right">
          @if (Auth::guest())
          <li class="dropdown " >
              
            </li>
          @else
            <li class="dropdown ">
              <a href="#" style="color:grey;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->usuario }} <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" >
                <li><a  href="{{ url('/auth/logout') }}">Cerrar Sesión</a></li>
              </ul>
            </li>
          @endif
        </ul>
</div>

</div>
                 <div class="col-md-1 "></div>
                    <div class="col-md-2 ubi5">
                    <center><a href="administrador_est"><img src="css/gestionarestudiante.svg" class="img-rounded" ></a><p><br><strong>Gestionar Estudiantes<strong></p></center></div>
                        <div class="col-md-2  ubi5">
                        <center><a href="menuprofesor"><img src="css/gestionarprofesor.svg" class="img-rounded"></a><p><br><strong> Gestionar Profesor <strong></p></center></div>
                       <div class="col-md-2 ubi5">
                        <center><a href="menu_asignatura"><img src="css/gestionarasignatura.svg" class="img-rounded"></a><p><br><strong>Gestionar Asignatura<strong></p></center></div>
                       <div class="col-md-2 ubi5">
                        <center><a href="registrodesecretaria"><img src="css/gestionarsecretaria.svg" class="img-rounded"></a><p><br><strong> Gestionar Secretaria<strong></p></center></div>
                        <div class="col-md-2 ubi5">
                        <center><a href="historial"><img src="css/historial.svg" class="img-rounded"></a><p><br><strong> Historial<strong></p></center></div>

                       <div class="col-md-1 "></div>
                  <div class="container u">
                  </div>

                   <div class="container " ><br><br><br><br><br>
                  </div>      
              </div>
              </div>




              </div>
           </center>
         </div>
         <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1  "></div>
     </div>
</div>
                             
</header> 

<script type="text/javascript" src="{{asset('/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
</body>
<footer  class="footer">

<h5>© Laura Conde Medina & Rafael Martinez Nisperuza  </h5>

</footer>
</html>