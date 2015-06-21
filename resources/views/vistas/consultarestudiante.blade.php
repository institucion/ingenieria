<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Proyecto</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/diseño.css">
<style type="text/css"></style>
 </head>
<body>
 <div class="container-fluid">
 <div class="row "> 
 <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 "></div>
 <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 ">
          <div class="container-fluid  ">
  
                <div class="row cont ">
                     <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 " ></div>
    
                   <form action="" class="col-xs-10 col-sm-10 col-md-10 lg-10 formulario container ubicar" style="background-color: rgba(255, 255, 255, 0.3)">
                     <header class="row visible-lg  ">
   
      <div class="container formulario"  >
      <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-4"><img  src="css/escudo.png"  class="imgcenter class="img-responsive"" ></div>
      <div class="col-lg-8 container cerca ">
      <center>
      <h1 class="">Institución Educativa General Santander</h1>
        <h5 class=" p" align="center"  >Consultar Estudiantes</h5></center>
  </div>

   </header>
   <header class="row visible-md ">
   
            <div class="container formulario " >
      <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-4"><img  src="css/escudo.png"  class="imgcenter class="img-responsive"" ></div>
      <div class="col-md-8 container cerca ">
      <center>
      <h2 class="">Institución Educativa General Santander</h2>
      <h5 class=" p" align="center"  >Consultar Estudiantes</h5></center>

</div>
   </header>
      <header class="row visible-sm  ">
      <div class="container  formulario"  >
      <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-4"><img  src="css/escudo.png"  class="imgcenter class="img-responsive"" ></div>
      <div class="col-sm-9 container cerca ">
      <center>
      <h3 class="">Institución Educativa General Santander</h3>
      <h5 align="center"  >Consultar Estudiantes</h5></center>

</div>
   </header>
      <header class="row visible-xs ">
   
            <div class="container formulario " >
      <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-4"><img  src="css/escudo.png"  class="imgcenter class="img-responsive"" ></div>
      <div class="col-xs-10 container cerca ">
      <center>
      <h5 class="">Institución Educativa General Santander</h5>
      <h5   >Consultar Estudiantes</h5></center>
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




 <table  id="ubi2" class="col-xs-6  col-sm-8  ">
   <tr>
    <td>
         <div class="input-group in ">
         <span class="input-group-addon"><span class="glyphicon glyphicon-tasks"></span></span>
         <input type="text" class="form-control" placeholder="Identificacion" required>
         </div>
    </td>
    <td>
         <div class="input-group in">
            <span class="input-group-addon"><span class="glyphicon glyphicon-adjust" ></span></span>
            <select class="form-control" >
            <option> Sexo</option>
            <option> Masculino</option>
            <option> Femenino</option>
        </select>
         </div> 
    </td>
         
        

   </tr>
   <tr>
    <td>
         <div class="input-group in ">
         <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
         <input type="text" class="form-control" placeholder="Nombre" required>
         </div>
    </td>
    <td>
         <div class="input-group in ">
                           <span class="input-group-addon"><span class="glyphicon glyphicon-education" ></span></span>
                           <select class="form-control"  >
                               <option> Grado</option>
                               <option> 1°</option>
                               <option> 2°</option>
                               <option> 3°</option>
                               <option> 4°</option>
                               <option> 5°</option>
                               <option> 6°</option>
                               <option> 7°</option>
                               <option> 8°</option>
                               <option> 9°</option>
                               <option> 10°</option>
                               <option> 11°</option>
               </select>
                     </div>
    </td>
         
        

   </tr>
   <tr>
    <td>
         <div class="input-group in ">
         <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
         <input type="text" class="form-control" placeholder="Apellidos" required>
         </div>
    </td>
    <td>
         <div class="input-group in ">
         <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
         <input type="text" class="form-control" placeholder="Acudiente" required>
         </div>
    </td>
         
        

   </tr>
  <tr>
    <td>
         <div class="input-group in ">
         <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
         <input type="text" class="form-control" placeholder="Telefono" required>
         </div>
    </td>
    <td>
         <div class="input-group in ">
         <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                        <input type="text" class="form-control "  placeholder="Fec_Nac" required > 
                          </div>  
                      </td>

         </div>
    </td>
         
        

   </tr>
            <tr>
            <td>
                   <div class="input-group in ">
                           <span class="input-group-addon"><span class="glyphicon glyphicon-adjust"></span></span>
                           <input type="text" class="form-control" placeholder="Estado" required>
                           </div>
                        </td>
            
            <td>
              <div class="input-group in ">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                  <input type="text" class="form-control" placeholder="Grupo"  required >
                  </div>
            </td>
          </tr>

</table>
<div class="container tama"><p><br></p></div>




                   </form>
                   <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 "></div>

               </div>

           </div>

            





   </div>
   <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 "></div>
   <div class="container-fluid">
        <button type="submit" class="btn btn-primary form-control  atrasc p" style="color: #000000" onclick="history.back()"> Atras</button>
        <button type="submit" class="btn btn-primary form-control  consuc p" style="color: #000000"> Consultar</button>
      
</div>
</div>
</div>
<footer  class="footer">

<h5>© Laura Conde Medina & Rafael Martinez Nisperuza  </h5>

</footer>

<script type="text/javascript" src="{{asset('/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
</body>
</html>