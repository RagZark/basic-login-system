<?php
defined('CONTROL' or die('Acesso negado!'))
?>

<hr>
<span>Usuário: <strong><?= $_SESSION['usuario'] ?></strong></span>
<span>
    <a href="?rota=logout">Sair</a>
</span>
<hr>

<nav>
    <a href="?rota=home">Home</a>
    <a href="?rota=page1">Pagina1</a>
    <a href="?rota=page2">Pagina2</a>
    <a href="?rota=page3">Pagina3</a>
    <a href="?rota=logout">Sair</a>
</nav>