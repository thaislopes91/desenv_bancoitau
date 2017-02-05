<?php 
	include_once("header.php");
?>

<section>
	
	<div class="container">
		<h1>Criar uma Conta</h1>
		<h2>Adquira todas as vantagens e benefícios de ser um Cliente Banco SP.</h2>
		<hr>
	</div>

	<div class="container">
		<h4>Dados Pessoais</h4>
		<form method="POST" action="../inc/cadastra.php" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nome">Nome Completo</label>
				<input type="text" name="nome" id="nome" class="form-control" required></input>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" class="form-control" required></input>
			</div>
			<div class="form-group">
				<label for="senha">Senha</label>
				<input type="password" name="senha" id="senha" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="senhasegura">Confirme a Senha</label>
				<input type="password" name="senhasegura" id="senhasegura" class="form-control" required>
			</div>
			<div class="form-group">
				<label id="sconfirm"></label>
			</div>
			<div class="form-group">
				<label for="nascimento">Nascimento</label>
				<input type="date" name="nascimento" id="nascimento" class="form-control" required></input>
			</div>				
			<div class="form-group">
				<label for="rg">RG</label>
				<input type="text" name="rg" id="rg" class="form-control" required></input>
			</div>
			<div class="form-group">
				<label for="cpf">CPF</label>
				<input type="number" name="cpf" id="cpf" class="form-control" maxlength="11" required></input>
			</div>
			<div class="form-group">
				<label for="endereco">Endereço</label>
				<input type="text" name="endereco" id="endereco" class="form-control" required></input>
			</div>
			<div class="form-group">
				<label for="bairro">Bairro</label>
				<input type="text" name="bairro" id="bairro" class="form-control" required></input>
			</div>
			<div class="form-group">
				<label for="cep">CEP</label>
				<input type="text" name="cep" id="cep" class="form-control" required></input>
			</div>
			<div class="form-group">
				<label for="cidade">Cidade</label>
				<input type="text" name="cidade" id="cidade" class="form-control" required></input>
			</div>				
			<div class="form-group">
				<label for="estado">Estado</label>
				<input type="text" name="estado" id="estado" class="form-control" required></input>
			</div>								
			<div class="form-group">
				<label for="comprovante">Comprovante de Residencia</label>
				<input type="file" name="comprovante" id="comprovante" class="form-control" required></input>
			</div>
			<div class="form-group">
				<button class="btn btn-primary btn-lg">Confirmar</button>
			</div>
		</form>
	</div>

</section>

<?php include_once("footer.php"); ?>
<script>
	$(document).ready(function() {

		$('#senhasegura').change(function() {
			if ($(this).val() == $('#senha').val()) {
				 $('#sconfirm').text('As senhas são iguais');
			}
			else{	
				$('#sconfirm').text('As senhas não são iguais, por favor corrija!');
			}
		});		
	});
</script>