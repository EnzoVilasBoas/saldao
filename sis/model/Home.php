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

        /**
         * Método responsavel por somar as categorias cadastradas
         * @return int Numero de categorias cadastradas
         */
        public function categorias() {
            $prod = Dbasis::read("categorias");
            echo $prod->num_rows;
        }


    }