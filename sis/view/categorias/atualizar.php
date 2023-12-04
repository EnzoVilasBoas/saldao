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
                        <li class="breadcrumb-item"><a href="<?= BASESIS ?>/categorias">Categorias</a></li>
                        <li class="breadcrumb-item active">Atualização</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="A_categoriaMsg"><?= $msg??null ?></div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Atualização da categoria : <span class="alert-link"><?= $c['categoria'] ?></span></h3>
                            <div class="card-tools">
                            </div>
                        </div>
                        <form method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="ProdCategoriauto">Categoria</label>
                                    <input type="text" class="form-control" id="Categoria" value="<?= $c['categoria'] ?>" name="categoria" required>
                                </div>
                                <div class="form-group">
                                    <label for="Descr">Descrição</label>
                                    <input type="text" class="form-control" id="Descr" value="<?= $c['descr'] ?>" name="descr" required>
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
<div class="A_categoriaModal"></div>