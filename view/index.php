<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Sistema Timmoveis</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>
    <style type="text/css">
         * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

        body{
        width: 100%;
        background-color: rgb(209, 242, 206);

    }
        .te{
        position: absolute;
        top: 180px;
        position: absolute;
        top: 120px;
        left: 700px;
        text-align: center;
        box-shadow: 3px 7px;        
    }

    .de{
        text-align: center;
        margin-top: 30px;
    }

        
    </style>

    <body>

        <?php require_once("../controller/controllerListar.php") ?>

    <div class="de">
        <h2>Seja Bem Vindo(a) ao Sistema Timmoveis</h2>
        
       
        <a  href="cadastroProduto.php"><button type="button" class="btn btn-primary">Cadastrar Produto</button></a> 
    </div>
    <div class="te">
        <table border="1">

            
            <tr>
                <td><b>Código</b></td>
                <td><b>Nome</b></td>
                <td><b>validade</b></td>                
                <td><b>Preço</b></td>
                <td><b>Peso</b></td>
                
            </tr>        
            <?php new controllerListar(); ?>
            
        </table>

    </section>
    </body>
</html>