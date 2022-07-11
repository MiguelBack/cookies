<?php

//Os cookies são estabelecidos antes de qualquer código HTML.

setcookie("nome", "Ayslan");
setcookie("caneta", "Bic");
setcookie("cidade", "Paranavaí");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>Cookies</title>

</head>

<body>

    <div align="center">
        <h1> Esta página tem Cookies, verifique-os! </h1>

        <a href="index.php"> 1 </a> |
        <a href="cookies2.php"> 2 </a>|
        <a href="cookies3.php"> 3 </a>


    </div>
</body>

</html>