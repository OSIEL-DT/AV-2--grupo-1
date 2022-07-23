<?php
require_once("../model/banco.php");

class ControllerEditar{
    private $id; 
    private $nome; 
    private $validade;  
    private $preco;
    private $peso;
    
    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }

    private function CriarFormulario($id){
        $row = $this->editar->pesquisaProdutos($id); 
        $this->id           =$row['id'];
        $this->nome         =$row['nome'];
        $this->validade     =$row['validade'];       
        $this->preco        =$row['preco'];
        $this->peso         =$row['peso'];
        
    }
    
   
    public function editarFormulario($nome,$Validade,$preco,$peso,$id){
         
       if($this->editar->atualizaProdutos($nome,$Validade,$preco,$peso,$id) == TRUE){
            echo "<script>alert('Alterado com sucesso!');document.location='../view/index.php'</script>"; 

       }else{
        echo "<script>alert('Erro na alteração dos dados!');document.location='../view/index.php'</script>";
       } 

    }
    public function getEditar(){ 
        return $this->editar;
    }

    public function getId(){ 
        return $this->id;
    }
    public function getNome(){ 
        return $this->nome;
    }
    public function getValidade(){
        return $this->validade;
    }
    
    public function getPreco(){
        return $this->preco;
    }
    
    public function getPeso(){
        return $this->peso;
    }
}
    //faltou código aqui também
    $id = filter_input(INPUT_GET, 'id');
    $editar = new controllerEditar($id);
        if(isset($_POST['submit'])){
        
        $editar->editarFormulario($_POST['nome'],$_POST['validade'],$_POST['preco'],$_POST['peso'],$_POST['id']);
        }
        

?>
