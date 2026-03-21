<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de posts</title>
    <link rel="stylesheet" href="tabelas.css">
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
        <?php include 'menu.php'; ?>
        <main>
        <div class="header-content">
            <div class="header-title">
                <h2>Gestão de Postagens</h2>
                <p>Visualize e gerencie as postagens do blog.</p>
            </div>
            <a href="cad-usuario.php" class="btn-add">+ Novo post</a>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Conteúdo</th>
                        <th>Categoria</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>As linguagens mais usadas</td>
                        <td>Esse artigo irá abordar...</td>
                        <td>Tecnologia</td>
                        <td><span class="badge ativo">Ativo</span></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
                            <button class="btn-icon"><i class="fa-solid fa-trash"></i></button>
                    </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Automatizando com o N8N</td>
                        <td>Esse artigo irá abordar...</td>
                        <td>Automação</td>
                        <td><span class="badge ativo">Ativo</span></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
                            <button class="btn-icon"><i class="fa-solid fa-trash"></i></button>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    </div>
    <?php include 'rodape.php'; ?>
</body>
</html>