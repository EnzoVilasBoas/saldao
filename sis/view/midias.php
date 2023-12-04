<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Midias Sociais</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= BASESIS ?>">Home</a></li>
                        <li class="breadcrumb-item active">Midias Sociais</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="A_midiasMsg"><?= $msg??null ?></div>
            <div class="row">
                <div class="col-12">
                    <?php if ($lista) : ?>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Listagem de midias cadastradas</h3>
                                <div class="card-tools">
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Midia</th>
                                            <th>Link</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($lista as $l) {
                                            switch ($l['midia']) {
                                                case 1:
                                                    $l['midia'] = "Whatsapp";
                                                    break;
                                                case 2:
                                                    $l['midia'] = "Facebook";
                                                    break;
                                                case 3:
                                                    $l['midia'] = "Instagram";
                                                    break;
                                                case 4:
                                                    $l['midia'] = "GitHub";
                                                    break;
                                                case 5:
                                                    $l['midia'] = "linkedin";
                                                    break;
                                                default:
                                                    $l['midia'] = "Indefinido";
                                                    break;
                                            }
                                            echo '
                                            <tr id="A_midia' . $l['id'] . '">
                                                <td>' . $l['id'] . '</td>
                                                <td>' . $l['midia'] . '</td>
                                                <td>' . $l['link'] . '</td>
                                                <td>
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
                            Ainda não existem midias cadastradas!
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Cadastro de midias</h3>
                            <div class="card-tools">
                            </div>
                        </div>
                        <form method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Categoria">Midia</label><br>
                                    <select class="form-control" id="Categoria" name="midia" required>
                                        <option disabled selected>Selecione uma midia</option>
                                        <option value="1">Whatsapp</option>
                                        <option value="2">Facebook</option>
                                        <option value="3">Instagram</option>
                                        <option value="4">GitHub</option>
                                        <option value="5">linkedin</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Link">Link</label>
                                    <input type="text" class="form-control" id="Link" placeholder="Link para a midia selecionada." name="link" required>
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