<?php

    class Produtos extends Dbasis {
        
        /**
         * Método responsavel por listar todos os produtos cadastrados
         * @return array/int
         */
        public function listar() {
            $read = Dbasis::select('*,produtos.id','produtos','INNER JOIN categorias ON categorias.id = produtos.cate');
            //$read = Dbasis::read('produtos');
            if ($read->num_rows) {
                return $read;
            }else {
                return 0;
            }
        }

        /**
         * Método responsavel por retornar os dados do produtos
         * @param int $produto ID do produto a ser retornado
         * @return array/int
         */
        public function retorna($produto) {
            $read = Dbasis::select('*,produtos.id','produtos','INNER JOIN categorias ON categorias.id = produtos.cate WHERE produtos.id = '.$produto);
            //$read = Dbasis::read('produtos',"id = $produto");
            if ($read->num_rows) {
                foreach ($read as $r);
                return $r;
            }else {
                return 0;
            }
        }

        /**
         * Método responsavel pelo cadastro de produtos
         * @param array $post Array com dados do produto a ser cadastrado.
         * @return int
         */
        public function cadastra($post) {
            $duplicidade = Dbasis::read("produtos",'produto = "'.$post['produto'].'"');
            if ($duplicidade->num_rows) {
                return 1;
            }else {
                if(!empty($_FILES['imagem']['tmp_name'])){
                    $imagem = $_FILES['imagem'];
                    $pasta  = 'uploads/produtos/';
                    $tmp    = $imagem['tmp_name'];
                    $exp    = explode(".",$imagem['name']);
                    $ext    = end($exp);
                    $nome   = md5(time()).'.'.$ext;
                    Dbasis::uploadImage($tmp, $nome, '302','302', $pasta);
                    $upload = $nome;
                }
                $cad = [
                    "produto"   => $post['produto'],
                    "descr"     => $post['descr'],
                    "cate"      => $post['cate'],
                    "estoque"   => $post['estoque'],
                    "imagem"    => $upload
                ];
                $create = Dbasis::create("produtos",$cad);
                if ($create) {
                    return 2;
                }else {
                    return 0;
                }
            }
        }

        /**
         * Método responsavel por atualizar os produtos cadastrados
         * @param int $produto id do produto a ser atualizado
         * @param array $post array com os dados atualizados do produto
         */
        public function atualizar($produto,$post) {
            $verf = Dbasis::read("produtos","id = $produto");
            if ($verf->num_rows) {
                if(!empty($_FILES['imagem']['tmp_name'])){
                    $imagem = $_FILES['imagem'];
                    $pasta  = 'uploads/produtos/';
                    $tmp    = $imagem['tmp_name'];
                    $exp    = explode(".",$imagem['name']);
                    $ext    = end($exp);
                    $nome   = md5(time()).'.'.$ext;
                    Dbasis::uploadImage($tmp, $nome, '302','302', $pasta);
                    $upload = $nome;
                }
                $up = [
                    "produto"   => $post['produto'],
                    "descr"     => $post['descr'],
                    "estoque"   => $post['estoque'],
                    "cate"      => $post['cate'],
                    "imagem"    => ($post['imagem']) ? $upload : $post['imagemOld']
                ];
                $update = Dbasis::update("produtos",$up,"id = $produto");
                if ($update) {
                    return 1;
                }else {
                    return 0;
                }
            }else {
                return 0;
            }
        }

        /**
         * Método responsavel por excluir os dados dos produtos cadastrados
         * @param int $produto id do produto a ser excluido
         */
        public function excluir($produto) {
            $verf = Dbasis::read("produtos","id = $produto");
            if ($verf->num_rows) {
                foreach ($verf as $p);
                $img = "uploads/produtos/".$p['imagem'];
                if (file_exists($img)) {
                    if (unlink($img)) {
                        $del = Dbasis::delete("produtos","id = $produto");
                        return 1;
                    }
                }else {
                    return 0;
                }
            }else {
                return 0;
            }
        }

    }