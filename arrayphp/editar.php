<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $produtos = $_POST['produtos'];
    $precos = $_POST['precos'];
    $produzidos = $_POST['produzidos'];
    $refugados = $_POST['refugados'];

    $_SESSION['nomes'][$id] = $nome;
    $_SESSION['emails'][$id] = $email;
    $_SESSION['senhas'][$id] = $senha;

    $_SESSION['produtos'][$id] = $produtos;
    $_SESSION['precos'][$id] = $precos;
    $_SESSION['produzidos'][$id] = $produzidos;
    $_SESSION['refugados'][$id] = $refugados;

    header("Location: listagem.php");
    exit;
}
?>