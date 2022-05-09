<?php
    require_once 'Bebida.php';

    class Suco extends Bebida
    {
        private $sabor;

        public function __construct($nome,$preco,$sabor)
        {
            parent::__construct($nome,$preco);
            $this->sabor = $sabor;
        }

        public function getSabor()
        {
            return $this->sabor;
        }

        public function setSabor($sabor)
        {
            $this->sabor = $sabor;
        }

        //Métodos

        public function mostrarBebida()
        {
            $dadosSuco = "Nome: {$this->getNome()} | Preço: R$ {$this->getPreco()} | Sabor: $this->sabor";
            return $dadosSuco;
        }

        public function verificarPreco($preco)
        {
            $verifica = "Caro";
            if($preco < 2.50)
            {
                $verifica = "Dentro do orçamento";
            }

            return $verifica;
        }
    }

?>