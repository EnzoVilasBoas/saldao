<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Produtos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= BASESIS ?>">Home</a></li>
                        <li class="breadcrumb-item active">Produtos</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="A_produtoMsg"><?= $msg??null ?></div>
            <div class="row">
                <div class="col-12">
                    <?php if ($lista) : ?>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Listagem de produtos cadastrados</h3>
                                <div class="card-tools">
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>COD.</th>
                                            <th>produto</th>
                                            <th>Categoria</th>
                                            <th>Descrição</th>
                                            <th>estoque</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($lista as $l) {
                                            echo '
                                            <tr id="A_produto' . $l['id'] . '">
                                                <td>' . $l['id'] . '</td>
                                                <td>' . $l['produto'] . '</td>
                                                <td>' . $l['categoria'] . '</td>
                                                <td>' . $sis->resume($l['descr'],50) . '</td>
                                                <td>' . $l['estoque'] . '</td>
                                                <td>
                                                <a href="'.BASESIS.'/produtos/galeria/' . $l['id'] . '" class="btn btn-primary" title="Gerenciar galeria"><i class="fas fa-images"></i></a>
                                                    <a href="'.BASESIS.'/produtos/atualizar/' . $l['id'] . '" class="btn btn-primary" title="Atualizar cadastro"><i class="fas fa-pen"></i></a>
                                                    <a class="btn btn-primary A_PergExcluirProduto" title="Excluir produto" data-prod="' . $l['id'] . '"><i class="fas fa-trash"></i></a>
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
                            Ainda não existem produtos cadastrados!
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Cadastro de produto</h3>
                            <div class="card-tools">
                            </div>
                        </div>
                        <form method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Produto">Produto</label>
                                    <input type="text" class="form-control" id="Produto" placeholder="Produto" name="produto" required>
                                </div>
                                <div class="form-group">
                                    <label for="Descr">Descrição</label>
                                    <input type="text" class="form-control" id="Descr" placeholder="Uma breve descrição do produto" name="descr" required>
                                </div>
                                <div class="form-group">
                                    <label for="Estoque">Estoque</label><br>
                                    <span>Produtos disponiveis para venda</span>
                                    <input type="number" class="form-control" id="Estoque" placeholder="estoque" name="estoque" required>
                                </div>
                                <div class="form-group">
                                    <label for="Categoria">Categoria</label><br>
                                    <select class="form-control" id="Categoria" name="cate" required>
                                        <option disabled selected>Selecione uma categoria</option>
                                        <?php
                                            if($categorias){
                                                foreach ($categorias as $c) {
                                                    echo '<option value="'.$c['id'].'">'.$c['categoria'].'</option>';
                                                }
                                            }else {
                                                echo "<option disabled>Nenhuma categoria cadastrada!</option>";
                                            }
                                        ?>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Imagem</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="imagem" required>
                                        <label class="custom-file-label" for="customFile">Selecione uma imagem</label>
                                    </div>
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
<div class="A_produtoModal"></div>