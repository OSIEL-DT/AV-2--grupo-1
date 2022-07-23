<?php
require_once("../model/produto.php");

class controllerCadastro{
    private $cadastro; 

    public function __construct(){
        $this->cadastro = new Produtos(); 
        $this->incluir();
    }


    private function incluir(){

        $this->cadastro->setNome($_POST['nome']);         
        $this->cadastro->setValidade($_POST['validade']);        
        $this->cadastro->setPreco($_POST['preco']); 
        $this->cadastro->setPeso($_POST['peso']);        
        $resultado = $this->cadastro->incluir();

        if($resultado>=1){
            echo "<script>alert('Cadastrado com Sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro no cadastro!');document.location='../view/index.php'</script>";
        }
    }
}
new controllerCadastro();
?>