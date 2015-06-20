<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Proyecto</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset ('css/diseño.css')}}">
	</head>
<body>
	<header >
	
			
		<div class=" container  ">
		
		<img  src="{{asset('css/escudo.png')}}" class="imgcenterlg" class="img-responsive">

</div>

	</header>
	
					
					<div class="container-fluid">
	
  <div class="row cont">
    
    <div class="col-xs-1 col-sm-4 col-md-4" ></div>
	  
	 <form class=" col-xs-10 col-sm-4 col-md-4 formulariolg container" style="background-color: rgba(255, 255, 255, 0.3)" role="form" method="POST" action="{{ url('/auth/login') }}">
					@if (count($errors) > 0)
						<div class="alert alert-danger aba">
						@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
						</div>
					@endif	

						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						     <div class="input-group esp">
         <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
         <input type="text" class="form-control" placeholder="Usuario" name="usuario">
         </div>
         <div class="input-group esp">
         <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
         <input type="password" class="form-control" placeholder="Contraseña" name="password">
         </div>
         <center>
         	<button type="submit" class="btn btn-primary form-control ingresarlg inlg ">Ingresar</button>
         </center>

<br>

						
					</form>

	 <div class="col-xs-1 col-sm-4 col-md-4"></div>

  </div>
</div>

					
			
	</body>
	 <footer  class="footer">

<h5>© Laura Conde Medina & Rafael Martinez Nisperuza  </h5>

</footer>
	</html>	

