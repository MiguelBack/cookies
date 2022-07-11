<?php

setcookie("nome", "", time() - 3600);
setcookie("caneta", "", time() - 3600);
setcookie("cidade", "", time() - 3600);

unset($_COOKIE["nome"]);
unset($_COOKIE["caneta"]);
unset($_COOKIE["cidade"]);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>Cookies</title>

</head>

<body>

    <div align="center">

        <h1> Página 3 </h1>

        <a href="index.php"> 1 </a> |
        <a href="cookies2.php"> 2 </a>|
        <a href="cookies3.php"> 3 </a>

    </div>

    <?php

    $nome = $_COOKIE["nome"];
    $cidade = $_COOKIE["cidade"];
    $caneta = $_COOKIE["caneta"];

    ?>

</body>

</html>