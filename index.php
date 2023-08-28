<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculadora IMC PHP</h1>
    <form action="" method="get">
        <label for="peso">Peso:</label>
        <input type="texte" name="peso" id="peso">
        <label for="altura">Altura:</label>
        <input type="texte" name="altura" id="altura">
        <input type="submit" value="Calcular">
    </form>

    <?php
        /*
        Menor que 18.5 - Abaixo do peso ;
        Entre 18.5 e 24.9 - Peso normal ;
        Entre 25.0 e 29.9 - Pré-obesidade ;
        Entre 30.0 e 34.9 - Obesidade Grau 1 ;
        Entre 35.0 e 39.9 - Obesidade Grau 2 ;
        Acima de 40 - Obesidade Grau 3
        */
        if(isset($_GET['peso']) && isset($_GET['altura'])){
            $peso = $_GET['peso'];
            $altura = $_GET['altura'];
            $imc = $peso / ($altura * $altura);
            echo "O IMC é: $imc";
            if($imc < 18.5)
                echo "<br>Você está abaixo do peso";
            else if($imc >= 18.5 && $imc < 25)
                echo "<br>Você está no peso normal";
            else if($imc >= 25 && $imc < 30)
                echo "<br>Você está no Pré-obesidade";
            else if($imc >= 30 && $imc < 35)
                echo "<br>Você está no Obsidade grau 1";
            else if($imc >= 35 && $imc < 40)
                echo "<br>Você está com obesidade grau 2";
            else if($imc >= 40)
                echo "<br>Você está com obesidade grau 3";           
        }
  ?>
</body>
</html>