
<?php
//sessão
//sessão para exibir a mensagem de retorno
session_start();
if(isset($_SESSION['mensagem'])):
	
	?>


<script>
	window.onload = function(){//carrega a mensagem apos toda pagina ser carregada
		 M.toast({html: '<?php echo $_SESSION['mensagem'];?>'})
	}
</script>

<?php
endif;

session_unset();
?>