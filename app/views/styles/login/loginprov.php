<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
</head>

<body>


<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Crie sua conta</h1>
			<!--  <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                
			</div>-->
			<span>use seu e-mail para se registrar</span>
			<input type="text" placeholder="Nome" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Senha" />
			<button>Cadastrar</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Faça Login</h1>
			<!-- <div class="social-container">
				 <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a> 
				
			</div> -->
			<span> insira seus dados</span>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Senha" />
			<a href="#">Esqueceu sua senha?</a>
			<button>Entrar</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bem-vindo de volta!</h1>
				<p>Para se manter conectado, faça login com seus dados pessoais</p>
				<button class="ghost" id="signIn">Entrar</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Olá!</h1>
				<p>Insira seus dados pessoais para criar uma conta</p>
				<button class="ghost" id="signUp">Cadastre-se</button>
			</div>
		</div>
	</div>
</div>

<script src="script.js" charset="utf-8"></script>
</body>

</html>