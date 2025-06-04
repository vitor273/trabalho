<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}

$nomes = $_SESSION['nomes'] ?? [];
$produzidas = $_SESSION['produzidas'] ?? [];
$refugadas = $_SESSION['refugadas'] ?? [];
$emails = $_SESSION['emails'] ?? []; // só pra manter compatível com login
$quantidades = $_SESSION['quantidades'] ?? [];

$id = array_search($_SESSION['usuario'], $emails);
if ($id === false) {
    header("Location: sair.php");
    exit;
}

$dados = [];
for ($i = 0; $i < count($nomes); $i++) {
    $dados[] = [
        'nome' => $nomes[$i],
        'produzidas' => $produzidas[$i] ?? 0,
        'refugadas' => $refugadas[$i] ?? 0,
        'quantidade' => $quantidade[$i] ?? 0 
    ];
}

$pesquisa = $_GET['pesquisa'] ?? '';
$filtrado = [];

if ($pesquisa !== '') {
    foreach ($dados as $dado) {
        if (stripos($dado['nome'], $pesquisa) !== false) {
            $filtrado[] = $dado;
        }
    }
} else {
    $filtrado = $dados;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-language" content="pt-br">
    <title>Listagem de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    body {
        background-color: black;
    }
    .user {
        float: right;
    }
</style>
<body>
    <hr/>
    <nav>
        &nbsp;&nbsp;<a href="inicial.php" style="color: white; text-decoration: none">HOME |</a>
        <a href="listagem.php" style="color: white; text-decoration: none"> LISTAGEM |</a><a href="registrodiario.php" style="color white; text-decoration; none"> REFUGO</a> 
        <div class="user">
            <b style="color: white"><?php echo $nomes[$id]; ?> |</b>
            <a href="sair.php" style="color: white; text-decoration: none">SAIR</a>&nbsp;&nbsp;
        </div>
    </nav>

    <div class="container mt-4">
        <form method="get" action="">
            <div class="input-group mb-3">
                <input type="text" name="pesquisa" class="form-control" placeholder="Buscar produto..." value="<?php echo htmlspecialchars($pesquisa); ?>">
                <button class="btn btn-primary" type="submit">PESQUISAR</button>
                <a href="listagem.php" class="btn btn-secondary">LIMPAR</a>
            </div>
        </form>

        <div class="card">
            <div class="card-header text-center">
                <h3 style="color: black">📦 LISTAGEM DE PRODUTOS</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover text-center">
                    <thead>
                        <tr>
                            <th>PRODUTO</th>
                            <th>QUANTIDADE</th>
                            <th>REFUGADAS</th>
                            <th>AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($filtrado) > 0): ?>
                            <?php foreach ($filtrado as $produto): ?>
                                <?php $index = array_search($produto['nome'], $nomes); ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($produto['nome']); ?></td>
                                    <td><?php echo htmlspecialchars($produto['quantidade']); ?></td>
                                    <td><?php echo htmlspecialchars($produto['refugadas']); ?></td>
                                    <td>
                                        <a href="#" class="editar-btn btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar"
                                           data-id="<?php echo $index; ?>"
                                           data-nome="<?php echo htmlspecialchars($produto['nome']); ?>"
                                           data-produzidas="<?php echo htmlspecialchars($produto['produzidas']); ?>"
                                           data-refugadas="<?php echo htmlspecialchars($produto['refugadas']); ?>">
                                           ✏️ Editar
                                        </a>
                                        |
                                        <a href="excluir.php?pos=<?php echo $index; ?>" class="btn btn-sm btn-danger">🗑️ Excluir</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4">Nenhum resultado encontrado para "<?php echo htmlspecialchars($pesquisa); ?>"</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal de Edição -->
    <div class="modal fade" id="modalEditar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <form action="editar.php" method="post" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Produto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <label>Nome do Produto</label>
                    <input type="text" class="form-control" name="nome" id="edit-nome" required>

                    <br>
                    <label>Quantidade Produzida</label>
                    <input type="number" class="form-control" name="produzidas" id="edit-produzidas" required>

                    <br>
                    <label>Quantidade Refugada</label>
                    <input type="number" class="form-control" name="refugadas" id="edit-refugadas" required>

                    <input type="hidden" name="id" id="edit-id">
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Atualizar">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const botoesEditar = document.querySelectorAll('.editar-btn');
        botoesEditar.forEach(btn => {
            btn.addEventListener('click', () => {
                document.getElementById('edit-id').value = btn.dataset.id;
                document.getElementById('edit-nome').value = btn.dataset.nome;
                document.getElementById('edit-produzidas').value = btn.dataset.produzidas;
                document.getElementById('edit-refugadas').value = btn.dataset.refugadas;
            });
        });
    });
    </script>
</body>
</html>