<?php



include_once 'action/db_connect.php';

include_once 'includes/header.php';

//mensagem
include_once 'includes/mensagem.php';
?>




<div class="row">
  <div class="col s12 m6 push-m3 ">
  	<h3 class="light" >Clientes</h3>
    <table class="striped">
      <thead>
        <tr>
        	<th>NOME:</th>
        	<th>SOBRENOME:</th>
        	<th>E-MAIL</th>
        	<th>IDADE</th>
        	<th>AÇÃO</th>
        </tr>
      </thead>

      <tbody>
      	<?php
      		$sql= "SELECT * FROM clientes";
      		$resultado = mysqli_query($conn,$sql);
      		if(mysqli_num_rows($resultado) > 0):// se haver registro o loop é feito

      		while ($dados=mysqli_fetch_array($resultado)):
      			
      		
      	?>
      	<tr>
      		<td><?php  echo $dados['nome']; ?></td>
      		<td><?php  echo $dados['sobrenome']; ?></td>
      		<td><?php  echo $dados['email']; ?></td>
      		<td><?php  echo $dados['idade']; ?></td>
      		<!--Para pegar os dados do id do cliente para realizar a edição-->
      		<td><a href="editar.php?id=<?php echo $dados['id'] ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

      		<!--Para exibir o modal se o susuario tem certeza, é cocatenado o id junto com o id-->
      		<td><a href="#modal<?php  echo $dados['id']; ?>" class="btn-floating orange modal-trigger"><i class="material-icons">delete</i></a></td>
      		

		      		 <!-- Modal Structure -->
		  <div id="modal<?php  echo $dados['id']; ?>" class="modal">
		    <div class="modal-content">
		      <h4>ATENÇÃO!</h4>
		      <p>Tem certeza que deseja excluir?</p>
		   
		    <div class="modal-footer">
		     
		      <form action="action/delete.php" method="POST">
		      	<input type="hidden" name="id" value="<?php  echo $dados['id']; ?>">
		      	<button type="submit" name="btn-deletar" class="btn red">Confirmar</button>
		      	 <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
		      </form>
		    </div>
		     </div>
		  </div>
          


      	</tr>

      <?php endwhile; 
      	else://se não existir registro ele apresenta as coluanas com um -
      ?>
      <tr>
      	<td>-</td>
      	<td>-</td>
      	<td>-</td>
      	<td>-</td>
      </tr>

      <?php
      	endif;
      ?>
      </tbody>

    </table>
    <br>
    <a href="adicionar.php" class="btn orange">Novo Cliente</a>

  </div>
</div>



<?php
include_once 'includes/footer.php';
?>
