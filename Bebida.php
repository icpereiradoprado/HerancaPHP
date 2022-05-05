<?php
    abstract class Bebida
    {
        private $nome;
        private $preco;


        public function __construct($nome, $preco)
        {
            $this->nome = $nome;
            $this->preco = $preco;
        }

        //Encapsulamento
        public function getNome()
        {
            return $this->nome;
        }
        public function setNome($nome)
        {
            $this->nome = $nome;
        }
        public function getPreco()
        {
            return $this->preco;
        }
        public function setPreco($preco)
        {
            $this->preco = $preco;
        }

        //métodos abstratos
        public abstract function mostrarBebida();
        
        public abstract function verificarPreco($preco);
    }

?>