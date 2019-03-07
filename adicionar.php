<?php
include_once 'includes/header.php';

require_once 'action/db_connect.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3 ">
  	<h3 class="light" >Novo Cliente</h3>
    
    <form action="action/create.php" method="POST">
      <div class="input-field col s12">
        <input type="text" name="nome" id="nome">
        <label for="nome">Nome</label>
        
      </div>

      <div class="input-field col s12">
        <input type="text" name="sobrenome" id="sobrenome">
        <label for="sobrenome">Sobrenome</label>
        
      </div>

      <div class="input-field col s12">
        <input type="email" name="email" id="email">
        <label for="email">E-mail</label>
        
      </div>

      <div class="input-field col s12">
        <input type="text" name="idade" id="idade">
        <label for="idade">idade</label>
        
      </div>

      

      <button type="submit" class="btn orange" name="btn-cadastrar">Cadastrar</button>
      <a href="index.php" class="btn ">Lista</a>
    </form>

  </div>
</div>



<?php
include_once 'includes/footer.php';
?>
