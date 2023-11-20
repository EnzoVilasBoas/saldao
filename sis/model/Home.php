<?php

    class Home extends Dbasis {

        /**
         * Método responsavel por somar os produtos cadastrados
         * @return int Numero de produtos cadastrados
         */
        public function produtos() {
            $prod = Dbasis::read("produtos","estoque != 0");
            echo $prod->num_rows;
        }


    }