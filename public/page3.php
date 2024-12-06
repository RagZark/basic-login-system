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
    <title>Pagina 3</title>
</head>

<body>
    <?php require 'nav.php' ?>
    <h3>Bem-vindo à página 3</h3>
    <hr>
    [conteúdo]

</body>

</html>