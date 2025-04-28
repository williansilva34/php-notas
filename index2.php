<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Seja bem vindo pai</h1>

<?php
 
$nome = $_GET["nome"];
$nota1 = $_GET["nota1"];
$nota2 = $_GET["nota2"];
$nota3 = $_GET["nota3"];
$nota4 = $_GET["nota4"];


echo "Bem vindo(a) $nome<br>";

echo "Nota 1: $nota1 <br>";
echo "Nota 2: $nota2 <br>";
echo "Nota 3: $nota3 <br>";
echo "Nota 4: $nota4 <br>";

$valores = [$nota1, $nota2, $nota3, $nota4];

$soma = 0;

foreach ($valores as $valor) {
    $soma += $valor;
}

echo "Soma total igual = $soma<br>";

$media = $soma / count($valores); // CORREÇÃO AQUI!

echo "Média = $media<br>";

// Se quiser calcular quanto falta para 6:
echo "Precisa de mais: " . round(6 - $media,3) . " pontos para chegar a média 6<br>";

// Se quiser calcular quanto falta para 7:
echo "Precisa de mais: " . round(7 - $media,3) . " pontos para chegar a média 7<br>";

?>

</body>
</html>
