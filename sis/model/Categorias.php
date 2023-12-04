<?php

    class Categorias extends Dbasis
    {
        
        /**
         * Método responsavel por listar as categorias cadastradas
         * @return array/int
         */
        public function listar() {
            $read = Dbasis::read("categorias");
            if ($read->num_rows) {
                return $read;
            }else {
                return 0;
            }
        }
        
        /**
         * Método responsavel por retornar os dados da categoria
         * @param int $categoria id da categoria a ser retornada
         * @return array/int
         */
        public function retorna($categoria) {
            $read = Dbasis::read("categorias","id = $categoria");
            if ($read->num_rows) {
                foreach ($read as $r);
                return $r;
            }else {
                return 0;
            }
        }

        /**
         * Método responsavel pelo cadastro de categorias
         * @param array $post array com os dados para cadastro
         * @return int
         */
        public function cadastro($post) {
            $verf = Dbasis::read("categorias",'categoria = "'.$post['categoria'].'"');
            if ($verf->num_rows) {
                return 1;
            }else {
                $cad = [
                    "categoria"  => $post['categoria'],
                    "descr"  => $post['descr']
                ];
                $create = Dbasis::create("categorias",$cad);
                if ($create) {
                    return 2;
                }else {
                    return 0;
                }
            }
        }

        /**
         * Método responsavel por atualizar os dados da categoria
         * @param int $categoria id da categoria a ser atualizada
         * @param array $post array dos novos dados da categoria
         * @return int
         */
        public function atualizar($categoria,$post) {
            $verf = Dbasis::read("categorias","id = $categoria");
            if ($verf->num_rows) {
                $up = [
                    "categoria"  => $post['categoria'],
                    "descr"  => $post['descr']
                ];
                $update = Dbasis::update("categorias",$up,"id = $categoria");
                if ($update) {
                    return 1;
                }else {
                    return 0;
                }
            }else {
                return 0;
            }
        }

    }
    