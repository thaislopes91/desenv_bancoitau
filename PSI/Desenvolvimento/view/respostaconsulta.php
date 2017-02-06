<?php include_once("header.php") ?>

<div class="container">
	<h1>Minha Conta</h1>
	<hr>
</div>

<div class="container">
	<h4>Dados Pessoais</h4>
	<form method="POST" action="../inc/edita.php" enctype="multipart/form-data" id="formdata">
		<div class="form-group">
			<label for="nome">Nome Completo</label>
			<input type="text" name="nome" id="nome" class="form-control" required value="<?=$data['nome']?>"></input>
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" id="email" class="form-control" required value="<?=$data['email']?>"></input>
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
			<label class="hidden" id="sconfirm">As senhas são iguais</label>
		</div>				
		<div class="form-group">
			<label class="hidden" id="snconfirm">As senhas não são iguais, por favor corrija!</label>
		</div>
		<div class="form-group">
			<label for="nascimento">Nascimento</label>
			<input type="date" name="nascimento" id="nascimento" class="form-control" required value="<?=$data['nascimento']?>"></input>
		</div>				
		<div class="form-group">
			<label for="rg">RG</label>
			<input type="text" name="rg" id="rg" class="form-control" maxlength="10" required value="<?=$data['rg']?>"></input>
		</div>
		<div class="form-group">
			<label for="cpf">CPF</label>
			<input type="text" name="cpf" id="cpf" class="form-control" maxlength="11" required value="<?=$data['cpf']?>" readonly></input>
		</div>
		<div class="form-group">
			<label for="endereco">Endereço</label>
			<input type="text" name="endereco" id="endereco" class="form-control" required value="<?=$data['endereco']?>"></input>
		</div>
		<div class="form-group">
			<label for="bairro">Bairro</label>
			<input type="text" name="bairro" id="bairro" class="form-control" required value="<?=$data['bairro']?>"></input>
		</div>
		<div class="form-group">
			<label for="cep">CEP</label>
			<input type="text" name="cep" id="cep" class="form-control" maxlength="7" required value="<?=$data['cep']?>"></input>
		</div>
		<div class="form-group">
			<label for="cidade">Cidade</label>
			<input type="text" name="cidade" id="cidade" class="form-control" required value="<?=$data['cidade']?>"></input>
		</div>				
		<div class="form-group">
			<label for="estado">Estado</label>
			<input type="text" name="estado" id="estado" class="form-control" required value="<?=$data['estado']?>"></input>
		</div>								
		<div class="form-group">
			<label for="comprovante">Comprovante de Residencia</label>
			<input type="file" name="comprovante" id="comprovante" class="form-control"></input>
		</div>
		<div>
			<input type="hidden" name="caminhoarquivo" id="caminhoarquivo" value="<?=$data['caminhoarquivo']?>">
			<input type="hidden" name="nomearquivo" id="nomearquivo" value="<?=$data['nomearquivo']?>">
			<input type="hidden" name="exclusao" id="exclusao" value="<?=$data['id']?>">
		</div>
		<div class="container">			
			<label>* Para confirmar a edição, preencha sua senha</label>
		</div>
		<div class="form-group">
			<button class="btn btn-success btn-lg editaexclui">Editar</button>
			<button class="btn btn-danger btn-lg editaexclui">Excluir</button>
		</div>
	</form>
</div>

<?php include_once("footer.php") ?>
<script>
	$(document).ready(function() {

		$('.btn-danger').click(function() {
			var resposta = confirm("Atenção! Tem certeza que deseja excluir sua conta no Banco SP?");

			if(resposta){
				$.ajax({
				  type: "POST",
				  url: "excluir.php",
				  data: {
				  	id: $('#exclusao').val(),
				  },
				  success: function(a){
					alert("Sua conta foi excluida com sucesso");
					location.href="../view/index.php";
				  }
				});
			}
		});	
	});
</script>
