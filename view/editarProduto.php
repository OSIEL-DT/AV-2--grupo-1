<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Alteração de Produtos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>

    <style type="text/css">

         * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
        
        .edite{
        width: 600px;
        padding: 35px;
        border-radius: 15px;
        background-color: rgb(245, 221, 116);
        position: absolute;
        top: 180px;
        left: 550px;
        text-align: center;
        box-shadow: 3px 7px;
    }
    </style>
    
    <body>
    
    <?php require_once("../controller/controllerEditar.php"); ?>
        
        <div class="edite">
        <h2>Edite seu produto abaixo!</h2>
        
        <button type="button" class="btn btn-primary" href="index.php">Voltar para Tabela de produtos</button>
        
        <form method="post" action="../controller/controllerEditar.php" id="form" name="form">
            
            Código: <input type="text" id="id" name="id" value="<?php echo $editar->getId(); ?>" required><br/>            
            Nome: <input type="text" id="nome" name="nome" value="<?php echo $editar->getNome(); ?>" required><br/>
            Validade: <input type="text" id="validade" name="validade" value="<?php echo $editar->getValidade(); ?>" required><br/>            
            Preço: <input type="number" id="preco" name="preco" value="<?php echo $editar->getPreco(); ?>" required><br/>
            Peso: <input type="text" id="peso" name="peso" value="<?php echo $editar->getPeso(); ?>" required><br/>           
            <button type="submit" id="editar" name="submit" value="editar" class="btn btn-primary">Editar</button>
        </form>
    </div>
    </body>
</html>