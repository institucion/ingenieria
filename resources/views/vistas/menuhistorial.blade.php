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
                  
                  <div class="col-md-3 "></div>
                    <div class="col-md-2 ubi5 ">
                    <center><a href="asignaturasquenoseimparten"><img src="css/asignaturas.svg" class="img-rounded" ></a><p><br><strong>Asignaturas que no se imparten<strong></p></center></div>
                        <div class="col-md-2 ubi5">
                        <center><a href="exalumnos"><img src="css/consultarprofesor.svg" class="img-rounded"></a><p><br><strong>Ex-Alumnos<strong></p></center></div>
                       <div class="col-md-2 ubi5">
                        <center><a href="exprofesores"><img src="css/ex-profesores.svg" class="img-rounded"></a><p><br><strong>Ex-Profesores<strong></p></center></div>

                       <div class="col-md-3 "></div>
               
                  <div class="container u">
                  </div>
<div class="container " ><br><br>
                  </div>
             <div class="container-fluid">
        <button type="submit" class="btn btn-primary form-control  atrass1 p" style="color: #000000" onclick="history.back()"> Atras</button>
        
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