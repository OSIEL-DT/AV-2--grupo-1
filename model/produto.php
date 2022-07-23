<?php
    
    require_once("banco.php");

    class Produtos extends Banco{ 
        private $id; 
        private $nome;
        private $validade;   
        private $preco;
        private $peso;     

        
        public function setNome($nome){ 
            $this->nome = $nome;
        }
        public function getNome(){ 
            return $this->nome;
        }

        public function setValidade($validade){ 
            $this->validade = $validade;
        }
        public function getValidade(){ 
            return $this->validade;
        }       

        public function setPreco($preco){
            $this->preco = $preco;
        }
        public function getPreco(){ 
            return $this->preco;
        }

        public function setPeso($peso){ 
            $this->peso = $peso;
        }
         public function getPeso(){ 
            return $this->peso;
        }
        
        public function setId($id){ 
            $this->id = $id;
        }
        public function getId(){ 
            return $this->id;
        }

        public function incluir(){
            
            return $this->cadastraProdutos($this->getNome(),$this->getValidade(),$this->getPreco(),$this->getPeso());
        }
    }
?>