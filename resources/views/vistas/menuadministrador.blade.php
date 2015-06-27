
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
                  
                 <div class="contaner espacio1"></div>
                  <div class="container">
                    <div class="col-md-3  "></div>
                  <div class="col-md-2 ubi6 "><center><a href="estudiantes"><img src="Iconos/gestionarestudiante.svg" class="img-rounded " wigth="100" height="100"></a><p><br><strong>Gestionar Estudiante<strong></p></center></div>
                  <div class="col-md-2 ubi6 "><center><a href="consultaralumnos"><img src="Iconos/consultarestudiante.svg" class="img-rounded"  wigth="100" height="100"></a><p><br><strong>Consultar Estudiante<strong></p></center></div>
                  <div class="col-md-2 ubi6"><center><a href="ver_asignaturas_estudiante"><img src="Iconos/verasignatura.svg" class="img-rounded"  wigth="100" height="100"></a><p><br><strong>Ver Asignatura del Estudiante<strong></p></center></div>
                <div class="col-md-3 "></div>
              </div>
                  <br>
                <div class="container">
                  <div class="col-md-2  "></div>
                  <div class="col-md-2 "><center><a href="notasdealumno"><img src="Iconos/notasestudiante.svg" class="img-rounded " wigth="100" height="100"></a><p><br><strong>Notas del Estudiante<strong></p></center></div>
                <div class="col-md-2 "><center><a href="modificaralumnos"><img src="Iconos/modificarestudiante.svg" class="img-rounded"  wigth="100" height="100"></a><p><br><strong>Modificar Datos Del Estudiante<strong></p></center></div>
                  <div class="col-md-2 "><center><a href="mod_nota"><img src="Iconos/modificarnotas.svg" class="img-rounded"  wigth="100" height="100"></a><p><br><strong>Modificar Notas Del Estudiante<strong></p></center></div>
                  <div class="col-md-2 "><center><a href="matricular_asignatura_est"><img src="Iconos/inscribirasignatura.svg" class="img-rounded"  wigth="100" height="100"></a><p><br><strong>Matricular Asignatura al Estudiante </p></center>
                  </div>
                  <div class="col-md-2 "></div>
                    

                </div>
               
                  
                    
              </div>
               <div class="container-fluid">
        <button type="submit" class="btn btn-primary form-control  atrass1 p" style="color: #000000" onclick="history.back()"> Atras</button>
        
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