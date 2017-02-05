<?php include_once("header.php") ?>

<section>
	
	<div class="container">
		<h1>Acessar Conta</h1>
		<hr>
	</div>

	<div class="container">
		<form method="POST" action="../inc/consult.php">
		<div class="form-group">
			<label for="login">Login</label>
			<input type="email" name="login" id="login" class="form-control" placeholder="Digite seu email de cadastro" required></input>
		</div>
		<div class="form-group">
			<label for="password">Senha</label>
			<input type="password" name="password" id="password" class="form-control" placeholder="Digite sua senha" required></input>
		</div>
		<div class="form-group">
			<button class="btn btn-primary btn-lg">Confirmar</button>
		</div>
		</form>
	</div>

</section>

<?php include_once("footer.php") ?>