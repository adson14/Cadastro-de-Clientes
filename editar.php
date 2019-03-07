<?php
include_once 'includes/header.php';

require_once 'action/db_connect.php';



//faz um select
if(isset($_GET['id']))
{
  $id = mysqli_escape_string($conn,$_GET['id']);
  $sql = "SELECT * FROM clientes WHERE id='$id'";
  $resultado = mysqli_query($conn,$sql);
  $dados = mysqli_fetch_array($resultado);
}

?>

<div class="row">
  <div class="col s12 m6 push-m3 ">
  	<h3 class="light" >Edição de Cliente</h3>
    
    <form action="action/update.php" method="POST">
      <input type="hidden" value="<?php echo $dados['id']; ?>" name="id" >
      <div class="input-field col s12">
        <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
        <label for="nome">Nome</label>
        
      </div>

      <div class="input-field col s12">
        <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>">
        <label for="sobrenome">Sobrenome</label>
        
      </div>

      <div class="input-field col s12">
        <input type="email" name="email" id="email" value="<?php echo $dados['email']; ?>">
        <label for="email">E-mail</label>
        
      </div>

      <div class="input-field col s12">
        <input type="text" name="idade" id="idade" value="<?php echo $dados['idade']; ?>">
        <label for="idade">idade</label>
        
      </div>

      <button type="submit" class="btn orange" name="btn-editar">Alterar</button>
      <a href="index.php" class="btn ">Lista</a>
    </form>

  </div>
</div>



<?php
include_once 'includes/footer.php';
?>
