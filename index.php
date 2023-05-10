<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    header("Content-type: text/html; charset=utf-8");

    // Função 01. //

    function SomaArray($total)
    {
        echo array_sum($total);
    }

    $sum = array(1, 2, 1);

    SomaArray($sum);

    // Função 02. //

    function TesteParImpar($num)
    {
        if ($num % 2 == 0) {
            return "Número Par";
        } elseif ($num % 2 == 1) {
            return "Número Ímpar";
        }
    }
    TesteParImpar(3);

    // Função 03. //
    $array = array(1, 2, 3, 4, 5, 6);
    function arrayPares($array)
    {
        $arrayPar = array();
        foreach ($array as $count) {
            if (($count % 2) == 0) {
                array_push($arrayPar, $count);
            }
        }
        foreach ($arrayPar as $pares) {
            echo $pares . "<br>";
        }
    }

    arrayPares($array);

    // Função 04.
    ?>

    <h1>Array 01 Total: <br> <?= SomaArray($sum); ?></h1> <br>
    <h1>Array 02 Resultado: <br> <?= TesteParImpar(3); ?></h1> <br>
    <h1>Array 03 Resultado: <br> <?= arrayPares($array); ?></h1> <br>
</body>

</html>