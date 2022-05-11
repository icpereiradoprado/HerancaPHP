<?php
    require_once 'Bebida.php';

    class Refrigerante extends Bebida
    {
        private $retornavel;

        public function __construct($nome, $preco, $retornavel)
        {
            parent::__construct($nome,$preco);
            $this->retornavel = $retornavel;
        }

        public function getRetornavel()
        {
            return $this->retornavel;
        }

        public function setRetornavel($retornavel)
        {
            $this->retornavel = $retornavel;
        }

        //Métodos

        public function mostrarBebida()
        {
            $dadosRefri = "Nome: {$this->getNome()} | Preço: R$ {$this->getPreco()} | Sabor: $this->retornavel";
            return $dadosRefri;
        }

        public function verificarPreco($preco)
        {
            $verifica = "caro";
            if($preco < 5)
            {
                $verifica = "dentro do orçamento";
            }

            return $verifica;
        }
    }
?>