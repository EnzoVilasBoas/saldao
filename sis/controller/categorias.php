<?php
    $sis    = new Sistema;
    $ct     = new Categorias;

    $acao       = $sis->getParametros()[1] ?? null;
    $parametro  = $sis->getParametros()[2] ?? null;
    $post       = $sis->getPost();

    switch ($acao) {
        case 'atualizar':
            if ($parametro) {
                if ($post) {
                    $up = $ct->atualizar($parametro,$post);
                    switch ($up) {
                        case 1:
                            $msg = '
                            <div class="alert alert-success" role="alert">
                                Categoria atualizada com sucesso.
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
                $c = $ct->retorna($parametro);
                require_once('view/categorias/atualizar.php');
            }else {
                require_once('view/404.php');
            }
            break;
        
        default:
            if ($post) {
                $cad = $ct->cadastro($post);
                switch ($cad) {
                    case 1:
                        $msg = '
                        <div class="alert alert-warning" role="alert">
                            Essa categoria já se encontra cadastrada!
                        </div>';
                        break;
                    case 2:
                        $msg = '
                        <div class="alert alert-success" role="alert">
                            Categoria cadastrada com sucesso.
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
            $lista = $ct->listar();
            require_once('view/categorias/categorias.php');
            break;
    }