<?php
    require_once "Bebida.php";

    class Vinho extends Bebida
    {
        private $safra;
        private $tipo;
        
        public function __construct($nome,$preco,$safra,$tipo)
        {
            parent::__construct($nome,$preco);
            $this->safra = $safra;
            $this->tipo = $tipo;
        }
        public function getSafra()
        {
            return $this->safra;
        }

        //Encapsulamento
        public function setSafra($safra)
        {
            $this->safra = $safra;
        }

        public function getTipo()
        {
            return $this->tipo;
        }

        public function setTipo($tipo)
        {
            $this->tipo = $tipo;
        }

        //Métodos
        public function mostrarBebida()
        {
            $dadosVinho = "Nome: {$this->getNome()} | Preço: R$ {$this->getPreco()} | Safra: {$this->safra} | Tipo: {$this->tipo}";
            return $dadosVinho;
        }

        public function verificarPreco($preco)
        {
            $verifica = false;
            if($preco < 25.00)
            {
                $verifica = true;
            }

            return $verifica;
        }

    }

?>