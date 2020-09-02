<?php
session_start();
$_SESSION['logado'] = 0;

 require "classes/Usuario.php";
	include "config.php";

	
	include HOME_DIR."view/tema/header.php";
	//include "login.php";
	



echo"<main>
<form action='Logar.php' method='POST'>
	<div class='space'></div>
	<div class='form-group'>
	  <label for='exampleInputEmail1'>Endereço de Email</label>
	  <input type='email' name='email' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp'>
	  <small id='emailHelp' class='form-text text-muted'>We'll never share your email with anyone else.</small>
	</div>
	<div class='form-group'>
	  <label for='exampleInputPassword1'>senha</label>
	  <input type='password' name='senha' class='form-control' id='exampleInputPassword1'>
	</div>
  
	<button type='submit' class='btn btn-primary'>Submit</button>
  </form>
</main>";








    
	include HOME_DIR."view/tema/footer.php";

	
?>