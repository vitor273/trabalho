<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}
$usuario = $_SESSION['usuario'];
$produtos = $_SESSION['produtos'][$usuario] ?? [];
$precos = $_SESSION['precos'][$usuario] ?? [];
$termo = '';
$resultados = [];

if (isset($_GET['pesquisa'])) {
    $termo = strtolower(trim($_GET['pesquisa']));
    foreach ($produtos as $i => $produto) {
        if (
            strpos(strtolower($produto), $termo) !== false ||
            strpos(strtolower((string)$precos[$i]), $termo) !== false ||
            (string)$i === $termo
        ) {
            $resultados[] = $i;
        }
    }
} else {
    $resultados = range(0, count($produtos) - 1);
}
?><!DOCTYPE html><html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Listagem de Produtos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #000;
      color: white;
      font-family: Arial, sans-serif;
    }
    .card {
      background-color: #1e1e1e;
      border: none;
    }
    .card-header {
      background-color: #292929;
    }
    .card-header h4 {
      color: white;
    }
    .table thead th {
      background-color: #343a40;
      color: #fff;
    }
    .table tbody tr:hover {
      background-color: #2a2a2a;
    }
    .input-pesquisa {
      max-width: 300px;
      background-color: #1a1a1a;
      border: none;
      padding: 10px;
      border-radius: 10px;
      outline: none;
      color: white;
      animation: neonShadow 2s infinite linear;
    }
    @keyframes neonShadow {
      0% { box-shadow: -2px -2px 8px 1px #00ffe1, 2px 2px 8px 1px #0077ff; }
      25% { box-shadow: -2px 2px 8px 1px #00ffe1, 2px -2px 8px 1px #0077ff; }
      50% { box-shadow: 2px 2px 8px 1px #00ffe1, -2px -2px 8px 1px #0077ff; }
      75% { box-shadow: 2px -2px 8px 1px #00ffe1, -2px 2px 8px 1px #0077ff; }
      100% { box-shadow: -2px -2px 8px 1px #00ffe1, 2px 2px 8px 1px #0077ff; }
    }
  </style>
  <hr>
  <nav>
           &nbsp;&nbsp;<a href="inicial.php" style="color: white; text-decoration: none">HOME |</a><a href="listagem.php" style="color: white; text-decoration: none"> PRODUTOS | </a><a href="registrodiario.php" style="color white; text-decoration; none"> REFUGO</a> 
           <div class="user">
           </div>
        </nav>
  </head>
<body><div class="container-fluid"></div>
<div class="container py-5">
  <div class="card shadow-lg">
    <div class="card-header text-center">
      <h4 class="mb-0 text-white">📦 LISTAGEM DE PRODUTOS</h4>
    </div>
    <div class="card-body text-center"><!-- Pesquisa -->
  <form method="get" class="d-flex justify-content-center mb-4 gap-2">
    <input type="text" class="input-pesquisa" name="pesquisa" placeholder="Buscar por produto, preço ou ID..." value="<?= htmlspecialchars($termo) ?>">
    <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i> Pesquisar</button>
    <a href="listagem.php" class="btn btn-secondary"><i class="bi bi-x-circle"></i> Limpar</a>
  </form>

  <!-- Tabela -->
  <table class="table table-dark table-hover text-center align-middle">
    <thead>
      <tr>
        <th>ID</th>
        <th>Produto</th>
        <th>Preço</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <? $i = 0?>
      <?php foreach ($resultados as $i): ?>
        <tr>
          <td><?= $i ?></td>
          <td><?= $produtos[$i] ?></td>
          <td>R$ <?= number_format($precos[$i], 2, ',', '.') ?></td>
          <td>
            <button class="btn btn-outline-success btn-sm me-1 editar-btn"
                    data-bs-toggle="modal"
                    data-bs-target="#modalEditar"
                    data-id="<?= $i ?>"
                    data-nome="<?= $produtos[$i] ?>"
                    data-preco="<?= $precos[$i] ?>">
              <i class="bi bi-pencil"></i>
            </button>
            <a href='excluir.php?pos=<?= $i ?>' class='btn btn-outline-danger btn-sm'>
              <i class='bi bi-trash'></i>
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

  </div>
</div><!-- Modal de Edição --><div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content bg-dark text-white" action="editar_produto.php" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditarLabel">Editar Produto</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="id" id="edit-id">
        <div class="mb-3">
          <label class="form-label">Produto</label>
          <input type="text" class="form-control" name="nome" id="edit-nome" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Preço</label>
          <input class="form-control" type="number" step="0.01" name="preco" id="edit-preco" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Salvar</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </form>
  </div>
</div><!-- Scripts --><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script><script>
  const modalEditar = document.getElementById('modalEditar');
  modalEditar.addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget;
    const id = button.getAttribute('data-id');
    const nome = button.getAttribute('data-nome');
    const preco = button.getAttribute('data-preco');

    document.getElementById('edit-id').value = id;
    document.getElementById('edit-nome').value = nome;
    document.getElementById('edit-preco').value = preco;
  });
</script></body>
</html>