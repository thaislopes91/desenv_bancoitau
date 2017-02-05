<?php include_once("header.php") ?>

<section>

	<div class="container">
		<h1>Meus Dados</h1>
		<hr>
	</div>

	<div class="container">
		<form method="POST" action="../lib/php/edit.php" enctype="multipart/form-data">
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
				<input type="password" name="senha" id="senha" class="form-control">
			</div>
			<div class="form-group">
				<label for="senhasegura">Confirme a Senha</label>
				<input type="password" name="senhasegura" id="senhasegura" class="form-control">
			</div>
			<div class="form-group">
				<label class="hidden" id="sconfirm">As senhas são iguais</label>
			</div>				
			<div class="form-group">
				<label class="hidden" id="snconfirm">As senhas não são iguais, por favor corrija!</label>
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
				<input type="number" name="cpf" id="cpf" class="form-control" required></input>
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

<?php include_once("footer.php") ?>