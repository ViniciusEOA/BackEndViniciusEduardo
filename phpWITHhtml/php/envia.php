<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01/03</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <main>
        <?php
            $nome= $_GET["nome"];
            $idade= $_GET["idade"];
            $telefone= $_GET["fone"];
            $email= $_GET["contato"];
        

            echo "<h1>Seja bem vindo, <b>$nome </b>!</h1>";
            echo "<h2>- Seus dados -</h2>";
            echo"<p>Idade: $idade </p>";
            echo"<p>Telefone: $telefone </p>";
            echo"<p>Contato: $email </p>";
        ?>
    </main>
</body>
</html>