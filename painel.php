<?php

include('protecao.php');

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    Bem vindo ao painel, <?php echo $_SESSION['nome']; ?>

    <p>

    <a href="logout.php">Sair</a>
    </p>
</body>
</html>