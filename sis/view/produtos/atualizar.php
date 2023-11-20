<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Atualização</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= BASESIS ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= BASESIS ?>/produtos">Produtos</a></li>
                        <li class="breadcrumb-item active">Atualização</li>
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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Atualização do produto : <span class="alert-link"><?= $p['produto'] ?></span></h3>
                            <div class="card-tools">
                            </div>
                        </div>
                        <form method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Produto">Produto</label>
                                    <input type="text" class="form-control" id="Produto" value="<?= $p['produto'] ?>" name="produto" required>
                                </div>
                                <div class="form-group">
                                    <label for="Descr">Descrição</label>
                                    <input type="text" class="form-control" id="Descr" value="<?= $p['descr'] ?>" name="descr" required>
                                </div>
                                <div class="form-group">
                                    <label for="Estoque">Estoque</label><br>
                                    <span>Produtos disponiveis para venda</span>
                                    <input type="number" class="form-control" id="Estoque" value="<?= $p['estoque'] ?>" name="estoque" required>
                                </div>
                                <div class="form-group">
                                    <label>Imagem</label>
                                    <div class="custom-file">
                                        <input type="hidden" value="<?= $p['imagem'] ?>" name="imagemOld">
                                        <input type="file" class="custom-file-input" id="customFile" name="imagem">
                                        <label class="custom-file-label" for="customFile">Selecione uma imagem</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="A_produtoModal"></div>