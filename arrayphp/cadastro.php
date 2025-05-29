<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $genero = $_POST['genero'];
        $senha = $_POST['senha'];
    
        $produto = $_POST['produto'];
        $preco = $_POST['preco'];
        $quantidadeProduzida = $_POST['quantidade_produzida'];
        $quantidadeRefugada = $_POST['quantidade_refugada'];
    
        // Inicializar os arrays de sessão se ainda não existirem
        if (!isset($_SESSION['nomes'])) $_SESSION['nomes'] = [];
        if (!isset($_SESSION['emails'])) $_SESSION['emails'] = [];
        if (!isset($_SESSION['generos'])) $_SESSION['generos'] = [];
        if (!isset($_SESSION['senhas'])) $_SESSION['senhas'] = [];
        if (!isset($_SESSION['produtos'])) $_SESSION['produtos'] = [];
        if (!isset($_SESSION['precos'])) $_SESSION['precos'] = [];
        if (!isset($_SESSION['quantidades_produzidas'])) $_SESSION['quantidades_produzidas'] = [];
        if (!isset($_SESSION['quantidades_refugadas'])) $_SESSION['quantidades_refugadas'] = [];
    
        // Adiciona os dados do novo usuário
        $_SESSION['nomes'][] = $nome;
        $_SESSION['emails'][] = $email;
        $_SESSION['generos'][] = $genero;
        $_SESSION['senhas'][] = $senha;
    
        // Pega o índice do novo usuário (ultimo adicionado)
        $novoIndice = count($_SESSION['nomes']) - 1;
    
        // Adiciona produto, preço, quantidade produzida e refugada
        $_SESSION['produtos'][$novoIndice] = [$produto];
        $_SESSION['precos'][$novoIndice] = [$preco];
        $_SESSION['quantidades_produzidas'][$novoIndice] = [$quantidadeProduzida];
        $_SESSION['quantidades_refugadas'][$novoIndice] = [$quantidadeRefugada];
    
        // Redireciona para a tela de teste ou login
        header("Location: teste.php");
        exit;
    }