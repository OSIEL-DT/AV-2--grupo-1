<?php
require_once("../model/banco.php");
require_once("../model/produto.php");

class controllerListar{
    private $lista;
    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();
    }
    
    private function criarTabela(){
        $linhas=$this->lista->listarProdutos();

        foreach($linhas as $linhaunica){

            echo"<tr>";

            echo"<td>".$linhaunica['id']."</td>";
            echo"<td>".$linhaunica['nome']."</td>";
            echo"<td>".$linhaunica['validade']."</td>";            
            echo"<td>".$linhaunica['preco']."</td>";
            echo"<td>".$linhaunica['peso']."</td>"; 

            echo"<td><a href='editarProduto.php?id=".$linhaunica['id']."'>EDITAR</a>
            <a href='../controller/controllerDeletar.php?id=".$linhaunica['id']."'>DELETAR</a>
            </td>";

            echo"</tr>";
        }
    }
}
?>