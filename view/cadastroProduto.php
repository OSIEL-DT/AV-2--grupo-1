<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Cadastro de Produtos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>
    <style>

         * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        width: 100%;
        background-color: rgb(242, 189, 240);

    }

    
     .Tabelas{
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
    .form{
        
        margin-top: 15px;
        top: 180px;
        left: 180px;

    }
    .bt{
       margin-top: 10px;  
    }
</style>
    
    <body>        
        

   
       <div class="Tabelas">
        <h2>Cadastre um Produto abaixo!</h2>

            <a  href="Home.php"><button type="button" class="btn btn-primary" >Voltar para Home Page</button></a><br>
                   
                <form method="post" class="form" action="../controller/controllerCadastro.php">
                    Nome: <input type="text" name="nome" obrigatório><br>
                    Validade: <input type="text" name="validade" obrigatório><br>            
                    Preço: <input type="number" name="preco" obrigatório><br>
                    peso: <input type="text" name="peso" obrigatório><br> 
                    <div class="bt">           
                         <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>

        </div>
        
    </body>
</html>