
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
 <div class=" container-fluid"> 
  <div class="row ">
 <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 "></div>
 <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 ">
          <div class="container-fluid  ">
  
                <div class="row cont ">
                     <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 " ></div>
    
                   <form action="" class="col-xs-10 col-sm-10 col-md-10 lg-10 formulario container ubicar" style="background-color: rgba(255, 255, 255, 0.3)">
                     <header class="row visible-lg  ">
   
      <div class="container formulario"  >
      <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-4"><img  src="css/escudo.png"  class="imgcenter" class="img-responsive" ></div>
      <div class="col-lg-8 container cerca ">
      <center>
      <h1 class="">Institución Educativa General Santander</h1>
        <h5 class=" p" align="center"  >Ex-Alumnos</h5></center>
  </div>

   </header>
   <header class="row visible-md ">
   
            <div class="container formulario " >
      <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-4"><img  src="css/escudo.png"  class="imgcenter class="img-responsive"" ></div>
      <div class="col-md-8 container cerca ">
      <center>
      <h2 class="">Institución Educativa General Santander</h2>
      <h5 class=" p" align="center"  >Ex-Alumnos</h5></center>

</div>
   </header>
      <header class="row visible-sm  ">
      <div class="container  formulario"  >
      <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-4"><img  src="css/escudo.png"  class="imgcenter class="img-responsive"" ></div>
      <div class="col-sm-9 container cerca  ">
      <center>
      <h3 class="">Institución Educativa General Santander</h3>
      <h5 align="center"  >Ex-Alumnos</h5></center>

</div>
   </header>
      <header class="row visible-xs ">
   
            <div class="container formulario " >
      <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-4"><img  src="css/escudo.png"  class="imgcenter class="img-responsive"" ></div>
      <div class="col-xs-10 container cerca">
      <center>
      <h5 class="">Institución Educativa General Santander</h5>
      <h5   >Ex-Alumnos</h5></center>
</div>
</header>

   <div class="container colo  formulario">

                     <div class="col-lg-2  posc" style="height:40px; background:#000000;">
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

 <body>
<div class="container-fluid ubi4">
  <div class="col-md-4"></div>
  <div class="col-md-4">
      <div class="input-group ">
         <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
         <input type="text" class="form-control" placeholder="Identificacion" required>
           <span class="input-group-addon"><button id="bot">Buscar</button></span>
         </div>
         </div>
    <div class="col-md-4"></div>
 </div>

<div class="container-fluid table-responsive ">
<div class="col-md-1"></div>
<div class="col-md-10">
<table class="table ">
  <tr class="active">
    <th>#</th>
    <th>Identificacion</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Sexo</th>
    <th>Acudiente</th>
    <th>Telefono</th>
    
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    

  </tr>
  <tr>
    
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    

  </tr>

</table>
</div>
<div class="col-md-1"></div>
</div>
  <div class="container-fluid">
      
          <button type="button" class="btn btn-primary form-control  atrasco p esatr" style="color: #000000" onclick="history.back()"> Atras</button>
            
</div> 
</body>
<div class="container tama"><p><br></p></div>
        
                   </form>
                   <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 "></div>

               </div>

           </div>

   </div>
   <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 "></div>
  </div>
</div>
<footer  class="footer">

<h5>© Laura Conde Medina & Rafael Martinez Nisperuza  </h5>

</footer>

<script type="text/javascript" src="{{asset('/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
</body>
</html>