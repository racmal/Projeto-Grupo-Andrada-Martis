<?php
include ('cabecalho.php');
include ('menu.php');

?>

<div class="container">

	<div class="row">
		<div class="col-md-12">
			<h3>
			Seja uma Unidade
			</h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-6">
			<img src="imagens/unidade_map.png" alt="mapa das unidades">
		
		</div>
		
		
		<div class="col-md-6">
		
			<form action="enviar_contato.php" method="post">
			  <div class="form-group">
				<label for="exampleInputNome1">Nome Completo</label>
				<input type="text" name="nome" required class="form-control" id="exampleInputNome1" placeholder="Nome">
			  </div>
			  <div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="text" name="email" required class="form-control" id="exampleInputEmail1" placeholder="Email">
			  </div>
			  <div class="form-group">
				<label for="exampleInputTelefone1">Telefone de Contato</label>
				<input type="text" name="telefone" required class="form-control" id="exampleInputtelefone1" placeholder="Telefone">
			  </div>
			  <div class="form-group">
				<label for="exampleInputFile">Anexe sua Dúvida</label>
				<input type="file" id="exampleInputFile">
				<p class="help-block">Ajude nos a entender melhor sua dúvida ou problema. (campo não obrigatório).</p>
			  </div>
			  <div class="checkbox">
				<label>
				  <input type="checkbox"> Possui instituição de ensino?
				</label>
			  </div>
			  <button type="submit" class="btn btn-default">Enviar</button>
			</form>
		
		
		</div>
	</div>
	
</div>

<script src="formulario.js" type="text/javascript"></script>

<?php
	include ('rodape.php');
?>