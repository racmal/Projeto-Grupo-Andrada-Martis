<?php
include ('cabecalho.php');
include ('menu.php');
?>
<div class="container">
	<h2><b> Formulário </b></h2>
	
	<span style="font-weight: 400;">Preencha o </span><b>formulário</b><span style="font-weight: 400;"> abaixo com seus dados para solicitar nosso contato.</span>

<span style="font-weight: 400;">Após o preenchimento, você receberá um e-mail de confirmação e em até 72 horas o responsável por nossas parcerias entrará em contato com você.</span>

&nbsp;

<b>Dados Pessoais</b>
	
	
	<div class="row">
		<div class="col-md-12">
		
			<form action="enviar_contato.php" method="post"> 
			  <h3><b> Dados Pessoais </b></h3>
	
			  <div class="form-group">
				<label for="exampleInputNome1">Nome Completo</label>
				<input type="text" name="nome" required class="form-control" id="exampleInputNome1" placeholder="Nome">
			  </div>
			  <div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="text" name="email" required class="form-control" id="exampleInputEmail1" placeholder="Email">
			  </div>
		
			  <div class="row">
				<div class="col-md-6">
					  <div class="form-group">
						<label for="exampleInputTelefone1">Telefone*:</label>
						<input type="text" name="telefone" required class="form-control" id="exampleInputtelefone1" placeholder="Telefone">
					  </div>
				</div>	  
				  

			    <div class="col-md-6">
					  <div class="form-group">
						<label for="exampleInputCelular1">Celular*:</label>
						<input type="text" name="celular" required class="form-control" id="exampleInputCelular1" placeholder="Celular">
					  </div>
				</div>	  
			  </div>	  
	
				<div class="row">
				  <div class="col-md-3">
					<label>Possui instituição de ensino:</label>
					<select class="form-control" onchange="muda_campos_instituicao(this.value)">
                            <option value="">...</option>
							<option value="sim">Sim</option>
							<option value="nao">Não</option>
					</select>
				  </div>

                  <!-- display none abaixo significa nao mostrar o campo -->
				  <div class="col-md-3 campos-instituicao" style="display: none">
						<label for="nomeInstituicao">Nome da instituição*:</label>
						<input type="text" class="form-control" id="nomeInstituicao" placeholder="">
                  </div>

                  <!-- display none abaixo significa nao mostrar o campo -->
				  <div class="col-md-3 campos-instituicao" style="display: none">
						<label for="siteInstituicao">Site da instituição*:</label>
						<input type="text" class="form-control" id="siteInstituicao" placeholder="">
                  </div>
				</div>
				
				
				<div class="row">			
				  <div class="col-md-3 .ol-md-offset-12">
			
					<H3><b> Endereço </b></H3>
					  
					  <div class="form-group">
						<label for="cep">Cep</label>
						<input type="text" id="cep" required class="form-control" placeholder="Cep">
					  </div>
				  </div>
				</div>
				  
				<div class="row">
					<div class="col-md-6">
						  <div class="form-group">
							<label for="exampleInputRua1">Rua*:</label>
							<input type="text" id="rua" class="form-control" placeholder="Rua">
						  </div>
					</div>	  
					  

				    <div class="col-md-6">
						  <div class="form-group">
							<label for="numero">Numero*:</label>
							<input type="text" id="numero" class="form-control" placeholder="Numero">
						  </div>
					</div>	  
				</div>	  	
					
				<div class="row">
					<div class="col-md-6">
					  <div class="form-group">
						<label for="bairro">Bairro*:</label>
						<input type="text" id="bairro" class="form-control" placeholder="Bairro">
					  </div>
					</div>	  
				  

					<div class="col-md-6">
					  <div class="form-group">
						<label for="cidade">Cidade*:</label>
						<input type="text" id="cidade" class="form-control" placeholder="Cidade">
					  </div>
					</div>	  
				</div>
				
				
				<div class="row">
					<div class="col-md-6">
					  <div class="form-group">
						<label for="estado">Estado*:</label>
						<input type="text" id="estado" class="form-control" placeholder="Estado">
					  </div>
					</div>	  
				  

					<div class="col-md-6">
					  <div class="form-group">
						<label for="complemento">Complemento:</label>
						<input type="text" id="complemento" class="form-control" placeholder="Complemento">
					  </div>
					</div>	  
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
