<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale-1">
        <meta http-equiv="content-language" content="pt-br">
        <title>PHP / Array</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
      <br>
      <style>
        body{
          
          background-color: #000000; 
          color:blue;
          
        }    
        </style>
    <center><h1><b>CADASTRO</b></h1></center>
    <hr>
        <br/><br/>
        <div class="container-fluid">
        <div class="row justify-content-center row-cols-2 row-cols-md-2 ">           
            <div class="row">
              <br>
              <div class="card-body">
        <br/><br/>
        <div class="container-fluid">
                <div class="card mb-6 rounded shadow-sw">
                    <div class="card-header py-3">
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post" class="text-start">
                            <label class="form-label"><b>E-MAIL</b></label>
                            <input class="form-control" type="email" name="email" required placeholder="Digite o seu e-mail."/>
                            <br/>
                            <label class="form-label"><b>SENHA</b></label>
                            <input class="form-control" type="password" name="senha" required placeholder="Digite sua senha."/>
                            <br/>
                            <input type="submit" class="btn btn-outline-primary" value="ENTRAR">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>