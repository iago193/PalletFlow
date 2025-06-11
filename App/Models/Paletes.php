<?php

    namespace App\Models;
    use MF\Model\Model;

    class Paletes extends Model {

        private $id;
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

            $query = 'INSERT INTO paletes (carrego, conferente, motorista, placa, quantidade) 
                    VALUES (:carrego, :conferente, :motorista, :placa, :quantidade)';
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':carrego', $this->__get('carrego'));
            $stmt->bindValue(':conferente', $this->__get('conferente'));
            $stmt->bindValue(':motorista', $this->__get('motorista'));
            $stmt->bindValue(':placa', $this->__get('placa'));
            $stmt->bindValue(':quantidade', $this->__get('quantidade'));

            $stmt->execute();

            return $this;

        }

        public function getPaletes() {
            $query = 'SELECT * FROM paletes ORDER BY data DESC';
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
    }