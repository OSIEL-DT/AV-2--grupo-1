<?php
require_once("../init.php");

class Banco{
    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }
    
    public function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR,BD_USUARIO,BD_SENHA,BD_BANCO);
    }
   
    public function cadastraProdutos($nome,$Validade,$preco,$peso){
        
        $stmt = $this->mysqli->prepare("INSERT INTO produtos (`nome`,`validade`,`preco`,`peso`) VALUES (?,?,?,?)");
        
        $stmt->bind_param("ssss",$nome,$Validade,$preco,$peso);
        if($stmt->execute() == TRUE){
            return true;
        }else{
            return false;
        };
    }

    public function listarProdutos(){ 
        $result = $this->mysqli->query("select * from produtos"); 
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[]=$row;
        }
        return $array;
    }

    public function pesquisaProdutos($id){ 
        $result = $this->mysqli->query("SELECT * FROM produtos WHERE id='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);
    }

    public function excluirProdutos($id){ 

        if($this->mysqli->query("delete from `produtos` where `id`='".$id."'") == TRUE){
            return true;
        }else{
            return false;
        };
    }

    
    public function atualizaProdutos ($nome,$Validade,$preco,$peso,$id){
        
        $stmt = $this->mysqli->prepare("UPDATE produtos set nome= ?, validade= ?, preco= ?, peso= ? WHERE id= ?");
                
        $stmt->bind_param("sssss",$nome,$Validade,$preco,$peso,$id);
        if($stmt->execute() == TRUE){
            return true;
        }else{
            return false;
        };
    }
}