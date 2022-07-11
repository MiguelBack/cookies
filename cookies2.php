<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>Cookies</title>

</head>

<body>

    <div align="center">

        <h1> Página 2 </h1>

        <a href="index.php"> 1 </a> |
        <a href="cookies2.php"> 2 </a>|
        <a href="cookies3.php"> 3 </a>

    </div>

    <?php

    $nome = $_COOKIE["nome"];
    $cidade = $_COOKIE["cidade"];
    $can = $_COOKIE["caneta"];

    $nome = "Miguel";
    $cidade = "Maringá";
    $caneta = "Fabercastel";

    ?>

</body>

</html>