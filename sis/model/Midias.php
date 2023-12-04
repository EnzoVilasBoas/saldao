<?php
    
    class Midias extends Dbasis {
     
        /**
         * Método responsavel por listar todas as midias sociais
         * @return array/int
         */
        public function listar() {
            $read = Dbasis::read("midias");
            if ($read->num_rows) {
                return $read;
            }else {
                return 0;
            }
        }

        /**
         * Método responsavel pelo cadastro das midias sociais
         * @param array $post array com os dados para cadastro
         * @return int
         */
        public function cadastrar($post) {
            $read = Dbasis::read("midias",'midia = "'.$post['midia'].'"');
            if ($read->num_rows) {
                return 1;
            }else {
                $cad = [
                    "link"  => $post['link'],
                    "midia"  => $post['midia']
                ];
                $cad = Dbasis::create("midias",$cad);
                if ($cad) {
                    return 2;
                }else {
                    return 0;
                }
            }
        }
    }