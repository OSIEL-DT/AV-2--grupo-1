<!DOCTYPE html>

<html lang="en">

<head>

    <title>Home</title>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0,
    maximum-scale=1.0"> 
   
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        width: 100%;
        background-color: rgb(3, 211, 252);
    }
    
    .center {
        background-color: rgb(247, 255, 87);
        border-radius: 280px;
        position: absolute;
        left: 560px;
        top: 130px;
        width: 500px;
        height: 280px;
        padding: 280px;               
        box-shadow: 3px 7px;
        
        
    }

    
    .center a {
        text-decoration: none;
        font-size: 18px;
    }
    
    .cadastro {
        width: 300px;
        padding: 15px;
        background-color: rgb(247, 64, 64);
        border-radius: 15px;
        position: absolute;
        top: 120px;
        left: 150px;
        text-align: center;
        box-shadow: 3px 7px;
        color: white;
    }
    
    .Tabelas{
        width: 300px;
        padding: 15px;
        background-color: rgb(245, 221, 116);
        position: absolute;
        top: 220px;
        left: 150px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 3px 7px;
    }
    
    .diver {
        width: 300px;
        padding: 15px;
        background-color: rgb(194, 250, 104);
        position: absolute;
        top: 320px;
        left: 150px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 3px 7px;
    }
    .center{
  animation: center  0.8s infinite;
  margin: 0 auto;
  display: table;
  margin-top: 20px;
  animation-direction: alternate;
  -webkit-animation-name: center ;
  animation-name: center ;
}

 @-webkit-keyframes center{
  0% {
    -webkit-transform: scale(1);
    -webkit-filter: brightness(100%);
  }

  100%{
    -webkit-transform: scale(1.1);
    -webkit-filter: brightness(100%);
  }
}

@keyframes center  {
  0% {
    transform: scale(1);
    filter: brightness(100%);
  }
  100% {
    transform: scale(1.1);
    filter: brightness(100%);
  }
}
</style>

<body>

    <div class="center">
        <a class="cadastro" href="cadastroProduto.php" target="_blank">Cadastrar produto</a>
        <a class="Tabelas" href="index.php" target="_blank">tabela dos Produtos</a>
        <a class="diver" href="home.php" >Bem Vindo</a>
    </div>
</body>

</html>
