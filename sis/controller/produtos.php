<?php
    $sis     = new Sistema;
    $pd     = new Produtos;

    $acao       = $sis->getParametros()[1] ?? null;
    $parametro  = $sis->getParametros()[2] ?? null;
    $post       = $sis->getPost();

    switch ($acao) {
        case 'galeria':
            if ($parametro) {
                # code...
            }else {
                require_once('view/404.php');
            }
            break;
        case 'atualizar':
            if ($parametro) {
                if ($post) {
                    $up = $pd->atualizar($parametro,$post);
                    switch ($up) {
                        case 1:
                            $msg = '
                            <div class="alert alert-success" role="alert">
                                Produto atualizado com sucesso.
                            </div>';
                            break;
                        default:
                            $msg = '
                            <div class="alert alert-danger" role="alert">
                                ERRO! Tente novamente ou entre em contato com o suporte.
                            </div>';
                            break;
                    }
                }
                $p = $pd->retorna($parametro);
                require_once('view/produtos/atualizar.php');
            }else {
                require_once('view/404.php');
            }
            break;
        case 'excluir':
            if ($parametro == "verf") {
                $p = $pd->retorna($post['pd']);
                echo '
                <div class="modal fade A_produtoModal'.$p['id'].'" >
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Excluir <span class="alert-link">'.$p['produto'].'</span></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Você está prestes a excluir o produto : <span class="alert-link">'.$p['produto'].'</span></p>
                                <p>Deseja prosseguir com essa ação?</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary A_excluirProduto" data-dismiss="modal" data-prod="' . $p['id'] . '">Prosseguir</button>
                            </div>
                        </div>
                    </div>
                </div>';
            }else {
                $del = $pd->excluir($post['pd']);
                switch ($del) {
                    case 1:
                        echo '
                        <div class="alert alert-success" role="alert">
                            Produto excluido com sucesso.
                        </div>';
                        break;
                    default:
                        echo '
                        <div class="alert alert-danger" role="alert">
                            ERRO! Tente novamente ou entre em contato com o suporte.
                        </div>';
                        break;
                }
            }
            break;
        default:
            if ($post) {
                $cad = $pd->cadastra($post);
                switch ($cad) {
                    case 2:
                        $msg = '
                        <div class="alert alert-success" role="alert">
                            Produto cadastrado com sucesso.
                        </div>';
                        break;
                    case 1:
                        $msg = '
                        <div class="alert alert-warning" role="alert">
                            Esse produto já se encontra cadastrado!
                        </div>';
                        break;
                    default:
                        $msg = '
                        <div class="alert alert-danger" role="alert">
                            ERRO! Tente novamente ou entre em contato com o suporte.
                        </div>';
                        break;
                }
            }
            $lista = $pd->listar();
            require_once('view/produtos/produtos.php');
            break;
    }
