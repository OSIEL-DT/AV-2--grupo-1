<?php
require_once('../model/banco.php');

class controllerDeletar{
    private $deleta;
    
    public function __construct($id){
        $this->deleta = new Banco();

        if($this->deleta->excluirProdutos($id)==TRUE){ 
            echo "<script>alert('Excluído com Sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Houve um erro na exclusão!');document.location='../view/index.php'</script>";
        }
    }
}
new controllerDeletar($_GET['id']);
?>