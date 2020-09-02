<?php
$_SESSION['logado'] = 0;

?>
<main>
    <form action="usuario/changepassword" method="POST">
        <div class="space"></div>
        <div class="form-group">
          <label for="exampleInputEmail1">informe seu email</label>
          <input type="email" name="cemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">nova senha senha</label>
          <input type="password" name="csenha" class="form-control" id="exampleInputPassword1">
        </div>
      
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</main>







    