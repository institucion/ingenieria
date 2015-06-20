<?php 
echo"usuarios insertado";

DB::table('users')->insert(array(
	       array(
	       	'id'=>'2',
	       	'usuario'=>'usuario2',
	       	'password'=>  bcrypt('1234'),
	       	'tipo'=>'profesor'



	       	)));


	

DB::table('users')->insert(array(
	       array(
	       	'id'=>'3',
	       	'usuario'=>'usuario3',
	       	'password'=>  bcrypt('12345'),
	       	'tipo'=>'secretaria'



	       	)));


	



 ?>