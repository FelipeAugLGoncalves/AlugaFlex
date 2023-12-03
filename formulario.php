<?php 
    
    if(isset($_POST['submit-user'])){   
         
        /*
        print_r('nome: ' .$_POST['nome']);
        print_r('<br>');
        print_r('email: ' .$_POST['email']);
        print_r('<br>');
        print_r('telefone: ' .$_POST['telefone']);
        print_r('<br>');
        print_r('sexo: ' .$_POST['sexo']);
        print_r('<br>');
        print_r('data_nascimento: ' .$_POST['data_nasc']);
        print_r('<br>');
        print_r('estado: ' .$_POST['estado']);
        print_r('<br>');
        print_r('cidade: ' .$_POST['cidade']);
        print_r('<br>');
        print_r('endereco: ' .$_POST['endereco']);
        print_r('<br>');
        print_r('senha: ' . $_POST['senha']);
        print_r('<br>');
         */
    
         include_once('config.php');

         $nome = $_POST['nome'];
         $email = $_POST['email'];
         $telefone = $_POST['telefone'];
         $sexo = $_POST['sexo'];
         $data_nasc = $_POST['data_nasc'];
         $cidade = $_POST['cidade'];
         $estado = $_POST['estado'];
         $endereco = $_POST['endereco'];
         $senha = $_POST['senha'];
 
         $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco,senha) 
         VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco','$senha')");
 
         header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulário | GN</title>
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
			left: 1290px;
			bottom:700px;
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
            margin-top: 120px;
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
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend>
                    <b>Fórmulário de Clientes</b>
                </legend>

                <br>

                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>

                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>

                <br>
                <br>

                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>

                <p>Sexo:</p>
                    <input type="radio" id="feminino" name="sexo" value="feminino" required>
                    <label for="feminino">Feminino</label>
                <br>

                <input type="radio" id="masculino" name="sexo" value="masculino" required>
                <label for="masculino">Masculino</label>

                <br>

                <input type="radio" id="outro" name="sexo" value="outro" required>
                <label for="outro">Outro</label>

                <br>
                <br>

                <label for="data_nas"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nasc" id="data_nasc" required>

                <br>
                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>

                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>

                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>

                <br>
                <br>

                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>

                <br>
                <br>

                <input type="submit" name="submit-user" id="submit-user">

            </fieldset>
           
	      
        </form>
    </div>
</body>
</html>

