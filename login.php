<!DOCTYPE html>
<html>
<head>
	<title>AlugaFlex - Alugue agora!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		*
		{
            margin: 0;
            padding: 0;
        }

		#menu_login
		{
			paddding: 10px;
			float: right;
			position: absolute;
			left: 1320px;
			bottom:710px;
		}

        .box
		{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            margin-top: 50px;
            border-radius: 15px;
            width: 20%;
        }

        fieldset
        {
            border: 3px solid #f7b600;
        }

        legend
        {
            border: 1px solid #f7b600;
            padding: 10px;
            text-align: center;
            background-color: #f7b600;
            border-radius: 8px;
        }

        .inputBox
        {
            position: relative;
        }

        .inputUser
        {
            background: none;
            border: none;
            border-bottom: 1px solid #f7b600;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput
        {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput
        {
            top: -20px;
            font-size: 12px;
            color: f7b600;
        }

        #data_nascimento
        {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit-user
        {
            background-color: #f7b600;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        .logo
		{
            width: 500px;
            background-color: aqua;
        }

        header
		{
            background-color: red;
            width: 100%;
        }

        #area-cabecalho
		{
	        background-color: #f7b600;
	        padding: 15px;
	        text-align: center;
        }

        #area-cabecalho a:link, #area-cabecalho a:visited
		{
	        color: #FFF;
	        padding: 8px 12px;
        }

        #area-cabecalho a:hover
		{
	        color: #f7b600;
	        background: #FFF;
	        text-decoration: none;
        }

        a
		{
	        text-decoration: none;	
        }

        a:link, a:visited
		{
	        color: #f7b600;
        }

        a:hover
		{
	        text-decoration: underline;
        }

        h1
		{
            color: #4e4e4e;
            font-size: 2.5em;
        }

        h2
		{
            color: #f7b600;
        }

        h3
		{
            color: #565656;
            background: #CCC;
            padding: 5px;
        }

        .branco
		{
            color: white;
        }

        .area-logo
		{
            font-size: 1em;
	        font-family: "Trebuchet MS", Helvetica, sans-serif;
        }
		</style>
</head>
<body>

	<div id="area-cabecalho">
			<div id="area-logo">
				<h1>Aluga<span class="branco">Flex</span></h1>
			</div>
			<div id="area-menu">
				<a href="index.php">Home</a>
				<a href="Carros.php">Carros</a>
				<a href="acessorios.php">Acessórios</a>
			</div>
			<div id="menu_login">
				<a href="login.php">Login</a> | 
				<a href="formulario.php">Registrar</a>
			</div>
		</div>
	<div class="box">
			<form form action="TesteLogin.php" method="POST">
				<fieldset>
					<legend><b>Login</b></legend>
					<div class="inputBox">
						<input type="text" name="email" id="email" placeholder="Email" class="inputUser" required>
						<label for="email" class="labelInput">E-mail</label>
					</div>
					<br><br>
					<div class="inputBox">
						<input type="password" placeholder="Senha" name="senha" id="senha" class="inputUser" required>
						<label for="senha" class="labelInput">Senha</label>
					</div>
					<br><br>
					<input type="submit" name="submit-user" id="submit-user" value="Enviar">
				</fieldset>
			</form>
		</div>
	</div>
</body>
</html>
