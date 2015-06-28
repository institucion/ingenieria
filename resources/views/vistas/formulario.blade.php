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
 <div class="container-fluid">  
   <div class="row">
 <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 "></div>
 <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 ">
          <div class="container-fluid  ">
  
                <div class="row cont ">
                     <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 " ></div>
    
                   <div class="col-xs-10 col-sm-10 col-md-10 lg-10 formulario container ubicar" style="background-color: rgba(255, 255, 255, 0.3)">
                     <header class="row visible-lg  ">
   
      <div class="container formulario"  >
      <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-4"><img  src="css/escudo.png"  class="imgcenter" class="img-responsive" ></div>
      <div class="col-lg-8 container cerca ">
      <center>
      <h1 class="">Institución Educativa General Santander</h1>
        <h5 class=" p" align="center"  >Registrar Estudiantes</h5></center>
  </div>

   </header>
   <header class="row visible-md ">
   
            <div class="container formulario " >
      <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-4"><img  src="css/escudo.png"  class="imgcenter class="img-responsive"" ></div>
      <div class="col-md-8 container cerca ">
      <center>
      <h2 class="">Institución Educativa General Santander</h2>
      <h5 class=" p" align="center"  >Registrar Estudiantes</h5></center>

</div>
   </header>
      <header class="row visible-sm  ">
      <div class="container  formulario"  >
      <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-4"><img  src="css/escudo.png"  class="imgcenter class="img-responsive"" ></div>
      <div class="col-sm-9 container  cerca">
      <center>
      <h3 class="">Institución Educativa General Santander</h3>
      <h5 align="center"  >Registrar Estudiantes</h5></center>

</div>
   </header>
      <header class="row visible-xs ">
   
            <div class="container formulario " >
      <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-4"><img  src="css/escudo.png"  class="imgcenter class="img-responsive"" ></div>
      <div class="col-xs-10 container cerca">
      <center>
      <h5 class="">Institución Educativa General Santander</h5>
      <h5   >Registrar Estudiantes</h5></center>
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



{!! Form::open (['route' => 'estudiantes.store']) !!}

@if (count($errors) > 0)
            <div class="alert alert-danger" style="margin-top:2%; font-family:Calibri;">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

 <table  id="ubi" class="col-xs-6  col-sm-8   ">

   <tr>
    <td>
         <div class="input-group in ">
         <span class="input-group-addon"><span class="glyphicon glyphicon-tasks"></span></span>
         {!! Form::text('identificacion',null,['class'=>'form-control', 'placeholder'=>'identificación' ]) !!}
         </div>
    </td>
    <td>
         <div class="input-group in">
            <span class="input-group-addon"><span class="glyphicon glyphicon-adjust" ></span></span>
          {!! Form::select('sexo',['Masculino'=>'Masculino','Femenino'=>'Femenino']) !!}  
                 </div> 
    </td>
         
        

   </tr>
   <tr>
    <td>
         <div class="input-group in ">
         <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
         {!! Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'nombre' ]) !!}
         </div>
    </td>
    
            <td>
         <div class="input-group in ">
         <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
          {!! Form::text('acudiente',null,['class'=>'form-control', 'placeholder'=>'Acudiente' ]) !!}
         </div>
    </td>
         
         
        

   </tr>
   <tr>
    <td>
         <div class="input-group in ">
         <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
          {!! Form::text('apellido',null,['class'=>'form-control', 'placeholder'=>'apellido' ]) !!}

         </div>
    </td>
    <td>
         <div class="input-group in ">
          <div class="input-group ">
         <span class="input-group-addon"><span class="glyphicon glyphicon-education" ></span></span>
         {!! Form::select('grado',['grado'=>'grado','1'=>'1°','2'=>'2°','3'=>'3°','4'=>'4°','5'=>'5°','6'=>'6°','7'=>'7°','8'=>'8°','9'=>'9°','10'=>'10°','11'=>'11°']) !!}
        </div>
         </div>
    </td>
         
        

   </tr>
  <tr>
    <td>
         <div class="input-group in ">
         <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
           {!! Form::text('telefono',null,['class'=>'form-control', 'placeholder'=>'telefono' ]) !!}
         </div>
    </td>
    <td>
         <div class="input-group in ">
          <div class="input-group ">
         <span class="input-group-addon"><span class="glyphicon glyphicon-user" ></span></span>
         {!! Form::select('sexo',['A'=>'A','B'=>'B','C'=>'C']) !!}  
        </div> 
                          </div>  
                      </td>

         </div>
    </td>
         
        

   </tr>
          
            
          

</table>

<div class="container tama"><p><br></p>



</div>
</div>
        






                 
                   <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 "></div>

               </div>

           </div>

            





   </div>
   <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 "></div>
   <div class="container-fluid">
      <button type="button" class="btn btn-primary form-control  atras p" style="color: #000000" onclick="history.back()"> Atras</button>
   
     {!! Form::button('Registrar', ['type'=>'submit', 'class'=>'btn btn-primary form-control regis atras p', 'style'=>'color: #000000']) !!}     

  {!! Form::close() !!}      


</div>
<footer  class="footer">

<h5>© Laura Conde Medina & Rafael Martinez Nisperuza  </h5>

</footer>

<script type="text/javascript" src="{{asset('/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
</body>
</html>