<?php
session_start();

if (isset($_POST)){
    if (!empty($_POST["usuario"]) && !empty($_POST["senha"])){
        $usuario = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);

        include("../model/Autenticar.php");
        $autenticarUsuario = new Autenticar();
        $logon = $autenticarUsuario->autenticarUsuario($usuario, $senha);

    //    print_r($usuario, $senha);
    //    exit;
        
        if ($logon){
            $_SESSION["id"] = $logon[0]["id"];
            $_SESSION["nomeUsuario"] = $logon[0]["nome"];
            $_SESSION["emailUsuario"] = $logon[0]["email"];
            header('location: ../index.php');
        }else{
          header('location: ../view/formLogin.php?mensagem=erroUsuario');
        }
      }else{
          header('location: ../view/formLogin.php?mensagem=erroCampos');
      }
  }else{
      header('location: ../view/formLogin.php?mensagem=erroPOST');
  }
?>
