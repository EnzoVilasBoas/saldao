<?php
    $sis    = new Sistema;
    $md     = new Midias;

    $acao       = $sis->getParametros()[1] ?? null;
    $parametro  = $sis->getParametros()[2] ?? null;
    $post       = $sis->getPost();

    switch ($acao) {
        case 'excluir':
            # code...
            break;
        
        default:
            if ($post) {
                $cad = $md->cadastrar($post);
                switch ($cad) {
                    case 1:
                        $msg = '
                        <div class="alert alert-warning" role="alert">
                            Essa midia já se encontra cadastrada.
                        </div>';
                        break;
                    case 2:
                        $msg = '
                        <div class="alert alert-success" role="alert">
                            Midia cadastrada com sucesso!
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
            $lista = $md->listar();
            require_once('view/midias.php');
            break;
    }