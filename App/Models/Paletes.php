<?php

    namespace App\Models;
    use MF\Model\Model;

    class Paletes extends Model {

        private $carrego;
        private $conferente;
        private $motorista;
        private $placa;
        private $data;
        private $quantidade;

        public function __get($atributo) {
            return $this->$atributo;
        }

        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function addPaletes() {

        }
    }