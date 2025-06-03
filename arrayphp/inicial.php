<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
       header("Location: index.php");
    }
    if (!isset($_SESSION['nomes'])) {
        $emails = json_decode(file_get_contents("email.json"), true);
        $senhas = json_decode(file_get_contents("senha.json"), true);
        $nomes = json_decode(file_get_contents("nome.json"), true);
        $generos = json_decode(file_get_contents("genero.json"), true);
        $id = array_search($_SESSION['usuario'], $emails);
        $_SESSION['nomes'] = $nomes;
        $_SESSION['emails'] = $emails;
        $_SESSION['generos'] = $generos;
        $_SESSION['senhas'] = $senhas;
    }
    else {
        $emails = $_SESSION['emails'];
        $id = array_search($_SESSION['usuario'], $emails);
        $nomes = $_SESSION['nomes'];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        
        <style>
            /* From Uiverse.io by mrhyddenn */ 
button {
  position: relative;
  padding: 10px 20px;
  border-radius: 7px;
  border: 1px solid rgb(61, 106, 255);
  font-size: 14px;
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: 2px;
  background: transparent;
  color: #fff;
  overflow: hidden;
  box-shadow: 0 0 0 0 transparent;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}

button:hover {
  background: rgb(61, 106, 255);
  box-shadow: 0 0 30px 5px rgba(0, 142, 236, 0.815);
  -webkit-transition: all 0.2s ease-out;
  -moz-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
}

button:hover::before {
  -webkit-animation: sh02 0.5s 0s linear;
  -moz-animation: sh02 0.5s 0s linear;
  animation: sh02 0.5s 0s linear;
}

button::before {
  content: '';
  display: block;
  width: 0px;
  height: 86%;
  position: absolute;
  top: 7%;
  left: 0%;
  opacity: 0;
  background: #fff;
  box-shadow: 0 0 50px 30px #fff;
  -webkit-transform: skewX(-20deg);
  -moz-transform: skewX(-20deg);
  -ms-transform: skewX(-20deg);
  -o-transform: skewX(-20deg);
  transform: skewX(-20deg);
}

@keyframes sh02 {
  from {
    opacity: 0;
    left: 0%;
  }

  50% {
    opacity: 1;
  }

  to {
    opacity: 0;
    left: 100%;
  }
}

button:active {
  box-shadow: 0 0 0 0 transparent;
  -webkit-transition: box-shadow 0.2s ease-in;
  -moz-transition: box-shadow 0.2s ease-in;
  transition: box-shadow 0.2s ease-in;
}

            </style>
        </style>
        <meta name="viewport" content="width=device-width, initial-scale-1">
        <meta http-equiv="content-language" content="pt-br">
        <title>PHP / Array</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <style>
        body {
            background-color: #1C1C1C;
        }
        .user {
            float: right;
        }
    </style>
    <html>
        
    </html><?php
if(!isset($_SESSION['usuarios'])){
header("Locatio: index.php");
}
if(!isset($_SESSION['nomes'])){
    $emails = json_decode(file_get_contents("email.json"), true);
    $senhas = json_decode(file_get_contents("senha.json"), true);
    $nomes = json_decode(file_get_contents("nome.json"), true);
    $generos = json_decode(file_get_contents("genero.json"), true);
    $id = array_search($_SESSION['usuario'], $emails);
    $_SESSION['nomes']= $nomes;
    $_SESSION['senhas']= $senhas;
    $_SESSION['generos']= $generos;
    $_SESSION['emails']= $emails;
}
else{
    $emails = $_SESSION['emails'];
    $id = array_search($_SESSION['usuario'], $emails);
    $nomes = $_SESSION['nomes'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale-1">
        <meta http-equiv="content-language" content="pt-br">
        <title>PHP / Array</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <style>
        body {
            background-color: #000000;
            color:black;
        }
        .user {
            float: right;
        }

    </style>
        <hr/>
        <nav>
           &nbsp;&nbsp;<a href="inicial.php" style="color: white; text-decoration: none">HOME |</a><a href="listagem.php" style="color: white; text-decoration: none"> PRODUTOS|</a><a href="gravar.php" style="color: white; text-decoration: none"> SALVAR DADOS | </a><a href="registrodiario.php" style="color white; text-decoration; none"> REFUGO</a> 
           <div class="user">
                <b style="color: white"><?php echo $nomes[$id]; ?> |</b> <a href="sair.php" style="color: white; text-decoration: none">SAIR</a>&nbsp;&nbsp;
           </div>
        </nav>
        <br/><br/>
        <center><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <b>CADASTRAR PRODUTO</b>
        </button></center>
        <br/><br/>
        <body class="container-fluid">
        <div class="row justify-content-center row-cols-2 row-cols-md-3 text-center">
            <div class="cols">
                <div class="card mb-3 rounded shadow-sw">
                    <div class="card-header py-5">
                    <h3><b>PRODUTOS REGISTRADOS</b></h3>
                    </div>
                    <div class="card-body">  
                        <?php
                            include "usuarios.php";
                        ?>
                    </div>
                </div>
            </div>
            <div class="cols">
                <div class="card mb-4 rounded shadow-sw">
                    <div class="card-header py-3">
                       <h3><b>TOTAL PRODUZIDO</b></h3>
                    </div>
                    <div class="card-body">
                        <?php
                            include "generos.php";
                        ?>
                    </div>
                </div>
            </div>
            <div class="cols">
                <div class="card mb-4 rounded shadow-sw">
                    <div class="card-header py-3">
                       <h3><b>GRAFICO DE PRODUTOS</b></h3>
                    </div>
                    <div class="card-body">
                        <?php
                            include "grafico.php";
                        ?>
                    </div>
                </div>
            </div>
            <div class="cols">
                <div class="card mb-1 rounded shadow-sw">
                    <div class="card-header py-1">
                       <h3><b>DATAS DE PRODUTOS</b></h3>
                    </div>
                    <div class="card-body">
                        <?php
                            include "tabela.php";
                        ?>
                    </div>
                </div>
                <br>
            </div>
            <div style="width: 100rem;">
            <div class="cols">
                <div class="card mb-5 rounded shadow-sw">
                    <div class="card-header py-1">
                       <h3><b>GRAFICO DE PRODUTOS</b></h3>
                    </div>
                    <div class="card-body">
                        <?php
                            include "graficolinhas.php";
                        ?>
                    </div>
                </div>
            </div>        
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">CADASTRAR NOVO PRODUTOS</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <div class="modal-body text - start">
                    <form action= "cadastro.php" method="post">
                        <label class="form-lable">NOME</label>
                        <input class="form-control" type="text" name="nome" required placeholder="Digite o seu nome">
                        <br/>
                        <label class="form-lable">PRODUTOS</label>
                        <select class="form-select" aria-label="Selecione seu genero" name="genero" required>
                      <option value="Masculino">FERRO</option>
                      <option value="Feminino">AREIA</option>
                      <option value="Outro">TERRA</option>
                      <option value="o">TORNEIRA</option>
                      <option value="i">MANGUEIRA</option>
                      <option value="u">TIJOLO</option>
                      <option value="y">CIMENTO</option>
                      </select>
                        <br/>
                        
                        <input type="submit" button type="button" class="btn btn-outline-primary";
                    <form>
                    ...
                </div>
                <div class="modal-footer">
                    <!-- From Uiverse.io by mrhyddenn --> 
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">FECHAR</button>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>