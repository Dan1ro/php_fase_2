<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

        <div id="titulo">

            <h1>Exercicío 1 - PHP</h1>

        </div>

        <section id="conversor">
        <h1>Conversor</h1>

        <form action="">
        
        <article>
        <label>Insira o valor em dólar que será convertido: </label> 
        <input type="text" name="Dolar" placeholder="Valor em dólar">
        </article>
             
        <input class="botao" type="submit" value="Converter">

        </form>

        <?php
        if (isset($_GET["Dolar"]))
        {
        $dolar = $_GET["Dolar"];
        $real  = 5.2;

        echo $dolar * $real;
        }

        ?>

        <a href="index.php">Reiniciar</a>

    </section>


    <section id="calculadora">        
        <h1>IMCalculadora</h1>

        <form>
        <article class="line">
        <label>Seu peso: </label> 
        <input type="text" name="Peso" placeholder="Insira aqui seu peso">
        </article>
        <article class="line">
        <label>Sua altura: </label>
        <input class="que_saco" type="text" name="Altura" placeholder="Insira aqui sua altura">
        </article>
        <input class="botao_calcular" type="submit" value="Calcular">
        </form>

        <?php
        if (isset($_GET["Peso"]) && isset($_GET["Altura"]))
        {
        $peso = $_GET["Peso"];
        $altura  = $_GET["Altura"];

        echo $peso / ($altura * $altura);
        }

        ?><br>

        <a href="index.php">Reiniciar</a>

    </section>

</body>
</html>