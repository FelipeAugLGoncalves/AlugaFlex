<?php
    //print_r($_REQUEST);
    session_start();

    if(isset($_POST['submit-user']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        //acessa o sistema

        include_once('config.php');

        $email =  $_POST['email'];
        $senha = $_POST['senha'];
        /*
        print_r('Email: ' . $email);
        print_r('<br>');
        print_r('Senha: ' . $senha);      
        */
        
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao -> query($sql);

        //print_r($result);

        if(mysqli_num_rows($result) < 1 ){
            //print_r('Não existe');
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');

        }else{
            //print_r('Existe');
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }

    }
    else{
        header('Location: login.php');
    }

    /*session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }*/
?>
