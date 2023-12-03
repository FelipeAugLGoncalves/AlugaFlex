<?php
    
    if(isset($_POST['submit-carro'])){

        /*
        print_r('veiculo: ' . $_POST['veiculo']);
        print_r('<br>');
        print_r('ano: ' . $_POST['ano']);
        print_r('<br>');
        print_r('lugares: ' . $_POST['lugares']);
        print_r('<br>');
        print_r('categoria: ' . $_POST['categoria']);
        print_r('<br>');
        print_r('diaria: ' . $_POST['diaria']);
        print_r('<br>');
        print_r('Marca: ' . $_POST['marca']);
        print_r('<br>');
        */

        include_once('config.php');

         $veiculo = $_POST['veiculo'];
         $ano = $_POST['ano'];
         $lugares = $_POST['lugares'];
         $categoria = $_POST['categoria'];
         $diaria = $_POST['diaria'];
         $marca = $_POST['marca'];
 
         $resultado = mysqli_query($conexao, "INSERT INTO cadastro_veiculos(veiculo,ano,lugares,categoria,diaria,marca) 
         VALUES ('$veiculo','$ano','$lugares','$categoria','$diaria,'$marca')");
         
        print_r($resultado);
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cadastro de Veículos - AlugaFlex</title>
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
            /*
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            */
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            margin-top: 50px;
            margin-left: 50px;
            border-radius: 15px;
            width: 90%;
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

        #submit-carro
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PORTAL - ALUGAFLEX</a>
            <a class="navbar-brand" href="cadastro_veiculo.php"> CADASTRO DE VEÍCULO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
    <div class="box">
        <form action="cadastro_veiculo.php" method="POST">
            <fieldset>
                <legend>
                    <b>Cadastro de Veículos</b>
                </legend>

                <br>

                <div class="inputBox">
                    <input type="text" name="veiculo" id="veiculo" class="inputUser" required>
                    <label for="veiculo" class="labelInput">Veículo</label>
                </div>

                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="ano" id="ano" class="inputUser" required>
                    <label for="ano" class="labelInput">Ano</label>
                </div>

                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="lugares" id="lugares" class="inputUser" required>
                    <label for="lugares" class="labelInput">Lugares</label>
                </div>

                <br>

                <p>Categoria:</p>
                    <input type="radio" id="SUV" name="categoria" value="SUV" required>
                    <label for="SUV">SUV</label>
                <br>
                    <input type="radio" id="Familia" name="categoria" value="Familia" required>
                    <label for="Familia">Familia</label>
                <br>
                    <input type="radio" id="Esportivo" name="categoria" value="Esportivo" required>
                    <label for="Esportivo">Esportivo</label>
                <br>
                    <input type="radio" id="Sedan" name="categoria" value="Sedan" required>
                    <label for="Sedan">Sedan</label>
                <br>
                    <input type="radio" id="Hatch" name="categoria" value="Hatch" required>
                    <label for="Hatch">Hatch</label>
                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="diaria" id="diaria" class="inputUser" required>
                    <label for="diaria" class="labelInput">Diária</label>
                </div>

                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="marca" id="marca" class="inputUser" required>
                    <label for="marca" class="labelInput">Marca</label>
                </div>

                <br>
                <br>
                
                <input type="submit" name="submit-carro" id="submit-carro">

            </fieldset>
        </form>
    </div>
</body>
</html>
