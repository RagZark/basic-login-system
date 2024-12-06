<?php
defined('CONTROL') or die('Acesso negado!');

require_once "./importStyle.php";

$components = new Components();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $components->create_css(); ?>
    <title>Home</title>
</head>

<body>
    <?php require 'nav.php' ?>
    <h3>Bem-vindo a aplicação!</h3>

    [conteudo]
</body>

</html>