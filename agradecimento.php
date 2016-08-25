<?php
include ('cabecalho.php');
include ('menu.php');

$agradecimento = file_get_contents("texto_agradecimento.php");
$agradecimento = str_replace("NOMEPESSOA", $_GET['nome'], $agradecimento);
echo $agradecimento;

?>


	
<div class="container">
	<div class="row">
		<div class="col-md-12">
	
			<div class="row">
					<div class="col-md-12">
						<a href="http://graduarte.com.br/blog/" class="btn btn-primary btn-lg botao_unidade" role="button">Conheça nosso Blog</a>
					
					</div>
				
			</div>
		</div>
	</div>
</div>