<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Categorias</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= BASESIS ?>">Home</a></li>
                        <li class="breadcrumb-item active">Categorias</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="A_categoriaMsg"><?= $msg??null ?></div>
            <div class="row">
                <div class="col-12">
                    <?php if ($lista) : ?>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Listagem de categorias cadastradas</h3>
                                <div class="card-tools">
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Categoria</th>
                                            <th>Descrição</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($lista as $l) {
                                            echo '
                                            <tr id="A_categoria' . $l['id'] . '">
                                                <td>' . $l['id'] . '</td>
                                                <td>' . $l['categoria'] . '</td>
                                                <td>' . $sis->resume($l['descr'],50) . '</td>
                                                <td>
                                                    <a href="'.BASESIS.'/categorias/atualizar/' . $l['id'] . '" class="btn btn-primary" title="Atualizar cadastro"><i class="fas fa-pen"></i></a>
                                                    <a class="btn btn-primary A_PergExcluirProduto" title="Excluir categoria" data-prod="' . $l['id'] . '"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="alert alert-warning" role="alert">
                            Ainda não existem categorias cadastradas!
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Cadastro de categoria</h3>
                            <div class="card-tools">
                            </div>
                        </div>
                        <form method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="ProdCategoriauto">Categoria</label>
                                    <input type="text" class="form-control" id="Categoria" placeholder="Categoria" name="categoria" required>
                                </div>
                                <div class="form-group">
                                    <label for="Descr">Descrição</label>
                                    <input type="text" class="form-control" id="Descr" placeholder="Uma breve descrição do produto" name="descr" required>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="A_categoriaModal"></div>