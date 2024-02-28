<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 28/02</title>
    <link rel="stylesheet" href="2802.css">
    
</head>
<body>
    <h1><u>Aula de PHP</u></h1>
    <?php
    $nome = "Vinicius";
    const SOBRENOME = "Alves";
    $idade = 16;
    $peso = 68.0;
    const altura = 1.80;
    echo "<br> Meu nome é $nome ", SOBRENOME;
    echo", tenho $idade anos de idade, tenho $peso kg, e medo ", altura;
    echo"m."
    ?>
</body>
</html>