<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $genero = $_POST['genero'];
        $senha = $_POST['senha'];
        if (in_array($email, $_SESSION['emails'])) {
            echo "<script language='javascript' type='text/javascript'>
       alert('E-mail já conta em nossa base de dados!');
       window.location.href='inicial.php'</script>";
       exit;
        }
        array_push($_SESSION['nomes'],$nome);
        array_push($_SESSION['emails'],$email);
        array_push($_SESSION['generos'],$genero);
        array_push($_SESSION['senhas'],$senha);
        header("Location: teste.php");
    }
?>